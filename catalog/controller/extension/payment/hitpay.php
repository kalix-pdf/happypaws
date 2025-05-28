<?php
class ControllerExtensionPaymentHitPay extends Controller {
    public function index() 
    {
        $api_key = 'live_eb43d1ccd7540e1e6ba0a67d3ac7d18ef06fda72aaf8badc7d4580f676351b68';
        $api_url = 'https://api.hit-pay.com/v1/payment-requests';

        $this->load->model('account/customer');
        $this->load->model('checkout/order');

        $order_id = $this->session->data['order_id'];
        $order_data = array();
        $total = 0;

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
        foreach ($this->cart->getProducts() as $product) {
				$option_data = array();

                $total += $product['total'];
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
					'tax'        => $this->tax->getTax($product['price'], $product['tax_class_id']),
					'reward'     => $product['reward']
				);

            }

                $params = array(
                    'amount' => number_format($total + 39, 2, '.', ''),
                    'currency' => 'PHP',
                    'email' => $order_data['email'],
                    'name' => $order_data['firstname'],
                    'phone' => $order_data['telephone'],
                    'reference_number' => $order_id,
                    'redirect_url' => $this->url->link('checkout/success'),
                    // 'redirect_url' => $this->url->link('extension/payment/hitpay/redirect', 'order_id=' . $order_id, true),
                    // 'webhook' => 'https://happypaws.ph/hp/catalog/controller/extension/payment/hitpay/webhook.php'
                ); 

                // https://happypaws.ph/hp/index.php?route=extension/payment/hitpay/webhook
                // change this also on hitpay dashboard!
                
                $curl = curl_init($api_url);
                curl_setopt($curl, CURLOPT_HTTPHEADER, array(
                    'X-BUSINESS-API-KEY:' . $api_key
                ));
                curl_setopt($curl, CURLOPT_POST, true);
                curl_setopt($curl, CURLOPT_POSTFIELDS, http_build_query($params));
                curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

                $response = curl_exec($curl);
                $result = json_decode($response, true);

                if (isset($result['url'])) {
                    // $this->log->write($result);
                    $this->model_checkout_order->addPaymentUrl($order_id, $result['url']);
                    $this->response->redirect($result['url']);
                } else {
                    $this->session->data['error'] = 'Could not create payment link!';
                    $this->log->write($response, $result);
                    $this->response->redirect($this->url->link('checkout/checkout', '', true));
                }
            
        
    }

    
}
?>
