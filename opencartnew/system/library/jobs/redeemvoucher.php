<?php

namespace Jobs;

use Acilit\AcilitRedeemVoucher;
use queue\InteractsWithQueue;
use queue\SerializesModels;
use queue\bus\Queueable;

class RedeemVoucher
{
    use InteractsWithQueue, Queueable, SerializesModels;

    public $table = 'oc_acilit_jobs';
    public $queue = 'redeem_voucher';
    public $voucher_serial;
    public $UID;
    public $phone;
    /**
     * Create a new job instance.
     * 
     * @return void
     */
    public function __construct($voucher_serial, $UID, $phone)
    {

        $this->voucher_serial = $voucher_serial;
        $this->UID = $UID;
        $this->phone = $phone;
        // dd($voucher_serial);
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $voucher = new AcilitRedeemVoucher($this->registry);


        $voucher->redeemVoucher($this->voucher_serial, $this->UID, $this->phone);
    }
}
