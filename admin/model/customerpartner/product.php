<?php
class ModelCustomerpartnerProduct extends Model {

	public function getProduct($product_id) {
		if($product_id) {
			$product = $this->db->query("SELECT *,pd.name as product_name,ss.name as stock_status_name FROM ".DB_PREFIX."product p LEFT JOIN ".DB_PREFIX."product_description pd ON (p.product_id=pd.product_id) LEFT JOIN ".DB_PREFIX."stock_status ss ON (p.stock_status_id=ss.stock_status_id) WHERE p.product_id = '".(int)$product_id."' ")->row;
			if($product) {
				return $product;
			} else {
				return false;
			}
		}
	}

	private $data = array();

	//to clear products which are not in product table (currently code adding using xml file so used return)
	public function clearProductGarbage(){
		return;
		$removed_products = $this->db->query("SELECT DISTINCT product_id FROM ".DB_PREFIX."customerpartner_to_product WHERE product_id NOT IN (SELECT DISTINCT c2p.product_id FROM ".DB_PREFIX."customerpartner_to_product c2p INNER JOIN ".DB_PREFIX."product p ON (c2p.product_id=p.product_id))")->rows;

		foreach($removed_products as $product){
			$this->deleteProduct($product['product_id']);
		}
	}


	public function addSubscription($product_id) {
		$date_approved = date('Y-m-d H:i:s');
		
		$query = $this->db->query("SELECT * FROM product_subscription WHERE product_id = '" . (int)$product_id . "'");
		$subscription = $query->row;

		if ($subscription['subs_type'] == 1 || $subscription['subs_type'] == 2)
		{
			$amount = $subscription['duration'];
			$date_expired = date('Y-m-d H:i:s', strtotime($date_approved . ' + ' . (int)$amount . ' days'));

			$this->db->query("UPDATE product_subscription SET date_approved = '" . $this->db->escape($date_approved) ."',
				date_expired = '" . $this->db->escape($date_expired) . "' WHERE product_id = '" . (int)$product_id . "'");
		
		} else {
			$this->db->query("UPDATE product_subscription SET date_approved = '" . $this->db->escape($date_approved) ."' WHERE product_id = '" . (int)$product_id . "'");
		}
			
	}

	public function getSubscription($product_id){
		$query = $this->db->query("SELECT * FROM `product_subscription` WHERE `product_id` = '" . (int)$product_id ."'");

		return $query->rows;
	}

	public function getSubscriptionBySellerId($seller_id){
		$query = $this->db->query("SELECT * FROM `product_subscription` WHERE `seller_id` = '" . (int)$seller_id ."'");

		return $query->rows;
	}

	public function addProduct($data) {

	  $this->db->query("UPDATE " . DB_PREFIX . "product SET status = 1 WHERE product_id = '".(int)$data['product_id']."'");

	  $mail_id = $this->config->get('marketplace_mail_product_approve');

	  //get product details
	  $this->load->model('catalog/product');
	  $data = $this->model_catalog_product->getProduct($data['product_id']);

	  //add seller id with product data
	  $data['customer_id'] = $this->getSellerbasedonProduct($data['product_id']);

	  if(!$data['customer_id'])
	    return;

	    $this->load->model('customerpartner/notification');

	    $activity_data = array(
	      'id' 					=> $data['product_id'],
	      'product_id' 	=> $data['product_id'],
	      'seller_id' => $data['customer_id'],
	      'product_name' => $data['name'],
	    );

	    $this->model_customerpartner_notification->addActivity('product_approve',$activity_data);
	    if(!$this->config->get('marketplace_mail_product_approve'))
	      return;
	  	$this->load->model('customerpartner/mail');

			$this->load->model('customerpartner/partner');

			$seller_info = $this->model_customerpartner_partner->getPartnerCustomerInfo($data['customer_id']);

			$data['mail_id'] = $this->config->get('marketplace_mail_product_approve');

			$data['mail_from'] = $this->config->get('marketplace_adminmail');

			$data['mail_to'] = $seller_info['email'];

			$value_index = array(
      	'commission' => $seller_info['commission'],
      	'product_name' => $data['name'],
      );

			$this->model_customerpartner_mail->mail($data,$value_index);

	}

	public function deleteProduct($product_id) {
		// Set product status to -1 (rejected)
		$this->db->query("UPDATE " . DB_PREFIX . "product SET status = -1 WHERE product_id = '" . (int)$product_id . "'");
		
		$this->db->query("DELETE FROM " . DB_PREFIX . "mp_customer_activity WHERE id = '" . (int)$product_id . "' AND `key` = 'product_stock'");
	}

	public function rejectProduct($product_id, $reason = '') {
		// Set product status to -1 (rejected)
		$this->db->query("UPDATE " . DB_PREFIX . "product SET status = -1 WHERE product_id = '" . (int)$product_id . "'");
		
		// Get product details for notification
		$this->load->model('catalog/product');
		$data = $this->model_catalog_product->getProduct($product_id);
		
		// Add seller id with product data
		$data['customer_id'] = $this->getSellerbasedonProduct($product_id);
		
		if ($data['customer_id']) {
			$this->load->model('customerpartner/notification');
			
			$activity_data = array(
				'id' => $product_id,
				'product_id' => $product_id,
				'seller_id' => $data['customer_id'],
				'product_name' => $data['name'],
				'reason' => $reason
			);
			
			$this->model_customerpartner_notification->addActivity('product_reject', $activity_data);
			
			// Send rejection email if configured
			if ($this->config->get('marketplace_mail_product_reject')) {
				$this->load->model('customerpartner/mail');
				$this->load->model('customerpartner/partner');
				
				$seller_info = $this->model_customerpartner_partner->getPartnerCustomerInfo($data['customer_id']);
				
				$mail_data = array(
					'mail_id' => $this->config->get('marketplace_mail_product_reject'),
					'mail_from' => $this->config->get('marketplace_adminmail'),
					'mail_to' => $seller_info['email']
				);
				
				$value_index = array(
					'product_name' => $data['name'],
					'rejection_reason' => $reason
				);
				
				$this->model_customerpartner_mail->mail($mail_data, $value_index);
			}
		}
	}

	public function getProducts($data = array()) {

		$this->clearProductGarbage();

		if ($data) {
			//for product autocomplete at time of allocated to seller
			if(isset($data['filter_for_seller']) AND $data['filter_for_seller'])
				$sql = "SELECT DISTINCT p.product_id,p.*,pd.name,c2p.customer_id  FROM " . DB_PREFIX . "product p LEFT JOIN " . DB_PREFIX . "product_description pd ON (p.product_id = pd.product_id) LEFT JOIN ".DB_PREFIX."customerpartner_to_product c2p ON (c2p.product_id = p.product_id) ";
			else // work as default to return product
				$sql = "SELECT DISTINCT p.product_id,p.*,pd.name,c.firstname,c.lastname,c.customer_id FROM " . DB_PREFIX . "customerpartner_to_product c2p LEFT JOIN ".DB_PREFIX."product p ON (p.product_id = c2p.product_id) LEFT JOIN " . DB_PREFIX . "product_description pd ON (p.product_id = pd.product_id) LEFT JOIN ".DB_PREFIX."customer c ON (c2p.customer_id = c.customer_id) ";
			$sql .= "WHERE pd.language_id = '" . (int)$this->config->get('config_language_id') . "'  ";

			if (!empty($data['filter_name'])) {
				$sql .= " AND LCASE(pd.name) LIKE '" . $this->db->escape(utf8_strtolower($data['filter_name'])) . "%'";
			}

			if (!empty($data['filter_seller'])) {
				$sql .= " AND LCASE(CONCAT(c.firstname,' ',c.lastname)) LIKE '%" . $this->db->escape(utf8_strtolower($data['filter_seller'])) . "%'";
			}

			if (!empty($data['filter_model'])) {
				$sql .= " AND LCASE(p.model) LIKE '" . $this->db->escape(utf8_strtolower($data['filter_model'])) . "%'";
			}

			if (!empty($data['filter_price'])) {
				$sql .= " AND p.price LIKE '" . $this->db->escape($data['filter_price']) . "%'";
			}

			if (isset($data['filter_quantity']) && !is_null($data['filter_quantity'])) {
				$sql .= " AND p.quantity = '" . $this->db->escape($data['filter_quantity']) . "'";
			}


			if (isset($data['filter_status']) && !is_null($data['filter_status'])) {
				if ($data['filter_status'] == -1) {
					// Show only rejected products
					$sql .= " AND p.status = -1";
				} else {
					// Exclude rejected products from normal listings unless specifically requested
					$sql .= " AND p.status = '" . (int)$data['filter_status'] . "'";
				}
			} else {
				// By default, exclude rejected products from listings
				$sql .= " AND p.status != -1";
			}

			$sql .= " GROUP BY p.product_id";

			$sort_data = array(
				'pd.name',
				'p.model',
				'p.price',
				'p.quantity',
				'p.product_id',
				'p.sort_order'
			);

			if (isset($data['sort']) && in_array($data['sort'], $sort_data)) {
				$sql .= " ORDER BY " . $data['sort'];
			} else {
				$sql .= " ORDER BY pd.name";
			}

			if (isset($data['order']) && ($data['order'] == 'DESC')) {
				$sql .= " DESC";
			} else {
				$sql .= " ASC";
			}

			if (isset($data['start']) || isset($data['limit'])) {
				if ($data['start'] < 0) {
					$data['start'] = 0;
				}

				if ($data['limit'] < 1) {
					$data['limit'] = 20;
				}

				$sql .= " LIMIT " . (int)$data['start'] . "," . (int)$data['limit'];
			}


			$query = $this->db->query($sql);

			return $query->rows;
		}
	}


	public function getTotalProducts($data = array()) {

		$sql = "SELECT p.*,pd.name,c.firstname,c.lastname,c.customer_id FROM " . DB_PREFIX . "product p LEFT JOIN " . DB_PREFIX . "product_description pd ON (p.product_id = pd.product_id) RIGHT JOIN ".DB_PREFIX."customerpartner_to_product c2p ON (p.product_id = c2p.product_id) LEFT JOIN ".DB_PREFIX."customer c ON (c2p.customer_id = c.customer_id) ";

		$sql .= "WHERE 1 ";

		if (!empty($data['filter_name'])) {
			$sql .= " AND LCASE(pd.name) LIKE '" . $this->db->escape(utf8_strtolower($data['filter_name'])) . "%'";
		}

		if (!empty($data['filter_seller'])) {
			$sql .= " AND LCASE(CONCAT(c.firstname,' ',c.lastname)) LIKE '%" . $this->db->escape(utf8_strtolower($data['filter_seller'])) . "%'";
		}

		if (!empty($data['filter_model'])) {
			$sql .= " AND LCASE(p.model) LIKE '" . $this->db->escape(utf8_strtolower($data['filter_model'])) . "%'";
		}

		if (!empty($data['filter_price'])) {
			$sql .= " AND p.price LIKE '" . $this->db->escape($data['filter_price']) . "%'";
		}

		if (isset($data['filter_quantity']) && !is_null($data['filter_quantity'])) {
			$sql .= " AND p.quantity = '" . $this->db->escape($data['filter_quantity']) . "'";
		}

		if (isset($data['filter_status']) && !is_null($data['filter_status'])) {
			$sql .= " AND p.status = '" . (int)$data['filter_status'] . "'";
		}

		$sql .= " GROUP BY p.product_id";

		$query = $this->db->query($sql);

		return count($query->rows);
	}

	public function getDownload($download_id) {
		$query = $this->db->query("SELECT CONCAT(c.firstname,' ',c.lastname) name FROM " . DB_PREFIX . "customerpartner_download cd LEFT JOIN " . DB_PREFIX . "customer c ON (cd.seller_id = c.customer_id) WHERE cd.download_id = '" . (int)$download_id . "'")->row;
		if(isset($query['name']))
			return $query['name'];
		else
			return false;
	}

	public function getSellerbasedonProduct($product_id) {
		$result = $this->db->query("SELECT customer_id FROM ".DB_PREFIX."customerpartner_to_product WHERE product_id = '".(int)$product_id."' ORDER BY id ASC LIMIT 1")->row;
		if($result)
			return $result['customer_id'];
		else
			return false;
	}

}
?>
