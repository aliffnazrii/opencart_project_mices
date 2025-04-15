<?php

namespace queue;

trait InteractsWithQueue
{
	protected $job;

	public function attempts()
    {
        return $this->job ? $this->job->attempts() : 1;
    }

    public function delete()
    {
        if ($this->job) {
            return $this->job->delete();
        }
    }

    public function fail($exception = null)
    {
        if ($this->job) {
            $this->job->fail($exception);
        }
    }

    public function release($delay = 0)
    {
        if ($this->job) {
            return $this->job->release($delay);
        }
    }

    public function setJob($job)
    {
        $this->job = $job;

        return $this;
    }
}