<?php

namespace Jobs;

use Acilit\AcilitPoint;
use queue\InteractsWithQueue;
use queue\SerializesModels;
use queue\bus\Queueable;
// use acilit\AcilitPoint;

class PullPoints
{
    use InteractsWithQueue, Queueable, SerializesModels;

    public $table = 'oc_acilit_jobs';
    public $queue = 'pull_points';
    public $phone;
    // public $is_option;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($phone)
    {
        $this->phone = $phone;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $points = new AcilitPoint($this->registry);
        $points->syncPoint($this->phone);
    }
}
