<?php
class ControllerCheckoutPlaceOrder extends Controller {
	public function index() {

		if ($this->request->server['REQUEST_METHOD'] == 'POST') {

            $this->load->model('account/address');
            $this->load->model('account/customer');
			$this->load->model('account/customerpartner');
			$this->load->model('customerpartner/master');
			$this->load->model('checkout/order');
			$this->load->model('account/customerpartnerorder');

            $payment_method = $this->request->post['payment_method'];
            $shipping_method = $this->request->post['shipping_method'];
            $address_id = $this->request->post['address_id'];

			$order_data = array();
            $shipping_address = $this->model_account_address->getAddress($address_id);

			//invoice
			$order_data['invoice_prefix'] = 'INV-2024-00';

			if ($this->customer->isLogged()) {
				$customer_info = $this->model_account_customer->getCustomer($this->customer->getId());

				$order_data['customer_id'] = $this->customer->getId();
				$order_data['customer_group_id'] = $customer_info['customer_group_id'];
				$order_data['firstname'] = $customer_info['firstname'];
				$order_data['lastname'] = $customer_info['lastname'];
				$order_data['email'] = $customer_info['email'];
				$order_data['telephone'] = $customer_info['telephone'];
				$order_data['custom_field'] = json_decode($customer_info['custom_field'], true);
			} 

			if (isset($this->request->server['HTTP_ACCEPT_LANGUAGE'])) {
				$order_data['accept_language'] = $this->request->server['HTTP_ACCEPT_LANGUAGE'];
			} else {
				$order_data['accept_language'] = '';
			}

			if (isset($this->request->server['HTTP_USER_AGENT'])) {
				$order_data['user_agent'] = $this->request->server['HTTP_USER_AGENT'];
			} else {
				$order_data['user_agent'] = '';
			}

			$order_data['payment_firstname'] = $shipping_address['firstname'];
			$order_data['payment_lastname'] = $shipping_address['lastname'];
			$order_data['payment_company'] = $shipping_address['company'];
			$order_data['payment_address_2'] = $shipping_address['address_2'];
			$order_data['payment_address_1'] = $shipping_address['address_1'];		
			$order_data['payment_city'] = $shipping_address['city'];
			$order_data['payment_postcode'] = $shipping_address['postcode'];		
			$order_data['payment_zone'] = $shipping_address['zone'];
			$order_data['payment_zone_id'] = $shipping_address['zone_id'];	
			$order_data['payment_country'] = $shipping_address['country'];
			$order_data['payment_country_id'] = $shipping_address['country_id'];
			$order_data['payment_address_format'] = '';
			$order_data['payment_custom_field'] = '';
			
			//shipping details
			$order_data['shipping_firstname'] = $shipping_address['firstname'];
			$order_data['shipping_lastname'] = $shipping_address['lastname'];
			$order_data['shipping_company'] = $shipping_address['company'];
			$order_data['shipping_address_2'] = $shipping_address['address_2'];
			$order_data['shipping_address_1'] = $shipping_address['address_1'];		
			$order_data['shipping_city'] = $shipping_address['city'];
			$order_data['shipping_postcode'] = $shipping_address['postcode'];		
			$order_data['shipping_zone'] = $shipping_address['zone'];
			$order_data['shipping_zone_id'] = $shipping_address['zone_id'];	
			$order_data['shipping_country'] = $shipping_address['country'];
			$order_data['shipping_country_id'] = $shipping_address['country_id'];
			$order_data['shipping_address_format'] = '';
			$order_data['shipping_custom_field'] = '';

			$order_data['products'] = array();

            foreach ($this->cart->getProducts() as $product) {
				$option_data = array();

				foreach ($product['option'] as $option) {
					$option_data[] = array(
						'product_option_id'       => $option['product_option_id'],
						'product_option_value_id' => $option['product_option_value_id'],
						'option_id'               => $option['option_id'],
						'option_value_id'         => $option['option_value_id'],
						'name'                    => $option['name'],
						'value'                   => $option['value'],
						'type'                    => $option['type']
					);
				}

				$order_data['products'][] = array(
					'product_id' => $product['product_id'],
					'name'       => $product['name'],
					'model'      => $product['model'],
					'option'     => $option_data,
					'download'   => $product['download'],
					'quantity'   => $product['quantity'],
					'subtract'   => $product['subtract'],
					'price'      => $product['price'],
					'total'      => $product['total'],
					'tax'        => $this->tax->getTax($product['price'], $product['tax_class_id']),
					'reward'     => $product['reward']
				);
			}

			$order_data['comment'] = '';
			$order_data['affiliate_id'] = 0;
			$order_data['commission'] = 0;
			$order_data['marketing_id'] = 0;
			$order_data['language_id'] = 1;
			$order_data['currency_id'] = $this->currency->getId($this->session->data['currency']);
			$order_data['currency_code'] = 'PHP';
			$order_data['currency_value'] = $this->currency->getValue($this->session->data['currency']);
			$order_data['ip'] = $this->request->server['REMOTE_ADDR'];
			$order_data['tracking'] = '';
			$order_data['forwarded_ip'] = '';

			$order_data['store_id'] = 0;
			$order_data['store_name'] = 'HappyPaws PH';
			if ($this->request->server['HTTPS']) {
				$order_data['store_url'] = HTTPS_SERVER;
			} else {
				$order_data['store_url'] = HTTP_SERVER;
			}
			$order_data['payment_method'] = $payment_method;
			$order_data['payment_code'] = $payment_method;
			$order_data['shipping_method'] = $shipping_method;
			$order_data['shipping_code'] = $shipping_method;
			$order_data['total'] = $product['total'] + 39;
			

			$order_data['totals'] = array(
				array(
					'code'       => 'total',
					'title'      => 'Total',
					'value'      => $order_data['total'],
					'sort_order' => 9
				)
			);		

			// $order_status_id = 1;
			// $this->session->data['order_id'] =  $this->model_checkout_order->addOrder($order_data);
			
			// $order_info = $this->model_checkout_order->getOrder($this->session->data['order_id']);
	
			// $this->model_account_customerpartnerorder->customerpartner($order_info, $order_status_id, '', $order_status_id);
			// $this->load->controller('extension/mailtoseller', [
			// 	'order_id' => $this->session->data['order_id'],
			// 	'order_status_id' => $order_status_id
			// ]);
			
			if ($payment_method == 'xendit') {
				$this->response->redirect($this->url->link('extension/payment/xendit'));
			}
			if ($payment_method == 'hitpay') {
				$this->response->redirect($this->url->link('extension/payment/hitpay'));
			} 
			else {
				$this->response->redirect($this->url->link('checkout/success'));	
			} 
		} 
	}
}
