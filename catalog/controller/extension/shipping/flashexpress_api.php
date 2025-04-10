<?php
class ControllerExtensionShippingFlashExpressAPI extends Controller {
    public function sendOrderToFlashExpress($order_id) {
        $this->load->model('checkout/order');
        $order_info = $this->model_checkout_order->getOrder($order_id);

        if (!$order_info) {
            return false;
        }

        // $api_url = "https://open-api-tra.flashexpress.com/open/v3/orders"; // Flash API Endpoint
        // $merchant_id = "YOUR_MERCHANT_ID";
        // $merchant_pw = "YOUR_MERCHANT_PASSWORD";

        $order_data = array(
            // "merchantID" => $merchant_id,
            // "merchantPW" => $merchant_pw,
            "order_no" => $order_info['order_id'],
            "recipient" => array(
                "name" => $order_info['firstname'] . ' ' . $order_info['lastname'],
                "phone" => $order_info['telephone'],
                "address" => $order_info['shipping_address_1'],
                "postcode" => $order_info['shipping_postcode'],
                "city" => $order_info['shipping_city'],
                "country" => $order_info['shipping_country'],
            ),
            "items" => array(
                array(
                    "name" => "Product Name",
                    "quantity" => 1,
                    "weight" => 1.0,
                    "price" => $order_info['total']
                )
            )
        );

        // $ch = curl_init();
        // curl_setopt($ch, CURLOPT_URL, $api_url);
        // curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        // curl_setopt($ch, CURLOPT_POST, true);
        // curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($order_data));
        // curl_setopt($ch, CURLOPT_HTTPHEADER, array(
        //     "Content-Type: application/json",
        // ));

        // $response = curl_exec($ch);
        // curl_close($ch);

        // return json_decode($response, true);
        $data['order_data'] = json_encode($order_data, JSON_PRETTY_PRINT);

        $this->response->setOutput($this->load->view('common/flashexpress_fetchdata', $data));
    }
}
?>
