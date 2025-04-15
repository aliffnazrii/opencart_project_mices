<?php

namespace Acilit;

use Jobs\RedeemVoucher;
use acilit\AcilitModel;
use queue\Dispatcher;

class AcilitRedeemVoucher extends Library
{

    const LIMIT = 20;

    public function __construct($registry)
    {
        parent::__construct($registry);

        $this->acilit_model = new AcilitModel($registry);

        $this->acilit_loader = new AcilitLoader($registry);

        $this->acilit = $this->acilit_loader->loadAcilit();
    }

    public function redeemVoucher($voucher_serial, $UID, $phone)
    {

        if (!$this->config->get('module_acilit_status') || !$this->config->get('module_acilit_sync_voucher_status')) {
            return array(
                'status' => false,
                'count' => 0
            );
        }

        if (!$UID || !empty($UID) || $UID != '') {


            $customer = $this->acilit->getClientByPhone($phone);

            $UID = $customer['UID'];
        }

        $param = array(
            'Voucher_SerialNo' => $voucher_serial,
            'UID' => $UID,
        );

        $redeem = $this->acilit->updateVoucherStatus($param);

        if ($redeem) {
            return array(
                'status' => true,
                'count' => 1
            );
        } else {
            return array(
                'status' => false,
                'count' => 0
            );
        }
    }
}
