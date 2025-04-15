<?php

namespace Jobs;

use Acilit\AcilitOrder;
use queue\InteractsWithQueue;
use queue\SerializesModels;
use queue\bus\Queueable;
// use acilit\AcilitPoint;

class SyncOrder
{
    use InteractsWithQueue, Queueable, SerializesModels;

    public $table = 'oc_acilit_jobs';
    public $queue = 'sync_order';
    public $phone;
    public $page;
    public $startDate;
    public $endDate;
    public $customer;

    /**
     * Create a new job instance.
     * 
     * @return void
     */
    public function __construct($customer, $FromDate, $ToDate,  $page=1) {

        $this->customer = $customer;  
        $this->startDate = $FromDate;
        $this->endDate = $ToDate;
        $this->page = $page;

    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $orders = new AcilitOrder($this->registry);
        
        $orders->syncOrder($this->customer, $this->startDate, $this->endDate, $this->page);

    }
}
