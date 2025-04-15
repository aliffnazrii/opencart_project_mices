<?php

namespace Acilit;

use EPoint\EPoint;

const OUTLET_LIMIT = 50;

class AcilitPoint extends Library
{

    public function __construct($registry)
    {
        parent::__construct($registry);

        $this->acilit_model = new AcilitModel($registry);

        $this->acilit_loader = new AcilitLoader($registry);

        $this->point_model = new EPoint($registry);



        $this->acilit = $this->acilit_loader->loadAcilit();
    }

    public function syncPoint($data)
    {
        if (!$this->config->get('module_acilit_status') && !$this->config->get('total_point_status')) {
            return array(
                'status' => false,
                'count' => 0
            );
        }
        $phone = $data;

        $customer = $this->acilit_model->getCustomerByPhone($phone);

        if ($customer) {
            $link = $customer['acilit_client_id'];
            if ($link && ($link != '' && $link != '0')) {

                $response = $this->acilit->getMemberTransactions($phone);

                if (isset($response)) {
                    $results_info = $response;

                    if (!empty($results_info)) {
                        foreach ($results_info as $result) {

                            $recordId = $result['RecID'];
                            $point = $result['point'];
                            $amount = $result['Amount'];
                            $expiry = $result['point_expiry'];
                            $date = $result['date'];

                            $check = $this->point_model->getPointByRecId($recordId);

                            $point_data = array(
                                'rec_id' => $recordId,
                                'points' => $point,
                                'amount' => $amount,
                                'point_expiry' => $expiry,
                                'customer_id' => $customer['customer_id'],
                                'type' => '',
                                'description' => '',
                                'order_id' => '',
                                'date_added' => $date,
                            );
                            if ($check < 1) {

                                $this->point_model->addPointTransaction($point_data);
                            }
                        }
                        return array(
                            'status' => true,
                            'count' => count($response),
                            'alert' => 'Succeed'
                        );
                    }
                } else {
                    return array(
                        'status' => false,
                        'count' => 0,
                        'error' => 'Customer Not Linked'
                    );
                }
                return array(
                    'status' => false,
                    'count' => count($response),
                    'alert' => 'Session Aborted'
                );
            }
        }
    }
}
