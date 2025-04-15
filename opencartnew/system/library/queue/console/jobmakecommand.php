<?php

namespace queue\console;

use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use queue\console\Command;

class JobMakeCommand extends Command
{
	protected $signature = 'job:make
                            {name : The name of job}';

	protected function execute(InputInterface $input, OutputInterface $output)
    {
    	$name = $input->getArgument('name');

    	$path = $this->getPath($name);

        if (file_exists($path)) {
            throw new \Exception('Job exists');
        }
        
    	$this->makeDirectory($path);

    	file_put_contents($path, $this->sortImports($this->buildClass($name)));

    	return Command::SUCCESS;
    }

    protected function getPath($name)
    {
    	$root = dirname(dirname(dirname(dirname(dirname(__FILE__)))));

        return $root.'/'.str_replace('\\', '/', strtolower($name)).'.php';
    }

    protected function makeDirectory($path)
    {
        if (!is_dir(dirname($path))) {
        	@mkdir(dirname($path), 0777, true);
        }

        return $path;
    }

    protected function buildClass($name)
    {
        $stub = file_get_contents(__DIR__.'/stubs/job.stub');

        return $this->replaceClass($stub, $name);
    }

    protected function replaceClass($stub, $name)
    {
        $class = basename($name);

        return str_replace('DummyClass', $class, $stub);
    }

    protected function sortImports($stub)
    {
        if (preg_match('/(?P<imports>(?:use [^;]+;$\n?)+)/m', $stub, $match)) {
            $imports = explode("\n", trim($match['imports']));

            sort($imports);

            return str_replace(trim($match['imports']), implode("\n", $imports), $stub);
        }

        return $stub;
    }

    protected function replaceFirst($search, $replace, $subject)
    {
        if ($search == '') {
            return $subject;
        }

        $position = strpos($subject, $search);

        if ($position !== false) {
            return substr_replace($subject, $replace, $position, strlen($search));
        }

        return $subject;
    }
}