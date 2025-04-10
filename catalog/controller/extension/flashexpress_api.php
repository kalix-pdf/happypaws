<?php

    define("merchantID", "CA0740");
    define("merchantPW", "4cf1406fb936ae1e680abf174509c454a3254eff5789df3505ce93683aaa3785");
    define("conUrl", "https://open-api-tra.flashexpress.ph/open/v3/orders");
    define("warehouses", "https://open-api-tra.flashexpress.ph/open/v1/warehouses");

    define("queryUrl", "https://open-api-tra.flashexpress.ph/open/v1/orders/{pno}/routes");

    define("cancelOrder", "https://open-api-tra.flashexpress.ph/open/v1/orders/{pno}/cancel");

use Symfony\Component\Validator\Constraints\Length;
class ControllerExtensionFlashExpressAPI extends Controller {
    
    function signParam($str)
	{
		return strtoupper(hash("sha256", $str));
	}
	
	/* build post param str */
	function buildRequestParam($data_arr)
	{
		$sign = '';
		ksort($data_arr);
	        foreach($data_arr as $k => $v)
			{
				if((($v != null) || $v === 0) && ($k != 'sign'))
				{
					$sign .= $k.'='.$v.'&';
				}else{
					unset($data_arr[$k]);
				}
        	}
		$sign .= "key=" . merchantPW;
        
		$data_arr['sign'] = $this->signParam($sign);

		$requestStr = '';
		foreach($data_arr as $k => $v)
		{
			$requestStr .= $k . "=" . urlencode($v) . '&';
		}
		return substr($requestStr, 0, -1);
	}
    function postRequest($url, $postData)
	{
		$curl = curl_init ();
		$header[] = "Content-type: application/x-www-form-urlencoded";
		$header[] = "Accept: application/json";
		$header[] = "Accept-Language: en";
		curl_setopt ( $curl, CURLOPT_URL, $url );
		curl_setopt ( $curl, CURLOPT_SSL_VERIFYPEER, false ); // SSL certificate
		curl_setopt ( $curl, CURLOPT_SSL_VERIFYHOST, false );
		curl_setopt ( $curl, CURLOPT_HEADER, 0 );
		curl_setopt ( $curl, CURLOPT_HTTPHEADER, $header );
		curl_setopt ( $curl, CURLOPT_RETURNTRANSFER, 1 );
		curl_setopt ( $curl, CURLOPT_POST, true ); // post
		curl_setopt ( $curl, CURLOPT_POSTFIELDS, $postData ); // post data
		curl_setopt ( $curl, CURLOPT_TIMEOUT, 10 );
		
		$responseText = curl_exec ( $curl );
		if (curl_errno ( $curl )) {
				echo 'Errno' . curl_error ( $curl );
		}
		curl_close ( $curl );
		return $responseText;
	}

	public function changetoRate($order_id)
    {
        $this->load->model('account/customerpartner');
        
        $this->model_account_customerpartner->changetoRate($order_id);

    }

    public function toRate()
    {
        if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
            http_response_code(405); 
            exit('Invalid request method');
        }
    
        if (!isset($this->request->post['order_ID'])) {
            http_response_code(400); 
            exit('Missing Order ID!');
        }

        $tracking = $this->request->post['order_ID'];
        $this->changetoRate($tracking);
    }
    

    //QUERY WAREHOUSE
    function Warehouse($data_arr)
	{
		$post_str = $this->buildRequestParam($data_arr);
		$responseStr = $this->postRequest(warehouses, $post_str);
		return json_decode($responseStr, true);
	}

    //CREATE ORDER
    function CreateOrder($data_arr)
	{
		$post_str = $this->buildRequestParam($data_arr);
        
		$responseStr = $this->postRequest(conUrl, $post_str);
        $responseArray = json_decode($responseStr, true); 
        print_r($responseArray);
        $pno = $responseArray['data']['pno'];
		return [$responseArray, $pno];
    }

    //Track ORDER
    function queryParcel($parcelNo)
	{
		$parcelNo = trim($parcelNo);
		$paramArr = array(
			"mchId" => merchantID,
			"nonceStr" => time(),
		);
		$post_str = $this->buildRequestParam($paramArr);
		$url = str_replace("{pno}", $parcelNo, queryUrl);
		$responseStr = $this->postRequest($url, $post_str);
		return json_decode($responseStr, true);
	}

    function cancelOrderParcel($parcelNo)
	{
		$parcelNo = trim($parcelNo);
		$paramArr = array(
			"mchId" => merchantID,
			"nonceStr" => time(),
		);
		$post_str = $this->buildRequestParam($paramArr);
		$url = str_replace("{pno}", $parcelNo, cancelOrder);
		$responseStr = $this->postRequest($url, $post_str);
		return json_decode($responseStr, true);
	}

    function changeToCancelOrder($parcel_number)
    {
        $this->load->model('account/customerpartner');
        $cancel_order = 7;

        $this->model_account_customerpartner->changetocancel($cancel_order, $parcel_number);

    }

    function changetoCancelFromPending($order_id)
    {
        $this->load->model('account/customerpartner');
        $cancel_order = 7;

        $this->model_account_customerpartner->changetocancelFromPendingStatus($order_id, $cancel_order);
    }

    public function cancelOrderFromPending()
    {
        if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
            http_response_code(405); 
            exit('Invalid request method');
        }
    
        if (!isset($this->request->post['order_ID'])) {
            http_response_code(400); 
            exit('Missing Order ID!');
        }

        $order_id = $this->request->post['order_ID'];
        $this->changetoCancelFromPending($order_id);
    }

    public function cancelOrder() {
        if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
            http_response_code(405); 
            exit('Invalid request method');
        }
    
        if (!isset($this->request->post['parcel_number'])) {
            http_response_code(400); 
            exit('Missing parcel number');
        }
    
        $parcel_number = $this->request->post['parcel_number'];
    
        $apiResponse = $this->cancelOrderParcel($parcel_number);
        print_r($apiResponse);

        if ($apiResponse['code'] === 1032)
        {
            $this->changeToCancelOrder($parcel_number);
        } else {
            http_response_code(500);
            exit('Failed to cancel order: ' . json_encode($apiResponse));
        }
        
    }
    
    
    public function acceptOrder($order_id, $parcelNumber) {
       // $json = array();
        $this->load->model('account/customerpartner');
        $accepted_order_id = 2;

        $this->model_account_customerpartner->addsellerorderproductstatus($order_id, $accepted_order_id, $parcelNumber);
        //$getWholeOrderStatus = $this->model_account_customerpartner->getOrderStatus($order_id);

        return $parcelNumber; 

    }

    public function index() {
        if (!isset($this->request->get['order_id'])) {
            echo "Order ID is missing!";
            return;
        }

        $this->load->model('catalog/product');
        $this->load->model('checkout/order');
        $this->load->model('localisation/zone');
        $this->load->model('account/customerpartner');
        $this->load->model('customerpartner/master');

        $order_id = (int) $this->request->get['order_id'];
        echo "Flash Express Order ID: " . $order_id;
        echo '<pre>';
        echo 'Flash Express order';
        echo '</pre>';

        //$this->acceptOrder($order_id);

        $order_info = $this->model_checkout_order->getOrder($order_id);
        $products = $this->model_checkout_order->getOrderProducts($order_id);
        //$default_weight = 100;
        $quantity_weight = 0;

        foreach ($products as $index => $product) 
        {
            $check_seller = $this->model_account_customerpartner->getProductSellerDetails($product['product_id']);
            $partner = $this->model_customerpartner_master->getProfile($check_seller['customer_id']);  
            
            $province = $this->model_localisation_zone->getZone($partner['zone_id']);

            $total_in_cents = (int) $order_info['total'] * 100;

            $category = $this->model_catalog_product->getCategories($product['product_id']);
            $product_dimension = $this->model_catalog_product->getProduct($product['product_id']);
            $weight = (int) $product_dimension['weight'];
            $length = (int) $product_dimension['length'];
            $width = (int) $product_dimension['width'];
            $height = (int) $product_dimension['height'];
            $categorynames = [];
            $total_weight = 0;
            $total_height = 0;
            $total_width = 0;
            $total_length = 0;
            
            //$weightData = $weight > 0 ? $weight : 100;

            foreach ($category as $categoryn) {
                $category_id = $categoryn['category_id'];
                $categorynames[] = $this->model_customerpartner_master->getCategoryName($category_id);
                
            }

            $product_data[] = [
                "itemName" => $product['name'],
                //"weight" => (int) $weight,
                "category" => $categorynames[1],
                "height" => $height,
                "width" => $width,
                "length" => $length,
            ];
            //$extracted_weight = array_column($product_data, 'weight');
            
            if ((int) $product['quantity'] > 1)
            {
                for ($i = 0; $i < (int) $product['quantity']; $i++)
                {
                    (int) $quantity_weight += $weight;
                    //magdagdag pa dito ng length, width at height kung kinakailangan!!        
                }
            } 
            else {
                (int) $quantity_weight += $weight; //1 prod = 20g; total_weight = 20g, 2prods = 40g
            } 
            
            echo '<pre>'; print_r($quantity_weight); echo '</pre>';

            // if (count($extracted_weight) > 1)
            // {
            //     foreach ($product_data as $ptotal_weight)
            //     {
            //         if ((int) $ptotal_weight['quantity'] > 1)
            //         {
            //             (int) $total_weight += $ptotal_weight['weight'];
            //         } else {
            //             (int) $total_weight += $ptotal_weight['weight'];
            //         }        
            //     }
            // }  
            // echo '<pre>'; print_r($extracted_weight); echo '</pre>'; 
            // echo '<pre>'; print_r($total_weight); echo '</pre>';
            // echo '<pre>'; print_r($product['quantity']); echo '</pre>';
        


            foreach ($product_data as $height_total)
            {
                (int) $total_height += $height_total['height'];
            }

            foreach ($product_data as $width_total)
            {
                (int) $total_width += $width_total['width'];
            }

            foreach ($product_data as $length_total)
            {
                (int) $total_length += $length_total['length'];
            }

            $product_names = array_column($product_data, 'itemName');
            $product_category = array_column($product_data, 'category');
            
            if (count($product_category) > 1)
            {
                $category_id_mapped = 99;
            
            } else{
                foreach ($product_category as $pcateg)
                {
                    if ($pcateg == 'Health' || $pcateg == 'Toys' || $pcateg == 'Essentials') {
                        $category_id_mapped = 99;
                    } elseif ($pcateg == 'Accessories') {   
                        $category_id_mapped = 4;
                    } elseif ($pcateg == 'Foods') {
                        $category_id_mapped = 1;
                    } else {
                        $category_id_mapped = 0; 
                    }
                }
            }

            $product_data_mapped = implode(", ", $product_names);
        
        }
        $total_weight += $quantity_weight;
        $order_data = array(      
            "mchId" => merchantID,          
            "nonceStr" => time(),
            "outTradeNo" => time(),
            "expressCategory" => 1,
            "srcName" => $partner['firstname'] . ' ' . $partner['lastname'],
            "srcPhone" => (int) $partner['telephone'],
            "srcProvinceName" => $province['name'],
            "srcCityName" => $partner['city'],
            "srcPostalCode" => (int) $partner['postcode'],
            "srcDetailAddress" => $partner['address_1'],

            "dstName" => $order_info['firstname'] . ' ' . $order_info['lastname'],
            "dstPhone" => (int) $order_info['telephone'],
            "dstProvinceName" => $order_info['shipping_zone'],
            "dstCityName" => $order_info['shipping_city'],
            "dstPostalCode" => (int) $order_info['shipping_postcode'],
            "dstDetailAddress" => $order_info['shipping_address_1'],
// ($total_weight == 0) ? $default_weight :
            "articleCategory" => $category_id_mapped,
            "weight" =>  $total_weight,
            "codEnabled" => ($order_info['payment_method'] == 'Cash On Delivery') ? 1 : 0,
            "codAmount" => $total_in_cents,
            "insured" => "0",
            "length" => $total_length,
            "height" => $total_height,
            "width" => $total_width,
            "itemName" => $product_data_mapped,
        );
        
        $warehouse_arr = array(
            "mchId" => merchantID,
            "nonceStr" => time()
        );

        //print_r($this->Warehouse( $warehouse_arr));
        list($apiResponse, $parcelNumber) = $this->CreateOrder($order_data);
        $jsonObj = $this->queryParcel($parcelNumber);

        print_r($this->acceptOrder($order_id, $parcelNumber));
        //print_r($apiResponse);

        echo '<pre>';
        var_dump($jsonObj);
        echo '</pre>';

        echo '<pre>';
        print_r($order_data);
        echo '</pre>';
        // $data['order_data'] = json_encode($order_data, JSON_PRETTY_PRINT); 
        // $this->response->setOutput($this->load->view('common/flashexpress_fetchdata', $data));
    }

}
 // foreach ($products as $product)
        // {
        //     $order_data['items'] = array(
        //         "COD Enabled" => ($order_info['payment_method'] == 'Cash On Delivery') ? 1 : 0,
        //         "Mode of Payment" => $order_info['payment_method'],
        //         "Product" => $product['name'],
        //         "Model" => $product['model'],
        //         "Quantity" => $product['quantity'],
        //         "Total in cents" => number_format($order_info['total'] * $peso_amount, 0, ',', ','),
        //         "Express category" => 1,
        
        //     );
        // }  
    
        //$category_list = implode(', ', $categorynames);
        
        // $order_data['seller'] = array(
        //     "Article Category" => $category_list,
        //     "Seller name" => $partner['firstname'] . ' ' . $partner['lastname'],
        //     "Seller Store" => $partner['companyname'],
        //     "Seller Phone" => $partner['telephone'],
        //     "Seller Province" => $province['name'],
        //     "Seller City"=> $partner['city'],
        //     "Seller Address" => $partner['address_1'],
        //     "postcode" => $partner['postcode'], 
        //     "Country" => $partner['country'],
        // );

?>