<?php
require_once(DIR_SYSTEM . '../vendor/autoload.php');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class ControllerExtensionMailtocancel extends Controller {
    public function index() {
        $this->load->model('checkout/order');
        $this->load->model('account/customerpartner');
        // $this->load->model('customerpartner/mail');
        $this->load->model('customerpartner/master');

        $order_id = 130;

        $order_info = $this->model_checkout_order->getOrder($order_id);
        $products = $this->model_checkout_order->getOrderProducts($order_id);

        foreach ($products as $index => $product) 
        {
            $check_seller = $this->model_account_customerpartner->getProductSellerDetails($product['product_id']);
            $partner = $this->model_customerpartner_master->getProfile($check_seller['customer_id']);  
            
            $mail = new PHPMailer(true);
            $data = array(
                "seller email" => $partner['email'],
                "customer email" => $order_info['email']
            );

            try {
                $mail->isSMTP();
                $mail->Host       = 'smtp.gmail.com';  // SMTP server
                $mail->SMTPAuth   = true;
                $mail->Username   = 'kalixjake523@gmail.com';   // SMTP username
                $mail->Password   = 'genu tzxj snlt rtbg';     // SMTP password (App password)
                $mail->SMTPSecure = 'tls';
                $mail->Port       = 587;

                // Recipients
                $mail->setFrom('kalixjake523@gmail.com', 'HappyPaws PH Cancel Order');
                $mail->addAddress($partner['email']);

                // Content
                $mail->isHTML(true);
                $mail->Subject = 'Cancel Order';
                $mail->Body    = "Customer " . $order_info['firstname'] . ' ' . $order_info['lastname']
                             . ' has <b> Canceled </b> their Order <br> 
                             Order ID: <b>' . $order_info['order_id'] . ' </b> <br>' .
                             'Product Name: <b>' . $product['name'] . '</b> <br>' .
                             'Quantity: <b>' . $product['quantity'] . '</b>';
                // Send email
                $mail->send();
                echo "message was sent!";
            } catch (Exception $e) {
                
                echo "Email could not be sent. Mailer Error: {$mail->ErrorInfo}";
            }
        }
       
    }
}
