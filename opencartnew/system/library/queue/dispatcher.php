<?php

namespace queue;

use queue\bus\PendingDispatch;

class Dispatcher
{
	protected $registry;

	public function __construct($registry)
	{
		$this->registry = $registry;
	}

	public function dispatch($job)
	{
		$job->setRegistry($this->registry);

		return new PendingDispatch($job);
	}

	public function dispatchNow($job)
	{
		$job->setRegistry($this->registry);
		$job->handle();
	}
}