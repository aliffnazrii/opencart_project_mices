<?php

use Jobs\PullOrder;
use Jobs\PushOrder;
use Jobs\SyncCustomers;
use jobs\syncorder;
use jobs\syncoutlet;
use jobs\syncproduct;
use jobs\syncmember;
use jobs\syncvoucher;
use Jobs\UpdatePrice;
use Jobs\PullPoints;
use queue\Dispatcher;
use acilit\AcilitModel;
use acilit\AcilitProduct;
use acilit\AcilitOutlet;
use acilit\AcilitMember;
use Acilit\AcilitOrder;
use Acilit\AcilitVoucher;
use Acilit\AcilitRedeemVoucher;
use Jobs\RedeemVoucher;

class ControllerExtensionModuleAcilit extends Controller
{

    public function __construct($registry)
    {
        parent::__construct($registry);

        $this->acilit_product = new AcilitProduct($this->registry);
        $this->acilit_order = new AcilitOrder($this->registry);
        $this->acilit_model = new AcilitModel($this->registry);
        $this->dispatcher = new Dispatcher($this->registry);
    }

    // Members
    // Run Twice a Day
    public function syncMember()
    {
        if ($this->config->get('module_acilit_status') && $this->config->get('module_acilit_sync_customer_status')) {
            $non_member = $this->acilit_model->getNonMember();

            foreach ($non_member as $member) {
                $this->dispatcher->dispatch(new SyncMember($member['customer_id']));
            }
        }
    }

 
    public function pullPoints()
    {
        if ($this->config->get('module_acilit_status') && $this->config->get('module_acilit_sync_point_status')) {
            $members = $this->acilit_model->getLinkedCustomers();
            // dd($members);

            foreach ($members as $member) {
                $this->dispatcher->dispatch(new PullPoints($member['telephone']));
            }
        }
    }


    public function syncVoucher()
    {

        $startDate = date('Y-m-d', strtotime('-1 days'));
        $endDate = date('Y-m-d');
        if ($this->config->get('module_acilit_status') && $this->config->get('module_acilit_sync_voucher_status')) {


            $this->dispatcher->dispatch(new SyncVoucher($startDate, $endDate));
        }

        // $test = new AcilitVoucher($this->registry);
        // $test->syncVoucher($startDate, $endDate);
    }

    public function VoucherRedeem()
    {

        $data = array(
            'VoucherSerialNo' => '2405213932300',
            'UID' => '',
            'phone' => '601119891036'
        );

        $test = new AcilitRedeemVoucher($this->registry);

        $test->redeemVoucher($data['VoucherSerialNo'], $data['UID'], $data['phone']);


        // if ($this->config->get('module_acilit_status') && $this->config->get('module_acilit_sync_voucher_status')) {

        //    $this->dispather->dispatch(new RedeemVoucher($data['VoucherSerialNo'], $data['UID']));
        // }
    }

    public function syncOrder(){

        $customer_id = $this->customer->getTelephone();
        
        $startDate = '';
        $endDate = '';
        $page = 1;

        $customer = $this->acilit_model->getCustomer($customer_id);
        $dispatch_ERP = new Dispatcher($this->registry);
        $dispatch_ERP->dispatch(new SyncOrder($customer, $startDate, $endDate, $page));
    }
}
