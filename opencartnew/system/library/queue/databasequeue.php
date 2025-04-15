<?php

namespace queue;

use queue\Queue;
use queue\jobs\DatabaseJob;
use queue\jobs\DatabaseJobRecord;

class DatabaseQueue extends Queue {
	protected $table;
	protected $default;
	protected $retryAfter = 60;

	public function __construct($registry, $table, $default = 'default', $retryAfter = 60) {
		$this->registry = $registry;
		$this->db = $registry->get('db');
        $this->table = $table;
        $this->default = $default;
        $this->retryAfter = $retryAfter;
    }

    public function pop($queue = null, $offset = 0)
    {
    	$queue = $this->getQueue($queue);

        $job = $this->getNextAvailableJob($queue, $offset);

        if ($job) {
        	$this->markJobAsReserved($job);

        	return new DatabaseJob(
        		$this->registry, $this, $job, $queue
        	);
        }

        return null;
    }

    protected function getNextAvailableJob($queue, $offset)
    {
    	$queue = $this->getQueue($queue);

    	$time = time();
		$expire = $time - 60;
		$sql = "SELECT * FROM " . $this->table . " WHERE ((reserved_at IS NULL AND available_at <= '" . $time . "') OR (reserved_at <= '" . $expire . "'))";

		$sql .= " AND queue = '" . $this->db->escape($queue) . "'";
		$sql .= " order by id ASC";
		$sql .= " LIMIT " . (int)$offset . ",1";

		$query = $this->db->query($sql);
		$job = $query->row;

		return $job ? new DatabaseJobRecord((object) $job) : null;
    }

    public function push($job, $data = '', $queue = null)
    {
    	return $this->pushToDatabase($this->getQueue($queue), $this->createPayload(
            $job, $this->getQueue($queue), $data
        ));
    }

    public function later($delay, $job, $data = '', $queue = null)
    {
        return $this->pushToDatabase($this->getQueue($queue), $this->createPayload(
            $job, $this->getQueue($queue), $data
        ), $delay);
    }

    public function release($queue, $job, $delay = 0)
    {
    	return $this->pushToDatabase($queue, $job->payload, $delay, $job->attempts);
	}

	protected function pushToDatabase($queue, $payload, $delay = 0, $attempts = 0)
	{
		$now = time();
		$time = time() + $delay;
		$this->db->query("INSERT INTO " . $this->table . " SET 
			queue = '" . $this->db->escape($queue) . "',
			payload = '" . $this->db->escape($payload) . "',
			attempts = '" . (int)$attempts . "', 
			reserved_at = null,
			available_at = '" . $time . "',
			created_at = '" . $now . "'
		");

		return $this->db->getLastId();
	}

    public function markJobAsReserved($job)
    {
		$this->db->query("UPDATE " . $this->table . " SET 
			reserved_at = '" . $job->touch() . "', 
			attempts = '" . (int)$job->increment() . "' WHERE id = '" . (int)$job->id . "'
		");
	}

	public function deleteReserved($queue, $id)
    {
    	$this->db->query("DELETE FROM " . $this->table . " WHERE id = '" . (int)$id . "'");
    }

	public function getQueue($queue)
    {
        return $queue ?: $this->default;
    }
}