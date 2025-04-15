<?php

namespace Acilit;

use Jobs\SyncCustomers;
use Jobs\SyncMember;
use Jobs\PullPoints;
use Jobs\SyncOrder;
use queue\Dispatcher;

class AcilitMember extends Library
{

    private $limit = 20;

    public function __construct($registry)
    {
        parent::__construct($registry);

        $this->acilit_model = new AcilitModel($registry);

        $this->acilit_loader = new AcilitLoader($registry);

        $this->dispatcher = new Dispatcher($registry);

        $this->acilit = $this->acilit_loader->loadAcilit();

        $this->load = $registry->get('load');
    }

    public function syncMember($customer_id)
    {
        $customer = $this->acilit_model->getCustomer($customer_id);

        if ($customer) { // if customer exist in local

            $acilit_client_response = $this->acilit->getClientByPhone($customer['telephone']);

            if (isset($acilit_client_response)) {
                $acilit_client_info = $acilit_client_response;
            }
            // if customer does not exist in acilit
        }
        // post local data to api
        $payload = [

            "Customer_Name" => $customer['firstname'] . ' ' . $customer['lastname'],
            "Email" => $customer['email'],
            "Phone_No" => $customer['telephone'],
            "ICNo" => $customer['telephone'],
            "BirthDate" => "",
            "Address1" => "",
            "Address2" => "",
            "Address3" => "",
            "Gender" => "",
            "Race" => "",
            "Marital_Status" => "",
            "Occupation" => "",
        ];

        if (!isset($acilit_client_info[0]['ID'])) {
            $message = $this->acilit->createMember($payload);

            $acilit_client_response = $this->acilit->getClientByPhone($customer['telephone']);

            if (isset($acilit_client_response) && $acilit_client_response) {
                // assign value client id to local
                $acilit_client_info = $acilit_client_response;
                $acilit_client_id = isset($acilit_client_info[0]['ID']) ? $acilit_client_info[0]['ID'] : '';
                $acilit_client_uid = isset($acilit_client_info[0]['UID']) ? $acilit_client_info[0]['UID'] : '';
            } else {
                $this->acilit_model->updateClientError($customer_id, json_encode($message));
                return false;
            }
        } else {

            $acilit_client_id = isset($acilit_client_info[0]['ID']) ? $acilit_client_info[0]['ID'] : '';

            if ($acilit_client_id) {
                $payload['UID'] = $acilit_client_info[0]['UID'];
                $payload['First_Name'] = $payload['Customer_Name'];
                $this->acilit->updateClient($customer['telephone'], $payload);
            }
        }
        if (!empty($acilit_client_id)) {
            $this->acilit_model->updateClientId($customer_id, $acilit_client_id, $acilit_client_uid);
            return true;
        } else {
            return false;
        }
    }

    public function loginSync($customer_id)
    {

        // get customer info from local
        $customer = $this->acilit_model->getCustomer($customer_id);

        // check acilit link customer to local using acilit uid and client id
        // if linked, update acilit using local customer info

        $payload = [

            "Customer_Name" => $customer['firstname'] . ' ' . $customer['lastname'],
            "Email" => $customer['email'],
            "Phone_No" => $customer['telephone'],
            "ICNo" => $customer['telephone'],
            "BirthDate" => "",
            "Address1" => "",
            "Address2" => "",
            "Address3" => "",
            "Gender" => "",
            "Race" => "",
            "Marital_Status" => "",
            "Occupation" => "",
        ];

        if (($customer['acilit_uid'] != null && $customer['acilit_uid'] != '' && $customer['acilit_client_id'] != '0')) {

            $acilit_check = $this->acilit->getClientByPhone($customer['telephone']);

            if (isset($acilit_check) && is_array($acilit_check)) {

                $acilit_customer_info = $acilit_check;

                if (isset($acilit_customer_info[0]['ID']) && $acilit_customer_info[0]['UID'] == $customer['acilit_uid']) {
                    $send_update_to_acilit = $this->acilit->updateClient($payload);

                    // return true;
                }
            }
            // if not linked, link the acilit customer id and uid to local and check phone number in acilit
        } else {

            $acilit_check_members = $this->acilit->getClientByPhone($customer['telephone']);

            //check acilit customer row
            if (is_array($acilit_check_members)) {

                $local_customer_info = $acilit_check_members;
                $acilit_client_id = isset($local_customer_info[0]['ID']) ? $local_customer_info[0]['ID'] : '';
                $acilit_client_uid = isset($local_customer_info[0]['UID']) ? $local_customer_info[0]['UID'] : '';

                // update local and insert uid and client id from acilit
                $this->acilit_model->updateClientId($customer_id, $acilit_client_id, $acilit_client_uid);
            }else{                
                $create_customer_in_acilit = $this->acilit->createMember($payload);
                
                $acilit_creation_check = $this->acilit->getClientByPhone($customer['telephone']);
                
                // dd($acilit_creation_check);
                
                if (isset($acilit_creation_check) && is_array($acilit_creation_check)) {
                    
                    // assign value client id to local
                    $local_customer_info = $acilit_creation_check;
                    $acilit_client_id = isset($local_customer_info[0]['ID']) ? $local_customer_info[0]['ID'] : '';
                    $acilit_client_uid = isset($local_customer_info[0]['UID']) ? $local_customer_info[0]['UID'] : '';
                    
                    // update local and insert uid and client id from acilit
                    $this->acilit_model->updateClientId($customer_id, $acilit_client_id, $acilit_client_uid);
                    
                }
            }

                $dispatch_ERP = new Dispatcher($this->registry);

                $startDate = '';
                $endDate = '';
                $page = 1;

                $dispatch_ERP->dispatch(new PullPoints($customer['telephone']));

                $dispatch_ERP->dispatch(new SyncOrder($customer, $startDate, $endDate, $page));

        }
        return false;
    }
}
