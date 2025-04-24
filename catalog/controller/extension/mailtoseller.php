<?php
require_once(DIR_SYSTEM . '../vendor/autoload.php');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class ControllerExtensionMailtoseller extends Controller {
    public function index($data = []) {
        if (!isset($data['order_id']) || !isset($data['order_status_id'])) {
            return $this->log->write("Error in mailtoseller");
        }

        $order_id = $data['order_id'];
        $order_status_id = $data['order_status_id'];
    
        $this->load->model('checkout/order');
        $this->load->model('account/customerpartner');
        $this->load->model('customerpartner/master');

        $order_info = $this->model_checkout_order->getOrder($order_id);
        $products = $this->model_checkout_order->getOrderProducts($order_id);

        foreach ($products as $index => $product) 
        {
            $check_seller = $this->model_account_customerpartner->getProductSellerDetails($product['product_id']);
            $partner = $this->model_customerpartner_master->getProfile($check_seller['customer_id']);  
            
            $mail = new PHPMailer(true);
            
            try {
                $mail->isSMTP();
                $mail->Host       = 'smtp.gmail.com';  // SMTP server
                $mail->SMTPAuth   = true;
                $mail->Username   = 'kalixjake523@gmail.com';   // SMTP username
                $mail->Password   = 'genu tzxj snlt rtbg';     // SMTP password (App password)
                $mail->SMTPSecure = 'tls';
                $mail->Port       = 587;

                if ($order_status_id = 1) {
                    $mail->setFrom('hapipaws.ph@gmail.com', 'HappyPaws PH');
                    $mail->addAddress($partner['email']);

                    $mail->isHTML(true);
                    $mail->Subject = 'Order Placed';
                    $mail->Body = "Customer " . $order_info['firstname'] . ' ' . $order_info['lastname']
                            . ' has <b>Placed a new order!</b><br> 
                            Order ID: <b>' . $order_info['order_id'] . '</b><br>'
                            . 'Product Name: <b>' . $product['name'] . '</b><br>'
                            . 'Quantity: <b>' . $product['quantity'] . '</b><br>';

                }
                if ($order_status_id = 2) {
                    $mail->setFrom('hapipaws.ph@gmail.com', 'HappyPaws PH');
                    $mail->addAddress($order_info['email']);
                    $mail->Subject = 'Order Status: Pick-up';
                    $mail->Body    = 'Seller has <b> accepted your order!</b> and is preparing to ship your parcel<br> 
                            Order ID: <b>' . $order_info['order_id'] . ' </b> <br>' .
                            'Product Name: <b>' . $product['name'] . '</b> <br>' .
                            'Quantity: <b>' . $product['quantity'] . '</b> <br>';
                }
                if ($order_status_id = 19) {
                    $mail->setFrom('hapipaws.ph@gmail.com', 'HappyPaws PH');
                    $mail->addAddress('aisat.aringo221155@gmail.com');
                    $mail->Subject = 'Your order has been delivered';
                    $mail->Body    = 'You parcel has been delivered by our logistics partner <br> 
                            Order ID: <b>' . $order_info['order_id'] . ' </b> <br>' .
                            'Product Name: <b>' . $product['name'] . '</b> <br>' .
                            'Quantity: <b>' . $product['quantity'] . '</b> <br>';
                }
                
                $mail->send();
                $this->log->write("Email was sent");
            } catch (Exception $e) {
                $this->log->write("Email could not be sent. Mailer Error: {$mail->ErrorInfo}");
            }
        }
       
    }
}
