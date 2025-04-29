<?php
class ControllerExtensionPaymentHitPay extends Controller {
    public function index() 
    {
                $api_key = 'live_eb43d1ccd7540e1e6ba0a67d3ac7d18ef06fda72aaf8badc7d4580f676351b68';
                $api_url = 'https://api.hit-pay.com/v1/payment-requests';

                $params = array(
                    'amount' => 100,
                    'currency' => 'PHP',
                    'email' => 'example@gmail.com',
                    'name' => 'kalix',
                    'reference_number' => 129,
                    // 'redirect_url' => $this->url->link('checkout/success', '', true),
                    // 'webhook' => HTTPS_CATALOG . 'index.php?route=extension/payment/hitpay/webhook'
                );

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
                    $this->response->redirect($result['url']);
                } else {
                    $this->session->data['error'] = 'Could not create payment link!';
                    $this->log->write($response, $result);
                    $this->response->redirect($this->url->link('checkout/checkout', '', true));
                }
            
        
    }

    // public function webhook() {
    //     $input = file_get_contents('php://input');
    //     $data = json_decode($input, true);

    //     if (!empty($data['payment_request_id'])) {
    //         $order_id = $data['reference_number'];

    //         $this->load->model('checkout/order');
    //         $this->model_checkout_order->addOrderHistory($order_id, $this->config->get('payment_hitpay_order_status_id'), 'Paid via HitPay');
    //     }
    // }
}
?>
