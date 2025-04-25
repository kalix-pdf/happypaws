<?php
class ControllerExtensionPaymentXendit extends Controller {
    public function index() {
        $api_key = 'xnd_development_6A6zlkIT7VN0Pvyekf3SDMJoQGUxsNMU4CFaHU0fKJcQKRyFhzaq2EyDuauGm'; 
        $this->load->model('checkout/order');

        $totals = array();
        $total_data = array(
            'totals' => &$totals,
        );

        foreach ($totals as $key => $value) {
            $sort_order[$key] = $value['sort_order'];
        }

        $order_data['totals'] = $totals;

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
           
            $data = [
                'external_id' => 'https://checkout-staging.xendit.co/od/payment-hp',
                'amount' => $product['total'] + 39, 
                'items' => [
                    [
                        'name' => $product['name'],
                        'quantity' => $product['quantity'],
                        'price' => $product['total'] + 39,
                        
                    ]
                ]
            ];

        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, 'https://api.xendit.co/v2/invoices');
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
        curl_setopt($ch, CURLOPT_HTTPHEADER, [
            'Content-Type: application/json',
            'Authorization: Basic ' . base64_encode($api_key . ':') 
        ]);

        $response = curl_exec($ch);

        // Check for errors
        if (curl_errno($ch)) {
            echo 'Error: ' . curl_error($ch);
            curl_close($ch);
            return;
        }
        $response_data = json_decode($response, true);

        if (isset($response_data['invoice_url'])) {
            $this->response->redirect($response_data['invoice_url']);

            //for ajax use
            // $this->response->addHeader('Content-Type: application/json');
            // $this->response->setOutput(json_encode([
            //     'redirect' => $response_data['invoice_url']
            // ]));
        } 
    // else {
    //     echo '<pre>';
    //     echo "Raw Response:\n";
    //     print_r($response);
    //     echo "\nDecoded Response:\n";
    //     print_r($response_data);
    //     echo '</pre>';
    // }
        curl_close($ch);
	}
    public function subscription() {
        $api_key = 'xnd_development_6A6zlkIT7VN0Pvyekf3SDMJoQGUxsNMU4CFaHU0fKJcQKRyFhzaq2EyDuauGm'; // make sure no space in API key!
    
        if (isset($this->request->get['sbs_type']) && isset($this->request->get['days'])) {
            $sbs_type = $this->request->get['sbs_type'];
            $amount = (int)$this->request->get['days']; 
        
            // if ($sbs_type == 2) {
            //     $amount = $days * 30;
            // } else {
            //     $amount = $days;
            // }
            $data = [
                'external_id' => uniqid('invoice_', true), 
                'amount' => $amount,
                'description' => 'Subscription payment for ' . $amount . ' days',
                'items' => [
                    [
                        'name' => 'Piso Per Product Per Day',
                        'quantity' => 1,
                        'price' => $amount
                    ]
                ]
            ];
    
            $ch = curl_init();
    
            curl_setopt($ch, CURLOPT_URL, 'https://api.xendit.co/v2/invoices');
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_POST, true);
            curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
            curl_setopt($ch, CURLOPT_HTTPHEADER, [
                'Content-Type: application/json',
                'Authorization: Basic ' . base64_encode($api_key . ':')
            ]);
    
            $response = curl_exec($ch);
    
            if (curl_errno($ch)) {
                $this->log->write('Xendit CURL error: ' . curl_error($ch));
                curl_close($ch);
                return;
            }
    
            $response_data = json_decode($response, true);
            curl_close($ch);
    
            if (isset($response_data['invoice_url'])) {
                $this->response->redirect($response_data['invoice_url']);
            } else {
                $this->log->write('Xendit invoice creation failed: ' . $response);
            }
        } else {
            $this->log->write('Missing sbs_type or days in subscription');
        }
    }    
}