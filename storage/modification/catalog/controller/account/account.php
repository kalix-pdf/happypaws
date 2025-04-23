<?php
class ControllerAccountAccount extends Controller {

	private function logWebhook($message)
    {
        $logFile = DIR_LOGS . 'webhook.log'; 
        $logMessage = date('Y-m-d H:i:s') . ' - ' . $message . PHP_EOL;

        file_put_contents($logFile, $logMessage, FILE_APPEND);
    }
	private function logTrackingUpdate($trackingNumber, $status) 
    {
        $logFile = DIR_LOGS . 'webhook.log'; 
        $logMessage = date('Y-m-d H:i:s') . ' - Tracking Number: ' . $trackingNumber . ' | Status: ' . $status . PHP_EOL;

        file_put_contents($logFile, $logMessage, FILE_APPEND);
    }
	public function index() {
		if (!$this->customer->isLogged()) {
			$this->session->data['redirect'] = $this->url->link('account/account', '', true);

			$this->response->redirect($this->url->link('account/login', '', true));
		}

		
		$this->load->language('account/account');

		$this->document->setTitle($this->language->get('heading_title'));

                    /**
                    * Marketplace
                    */

                    $this->load->model('account/customerpartner');

                    $data['is_seller'] = 0;

                    $data['module_marketplace_status'] = $this->config->get('module_marketplace_status');

                    $data['marketplace_seller_mode'] = 0;

                    if ($this->config->get('module_marketplace_status') && $this->model_account_customerpartner->chkIsPartner()) {

                        $data['is_seller'] = 1;

                        $data['action'] = $this->url->link('account/account', '', true);

                        if (($this->request->server['REQUEST_METHOD'] == 'POST')) {

                            if (isset($this->request->post['marketplace_seller_mode']) && $this->request->post['marketplace_seller_mode']) {
                                $this->session->data['marketplace_seller_mode'] = $this->request->post['marketplace_seller_mode'];
                            } else {
                                $this->session->data['marketplace_seller_mode'] = 0;
                            }
                        }

                        if(isset($this->session->data['marketplace_seller_mode'])){
                            $data['marketplace_seller_mode'] = $this->session->data['marketplace_seller_mode'];
                        } else {
                            $data['marketplace_seller_mode'] = 1;
                            $this->session->data['marketplace_seller_mode'] = 1;
                        }

                        $this->load->language('extension/module/marketplace');

                        $data['text_mode_seller'] = $this->language->get('text_mode_seller');

                        $data['text_mode_customer'] = $this->language->get('text_mode_customer');

                        $this->document->addScript("https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js");

                        $this->document->addStyle("https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css");
                    }
                    /**
                    * Marketplace
                    */
                

		$data['breadcrumbs'] = array();

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_home'),
			'href' => $this->url->link('common/home')
		);

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_account'),
			'href' => $this->url->link('account/account', '', true)
		);

		if (isset($this->session->data['success'])) {
			$data['success'] = $this->session->data['success'];

			unset($this->session->data['success']);
		} else {
			$data['success'] = '';
		} 
		
		
		if (isset($this->request->get['page'])) {
			$page = (int)$this->request->get['page'];
		} else {
			$page = 1;
		}

		$this->load->model('account/order');
		$this->load->model('account/customerpartner');
        $this->load->model('customerpartner/master');
		$limit = 10;

		$results = $this->model_account_order->getOrders(($page - 1) * $limit, $limit);

		foreach ($results as $result) {
			$product_total = $this->model_account_order->getTotalOrderProductsByOrderId($result['order_id']);
			$voucher_total = $this->model_account_order->getTotalOrderVouchersByOrderId($result['order_id']);
			//$track_no = $this->model_account_order->getOrder($result['order_id']);

			$data['orders'][] = array(
				'order_id'   => $result['order_id'],
				'name'       => $result['firstname'] . ' ' . $result['lastname'],
				'status'     => $result['status'],
				'tracking'	 => $result['tracking_number'],
				'date_added' => date($this->language->get('date_format_short'), strtotime($result['date_added'])),
				'products'   => ($product_total + $voucher_total),
				'total'      => $this->currency->format($result['total'], $result['currency_code'], $result['currency_value']),
				);
			// print_r($data);
			$products = $this->model_account_order->getOrderProducts($result['order_id']);
			
			foreach($products as $product)
			{
				$check_seller = $this->model_account_customerpartner->getProductSellerDetails($product['product_id']);
            	$partner = $this->model_customerpartner_master->getProfile($check_seller['customer_id']);  

				$data['product_info'][$result['order_id']][] = array(
					'name' => $product['name'],
					'quantity' => $product['quantity'],
					'store' => $partner['companyname'],
					'seller_id' => $partner['customer_id'],
					'product_id' => $product['product_id']
				);
			}
		}
		if (!empty($data['orders'])) {
    		foreach ($data['orders'] as $order) 
    		{
    			if ($order['status'] == 'Processing') 
    			{
    				$trackingResponse = $this->load->controller('extension/trackorder/index', $order['tracking']);
					if (!empty($trackingResponse['data']['routes'])) 
					{
						if (is_array($trackingResponse) && isset($trackingResponse['data']['pno'])) 
						{
							foreach ($trackingResponse['data']['routes'] as $index => $route) {
								if ($route['state'] == 1) {
									$this->model_account_customerpartner->changetoPickup($trackingResponse['data']['pno']);
								}
								
							}
						} 	//extension/trackorder&tracking=P6125TFBXZZ
					}
				}
    			if ($order['status'] == 'Picked-up') 
    			{
    			    $trackingResponse = $this->load->controller('extension/trackorder/index', $order['tracking']);
    				if (!empty($trackingResponse['data']['routes'])) 
					{
						if (is_array($trackingResponse) && isset($trackingResponse['data']['pno'])) 
						{
							foreach ($trackingResponse['data']['routes'] as $index => $route) {
								if ($index == 1 && $route['state'] == 3) {
									$this->model_account_customerpartner->changetoInTransit($trackingResponse['data']['pno']);
									$this->logTrackingUpdate($trackingResponse['data']['pno'], 'Your parcel has been picked-up by our logistics partner');
								}
								
							}
						} 	
					}
    			}
    			if ($order['status'] == 'In Transit') 
    			{
					$this->logTrackingUpdate($trackingResponse['data']['pno'], 'In transit');
    			    $trackingResponse = $this->load->controller('extension/trackorder/index', $order['tracking']);
    				if (!empty($trackingResponse['data']['routes']))
					{
						if (is_array($trackingResponse) && isset($trackingResponse['data']['pno'])) 
						{
							$accepted_order_id = 19;
							if ($trackingResponse['data']['stateText'] == 'Delivered') {
								$this->model_account_customerpartner->changetoDelivered($trackingResponse['data']['pno']);
								$this->load->controller('extension/mailtoseller', [
									'order_id' => $result['order_id'],
									'order_status_id' => $accepted_order_id
								]);
								$this->logTrackingUpdate($trackingResponse['data']['pno'], 'Delivered');
							}
						} 	
					}
    			}
    		}
		}
	
		$data['edit'] = $this->url->link('account/edit', '', true);
		$data['password'] = $this->url->link('account/password', '', true);
		$data['address'] = $this->url->link('account/address', '', true);
		
		$data['credit_cards'] = array();
		
		$files = glob(DIR_APPLICATION . 'controller/extension/credit_card/*.php');
		
		foreach ($files as $file) {
			$code = basename($file, '.php');
			
			if ($this->config->get('payment_' . $code . '_status') && $this->config->get('payment_' . $code . '_card')) {
				$this->load->language('extension/credit_card/' . $code, 'extension');

				$data['credit_cards'][] = array(
					'name' => $this->language->get('extension')->get('heading_title'),
					'href' => $this->url->link('extension/credit_card/' . $code, '', true)
				);
			}
		}
		
		$data['wishlist'] = $this->url->link('account/wishlist');
		$data['order'] = $this->url->link('account/order', '', true);
		$data['download'] = $this->url->link('account/download', '', true);
		
		if ($this->config->get('total_reward_status')) {
			$data['reward'] = $this->url->link('account/reward', '', true);
		} else {
			$data['reward'] = '';
		}		
		
		$data['return'] = $this->url->link('account/return', '', true);
		$data['transaction'] = $this->url->link('account/transaction', '', true);
		$data['newsletter'] = $this->url->link('account/newsletter', '', true);
		$data['recurring'] = $this->url->link('account/recurring', '', true);
		
		$this->load->model('account/customer');
		
		$affiliate_info = $this->model_account_customer->getAffiliate($this->customer->getId());
		
		if (!$affiliate_info) {	
			$data['affiliate'] = $this->url->link('account/affiliate/add', '', true);
		} else {
			$data['affiliate'] = $this->url->link('account/affiliate/edit', '', true);
		}
		
		if ($affiliate_info) {		
			$data['tracking'] = $this->url->link('account/tracking', '', true);
		} else {
			$data['tracking'] = '';
		}
		
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['column_right'] = $this->load->controller('common/column_right');
		$data['content_top'] = $this->load->controller('common/content_top');
		$data['content_bottom'] = $this->load->controller('common/content_bottom');
		$data['footer'] = $this->load->controller('common/footer');
		$data['header'] = $this->load->controller('common/header');
		
		$this->response->setOutput($this->load->view('account/account', $data));
	}

	public function country() {
		$json = array();

		$this->load->model('localisation/country');

		$country_info = $this->model_localisation_country->getCountry($this->request->get['country_id']);

		if ($country_info) {
			$this->load->model('localisation/zone');

			$json = array(
				'country_id'        => $country_info['country_id'],
				'name'              => $country_info['name'],
				'iso_code_2'        => $country_info['iso_code_2'],
				'iso_code_3'        => $country_info['iso_code_3'],
				'address_format'    => $country_info['address_format'],
				'postcode_required' => $country_info['postcode_required'],
				'zone'              => $this->model_localisation_zone->getZonesByCountryId($this->request->get['country_id']),
				'status'            => $country_info['status']
			);
		}

		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));
	}

}

