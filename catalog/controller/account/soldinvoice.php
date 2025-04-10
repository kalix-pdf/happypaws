<?php
class ControllerAccountSoldinvoice extends Controller
{

    private $error = array();

    private $data = array();

    public function index()
    {

        if (!$this->customer->isLogged()) {
            $this->session->data['redirect'] = $this->url->link('account/order/info&order_id=' . $this->request->get['order_id'], '', true);
            $this->response->redirect($this->url->link('account/login', '', true));
        }

        $this->load->model('account/customerpartner');
        $this->load->model('account/order');

        $this->data['chkIsPartner'] = $this->model_account_customerpartner->chkIsPartner();

        $this->load->language('account/customerpartner/soldinvoice');
        $this->document->setTitle($this->language->get('heading_title'));
        $this->data['heading_title'] = $this->language->get('heading_title');
        $this->data['text_order'] = $this->language->get('text_order');

        $order_id = $product_id = $seller_id = 0;

        if (isset($this->request->get['order_id'])) {
            $order_id = (int) $this->request->get['order_id'];
        }

        if (isset($this->request->get['seller_id'])) {
            $seller_id = (int) $this->request->get['seller_id'];
        }

        if (isset($this->request->get['product_id'])) {
            $product_id = (int) $this->request->get['product_id'];
        }

        $this->data['order_id'] = $order_id;

        $this->data['product_id'] = $product_id;

        $this->data['errorPage'] = true;
        $this->data['direction'] = 'ltr';
        $this->data['lang'] = 'en';

        if ($this->request->server['HTTPS']) {
            $server = $this->config->get('config_ssl');
        } else {
            $server = $this->config->get('config_url');
        }

        $this->data['base'] = $server;

        $order_info = $this->model_account_order->getOrder($order_id);

        if ($order_id and $order_info) {

            $this->data['errorPage'] = false;
            $this->data['name'] = $order_info['firstname'] . ' ' . $order_info['lastname'];
            $this->data['email'] = $order_info['email'];

            if ($order_info['invoice_no']) {
                $this->data['invoice_no'] = $order_info['invoice_prefix'] . $order_info['invoice_no'];
            } else {
                $this->data['invoice_no'] = $order_info['invoice_prefix'] . '' . $order_id;
            }

            $this->data['date_added'] = date($this->language->get('date_format_short'), strtotime($order_info['date_added']));

            if ($order_info['payment_address_format']) {
                $format = $order_info['payment_address_format'];
            } else {
                $format = '{firstname} {lastname}' . "\n" . '{company}' . "\n" . '{address_1}' . "\n" . '{address_2}' . "\n" . '{city} {postcode}' . "\n" . '{zone}' . "\n" . '{country}';
            }

            $find = array(
                '{firstname}',
                '{lastname}',
                '{company}',
                '{address_1}',
                '{address_2}',
                '{city}',
                '{postcode}',
                '{zone}',
                '{zone_code}',
                '{country}',
            );

            $replace = array(
                'firstname' => $order_info['payment_firstname'],
                'lastname' => $order_info['payment_lastname'],
                'company' => $order_info['payment_company'],
                'address_1' => $order_info['payment_address_1'],
                'address_2' => $order_info['payment_address_2'],
                'city' => $order_info['payment_city'],
                'postcode' => $order_info['payment_postcode'],
                'zone' => $order_info['payment_zone'],
                'zone_code' => $order_info['payment_zone_code'],
                'country' => $order_info['payment_country'],
            );

            $this->data['payment_address'] = str_replace(array("\r\n", "\r", "\n"), '<br />', preg_replace(array("/\s\s+/", "/\r\r+/", "/\n\n+/"), '<br />', trim(str_replace($find, $replace, $format))));

            $this->data['payment_method'] = $order_info['payment_method'];

            $this->load->model('setting/setting');
            $store_info = $this->model_setting_setting->getSetting('config', $order_info['store_id']);

            if ($store_info) {
                $order_info['store_address'] = $store_info['config_address'];
                $order_info['store_email'] = $store_info['config_email'];
                $order_info['store_telephone'] = $store_info['config_telephone'];
            } else {
                $order_info['store_address'] = $this->config->get('config_address');
                $order_info['store_email'] = $this->config->get('config_email');
                $order_info['store_telephone'] = $this->config->get('config_telephone');
            }
            $order_info['store_fax'] = '';

            if ($order_info['store_id'] == 0) {
                $data['store_url'] = $this->request->server['HTTPS'] ? HTTPS_SERVER : HTTP_SERVER;
            } else {
                $data['store_url'] = $order_info['store_url'];
            }

            if ($order_info['shipping_address_format']) {
                $format = $order_info['shipping_address_format'];
            } else {
                $format = '{firstname} {lastname}' . "\n" . '{company}' . "\n" . '{address_1}' . "\n" . '{address_2}' . "\n" . '{city} {postcode}' . "\n" . '{zone}' . "\n" . '{country}';
            }

            $find = array(
                '{firstname}',
                '{lastname}',
                '{company}',
                '{address_1}',
                '{address_2}',
                '{city}',
                '{postcode}',
                '{zone}',
                '{zone_code}',
                '{country}',
            );

            $replace = array(
                'firstname' => $order_info['shipping_firstname'],
                'lastname' => $order_info['shipping_lastname'],
                'company' => $order_info['shipping_company'],
                'address_1' => $order_info['shipping_address_1'],
                'address_2' => $order_info['shipping_address_2'],
                'city' => $order_info['shipping_city'],
                'postcode' => $order_info['shipping_postcode'],
                'zone' => $order_info['shipping_zone'],
                'zone_code' => $order_info['shipping_zone_code'],
                'country' => $order_info['shipping_country'],
            );

            $this->data['shipping_address'] = str_replace(array("\r\n", "\r", "\n"), '<br />', preg_replace(array("/\s\s+/", "/\r\r+/", "/\n\n+/"), '<br />', trim(str_replace($find, $replace, $format))));

            $this->data['shipping_method'] = $order_info['shipping_method'];

            $this->data['products'] = array();

            $products = $this->model_account_order->getOrderProducts($this->request->get['order_id']);

            $sub_total = 0;
            $sub_tax = 0;
            $shipping = 0;

            $seller_product_id = 0;
            foreach ($products as $product) {
                // Need to get one product id only to get the seller information
                if (!$seller_product_id) {
                    $seller_product_id = $product['product_id'];
                }

                $this->data['products'][] = array(
                    'product_id' => $product['product_id'],
                    'name' => $product['name'],
                    'model' => $product['model'],
                    'quantity' => $product['quantity'],
                    'option' => $this->model_account_order->getOrderOptions($order_id, $product['order_product_id']),
                    'price' => $this->currency->format($product['price'] + ($this->config->get('config_tax') ? $product['tax'] : 0), $order_info['currency_code'], $order_info['currency_value']),
                    'total' => $this->currency->format($product['total'] + ($this->config->get('config_tax') ? ($product['tax'] * $product['quantity']) : 0), $order_info['currency_code'], $order_info['currency_value']),
                );

                $sub_total += $product['total'] + ($this->config->get('config_tax') ? ($product['tax'] * $product['quantity']) : 0);
            }

            $this->data['totals'] = array();

            $totals = $this->model_account_order->getOrderTotals($this->request->get['order_id']);

            foreach ($totals as $total) {
                $this->data['totals'][] = array(
                    'title' => $total['title'],
                    'text' => $this->currency->format($total['value'], $order_info['currency_code'], $order_info['currency_value']),
                );
            }
        }

        $this->data['order'] = $order_info;

        $this->load->model('customerpartner/master');

        $SellerIdArray = $this->model_customerpartner_master->getPartnerIdBasedonProduct($seller_product_id);

        // change store details if product belongs to seller
        if ($SellerIdArray) {
            $this->data['order']['store_url'] = $this->url->link('customerpartner/profile&seller_id=' . $SellerIdArray['id'], '', true);

            $seller_details = $this->model_account_customerpartner->getProfile($SellerIdArray['id']);

            $seller_address_id = 0;

            if ($seller_details) {
                $seller_address_id = $seller_details['address_id'];
            }

            $this->load->model('account/soldinvoice');
            $store_address = $this->model_account_soldinvoice->getAddress($SellerIdArray['id'], $seller_address_id);

            $replace_store_address = array(
                'firstname' => isset($store_address['firstname']) ? $store_address['firstname'] : '',
                'lastname' => isset($store_address['lastname']) ? $store_address['lastname'] : '',
                'company' => isset($seller_details['companyname']) ? $seller_details['companyname'] : '',
                'address_1' => isset($store_address['address_1']) ? $store_address['address_1'] : '',
                'address_2' => isset($store_address['address_2']) ? $store_address['address_2'] : '',
                'city' => isset($store_address['city']) ? $store_address['city'] : '',
                'postcode' => isset($store_address['postcode']) ? $store_address['postcode'] : '',
                'zone' => isset($store_address['zone']) ? $store_address['zone'] : '',
                'zone_code' => isset($store_address['zone_code']) ? $store_address['zone_code'] : '',
                'country' => isset($store_address['country']) ? $store_address['country'] : ''
            );

            $formatted_store_address = str_replace(array("\r\n", "\r", "\n"), '<br />', preg_replace(array("/\s\s+/", "/\r\r+/", "/\n\n+/"), '<br />', trim(str_replace($find, $replace_store_address, $format))));
            $this->data['order']['store_address'] = $formatted_store_address;

            $this->data['order']['store_email'] = isset($seller_details['email']) ? $seller_details['email'] : '';
            $this->data['order']['store_telephone'] = isset($seller_details['telephone']) ? $seller_details['telephone'] : '';
        }

        $this->data['action'] = $this->url->link('account/soldinvoice&order_id=' . $order_id, '', true);

        if (isset($this->error['warning'])) {
            $this->data['error_warning'] = $this->error['warning'];
        } else {
            $this->data['error_warning'] = '';
        }

        if (isset($this->session->data['success'])) {
            $this->data['success'] = $this->session->data['success'];
            unset($this->session->data['success']);
        } else {
            $this->data['success'] = '';
        }

        $this->data['back'] = $this->url->link('account/account', '', true);

        $this->data['column_left'] = $this->load->controller('common/column_left');
        $this->data['column_right'] = $this->load->controller('common/column_right');
        $this->data['content_top'] = $this->load->controller('common/content_top');
        $this->data['content_bottom'] = $this->load->controller('common/content_bottom');
        $this->data['footer'] = $this->load->controller('common/footer');
        $this->data['header'] = $this->load->controller('common/header');

        $this->response->setOutput($this->load->view('account/soldinvoice', $this->data));
    }
}
