<?php
class ControllerCheckoutShippingMethod extends Controller {
	public function index() {
		$this->load->language('checkout/checkout');

		if (isset($this->session->data['shipping_address'])) {
			// Shipping Methods
			$method_data = array();

			$this->load->model('setting/extension');

           if ($this->config->get('shipping_wk_custom_shipping_status')) {
			$this->load->language('extension/shipping/wk_custom_shipping');
			if ($this->config->get('shipping_wk_custom_shipping_priority_status')) {
				$this->load->model('account/customerpartnerorder');
					
				$this->load->model('account/add_shipping_mod');
				$shipping = array();
				$this->load->model('account/customer');
					
					  
				$seller = $this->model_account_customerpartnerorder->sellerAdminData($this->cart->getProducts());
  
				  foreach ($seller as $key => $value) {
						if ($this->config->get('shipping_wk_custom_shipping_seller_details') && $value['seller'] != 'Admin') {	
						
					  $sellername = $this->model_account_customer->getCustomer($value['seller']);
						  $shipping = $this->model_account_add_shipping_mod->getPriorityShipping($value['seller']);
  
						  if (!empty($shipping) && $shipping['status']) {
							foreach ($shipping as $keys => $values) {
							  if ($keys == 'high') {
								$shipping[$keys] = (array)json_decode($shipping[$keys]);
								$shipping[$keys]['text'] = $this->currency->format($shipping[$keys]['amount'],$this->session->data['currency']);
							  } else if ($keys == 'low') {
								$shipping[$keys] = (array)json_decode($shipping[$keys]);
  
								$shipping[$keys]['text'] = $this->currency->format($shipping[$keys]['amount'],$this->session->data['currency']);
							  } else if ($keys == 'medium') {
								$shipping[$keys] = (array)json_decode($shipping[$keys]);
								$shipping[$keys]['text'] = $this->currency->format($shipping[$keys]['amount'],$this->session->data['currency']);
							  } else {
								$shipping[$keys] = $shipping[$keys];
							  }
							}
							$priority_shipping[$value['seller']] = $shipping;
							$priority_shipping[$value['seller']]['name'] = ucfirst($sellername['firstname']) . ' ' . ucfirst($sellername['lastname']);
						  } else {
							$priority_shipping[$value['seller']] = array();
						  }
					  } else if($value['seller'] == 'Admin' || !$this->config->get('shipping_wk_custom_shipping_seller_details') && $value['seller'] != 'Admin') {
						$priority_shipping[0]['high'] = array(
						  'day'    => $this->config->get('shipping_wk_custom_shipping_high_priority_day'),
						  'amount' => $this->config->get('shipping_wk_custom_shipping_high_priority_amount'),
						  'text'	 => $this->currency->format($this->config->get('shipping_wk_custom_shipping_high_priority_amount'),$this->session->data['currency'])
						);
						$priority_shipping[0]['medium'] = array(
						  'day'    => $this->config->get('shipping_wk_custom_shipping_mid_priority_day'),
						  'amount' => $this->config->get('shipping_wk_custom_shipping_mid_priority_amount'),
						  'text'	 => $this->currency->format($this->config->get('shipping_wk_custom_shipping_mid_priority_amount'),$this->session->data['currency'])
						);
            $priority_shipping[0]['low'] = array(
						  'day'    => $this->config->get('shipping_wk_custom_shipping_low_priority_day'),
						  'amount' => $this->config->get('shipping_wk_custom_shipping_low_priority_amount'),
						  'text'	 => $this->currency->format($this->config->get('shipping_wk_custom_shipping_low_priority_amount'),$this->session->data['currency'])
						);
						$priority_shipping[0]['name'] = 'Admin';
					}
				  }
					  $data['text_priority']        = $this->language->get('text_priority');
					  $data['entry_high']           = $this->language->get('entry_high');
					  $data['entry_medium']         = $this->language->get('entry_medium');
					  $data['entry_low']            = $this->language->get('entry_low');
					  $data['text_seller_name']     = $this->language->get('text_seller_name');
					  $data['text_seller_shipping'] = $this->language->get('text_seller_shipping');
					  $data['text_day']             = $this->language->get('text_day');
					  $data['text_duration']        = $this->language->get('text_duration');
					  $data['text_charges']         = $this->language->get('text_charges');
					  $data['text_event_amount']    = $this->language->get('text_event_amount');
					  $data['priority_shipping']    = $priority_shipping;
					  
					}
		   } 

            

			$results = $this->model_setting_extension->getExtensions('shipping');

			//echo '<pre>'; print_r($results); echo '</pre>'; exit;

			foreach ($results as $result) {
				if ($this->config->get('shipping_' . $result['code'] . '_status')) {
					$this->load->model('extension/shipping/' . $result['code']);

					$quote = $this->{'model_extension_shipping_' . $result['code']}->getQuote($this->session->data['shipping_address']);

					if ($quote) {
						$method_data[$result['code']] = array(
							'title'      => $quote['title'],
							'quote'      => $quote['quote'],
							'sort_order' => $quote['sort_order'],
							'error'      => $quote['error']
						);
					}
				}
			}

			$sort_order = array();

			foreach ($method_data as $key => $value) {
				$sort_order[$key] = $value['sort_order'];
			}

			array_multisort($sort_order, SORT_ASC, $method_data);

			$this->session->data['shipping_methods'] = $method_data;
		}

		if (empty($this->session->data['shipping_methods'])) {
			$data['error_warning'] = sprintf($this->language->get('error_no_shipping'), $this->url->link('information/contact'));
		} else {
			$data['error_warning'] = '';
		}

		if (isset($this->session->data['shipping_methods'])) {
			$data['shipping_methods'] = $this->session->data['shipping_methods'];
		} else {
			$data['shipping_methods'] = array();
		}

		if (isset($this->session->data['shipping_method']['code'])) {
			$data['code'] = $this->session->data['shipping_method']['code'];
		} else {
			$data['code'] = '';
		}

		if (isset($this->session->data['comment'])) {
			$data['comment'] = $this->session->data['comment'];
		} else {
			$data['comment'] = '';
		}
		

          if (isset($data['shipping_methods']) && isset($data['shipping_methods']['wk_custom_shipping']) && isset($this->session->data['seller_custom_shipping']) && $this->session->data['seller_custom_shipping'] && $this->config->get('shipping_wk_custom_shipping_seller_status')) {
          $data['seller_custom_shipping'] = $this->session->data['seller_custom_shipping'];
          $data['text_seller_name'] = $this->language->get('text_seller_name');
					$data['text_seller_shipping'] = $this->language->get('text_seller_shipping');
          $data['text_event_amount'] = $this->language->get('text_event_amount');
          $data['event_shipping_amount'] = isset($this->session->data['event_shipping_amount']) ? $this->session->data['event_shipping_amount'] : 0;
        }
        
		$this->response->setOutput($this->load->view('checkout/shipping_method', $data));
	}

	public function save() {
		$this->load->language('checkout/checkout');

		$json = array();

		// Validate if shipping is required. If not the customer should not have reached this page.
		if (!$this->cart->hasShipping()) {
			$json['redirect'] = $this->url->link('checkout/checkout', '', true);
		}

		// Validate if shipping address has been set.
		if (!isset($this->session->data['shipping_address'])) {
			$json['redirect'] = $this->url->link('checkout/checkout', '', true);
		}

		// Validate cart has products and has stock.
		if ((!$this->cart->hasProducts() && empty($this->session->data['vouchers'])) || (!$this->cart->hasStock() && !$this->config->get('config_stock_checkout'))) {
			$json['redirect'] = $this->url->link('checkout/cart');
		}

		// Validate minimum quantity requirements.
		$products = $this->cart->getProducts();

		foreach ($products as $product) {
			$product_total = 0;

			foreach ($products as $product_2) {
				if ($product_2['product_id'] == $product['product_id']) {
					$product_total += $product_2['quantity'];
				}
			}

			if ($product['minimum'] > $product_total) {
				$json['redirect'] = $this->url->link('checkout/cart');

				break;
			}
		}

		if (!isset($this->request->post['shipping_method'])) {
			$json['error']['warning'] = $this->language->get('error_shipping');
		} else {
			$shipping = explode('.', $this->request->post['shipping_method']);

			if (!isset($shipping[0]) || !isset($shipping[1]) || !isset($this->session->data['shipping_methods'][$shipping[0]]['quote'][$shipping[1]])) {
				$json['error']['warning'] = $this->language->get('error_shipping');
			}
		}

		if (!$json) {
			$this->session->data['shipping_method'] = $this->session->data['shipping_methods'][$shipping[0]]['quote'][$shipping[1]];

          if ($this->session->data['shipping_method']['code'] == 'wk_custom_shipping.wk_custom_shipping') {
            if (isset($this->request->post['shipping_priority']) && is_array($this->request->post['shipping_priority']) && !empty($this->request->post['shipping_priority'])) {
                  $priority_sum = 0;
                  foreach ($this->request->post['shipping_priority'] as $key => $value) {
                    $this->session->data['seller_priority_shipping'][$key]	= $value;
                    $priority_sum += $value;
                  }
                  unset($this->request->post['shipping_priority']);
                  $this->request->post['shipping_priority'] = $priority_sum;
                } else {
                  unset($this->request->post['shipping_priority']);
                  $this->request->post['shipping_priority'] = 0;
                }
            $this->session->data['shipping_method']['cost'] += $this->request->post['shipping_priority'];
            $this->session->data['shipping_method']['text'] = $this->currency->format($this->session->data['shipping_method']['cost'], $this->session->data['currency']);
          } else {
              unset($this->session->data['seller_priority_shipping']);
          }
            

			$this->session->data['comment'] = strip_tags($this->request->post['comment']);
		}

		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));
	}
}