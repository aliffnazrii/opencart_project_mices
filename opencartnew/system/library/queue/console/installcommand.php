<?php

namespace queue\console;

use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use queue\console\Command;

class InstallCommand extends Command
{
	protected $signature = 'queue:install
                            {name : The name of the table without prefix}';

	protected function execute(InputInterface $input, OutputInterface $output)
    {
        $route = 'extension/module/queue/install';
        $_GET['route'] = $route;

        $name = $input->getArgument('name');
        $_GET['name'] = $name;
        $_GET['source'] = 'cli';

        $current_dir = dirname(__FILE__);

        $root_dir = dirname(dirname(dirname(dirname($current_dir))));

        $app_dir = $root_dir;

        chdir($app_dir);

        if (file_exists($app_dir . '/index.php')) {
            require_once $app_dir . '/index.php';
        } else {
            $output->writeln('<warn>Root index not found</warn>');
            return Command::FAILURE;
        }

        $output->writeln('<info>Table created!</info>');

        return Command::SUCCESS;
    }
}