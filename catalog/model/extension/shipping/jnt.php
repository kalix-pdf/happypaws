<?php
class ModelExtensionShippingjnt extends Model {
	function getQuote($address) {
		$this->load->language('extension/shipping/jnt');

		$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "zone_to_geo_zone WHERE geo_zone_id = '" . (int)$this->config->get('shipping_jnt_geo_zone_id') . "' AND country_id = '" . (int)$address['country_id'] . "' AND (zone_id = '" . (int)$address['zone_id'] . "' OR zone_id = '0')");

		if (!$this->config->get('shipping_jnt_geo_zone_id')) {
			$status = true;
		} elseif ($query->num_rows) {
			$status = true;
		} else {
			$status = false;
		}

		$method_data = array();

		if ($status) {
			$weight = $this->cart->getWeight();
			$vip_code = $this->config->get('shipping_jnt_vip_code');
			$vip_key = $this->config->get('shipping_jnt_vip_pass');
			$receiverPostcode = $address['postcode'];
			$senderPostcode = $this->getPostcode($this->config->get('config_address'));
			
			if ($address['country'] == 'Malaysia') {
				$cost = $this->calculate($weight, $senderPostcode, $receiverPostcode, $vip_code, $vip_key);
			} else {
				$cost = 0;
			}

			$quote_data = array();
			
			$quote_data['jnt'] = array(
				'code'         => 'jnt.jnt',
				'title'        => $this->language->get('text_description'),
				'cost'         => $cost,
				'tax_class_id' => $this->config->get('shipping_jnt_tax_class_id'),
				'text'         => $this->currency->format($this->tax->calculate($cost, $this->config->get('shipping_jnt_tax_class_id'), $this->config->get('config_tax')), $this->session->data['currency'])
			);

			$method_data = array(
				'code'       => 'jnt',
				'title'      => $this->language->get('text_title'),
				'quote'      => $quote_data,
				'sort_order' => $this->config->get('shipping_jnt_sort_order'),
				'error'      => false
			);
		}

		return $method_data;
	}

	function getPostcode($addr)
	{
	    $postcode = "";
	    $split = str_split($addr);
	    $split = array_reverse($split);
	    foreach ($split as $i) {
	        if (is_numeric($i)) {
	            $postcode .= strval($i);
	        } else if (!is_numeric($i)) {
	            if (strlen($postcode) == 5) {
	                break;
	            } else {
	                $postcode = "";
	            }
	        }
	    }
	    return strrev($postcode);
	}

	function calculate($weight, $sender_zip, $receiver_zip, $cuscode, $pass) {

		$url = 'https://api.jtexpress.my/open/api/express/getQuotedPriceByCustomer';
		$key = '45089db471fece9c4c1e7c4753e506544f3b708534a81f1b07f64467fd310b28';

		$data = [
			'customerCode'	=> $cuscode,
			'password'		=> $pass,
			'expressType'  	=> 'EZ',
         	'goodsType' 	=> 'PARCEL',
         	'pcs' 			=> 1,
			'receiverPostcode' => $receiver_zip,
			'senderPostcode'   => $sender_zip,
			'weight'		=> $weight, 
		];

		$json_data = json_encode($data);
		$signature = hash("sha256",($json_data.$key));

		$header = array(
		    'Content-Type: application/json',
		    'account: OPENCART',
		    'sign:' . $signature.''
		);

		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_POST, TRUE);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $json_data);
		curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
		$res = curl_exec($ch);
		curl_close($ch);
		
		$res = json_decode($res, true);
		return $res['data']['shippingFee'] ?? 0; 

	}
}