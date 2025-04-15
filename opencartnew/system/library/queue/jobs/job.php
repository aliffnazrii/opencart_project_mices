<?php

namespace queue\jobs;

abstract class Job
{
	protected $deleted = false;
	protected $released = false;
	protected $failed = false;
	protected $connectionName;
	protected $queue;

	public function fire()
    {
        $payload = $this->payload();

        $data = $payload['data'];

        $instance = unserialize($data['command']);
        $instance->setJob($this);
        $instance->setRegistry($this->registry);
        $instance->handle();

        if (!$this->isDeletedOrReleased()) {
            $this->delete();
        }
    }

    public function delete()
    {
        $this->deleted = true;
    }

    public function isDeleted()
    {
        return $this->deleted;
    }

    public function release($delay = 0)
    {
        $this->released = true;
    }

    public function isReleased()
    {
        return $this->released;
    }

    public function isDeletedOrReleased()
    {
        return $this->isDeleted() || $this->isReleased();
    }

    public function hasFailed()
    {
        return $this->failed;
    }

    public function markAsFailed()
    {
        $this->failed = true;
    }

    public function fail($e = null)
    {
        $this->markAsFailed();

        if ($this->isDeleted()) {
            return;
        }

        try {
            // If the job has failed, we will delete it, call the "failed" method and then call
            // an event indicating the job has failed so it can be logged if needed. This is
            // to allow every developer to better keep monitor of their failed queue jobs.
            $this->delete();

            $this->failed($e);
        } finally {
            
        }
    }

    protected function failed($e)
    {
        $payload = $this->payload();

        $data = $payload['data'];

        $instance = unserialize($data['command']);
        $instance->setJob($this);
        $instance->setRegistry($this->registry);

        if (method_exists($instance, 'failed')) {
            $instance->failed($payload['data'], $e);
        }
    }

    public function payload()
    {
        return json_decode($this->getRawBody(), true);
    }

    public function maxTries()
    {
        return $this->payload()['maxTries'] ?? null;
    }

    public function delaySeconds()
    {
        return $this->payload()['delay'] ?? null;
    }

    public function timeout()
    {
        return $this->payload()['timeout'] ?? null;
    }

    public function timeoutAt()
    {
        return $this->payload()['timeoutAt'] ?? null;
    }

    public function getName()
    {
        return $this->payload()['job'];
    }

    public function resolveName()
    {
    	if (! empty($this->payload()['displayName'])) {
            return $this->payload()['displayName'];
        }
        return $this->getName();
    }
}