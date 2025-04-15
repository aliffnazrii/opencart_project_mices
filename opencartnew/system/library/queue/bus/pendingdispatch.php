<?php

namespace queue\bus;

use queue\bus\Dispatcher;

class PendingDispatch
{
	protected $job;

	public function __construct($job)
    {
        $this->job = $job;
    }

    public function onTable($table)
    {
    	$this->job->onTable($table);

    	return $this;
    }

    public function onQueue($queue)
    {
        $this->job->onQueue($queue);

        return $this;
    }

    public function delay($delay)
    {
        $this->job->delay($delay);

        return $this;
    }

    public function __destruct()
    {
    	(new Dispatcher())->dispatch($this->job);
    }
}