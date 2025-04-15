<?php

namespace queue;

abstract class Queue
{
	protected $registry;

	public function pushOn($queue, $job, $data = '')
    {
        return $this->push($job, $data, $queue);
    }

    public function laterOn($queue, $delay, $job, $data = '')
    {
        return $this->later($delay, $job, $data, $queue);
    }

    protected function createPayload($job, $queue, $data = '')
    {
        $payload = json_encode($this->createPayloadArray($job, $queue, $data));

        if (JSON_ERROR_NONE !== json_last_error()) {
            throw new InvalidPayloadException(
                'Unable to JSON encode payload. Error code: '.json_last_error()
            );
        }

        return $payload;
    }

    protected function createPayloadArray($job, $queue, $data = '')
    {
        return is_object($job)
                    ? $this->createObjectPayload($job, $queue)
                    : $this->createStringPayload($job, $queue, $data);
    }

    protected function createObjectPayload($job, $queue)
    {
        $payload = array(
            'displayName' => $this->getDisplayName($job),
            'maxTries' => $job->tries ?? null,
            'delay' => $this->getJobRetryDelay($job),
            'timeout' => $job->timeout ?? null,
            'timeoutAt' => $this->getJobExpiration($job),
            'data' => [
                'commandName' => $job,
                'command' => $job,
            ],
        );

        return array_merge($payload, [
            'data' => [
                'commandName' => get_class($job),
                'command' => serialize(clone $job),
            ],
        ]);
    }

    protected function createStringPayload($job, $queue, $data)
    {
        return array(
            'displayName' => is_string($job) ? explode('@', $job)[0] : null,
            'job' => $job,
            'maxTries' => null,
            'delay' => null,
            'timeout' => null,
            'data' => $data,
        );
    }

    protected function getDisplayName($job)
    {
        return method_exists($job, 'displayName') ? $job->displayName() : get_class($job);
    }

    public function getJobRetryDelay($job)
    {
        if (! method_exists($job, 'retryAfter') && ! isset($job->retryAfter)) {
            return;
        }

        $delay = $job->retryAfter ?? $job->retryAfter();

        return time() + $delay;
    }

    public function getJobExpiration($job)
    {
        if (! method_exists($job, 'retryUntil') && ! isset($job->timeoutAt)) {
            return;
        }

        $expiration = $job->timeoutAt ?? $job->retryUntil();

        return $expiration;
    }
}