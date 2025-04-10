<?php
class ControllerApiRegister extends Controller {
    public function index() {
        $this->load->language('api/register');
        $json = array("success" => false);

        header("Access-Control-Allow-Origin: *"); 
        header("Access-Control-Allow-Headers: Content-Type, xocmerchantid");
        header("Access-Control-Allow-Methods: POST, GET, OPTIONS");

        // Set response content type
        $this->response->addHeader('Content-Type: application/json');

        // Get headers and validate API key
        $headers = apache_request_headers();
        $key = isset($headers['xocmerchantid']) ? $headers['xocmerchantid'] : (isset($headers['XOCMERCHANTID']) ? $headers['XOCMERCHANTID'] : '');

        if ($this->config->get('rest_api_key') && ($key != $this->config->get('rest_api_key'))) {
            $json["error"] = 'Invalid secret key';
            echo json_encode($json);
            exit;
        }

        // Process registration on POST request
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $data = $this->request->post;
            $data = json_decode(file_get_contents("php://input"), true);

            if (empty($data['firstname']) || empty($data['lastname']) || empty($data['email']) || empty($data['password']) || empty($data['telephone'])) {
                $json['error'] = 'Missing required fields.';
            } else {
                $this->load->model('account/customer');

                // Check if email is already registered
                if ($this->model_account_customer->getTotalCustomersByEmail($data['email']) > 0) {
                    $json['error'] = 'Email is already registered.';
                } else {
                    // Prepare customer data and create new customer
                    $customer_data = array(
                        'firstname' => $data['firstname'],
                        'lastname'  => $data['lastname'],
                        'email'     => $data['email'],
                        'telephone' => $data['telephone'],
                        'password'  => $data['password']
                    );

                    $customer_id = $this->model_account_customer->addCustomer($customer_data);

                    if ($customer_id) {
                        $json['success'] = true;
                        $json['message'] = 'Customer registered successfully.';
                        $json['customer_id'] = $customer_id;  // Add customer ID to the response
                    } else {
                        $json['error'] = 'Registration failed.';
                    }
                }
            }
        } else {
            $json['error'] = 'Invalid request method. Only POST is allowed.';
        }

        // Send JSON response
        $this->response->setOutput(json_encode($json));
    }
}
