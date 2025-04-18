<?php

namespace queue\jobs;

use queue\DatabaseQueue;
use queue\jobs\Job;

class DatabaseJob extends Job
{
	protected $database;
	protected $job;

	public function __construct($registry, DatabaseQueue $database, $job, $queue)
    {
        $this->job = $job;
        $this->queue = $queue;
        $this->database = $database;
        $this->registry = $registry;
    }

    public function release($delay = 0)
    {
        parent::release($delay);

        $this->delete();

        return $this->database->release($this->queue, $this->job, $delay);
    }

    public function delete()
    {
        parent::delete();

        $this->database->deleteReserved($this->queue, $this->job->id);
    }

    public function attempts()
    {
        return (int) $this->job->attempts;
    }

    public function getJobId()
    {
        return $this->job->id;
    }

    public function getRawBody()
    {
        return $this->job->payload;
    }
}