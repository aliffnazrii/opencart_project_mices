<?php

namespace queue\console;

use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use queue\console\Command;

class WorkCommand extends Command
{
    protected $signature = 'queue:work
                            {connection : The name of the queue connection to work}
                            {--queue= : The names of the queues to work}
                            {--daemon : Run the worker in daemon mode (Deprecated)}
                            {--once : Only process the next job on the queue}
                            {--stop-when-empty : Stop when the queue is empty}
                            {--delay=0 : The number of seconds to delay failed jobs}
                            {--force : Force the worker to run even in maintenance mode}
                            {--memory=128 : The memory limit in megabytes}
                            {--sleep=3 : Number of seconds to sleep when no job is available}
                            {--timeout=60 : The number of seconds a child process can run}
                            {--tries=1 : Number of times to attempt a job before logging it failed}
                            {--offset=0 : Offset to skip job to avoid conflicts}';

	protected function execute(InputInterface $input, OutputInterface $output)
    {
    	$arguments = $input->getArguments();
        $options = $input->getOptions();

        $args = array_merge($arguments, $options);
        foreach ($args as $key => $value) {
            $_GET[$key] = $value;
        }

        $route = 'extension/module/queue';
        $_GET['route'] = $route;

        $current_dir = dirname(__FILE__);

        $root_dir = dirname(dirname(dirname(dirname($current_dir))));

        $path = isset($options['path']) ? '/'.$options['path'] : '';

        $app_dir = $root_dir . $path;

        chdir($app_dir);

        if (file_exists($app_dir . '/index.php')) {
            require_once $app_dir . '/index.php';
        } else {
            die('file not found');
        }

    	return Command::SUCCESS;
    }
}