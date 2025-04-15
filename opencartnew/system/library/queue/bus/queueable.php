<?php

namespace queue\bus;

trait Queueable
{

	public function onTable($table)
    {
        $this->table = $table;

        return $this;
    }

    public function onQueue($queue)
    {
        $this->queue = $queue;

        return $this;
    }

    public function delay($delay)
    {
        $this->delay = $delay;

        return $this;
    }

    public function setRegistry($registry)
    {
        $this->registry = $registry;
    }
}