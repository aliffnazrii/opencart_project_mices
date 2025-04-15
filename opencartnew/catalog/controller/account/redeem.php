<?php
// use \library\Acilit;
use Acilit\AcilitVoucher;
use Acilit\Acilit;
use Acilit\AcilitRedeemVoucher;
use Acilit\AcilitModel;


class ControllerAccountRedeem extends Controller
{
    public function index()
    {
        if (!$this->customer->isLogged()) {
            $this->session->data['redirect'] = $this->url->link('account/redeem', '', true);
            $this->response->redirect($this->url->link('account/login', '', true));
        }

        $this->load->language('account/redeem');
        $this->document->setTitle($this->language->get('heading_title'));

        $data['breadcrumbs'] = array();

        $data['breadcrumbs'][] = array(
            'text' => $this->language->get('text_home'),
            'href' => $this->url->link('common/home')
        );

        $data['breadcrumbs'][] = array(
            'text' => $this->language->get('text_account'),
            'href' => $this->url->link('account/account', '', true)
        );

        $data['breadcrumbs'][] = array(
            'text' => $this->language->get('heading_title'),
            'href' => $this->url->link('account/redeem', '', true)
        );

        if (isset($this->session->data['success'])) {
            $data['success'] = $this->session->data['success'];
            unset($this->session->data['success']);
        } else {
            $data['success'] = '';
        }

        if (isset($this->session->data['error'])) {
            $data['error'] = $this->session->data['error'];
            unset($this->session->data['error']);
        } else {
            $data['error'] = '';
        }

        $data['action'] = $this->url->link('account/redeem/VoucherRedeem', '', true);
        $data['back'] = $this->url->link('account/account', '', true);

        $data['column_left'] = $this->load->controller('common/column_left');
        $data['column_right'] = $this->load->controller('common/column_right');
        $data['content_top'] = $this->load->controller('common/content_top');
        $data['content_bottom'] = $this->load->controller('common/content_bottom');
        $data['footer'] = $this->load->controller('common/footer');
        $data['header'] = $this->load->controller('common/header');
        $data['button_view_details'] = $this->language->get('button_view_details');




        $this->load->model('catalog/product');

        if (defined('JOURNAL3_ACTIVE')) {
            \Journal3\Utils\Profiler::start('journal3/filter/products');

            $results = $this->model_journal3_filter->getVoucherProducts();
            // dd($results)    ;

            \Journal3\Utils\Profiler::end('journal3/filter/products');
        } else {
            // $results = $this->model_catalog_product->getProducts($filter_data);
        }


        if (defined('JOURNAL3_ACTIVE')) {
            $this->load->model('journal3/product');

            $data['image_width'] = $this->journal3->settings->get('image_dimensions_product.width');
            $data['image_height'] = $this->journal3->settings->get('image_dimensions_product.height');

            if ($this->journal3->settings->get('performanceLazyLoadImagesStatus')) {
                $data['dummy_image'] = $this->model_journal3_image->transparent($data['image_width'], $data['image_width']);
            }
        }


        foreach ($results as $result) {
            if ($result['image']) {
                $image = $this->model_journal3_image->resize($result['image'], $this->journal3->themeConfig('image_product_width'), $this->journal3->themeConfig('image_product_height'), $this->journal3->themeConfig('image_product_resize'));
            } else {
                $image = $this->model_journal3_image->resize('placeholder.png', $this->journal3->themeConfig('image_product_width'), $this->journal3->themeConfig('image_product_height'), $this->journal3->themeConfig('image_product_resize'));
            }

            if ($this->customer->isLogged() || !$this->config->get('config_customer_price')) {
                $price = $this->currency->format($this->tax->calculate($result['price'], $result['tax_class_id'], $this->config->get('config_tax')), $this->session->data['currency']);
            } else {
                $price = false;
            }

            if ((float)$result['special']) {
                $special = $this->currency->format($this->tax->calculate($result['special'], $result['tax_class_id'], $this->config->get('config_tax')), $this->session->data['currency']);
            } else {
                $special = false;
            }

            if ($this->config->get('config_tax')) {
                $tax = $this->currency->format((float)$result['special'] ? $result['special'] : $result['price'], $this->session->data['currency']);
            } else {
                $tax = false;
            }

            if ($this->config->get('config_review_status')) {
                $rating = (int)$result['rating'];
            } else {
                $rating = false;
            }


            if (defined('JOURNAL3_ACTIVE')) {
                if ($result['image']) {
                    $image2x = $this->model_journal3_image->resize($result['image'], $this->journal3->settings->get('image_dimensions_product.width') * 2, $this->journal3->settings->get('image_dimensions_product.height') * 2, $this->journal3->settings->get('image_dimensions_product.resize'));
                } else {
                    $image2x = $this->model_journal3_image->resize('placeholder.png', $this->journal3->settings->get('image_dimensions_product.width') * 2, $this->journal3->settings->get('image_dimensions_product.height') * 2, $this->journal3->settings->get('image_dimensions_product.resize'));
                }

                if ($this->journal3->document->isDesktop() && $this->journal3->settings->get('globalProductGridSecondImageStatus') && ($additional_image = $this->journal3->productSecondImage($result))) {
                    $second_image = $this->model_journal3_image->resize($additional_image, $this->journal3->settings->get('image_dimensions_product.width'), $this->journal3->settings->get('image_dimensions_product.height'), $this->journal3->settings->get('image_dimensions_product.resize'));
                    $second_image2x = $this->model_journal3_image->resize($additional_image, $this->journal3->settings->get('image_dimensions_product.width') * 2, $this->journal3->settings->get('image_dimensions_product.height') * 2, $this->journal3->settings->get('image_dimensions_product.resize'));
                } else {
                    $second_image = false;
                    $second_image2x = false;
                }
            }

            $data['products'][] = array(

                'classes'        => array(
                    defined('JOURNAL3_ACTIVE') ? $this->journal3->productExcludeButton($result, $price, $special) : null,
                ),
                'quantity'       => defined('JOURNAL3_ACTIVE') ? $result['quantity'] : null,
                'stock_status'   => defined('JOURNAL3_ACTIVE') ? $result['stock_status'] : null,
                'thumb2x'        => defined('JOURNAL3_ACTIVE') ? $image2x : null,
                'second_thumb'   => defined('JOURNAL3_ACTIVE') ? $second_image : null,
                'second_thumb2x' => defined('JOURNAL3_ACTIVE') ? $second_image2x : null,
                'labels'         => defined('JOURNAL3_ACTIVE') ? $this->journal3->productLabels($result, $price, $special) : null,
                'extra_buttons'  => defined('JOURNAL3_ACTIVE') ? $this->journal3->productExtraButton($result, $price, $special) : null,
                'date_end'       => defined('JOURNAL3_ACTIVE') ? $this->journal3->productCountdown($result) : null,
                'price_value'    => defined('JOURNAL3_ACTIVE') ? ($result['special'] ? $result['special'] > 0 : $result['price'] > 0) : null,
                'stat1'          => defined('JOURNAL3_ACTIVE') ? $this->journal3->productStat($result, $this->journal3->settings->get('globalProductStat1')) : null,
                'stat2'          => defined('JOURNAL3_ACTIVE') ? $this->journal3->productStat($result, $this->journal3->settings->get('globalProductStat2')) : null,

                'product_id'  => $result['product_id'],
                'thumb'       => $image,
                'name'        => $result['name'],
                'description' => utf8_substr(html_entity_decode($result['description'], ENT_QUOTES), 0, $this->config->get('config_product_description_length')),
                'price'       => $price,
                'special'     => $special,
                'tax'         => $tax,
                'minimum'     => $result['minimum'] > 0 ? $result['minimum'] : 1,
                'rating'      => $result['rating'],
                'href'        => $this->url->link('product/product', '&product_id=' . $result['product_id']),
                'voucher_id'      => $result['voucher_id'],
                'pointRedeem'      => $result['pointRedeem'],
            );
        }

        $this->response->setOutput($this->load->view('account/redeem', $data));
    }


    public function redeem()
    {
        $this->load->language('account/redeem');
        $json = array();

        if (!$this->customer->isLogged()) {
            $json['error'] = $this->language->get('error_login');
        } else if (!isset($this->request->post['product_id'])) {
            $json['error'] = $this->language->get('error_product');
        } else {
            try {
                $product_id = (int)$this->request->post['product_id'];

                $this->load->model('account/coupon');

                // Initialize Acilit components
                $this->load->model('setting/setting');
                $credentials = array(
                    'username' => $this->config->get('module_acilit_username'),
                    'password' => $this->config->get('module_acilit_password')
                );

                // Initialize API client
                $api = new Acilit($credentials);

                // Initialize AcilitVoucher with proper registry
                $acilitVoucher = new AcilitVoucher($this->registry);

                // Get member UID
                try {
                    $member = $api->getMembers($this->customer->getTelephone());
                    if (empty($member) || !is_array($member) || !isset($member['UID'])) {
                        throw new \Exception('Member not found or invalid response');
                    }
                    $uId = $member['UID'];
                } catch (\Exception $e) {
                    $this->log->write('Member validation error: ' . $e->getMessage());
                    $json['error'] = $this->language->get('error_member_not_found');
                    $this->response->addHeader('Content-Type: application/json');
                    $this->response->setOutput(json_encode($json, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT));
                    return;
                }

                // Get voucher serial number
                try {
                    $serialNo = $this->model_acilit_model->getVoucherByProductId($product_id);
                    if (!$serialNo) {
                        throw new \Exception('Voucher not found for product');
                    }

                    // Check voucher status in API
                    $voucherData = array(
                        'SerialNo' => $serialNo,
                        'UID' => $uId
                    );
                    $voucherStatus = $api->getVouchers($voucherData);

                    if (!is_array($voucherStatus)) {
                        $voucherStatus = json_decode($voucherStatus, true);
                    }

                    if (empty($voucherStatus) || !is_array($voucherStatus)) {
                        throw new \Exception('Invalid voucher status response');
                    }

                    if (!$voucherStatus || empty($voucherStatus)) {
                        throw new \Exception('Voucher not available');
                    }
                } catch (\Exception $e) {
                    $this->log->write('Voucher validation error: ' . $e->getMessage());
                    $json['error'] = $this->language->get('error_voucher_not_found');
                    $this->response->addHeader('Content-Type: application/json');
                    $this->response->setOutput(json_encode($json, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT));
                    return;
                }

                // Update voucher status using AcilitVoucher
                $erp_redeem = $acilitVoucher->updateVoucherStatus($serialNo, $uId);

                if ($erp_redeem) {
                    $result = $this->model_account_coupon->claimVoucher($product_id);

                    if ($result === true) {
                        $json['success'] = $this->language->get('text_success_redeem');
                    } else {
                        $json['error'] = $this->language->get('error_redeem');
                    }
                } else {
                    $json['error'] = $this->language->get('error_redeem');
                    $this->log->write('Voucher redemption error: Voucher status update failed');
                }
            } catch (Exception $e) {
                $json['error'] = $this->language->get('error_redeem');
                $this->log->write('Voucher redemption error: ' . $e->getMessage());
            }
        }

        $this->response->addHeader('Content-Type: application/json');
        $this->response->setOutput(json_encode($json, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT));
    }

    public function VoucherRedeem()
    {
        $this->load->language('account/redeem');
        $credentials = array(
            'username' => $this->config->get('module_acilit_username'),
            'password' => $this->config->get('module_acilit_password')
        );

        $this->acilit = new Acilit($credentials);
        $this->acilit_model = new AcilitModel($this->registry);
        // $this->acilit = new Acilit($this->registry);
        $this->load->model('account/coupon');
        $this->load->model('setting/setting');

        $product_id = (int)$this->request->post['product_id'];

        $voucher = $this->acilit_model->getVoucherByProductId($product_id);

        // dd($voucher);

        $customer = $this->customer->getTelephone();

        $member = $this->acilit->getClientByPhone($customer);
        // dd($member);

        $data = array(
            'VoucherSerialNo' => $voucher['voucher_serialNo'],
            'UID' => $member[0]['UID'],
            'ContactNo' => $member[0]['Contact_No']
        );

        $redeemCheck = $this->model_account_coupon->redeemCheck($product_id);
        
        if ($redeemCheck) {
            $redeem = $this->acilit->updateVoucherStatus($data);
            

            if ($redeem == "Voucher redeem successfully.") {
            // if ($redeemCheck) {
                $result = $this->model_account_coupon->claimVoucher($product_id, $member[0]['UID']);

                // order
                $data = [
                    'store_id' => $this->config->get('config_store_id'),
                    'store_name' => $this->config->get('config_name'),
                    'store_url' => $this->config->get('config_url'),
                    'customer_id' => $this->customer->getId(),
                    'customer_group_id' => $this->customer->getGroupId(),
                    'firstname' => $this->customer->getFirstName(),
                    'lastname' => $this->customer->getLastName(),
                    'email' => $this->customer->getEmail(),
                    'telephone' => $this->customer->getTelephone(),
                    'total' => 0.00,
                    'type' => 'coupon',
                    'order_source' => 'coupon',
                    'synced' => 1,
                    'order_status_id' => 1,
                    'language_id' => $this->config->get('config_language_id'),
                    'currency_id' => $this->currency->getId($this->config->get('config_currency')),
                    'currency_code' => $this->config->get('config_currency'),
                    'currency_value' => $this->currency->getValue($this->config->get('config_currency')),
                ];

                $insert = $this->acilit_model->addVoucherOrder($data);
  
                if ($insert) {


                        $order_product = [
                            'order_id' => $insert,
                            'product_id' => $product_id,
                            'name' => $voucher['name'] ?? '',
                            'model' => $voucher['code'] ?? '',
                            'quantity' => 1,
                            'price' => $voucher['discount'] ?? 0.00,
                            'total' => $voucher['discount'] ?? 0.00,
                            'tax' => 0,
                            'reward' => 0,
                            'point_award' => 0,
                            'department' => '',
                            'category' => $voucher['Category'] ?? 'coupon'
                        ];


                        $this->acilit_model->addOrderProduct($order_product);


                    $order_total = [
                        'order_id' => $insert,
                        'code' => 'total',
                        'title' => 'total',
                        'value' => $voucher['discount'] ?? 0.00,
                        'sort_order' => 1
                    ];

                    $this->acilit_model->addOrderTotal($order_total);

                    if (isset($data['Discount']) && $data['Discount'] > 0) {
                        $order_total = [
                            'order_id' => $insert,
                            'code' => 'discount',
                            'title' => 'Discount',
                            'value' => - ($data['Discount']),
                            'sort_order' => 2
                        ];
                        $this->acilit_model->addOrderTotal($order_total);
                    }

                    $order_history = [
                        'order_id' => $insert,
                        'order_status_id' => 1,
                        'notify' => 0,
                        'comment' => '',
                        'date_added' => date('Y-m-d H:i:s')
                    ];
                    $this->acilit_model->addOrderHistory($order_history);
                }
                if ($result) {

                    $this->model_account_coupon->updateCouponQuantityDecreaseByOne($product_id);

                    $this->session->data['success'] = $this->language->get('text_success_redeem');
                    $this->response->redirect($this->url->link('account/redeem', '', true));
                } else {
                    $this->session->data['error'] = $this->language->get('error_used');
                    $this->response->redirect($this->url->link('account/redeem', '', true));
                }
            } else {
                $this->session->data['error'] = $this->language->get('error_not_found');
                $this->response->redirect($this->url->link('account/redeem', '', true));
            }
        } else {
            $this->session->data['error'] = $this->language->get('error_used');
            $this->response->redirect($this->url->link('account/redeem', '', true));
        }

        $this->response->addHeader('Content-Type: application/json');
        $this->response->setOutput(json_encode(array(), JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT));
    }
}
