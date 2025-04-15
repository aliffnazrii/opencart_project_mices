<?php

namespace queue;

use queue\DatabaseQueue;

class Worker
{
	public $shouldQuit = false;
	public $options = array();
	public $start = 0;
	public $connection;
	protected $registry;

	public function __construct($registry, $options)
    {
        $this->options = $options;
		$this->registry = $registry;

		if (!isset($this->options['connection']) || !$this->options['connection']) {
			throw new \Exception('connection not defined');
		}

        $this->registry->get('load')->config('queue');

        $connections = $this->registry->get('config')->get('connections');

        if (!isset($connections[$this->options['connection']])) {
            throw new \Exception('connection not defined');
        }

        $connection = $connections[$this->options['connection']];
        $this->options['table'] = $connection['table'];
        $this->options['queue'] = $this->getQueue($connection);

		$this->connection = new DatabaseQueue($this->registry, $this->options['table']);
	}

	public function run()
	{
		$this->{$this->options['once'] ? 'runNextJob' : 'daemon'}();
	}

	public function runNextJob()
    {
        $job = $this->getNextJob($this->options['queue'], $this->options['offset']);

        if ($job) {
            return $this->runJob($job);
        }
    }

	public function daemon()
    {
    	$this->start = time();
    	while (true) {
    		$job = $this->getNextJob($this->options['queue'], $this->options['offset']);

    		if ($job) {
    			$this->runJob($job);
    		} else {
    			$this->sleep($this->options['sleep']);
    		}

    		$this->stopIfNecessary($job);
    	}
    }

    protected function getNextJob($queue, $offset = 0)
    {
        try {
            foreach (explode(',', $queue) as $queue) {
                if (! is_null($job = $this->connection->pop($queue, $offset))) {
                    return $job;
                }
            }
        } catch (Exception $e) {
            $this->stopWorkerIfLostConnection($e);

            $this->sleep(1);
        }
    }

    protected function runJob($job)
    {
        try {
            return $this->process($job);
        } catch (Exception $e) {
            // $this->exceptions->report($e);

            $this->stopWorkerIfLostConnection($e);
        } catch (Throwable $e) {
            // $this->exceptions->report($e = new FatalThrowableError($e));

            $this->stopWorkerIfLostConnection($e);
        }
    }

    public function process($job)
    {
        try {
            $this->markJobAsFailedIfAlreadyExceedsMaxAttempts($job);

            $job->fire();
        } catch (\Exception $e) {

        }
    }

    protected function markJobAsFailedIfAlreadyExceedsMaxAttempts($job)
    {
        $maxTries = ! is_null($job->maxTries()) ? $job->maxTries() : $this->options['tries'];

        $timeoutAt = $job->timeoutAt();

        if ($timeoutAt && time() <= $timeoutAt) {
            return;
        }

        if (! $timeoutAt && ($maxTries === 0 || $job->attempts() <= $maxTries)) {
            return;
        }

        $this->failJob($job, $e = $this->maxAttemptsExceededException($job));

        throw $e;
    }

    protected function failJob($job, $e)
    {
        return $job->fail($e);
    }

    protected function stopIfNecessary($job = null)
    {
        if ($this->shouldQuit) {
            $this->stop();
        } elseif ($this->memoryExceeded($this->options['memory'])) {
            $this->stop(12);
        } elseif ($this->workerTimeout()){
            $this->stop();
        } elseif ($this->options['stop-when-empty'] && is_null($job)) {
            $this->stop();
        }
    }

    public function memoryExceeded($memoryLimit)
    {
        return (memory_get_usage(true) / 1024 / 1024) >= $memoryLimit;
    }

    public function workerTimeout()
    {
        if ($this->start > 0) {
            return time() - $this->start >= 60;
        }
        return false;
    }

    public function stop($status = 0)
    {
        exit($status);
    }

    protected function maxAttemptsExceededException($job)
    {
        return new MaxAttemptsExceededException(
            $job->resolveName().' has been attempted too many times or run too long. The job may have previously timed out.'
        );
    }

    public function sleep($seconds)
    {
        if ($seconds < 1) {
            usleep($seconds * 1000000);
        } else {
            sleep($seconds);
        }
    }

    protected function getQueue($connection)
    {
        if ($this->options['queue']) {
            return $this->options['queue'];
        }

        if (isset($connection['queue']) && $connection['queue']) {
            return $connection['queue'];
        }

        return 'default';
    }

    protected function stopWorkerIfLostConnection($e)
    {
        if ($this->causedByLostConnection($e)) {
            $this->shouldQuit = true;
        }
    }

    protected function causedByLostConnection(\Exception $e)
    {
        $message = $e->getMessage();

        return $this->contains($message, [
            'server has gone away',
            'no connection to the server',
            'Lost connection',
            'is dead or not enabled',
            'Error while sending',
            'decryption failed or bad record mac',
            'server closed the connection unexpectedly',
            'SSL connection has been closed unexpectedly',
            'Error writing data to the connection',
            'Resource deadlock avoided',
            'Transaction() on null',
            'child connection forced to terminate due to client_idle_limit',
            'query_wait_timeout',
            'reset by peer',
            'Physical connection is not usable',
            'TCP Provider: Error code 0x68',
            'ORA-03114',
            'Packets out of order. Expected',
            'Adaptive Server connection failed',
            'Communication link failure',
            'connection is no longer usable',
            'Login timeout expired',
            'SQLSTATE[HY000] [2002] Connection refused',
            'running with the --read-only option so it cannot execute this statement',
            'The connection is broken and recovery is not possible. The connection is marked by the client driver as unrecoverable. No attempt was made to restore the connection.',
            'SQLSTATE[HY000] [2002] php_network_getaddresses: getaddrinfo failed: Try again',
            'SQLSTATE[HY000] [2002] php_network_getaddresses: getaddrinfo failed: Name or service not known',
            'SQLSTATE[HY000]: General error: 7 SSL SYSCALL error: EOF detected',
            'SQLSTATE[HY000] [2002] Connection timed out',
            'SSL: Connection timed out',
            'SQLSTATE[HY000]: General error: 1105 The last transaction was aborted due to Seamless Scaling. Please retry.',
            'Temporary failure in name resolution',
            'SSL: Broken pipe',
            'SQLSTATE[08S01]: Communication link failure',
            'SQLSTATE[08006] [7] could not connect to server: Connection refused Is the server running on host',
            'SQLSTATE[HY000]: General error: 7 SSL SYSCALL error: No route to host',
            'The client was disconnected by the server because of inactivity. See wait_timeout and interactive_timeout for configuring this behavior.',
            'SQLSTATE[08006] [7] could not translate host name',
            'TCP Provider: Error code 0x274C',
        ]);
    }

    protected function contains($haystack, $needles)
    {
        foreach ((array) $needles as $needle) {
            if ($needle !== '' && mb_strpos($haystack, $needle) !== false) {
                return true;
            }
        }

        return false;
    }
}