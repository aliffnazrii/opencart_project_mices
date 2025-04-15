<?php 

namespace Xilnex;

use Jobs\SyncCustomers;
use Jobs\SyncMember;
use queue\Dispatcher;

class XilnexMember extends Library {

    private $limit = 20;
 
    public function __construct($registry) {
        parent::__construct($registry);

        $this->xilnex_model = new XilnexModel($registry);

        $this->xilnex_loader = new XilnexLoader($registry);

        $this->dispatcher = new Dispatcher($registry);

        $this->xilnex = $this->xilnex_loader->loadXilnex();

        $this->load = $registry->get('load');
    }

    public function syncCustomerType() {
        $response = $this->xilnex->getClientTypes([
            'limit' => 10,
        ]);

		if (isset($response['data']['customerTypes'])) {
            $customer_types = $response['data']['customerTypes'];

            foreach ($customer_types as $customer_type) {
                $data = array (
                    'xilnex_customer_type_id' => $customer_type['id'],
                    'xilnex_customer_type' => $customer_type['clientType'],
                    'discount_percentage' => $customer_type['discountPercantage'],
                    'status' => $customer_type['deleted'] ? 0 : 1,
                );

                $this->xilnex_model->syncCustomerType($data);
            }
        }
    }

    public function syncMember($customer_id) {
        $customer = $this->xilnex_model->getCustomer($customer_id);

        if ($customer) {
            if (!$customer['telephone']) {
                $this->xilnex_model->updateClientError($customer_id, 'Customer does not have phone number!');
            }

            $xilnex_client_response = $this->xilnex->getClientById($customer['xilnex_client_id']);
            $xilnex_client_info = array();

            if (!isset($xilnex_client_response['data']['client']) && !$xilnex_client_response['data']['client']) {
                $xilnex_client_response = $this->xilnex->getClientByPhone($customer['telephone']);
                
                if (isset($xilnex_client_response['data']['clients'][0])) {
                    $xilnex_client_info = $xilnex_client_response['data']['clients'][0];
                } else {
                    $xilnex_client_response = $this->xilnex->getClientByEmail($customer['email']);

                    if (isset($xilnex_client_response['data']['clients'][0])) {
                        $xilnex_client_info = $xilnex_client_response['data']['clients'][0];
                    }
                }
            } else {
                $xilnex_client_info = $xilnex_client_response['data']['client'];
            }

            $customer_type_id = $this->config->get('module_xilnex_membership_tier')[$customer['customer_group_id']]['xilnex_customer_type'] ?? 0;
            $customer_type = $this->xilnex_model->getCustomerTypeFromXilnexId($customer_type_id);
            
            $type = 'MEMBER';
            if ($customer_type) {
                $type = $customer_type['xilnex_customer_type'];
            }

            $default_outlet_id = $this->config->get('module_xilnex_default_customer_outlet') ?? 0;
            $outlet = $this->xilnex_model->getOutlet($default_outlet_id);
            $outlet_name = $outlet ? $outlet['name'] : '';

            $birthday = '';
            if ($customer['birthday']) {
                $birthday_date = new \DateTime($customer['birthday']);
                $birthday = $birthday_date->format('Y-m-d\TH:i:s.v\Z');
            }

            $payload = [
                "client" => [
                    "name" => $customer['firstname'] . ' ' . $customer['lastname'],
                    // "code" => $customer['customer_id'],
                    "code" => '',
                    "remarks" => $customer['customer_id'],
                    "email" => $customer['email'],
                    "type" => $type,
                    "dob" => $birthday,
                    "firstName" => $customer['firstname'],
                    "lastName" => $customer['lastname'],
                    "mobile" => $customer['telephone'],
                    "pointFactor" => 1,
                    "createdOutlet" => $outlet_name,
                    "enableDOB" => true,
                    "createdBy" => 'Web Store',
                    "allowAllOutlets" => true,
                    "active" => true,
                    "category" => 'Personal'
                ],
                "isRequireGenerateXCard" => false
            ];

            if (!$xilnex_client_info) {
                $xilnex_client_response = $this->xilnex->createClient($payload);
                
                if (isset($xilnex_client_response['data']['client']) && $xilnex_client_response['data']['client']) {
                    $xilnex_client_info = $xilnex_client_response['data']['client'];
                    $xilnex_client_id = isset($xilnex_client_info['id']) ? $xilnex_client_info['id'] : '';
                } else {
                    $this->xilnex_model->updateClientError($customer_id, json_encode($xilnex_client_response));
                    return false;
                }
            } else {
                $xilnex_client_id = isset($xilnex_client_info['id']) ? $xilnex_client_info['id'] : '';

                if ($xilnex_client_id) {
                    $this->xilnex->updateClient($xilnex_client_id, $payload);
                }
            }

            if (!empty($xilnex_client_id)) {
                $this->xilnex_model->updateClientId($customer_id, $xilnex_client_id);
                return true;
            } else {
                return false;
            }
        }
    }

    public function syncCustomers($date, $offset = 0) {
        $data = array (
            'createDate' => $date,
            'offset' => $offset,
            'limit' => $this->limit,
        );

        $response = $this->xilnex->getClientsByQuery($data);

		if ($response['ok'] && !$response['error'] && $response['data']) {
			if (isset($response['data']['clients']) && $response['data']['clients']) {
                $xilnex_clients = $response['data']['clients'];
                foreach ($xilnex_clients as $xilnex_client) {
                    // if ($xilnex_client['code']) {
                    //     continue;
                    // }
                    if ($xilnex_client['remarks']) {
                        continue;
                    }
                    $this->syncCustomer($xilnex_client);
                }

                $offset += count($xilnex_clients);
                if ($offset < $response['data']['metadata']['total']) {
                    $this->dispatcher->dispatch(new SyncCustomers($date, $offset));
                }
            }
        }
    }

    public function syncCustomer($xilnex_client) {
        $formatted_mobile = $this->formatPhone($xilnex_client['mobile']);
        $customer_exist = $this->xilnex_model->getCustomerByPhone($formatted_mobile);
        
        if (!$customer_exist) {
            $types = $this->config->get('module_xilnex_membership_tier');
            $customer_group_id = $this->config->get('config_customer_group_id');
    
            foreach ($types as $key => $type) {
                if ($type == $xilnex_client['type']) {
                    $customer_group_id = $key;
                    break;
                }
            }
    
            $customer_data = array(
                'customer_group_id' => $customer_group_id,
                'firstname' => $xilnex_client['name'],
                'lastname' => '',
                'email' => $xilnex_client['email'],
                'telephone' => $formatted_mobile,
                'newsletter' => 0,
                'password' => $formatted_mobile,
                'status' => 1,
                'safe' => 0,
                'birthday' => $xilnex_client['dob'],
                'language_id' => $this->config->get('config_language_id'),
                'store_id' => $this->config->get('config_store_id'),
                'xilnex_client_id' => $xilnex_client['id']
            );
    
            // $this->xilnex_model->addCustomer($customer_data);
            
            $this->load->model('account/customer');
            $customer_id = $this->model_account_customer->addCustomer($customer_data);
            $this->xilnex_model->updateClientId($customer_id, $xilnex_client['id']);
            $this->xilnex_model->updateCustomerGroup($customer_id, $customer_group_id);

            $this->assignCoupons($customer_id);
        } else {
            $this->xilnex_model->updateClientId($customer_exist['customer_id'], $xilnex_client['id']);
        }
    }
    
    public function renewTier($customer) {
        if (!$customer['next_tier_renewal'] || strtotime($customer['next_tier_renewal']) > time()) {
            return;
        }

        // Get Customer Group Member Settings
        $member_tier_settings = $this->config->get('module_xilnex_membership_tier');
        $member_tier_setting = $member_tier_settings[$customer['customer_group_id']];

        if ($member_tier_setting['renewal_duration']) {
            if ($this->checkRenewalCondition($customer)) {
                // Maintain Membership
                $new_renewal_date = date('Y-m-d', strtotime('+' . $member_tier_setting['renewal_duration'] . ' months'));
                $this->xilnex_model->updateCustomerTierRenewal($customer['customer_id'], $new_renewal_date);
                return;
            } else {
                // Downgrade Membership
                $new_tier_settings = array_filter($member_tier_settings, function ($setting) use ($member_tier_setting) {
                    return $member_tier_setting['tier_level'] > $setting['tier_level'];
                });

                if (!empty($new_tier_settings)) {
                    // Sort member settings by tier level
                    usort($new_tier_settings, function ($a, $b) {
                        return $a['tier_level'] < $b['tier_level'];
                    });

                    // Get New Member tier settings
                    $new_tier_setting = $new_tier_settings[0];

                    if ($customer['customer_group_id'] != $new_tier_setting['customer_group_id']) {
                        $this->xilnex_model->updateCustomerGroup($customer['customer_id'], $new_tier_setting['customer_group_id']);
                        $this->dispatcher->dispatch(new SyncMember($customer['customer_id']));

                        $this->xilnex_model->addCustomerGroupHistory(array(
                            'customer_id' => $customer['customer_id'],
                            'old_customer_group_id' => $customer['customer_group_id'],
                            'new_customer_group_id' => $new_tier_setting['customer_group_id'],
                            'updated_by' => 0,
                            'description' => 'Auto tier downgrade by System',
                        ));
                        $this->assignCoupons($customer['customer_id']);
                    }
    
                    if ($new_tier_setting['renewal_min_purchase'] && $new_tier_setting['renewal_duration'] && $new_tier_setting['tier_level'] > 0) {
                        $new_renewal_date = date('Y-m-d', strtotime('+' . $new_tier_setting['renewal_duration'] . ' months'));
                        $this->xilnex_model->updateCustomerTierRenewal($customer['customer_id'], $new_renewal_date);
                        return;
                    }
                }
            }
        }

        $this->xilnex_model->updateCustomerTierRenewal($customer['customer_id'], null);
    }

    public function checkRenewalCondition($customer) {
        if ($customer) {
            $member_tier_settings = $this->config->get('module_xilnex_membership_tier');
            $member_tier_setting = $member_tier_settings[$customer['customer_group_id']];

            if ($member_tier_setting['renewal_min_purchase'] && $member_tier_setting['renewal_duration'] && $member_tier_setting['tier_level'] > 1) {
                // Get Total past purchcases
                $pull_order_from_date = $this->config->get('module_xilnex_pull_order_date');
                $date_from = date('Y-m-d', strtotime('-' . $member_tier_setting['renewal_duration'] . ' months'));
                
                if ($pull_order_from_date > $date_from) {
                    $date_from = $pull_order_from_date;
                }
                
                $past_total_purchase = $this->xilnex_model->getPastMonthsTotalPurchase($customer['customer_id'], $customer['customer_group_id'], $date_from);

                return $past_total_purchase > $member_tier_setting['renewal_min_purchase'];
            }
        }

        return false;
    }

    public function upgradeMember($customer) {
        $new_customer_group = $this->checkMemberUpgradeCondition($customer);

        if ($new_customer_group && $new_customer_group != $customer['customer_group_id']) {
            $member_tier_settings = $this->config->get('module_xilnex_membership_tier');
            $member_tier_setting = $member_tier_settings[$new_customer_group];

            $this->xilnex_model->updateCustomerGroup($customer['customer_id'], $new_customer_group);
            $this->dispatcher->dispatch(new SyncMember($customer['customer_id']));

            $this->xilnex_model->addCustomerGroupHistory(array(
                'customer_id' => $customer['customer_id'],
                'old_customer_group_id' => $customer['customer_group_id'],
                'new_customer_group_id' => $new_customer_group,
                'updated_by' => 0,
                'description' => 'Auto tier upgrade by System',
            ));

            $this->assignCoupons($customer['customer_id']);

            if ($member_tier_setting['renewal_min_purchase'] && $member_tier_setting['renewal_duration']) {
                $new_renewal_date = date('Y-m-d', strtotime('+' . $member_tier_setting['renewal_duration'] . ' months'));
                $this->xilnex_model->updateCustomerTierRenewal($customer['customer_id'], $new_renewal_date);
            } else {
                $this->xilnex_model->updateCustomerTierRenewal($customer['customer_id'], null);
            }
        }
    }

    public function checkMemberUpgradeCondition($customer) {
        if ($customer) {
            $member_tier_settings = $this->config->get('module_xilnex_membership_tier');
            $member_tier_setting = $member_tier_settings[$customer['customer_group_id']];

            $new_tier_settings = array_filter($member_tier_settings, function ($setting) use ($member_tier_setting) {
                return $member_tier_setting['tier_level'] < $setting['tier_level'];
            });

            if (!empty($new_tier_settings)) {
                // Sort member settings by tier level
                usort($new_tier_settings, function ($a, $b) {
                    return $a['tier_level'] > $b['tier_level'];
                });

                // Get New Member tier settings
                $new_tier_setting = $new_tier_settings[0];

                if ($new_tier_setting['req_min_purchase'] && $new_tier_setting['req_duration']) {
                    // Get Total past purchcases
                    $pull_order_from_date = $this->config->get('module_xilnex_pull_order_date');
                    $date_from = date('Y-m-d', strtotime('-' . $new_tier_setting['req_duration'] . ' months'));

                    if ($pull_order_from_date > $date_from) {
                        $date_from = $pull_order_from_date;
                    }

                    $past_total_purchase = $this->xilnex_model->getPastMonthsTotalPurchase($customer['customer_id'], $customer['customer_group_id'], $date_from);

                    if ($past_total_purchase > $new_tier_setting['req_min_purchase']) {
                        return $new_tier_setting['customer_group_id'];
                    }
                }
            }
        }

        return 0;
    }

    public function assignCoupons($customer_id) {
        if (class_exists('\coupon\CouponModel')) {
            $coupon_model = new \coupon\CouponModel($this->registry);
            $coupon_model->assignCouponCustomer($customer_id);
        }
    }

    private function formatPhone($phone) {
		if ($phone) {
			$cleaned = trim($phone);
			$cleaned = str_replace("-", "", $cleaned);
			$cleaned = str_replace("+", "", $cleaned);
			$cleaned = str_replace(" ", "", $cleaned);
			$cleaned = str_replace("(", "", $cleaned);
			$cleaned = str_replace(")", "", $cleaned);

			if ($cleaned) {
				if ($cleaned[0] != '6') {
					$cleaned = '6' . $cleaned;
				}

				return $cleaned;
			}
		}
		return '';
	}
}