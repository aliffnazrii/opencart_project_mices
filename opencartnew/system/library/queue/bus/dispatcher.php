<?php

namespace queue\bus;

use queue\DatabaseQueue;

class Dispatcher
{
    public function dispatch($command)
    {
        return $this->dispatchToQueue($command);
    }

    public function dispatchToQueue($command)
    {
        $table = $command->table ?? DB_PREFIX . 'jobs';

        $queue = new DatabaseQueue($command->registry, $table);

        // if (! $queue instanceof Queue) {
        //     throw new RuntimeException('Queue resolver did not return a Queue implementation.');
        // }

        if (method_exists($command, 'queue')) {
            return $command->queue($queue, $command);
        }

        return $this->pushCommandToQueue($queue, $command);
    }

    protected function pushCommandToQueue($queue, $command)
    {
        if (isset($command->queue, $command->delay)) {
            return $queue->laterOn($command->queue, $command->delay, $command);
        }

        if (isset($command->queue)) {
            return $queue->pushOn($command->queue, $command);
        }

        if (isset($command->delay)) {
            return $queue->later($command->delay, $command);
        }

        return $queue->push($command);
    }
}