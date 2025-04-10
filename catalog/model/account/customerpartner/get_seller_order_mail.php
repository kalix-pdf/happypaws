<?php 
/**
 * @version [Supported opencart version 3.x.x.x.]
 * @category Webkul
 * @package Opencart Marketplace Module Income model
 * @author [Webkul] <[<http://webkul.com/>]>
 * @copyright Copyright (c) 2010-2019 Webkul Software Private Limited (https://webkul.com)
 * @license https://store.webkul.com/license.html
 */

class ModelAccountCustomerpartnerGetSellerOrderMail extends Model {
    public function getSellerDataForOrderMail($params)
    {
      
    
        $this->load->model('customerpartner/master');

        $SellerIdArray = $this->model_customerpartner_master->getPartnerIdBasedonProduct($params['product_id']);

        if (!$SellerIdArray) {
            return false;
        }



        $this->load->model('account/customerpartner');

        $seller_details = $this->model_account_customerpartner->getProfile($SellerIdArray['id']);

        if (!$seller_details) {
            return false;
        }

        $this->load->language('customerpartner/mail');

        $return_array['text_seller_invoice'] = sprintf($this->language->get('text_seller_invoice'), $this->url->link('account/soldinvoice&order_id=' . $params['order_id'], '', true));

		$data['text_seller_detail'] = $this->language->get('text_seller_detail');
		$data['text_seller_telephone'] = $this->language->get('text_seller_telephone');
		$data['text_seller_email'] = $this->language->get('text_seller_email');
		$data['text_seller_profile_link'] = $this->language->get('text_seller_profile_link');
        $data['text_seller_invoice_no']  = $this->language->get('text_seller_invoice_no');
        $data['text_seller_order_id']  = $this->language->get('text_seller_order_id');
        $data['text_seller_payment_method']  = $this->language->get('text_seller_payment_method');
        $data['text_seller_shipping_method']  = $this->language->get('text_seller_shipping_method');

        $seller_address_id = $seller_details['address_id'];

        $this->load->model('account/soldinvoice');

        $store_address = $this->model_account_soldinvoice->getAddress($SellerIdArray['id'], $seller_address_id);

		$format = '{firstname} {lastname}' . "\n" . '{company}' . "\n" . '{address_1}' . "\n" . '{address_2}' . "\n" . '{city} {postcode}' . "\n" . '{zone}' . "\n" . '{country}';

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
            'country' => isset($store_address['country']) ? $store_address['country'] : '',
        );

        $formatted_store_address = str_replace(array("\r\n", "\r", "\n"), '<br />', preg_replace(array("/\s\s+/", "/\r\r+/", "/\n\n+/"), '<br />', trim(str_replace($find, $replace_store_address, $format))));

        $data['seller_address'] = $formatted_store_address;

        $data['seller_profile_link'] = $this->url->link('customerpartner/profile&seller_id=' . $SellerIdArray['id'], '', true);

        $data['seller_email'] = isset($seller_details['email']) ? $seller_details['email'] : '';

        $data['seller_telephone'] = isset($seller_details['telephone']) ? $seller_details['telephone'] : '';

        $this->load->model('account/soldinvoice');

        $order_info = $this->model_account_soldinvoice->getOrder($params['order_id'],$params['customer_id']);

        $data['shipping_method'] = $order_info['shipping_method'];

        $data['payment_method'] = $order_info['payment_method'];

        $data['order_id'] = $params['order_id'];

        if ($order_info['invoice_no']) {
            $data['invoice_no'] = $order_info['invoice_prefix'] . $order_info['invoice_no'];
        } else {
            $data['invoice_no'] = $order_info['invoice_prefix'] . '' . $params['order_id'];
        }

        $data['date_added'] = $order_info['date_added'];

        $data['store_name'] = $order_info['store_name'];
        
        return $data;
    }

}