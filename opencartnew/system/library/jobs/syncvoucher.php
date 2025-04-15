<?php

namespace Jobs;

use Acilit\AcilitVoucher;
use queue\InteractsWithQueue;
use queue\SerializesModels;
use queue\bus\Queueable;
// use acilit\AcilitPoint;

class SyncVoucher
{
    use InteractsWithQueue, Queueable, SerializesModels;

    public $table = 'oc_acilit_jobs';
    public $queue = 'sync_voucher';
    public $phone;
    // public $is_option;

    public $page;
    public $startDate;
    public $endDate;

    /**
     * Create a new job instance.
     * 
     * @return void
     */
    public function __construct($startDate = '', $endDate = '', $page = 1)
    {
        // $this->phone = $phone;
        $this->page = $page;
        $this->startDate = $startDate;
        $this->endDate = $endDate;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $vouchers = new AcilitVoucher($this->registry);
        $vouchers->syncVoucher($this->startDate, $this->endDate, $this->page);
    }
}
