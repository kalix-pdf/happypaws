<?php
class ControllerApiCategory extends Controller 
{
    public function index() 
    {
        $this->load->language('api/category');
        $json = array("success" => false);
        $json = array();

        // Set response content type
        $this->response->addHeader('Content-Type: application/json');

        // Get headers and validate API key
        $headers = apache_request_headers();
        
        header("Access-Control-Allow-Origin: *"); // Replace * with the specific origin if needed
        header("Access-Control-Allow-Headers: Content-Type, xocmerchantid");
        header("Access-Control-Allow-Methods: POST, GET, OPTIONS");

        $key = isset($headers['xocmerchantid']) ? $headers['xocmerchantid'] : (isset($headers['XOCMERCHANTID']) ? $headers['XOCMERCHANTID'] : '');

        if ($this->config->get('rest_api_key') && ($key != $this->config->get('rest_api_key'))) {
            $json["error"] = 'Invalid secret key';
            echo json_encode($json);
            exit;
        }

        
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            $data = $this->request->post;
            $data = json_decode(file_get_contents("php://input"), true);
    
        
            $this->load->model('catalog/category');
            $categories = $this->model_catalog_category->getCategories(0);

            $data = array();
            
            foreach ($categories as $category) 
            {
                $subcategories = $this->model_catalog_category->getCategories($category['category_id']);

                $data[] = array(
                    'category_id' => $category['category_id'],
                    'name'        => $category['name'],
                    'subcategories' => array_map(function($subcategory) {
                        return array(
                            'category_id' => $subcategory['category_id'],
                            'name' => $subcategory['name'],
                        );
                    }, $subcategories)
                );
            }
    
            $json['categories'] = $data;
            
            // Set JSON response
            $this->response->addHeader('Content-Type: application/json');
            $this->response->setOutput(json_encode($json));
        }
        else {
            $json['error'] = 'Invalid request method.';
        }
    }
}
