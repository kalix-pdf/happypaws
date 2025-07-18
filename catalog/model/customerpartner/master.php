<?php
class ModelCustomerpartnerMaster extends Model {


	public function getPartnerIdBasedonProduct($productid){

		$product_status = 1;

        if (($this->config->get('marketplace_status') && isset($this->request->get['user_token']) && isset($this->session->data['user_token']) && isset($this->session->data['user_id']) && $this->request->get['user_token'] == $this->session->data['user_token']) || ($this->config->get('marketplace_status') && isset($this->request->get['product_user_token']) && isset($this->session->data['product_user_token']) && $this->request->get['product_user_token'] == $this->session->data['product_user_token'])){
            $product_status = $this->db->query("SELECT status FROM ".DB_PREFIX."product WHERE product_id = ". (int)$productid)->row['status'];
            if (!$product_status) {
                $this->db->query("UPDATE ".DB_PREFIX."product SET status = '1' WHERE product_id = " . (int)$productid);
            }
        }

		$query = $this->db->query("SELECT c2p.customer_id as id FROM " . DB_PREFIX . "customerpartner_to_product c2p LEFT JOIN ".DB_PREFIX."product p ON(c2p.product_id = p.product_id) LEFT JOIN ".DB_PREFIX."product_to_store p2s ON (p.product_id = p2s.product_id) WHERE c2p.product_id = '".(int)$productid."' AND p.status = 1 AND p2s.store_id = '".$this->config->get('config_store_id')."' ORDER BY c2p.id ASC ")->row;

		if (!$product_status) {
	        $this->db->query("UPDATE ".DB_PREFIX."product SET status = '0' WHERE product_id = " . (int)$productid);
	    }

		return $query;
	}

	public function getLatest($data = array()) {
		$sql = "SELECT p.product_id,pd.description,p.image,p.price,p.minimum,p.tax_class_id,pd.name,c2c.screenname,c2c.avatar,c2c.backgroundcolor,c.customer_id,CONCAT(c.firstname ,' ',c.lastname) seller_name,co.name country, (SELECT AVG(rating) AS total FROM " . DB_PREFIX . "review r1 WHERE r1.product_id = p.product_id AND r1.status = '1' GROUP BY r1.product_id) AS rating, (SELECT price FROM " . DB_PREFIX . "product_discount pd2 WHERE pd2.product_id = p.product_id AND pd2.customer_group_id = '" . (int)$this->config->get('config_customer_group_id') . "' AND pd2.quantity = '1' AND ((pd2.date_start = '0000-00-00' OR pd2.date_start < NOW()) AND (pd2.date_end = '0000-00-00' OR pd2.date_end > NOW())) ORDER BY pd2.priority ASC, pd2.price ASC LIMIT 1) AS discount, (SELECT price FROM " . DB_PREFIX . "product_special ps WHERE ps.product_id = p.product_id AND ps.customer_group_id = '" . (int)$this->config->get('config_customer_group_id') . "' AND ((ps.date_start = '0000-00-00' OR ps.date_start < NOW()) AND (ps.date_end = '0000-00-00' OR ps.date_end > NOW())) ORDER BY ps.priority ASC, ps.price ASC LIMIT 1) AS special FROM " . DB_PREFIX . "customerpartner_to_product c2p LEFT JOIN ".DB_PREFIX ."product p ON (c2p.product_id = p.product_id) LEFT JOIN ".DB_PREFIX ."product_description pd ON (pd.product_id = p.product_id) LEFT JOIN ".DB_PREFIX ."customerpartner_to_customer c2c ON (c2c.customer_id = c2p.customer_id) LEFT JOIN ".DB_PREFIX ."customer c ON (c2c.customer_id = c.customer_id) LEFT JOIN ".DB_PREFIX ."country co ON (c2c.country = co.iso_code_2) LEFT JOIN ".DB_PREFIX."product_to_store p2s ON (p.product_id = p2s.product_id) WHERE c2c.is_partner = '1' AND p.status = '1' AND p.date_available <= NOW() AND pd.language_id = '".(int)$this->config->get('config_language_id')."' AND p2s.store_id = '".$this->config->get('config_store_id')."'";

		if(isset($data['product_id'])) {
			$sql .= " AND p.product_id = ".(int)$data['product_id']."";
		}
		
		$sort_data = array(
			'pd.name',
			'p.model',
			'p.quantity',
			'p.price',
			'rating',
			'c2p.product_id',
			'p.date_added'
		);

		if (isset($data['sort']) && in_array($data['sort'], $sort_data)) {
			if ($data['sort'] == 'pd.name' || $data['sort'] == 'p.model') {
				$sql .= " ORDER BY LCASE(" . $data['sort'] . ")";
			} elseif ($data['sort'] == 'p.price') {
				$sql .= " ORDER BY (CASE WHEN special IS NOT NULL THEN special WHEN discount IS NOT NULL THEN discount ELSE p.price END)";
			} else {
				$sql .= " ORDER BY " . $data['sort'];
			}
		} else {
			$sql .= " ORDER BY c2p.product_id";
		}

		if (isset($data['order']) && ($data['order'] == 'DESC')) {
			$sql .= " DESC, LCASE(pd.name) DESC";
		} else {
			$sql .= " ASC, LCASE(pd.name) ASC";
		}

		if (isset($data['start']) || isset($data['limit'])) {
			if ($data['start'] < 0) {
				$data['start'] = 0;
			}

			if ($data['limit'] < 1) {
				$data['limit'] = 20;
			}

			if ((int)$this->config->get('marketplace_seller_product_list_limit') && ($data['limit'] > (int)$this->config->get('marketplace_seller_product_list_limit'))) {
				$data['limit'] = (int)$this->config->get('marketplace_seller_product_list_limit');
			}

			$sql .= " LIMIT " . (int)$data['start'] . "," . (int)$data['limit'];
		}

		$query = $this->db->query($sql);

		$products = array();
		foreach ($query->rows as $key => $value) {
			$products[$value['product_id']] = $value;
		}

		return $products;
	}

	public function getTotalLatest($data = array()) {
		$sql = "SELECT p.product_id,pd.description,p.image,p.price,p.tax_class_id,pd.name,c2c.avatar,c2c.backgroundcolor,c.customer_id,CONCAT(c.firstname ,' ',c.lastname) seller_name,co.name country, (SELECT AVG(rating) AS total FROM " . DB_PREFIX . "review r1 WHERE r1.product_id = p.product_id AND r1.status = '1' GROUP BY r1.product_id) AS rating, (SELECT price FROM " . DB_PREFIX . "product_discount pd2 WHERE pd2.product_id = p.product_id AND pd2.customer_group_id = '" . (int)$this->config->get('config_customer_group_id') . "' AND pd2.quantity = '1' AND ((pd2.date_start = '0000-00-00' OR pd2.date_start < NOW()) AND (pd2.date_end = '0000-00-00' OR pd2.date_end > NOW())) ORDER BY pd2.priority ASC, pd2.price ASC LIMIT 1) AS discount, (SELECT price FROM " . DB_PREFIX . "product_special ps WHERE ps.product_id = p.product_id AND ps.customer_group_id = '" . (int)$this->config->get('config_customer_group_id') . "' AND ((ps.date_start = '0000-00-00' OR ps.date_start < NOW()) AND (ps.date_end = '0000-00-00' OR ps.date_end > NOW())) ORDER BY ps.priority ASC, ps.price ASC LIMIT 1) AS special FROM " . DB_PREFIX . "customerpartner_to_product c2p LEFT JOIN ".DB_PREFIX ."product p ON (c2p.product_id = p.product_id) LEFT JOIN ".DB_PREFIX ."product_description pd ON (pd.product_id = p.product_id) LEFT JOIN ".DB_PREFIX ."customerpartner_to_customer c2c ON (c2c.customer_id = c2p.customer_id) LEFT JOIN ".DB_PREFIX ."customer c ON (c2c.customer_id = c.customer_id) LEFT JOIN ".DB_PREFIX ."country co ON (c2c.country = co.iso_code_2) LEFT JOIN ".DB_PREFIX."product_to_store p2s ON (p.product_id = p2s.product_id) WHERE c2c.is_partner = '1' AND p.status = '1' AND p.date_available <= NOW() AND pd.language_id = '".(int)$this->config->get('config_language_id')."' AND p2s.store_id = '".$this->config->get('config_store_id')."'";

		if ((int)$this->config->get('marketplace_seller_product_list_limit')) {
			$sql .= 'ORDER BY c2p.product_id DESC limit '.(int)$this->config->get('marketplace_seller_product_list_limit').'';
		}

		$query = $this->db->query($sql);

		$products = array();
		foreach ($query->rows as $key => $value) {
			$products[$value['product_id']] = $value;
		}

		return count($products);
	}
	
	/**
	 * checkIsSellerProduct
	 *
	 * @param  mixed $product_id
	 * @return bool|int
	 */
	public function checkIsSellerProduct($product_id) {
		try {
			$array = [];
			
			$sql = "SELECT p.product_id, c.customer_id, c.companyname, c.screenname as seller_name FROM ".DB_PREFIX."customerpartner_to_product p LEFT JOIN ".DB_PREFIX."customerpartner_to_customer c ON (c.customer_id = p.customer_id) WHERE c.is_partner = 1";

			if(isset($product_id)) {
				$sql .= " AND p.product_id = ".(int)$product_id."";
			}

			$query = $this->db->query($sql);
			
			if($query->num_rows > 0){

				if(!empty($query->row)) {
					$seller_url = $this->url->link('customerpartner/profile', 'seller_id=' . $query->row['customer_id'], true);
					$seller_name = isset($query->row['companyname']) && $query->row['companyname'] ? $query->row['companyname'] : $query->row['seller_name'];
				}

				$array[$query->row['product_id']] = [
					'seller_tag'   => 'Sold By: ',
					'seller_href'  => $seller_url ?? '',
					'seller_name'  => $seller_name ?? '',
				];

				return $array;
			}

			return false;
			
		} catch(Exception $e) {
			
			return false;
		}
	}

	public function getPartnerCollectionCount($customerid){
		return count($this->db->query("SELECT DISTINCT p.product_id FROM " . DB_PREFIX . "customerpartner_to_product c2p LEFT JOIN ".DB_PREFIX ."product p ON (c2p.product_id = p.product_id) LEFT JOIN ".DB_PREFIX."product_to_store p2s ON (p.product_id = p2s.product_id) WHERE c2p.customer_id='" . (int)$customerid."' AND p.status='1' AND p.date_available <= NOW() AND p2s.store_id = '".$this->config->get('config_store_id')."' ORDER BY c2p.product_id ")->rows);
	}

	public function getOldPartner(){

		$limit = (int)$this->config->get('marketplace_seller_list_limit') ? (int)$this->config->get('marketplace_seller_list_limit') : 4;

	    return $this->db->query("SELECT *,co.name as country,companylocality FROM " . DB_PREFIX . "customerpartner_to_customer c2c LEFT JOIN ".DB_PREFIX ."customer c ON (c2c.customer_id = c.customer_id) LEFT JOIN ".DB_PREFIX ."country co ON (c2c.country = co.iso_code_2) WHERE is_partner = 1 AND c.status = '1' ORDER BY c2c.customer_id ASC LIMIT ". $limit ."")->rows;
	}

	public function getProfile($customerid){
		$sql = "SELECT c2c.*, c.*,c.firstname,c.lastname,co.name as country, a.address_1, a.address_2, a.city, a.postcode, a.country_id, a.zone_id, a.custom_field FROM " . DB_PREFIX . "customerpartner_to_customer c2c LEFT JOIN ".DB_PREFIX ."customer c ON (c2c.customer_id = c.customer_id) LEFT JOIN ".DB_PREFIX ."address a ON (c.address_id = a.address_id) LEFT JOIN ".DB_PREFIX ."country co ON (c2c.country = co.iso_code_2) WHERE c2c.customer_id = '".(int)$customerid."' AND c2c.is_partner = '1' AND c.status = '1'";

		$query = $this->db->query($sql);
		return $query->row;
	}	


	public function getCategoryName($category_id)
	{
		$query = $this->db->query("SELECT name FROM " . DB_PREFIX . "category_description WHERE category_id = '" . (int)$category_id . "'");

		return $query->num_rows ? $query->row['name'] : null;
	}


	public function getFeedbackListTotal($customerid,$data = array()) {
		$sql = "SELECT c2f.* FROM " . DB_PREFIX . "customerpartner_to_feedback c2f LEFT JOIN ".DB_PREFIX ."customer c ON (c2f.customer_id = c.customer_id) LEFT JOIN ".DB_PREFIX ."customerpartner_to_customer cpc ON (cpc.customer_id = c.customer_id) where c2f.seller_id = '".(int)$customerid."' AND c2f.status = '0'";

		$query = $this->db->query($sql);
		return $query->num_rows;
	}

	public function getFeedbackList($customerid, $data = array()) {
		$sql = "SELECT c2f.* FROM " . DB_PREFIX . "customerpartner_to_feedback c2f LEFT JOIN ".DB_PREFIX ."customer c ON (c2f.customer_id = c.customer_id) LEFT JOIN ".DB_PREFIX ."customerpartner_to_customer cpc ON (cpc.customer_id = c.customer_id) where c2f.seller_id = '".(int)$customerid."' AND c2f.status = '0'";

		if (isset($data['sort']) && in_array($data['sort'], ['c2f.createdate','c2f.id'])) {
			$sql .= " ORDER BY " . $data['sort'];
		} else {
			$sql .= " ORDER BY c2f.createdate";
		}

		if (isset($data['order']) && ($data['order'] == 'ASC')) {
			$sql .= " ASC";
		} else {
			$sql .= " DESC";
		}

		if (isset($data['start']) || isset($data['limit'])) {
			if ($data['start'] < 0) {
				$data['start'] = 0;
			}

			if ($data['limit'] < 1) {
				$data['limit'] = 20;
			}

			if ((int)$this->config->get('marketplace_seller_product_list_limit') && ($data['limit'] > (int)$this->config->get('marketplace_seller_product_list_limit'))) {
				$data['limit'] = (int)$this->config->get('marketplace_seller_product_list_limit');
			}

			$sql .= " LIMIT " . (int)$data['start'] . "," . (int)$data['limit'];
		}

		$query = $this->db->query($sql);

		return $query->rows;
	}

	public function getTotalFeedback($customerid){
		$query = $this->db->query("SELECT id FROM " . DB_PREFIX . "customerpartner_to_feedback c2f where c2f.seller_id='".(int)$customerid."' AND c2f.status = '1'");
		return count($query->rows);
	}

	public function getAverageFeedback($customerid, $field_id = 0){

	  $sql = "SELECT cast(AVG(field_value) as decimal(10,1)) avg  FROM `" . DB_PREFIX . "wk_feedback_attribute_values` WHERE feedback_id IN (SELECT id FROM `".DB_PREFIX."customerpartner_to_feedback` WHERE seller_id='".(int)$customerid."' AND status = '0')";

	  if ($field_id) {
	    $sql .= " AND field_id = ".(int)$field_id;
	  }

	  $avg = $this->db->query($sql)->row;

	  if (isset($avg['avg'])) {
	    return $avg['avg'];
	  }

	  return 0;
	}

	public function getProductFeedbackListTotal($customerid,$data = array()) {
		$query = "SELECT r.*,pd.name,r.text FROM " . DB_PREFIX . "customerpartner_to_product c2p INNER JOIN ".DB_PREFIX ."review r ON (c2p.product_id = r.product_id) LEFT JOIN ".DB_PREFIX."product_description pd ON (pd.product_id = c2p.product_id) WHERE c2p.customer_id = '".(int)$customerid."' AND pd.language_id = '".(int)$this->config->get('config_language_id')."' AND r.status = 1 ";
		
		return $this->db->query($query)->num_rows;

	}
	public function getProductFeedbackList($customerid,$data = array()) {
		$query = "SELECT r.*,pd.name,r.text FROM " . DB_PREFIX . "customerpartner_to_product c2p INNER JOIN ".DB_PREFIX ."review r ON (c2p.product_id = r.product_id) LEFT JOIN ".DB_PREFIX."product_description pd ON (pd.product_id = c2p.product_id) WHERE c2p.customer_id = '".(int)$customerid."' AND pd.language_id = '".(int)$this->config->get('config_language_id')."' AND r.status = 1 ";
		
		if (isset($data['sort']) && in_array($data['sort'], ['r.date_added','r.review_id'])) {
			$query .= " ORDER BY " . $data['sort'];
		} else {
			$query .= " ORDER BY r.date_added";
		}

		if (isset($data['order']) && ($data['order'] == 'ASC')) {
			$query .= " ASC";
		} else {
			$query .= " DESC";
		}

		if (isset($data['start']) || isset($data['limit'])) {
			if ($data['start'] < 0) {
				$data['start'] = 0;
			}

			if ($data['limit'] < 1) {
				$data['limit'] = 20;
			}

			if ((int)$this->config->get('marketplace_seller_product_list_limit') && ($data['limit'] > (int)$this->config->get('marketplace_seller_product_list_limit'))) {
				$data['limit'] = (int)$this->config->get('marketplace_seller_product_list_limit');
			}

			$query .= " LIMIT " . (int)$data['start'] . "," . (int)$data['limit'];
		}

		$reviews = $this->db->query($query)->rows;

		$review_ids = array_column($reviews, 'review_id');
		
		if ($review_ids){
			$attachment_query = $this->db->query("
            SELECT review_id, filename
            FROM review_attachments
            WHERE review_id IN (" . implode(',', array_map('intval', $review_ids)) . ")");

			$attachments_by_review = [];
			foreach ($attachment_query->rows as $row) {
				$attachments_by_review[$row['review_id']][] = $row['filename'];
			}

			foreach ($reviews as &$review) {
				$review['filenames'] = $attachments_by_review[$review['review_id']] ?? [];
			}
		}

		return $reviews;
	}

	public function getTotalProductFeedbackList($customerid){
		$query = $this->db->query("SELECT r.* FROM " . DB_PREFIX . "customerpartner_to_product c2p INNER JOIN ".DB_PREFIX ."review r ON (c2p.product_id = r.product_id) WHERE c2p.customer_id = '".(int)$customerid."' AND r.status = 1 ");
		return count($query->rows);
	}


	public function saveFeedback($data,$seller_id){
		$author = isset($data['is_anonymous']) && $data['is_anonymous'] ? 'Anonymous' : $this->customer->getFirstName();
		$this->log->write($author);
		
		$feedback_id = 0;

		$result = $this->db->query("SELECT id FROM ".DB_PREFIX ."customerpartner_to_feedback WHERE customer_id = ".(int)$this->customer->getId()." AND seller_id = '".(int)$seller_id."'")->row;

		if(!$result){
			$this->db->query("INSERT INTO ".DB_PREFIX ."customerpartner_to_feedback SET customer_id = '".(int)$this->customer->getId()."',seller_id = '".(int)$seller_id."', nickname = '".$this->db->escape($author) ."',  review = '".$this->db->escape($data['text'])."', createdate = NOW(), status = '0'");
			$feedback_id = $this->db->getLastId();
		}else{
			$this->db->query("UPDATE ".DB_PREFIX ."customerpartner_to_feedback set nickname='".$this->db->escape($author)."', review='".$this->db->escape($data['text'])."',createdate = NOW(), status = '0' WHERE id = '".$result['id']."'");
			$feedback_id = $result['id'];
		}

		if ($feedback_id && isset($data['review_attributes']) && is_array($data['review_attributes']) && !empty($data['review_attributes'])) {
			foreach ($data['review_attributes'] as $key => $value) {
				if ($this->db->query("SELECT * FROM ".DB_PREFIX."wk_feedback_attribute WHERE field_id=".$key)->row) {
					$this->db->query("DELETE FROM " . DB_PREFIX . "wk_feedback_attribute_values WHERE feedback_id = '" . (int)$feedback_id . "' AND field_id=".$key);

					$this->db->query("INSERT INTO `" . DB_PREFIX . "wk_feedback_attribute_values` SET `feedback_id` = '" . (int)$this->db->escape($feedback_id) . "', `field_id` = '" . (int)$this->db->escape($key) . "',  field_value = '" . $this->db->escape($value) . "'");
				}
			}
		}
	}

	public function getShopData($shop){
		$sql = $this->db->query("SELECT * FROM " . DB_PREFIX . "customerpartner_to_customer where companyname = '" .$this->db->escape($shop)."'")->row;
		if($sql)
			return $sql;
		return false;
	}


	//uploaded documents here

	public function addShopData($customer_id, $file_paths, $SBSTYPE) {
		$bir_file = isset($file_paths['birfile']) ? $this->db->escape($file_paths['birfile']) : '';
		$dti_file = isset($file_paths['dtifile']) ? $this->db->escape($file_paths['dtifile']) : '';
		$mayor_file = isset($file_paths['mayorfile']) ? $this->db->escape($file_paths['mayorfile']) : '';
		$valid_id = isset($file_paths['validid']) ? $this->db->escape($file_paths['validid']) : '';

		$this->db->query("INSERT INTO customer_to_documents SET 
			customer_id = '" . (int)$customer_id . "', 
			uploadedFileBIR = '" . $bir_file . "',
			uploadedFileDTI = '" . $dti_file . "', 
			uploadedFileMayorPermit = '" . $mayor_file . "', 
			uploadedFileValidID = '" . $valid_id . "', 
			sbsType = '" . $SBSTYPE . "'");
	}


	public function getSubscriptionType($customer_id) 
	{
        $query = $this->db->query("SELECT sbsType FROM customer_to_documents WHERE customer_id = '" . (int)$customer_id . "'");

        if ($query->num_rows) {
            return (int)$query->row['sbsType'];
        } else {
            return 0; 
        }
    }

	public function addSubscription($sbstype, $product_id, $amount)
	{
		$date_added = date('Y-m-d H:i:s');
		
		$this->db->query("INSERT INTO `product_subscription` SET `subs_type` = '" . (int)$sbstype . "', 
			`product_id` = '" . (int)$product_id . "', `duration` = '". (int)$amount . "', `date_added` = '" . $this->db->escape($date_added) . "'");
	}

    /**
     * [getAllAverageFeedback uses to fetch average feedprice, feedvalue, feedquality of the seller]
     * @return [type] [array]
     */
		 public function getAllAverageFeedback($seller_id,$field_id = 0){
	 			$avg = $this->db->query("SELECT round(AVG(field_value)) avg  FROM `" . DB_PREFIX . "wk_feedback_attribute_values` WHERE field_id	= ". (int)$field_id ." AND feedback_id IN (SELECT id FROM `".DB_PREFIX."customerpartner_to_feedback` WHERE seller_id='".(int)$seller_id."' AND status = '1')")->row;

	 		 if (isset($avg['avg'])) {
	 			 return $avg['avg'];
	 		 }

	 		 return 0;
	 	}

	public function getReviewField($reviewfield_id) {

	  $query = $this->db->query("SELECT * FROM " . DB_PREFIX . "wk_feedback_attribute WHERE field_id = '" . (int)$reviewfield_id . "'");

	  return $query->row;
	}

	public function getReviewFieldByName($reviewfield_name) {

	  $query = $this->db->query("SELECT * FROM " . DB_PREFIX . "wk_feedback_attribute WHERE field_name = '" . $this->db->escape($reviewfield_name) . "'");

	  return $query->row;
	}

	public function getAllReviewFields() {
	  $sql = "SELECT * FROM " . DB_PREFIX . "wk_feedback_attribute WHERE field_status = 1";

	  $query = $this->db->query($sql);

	  return $query->rows;
	}

	public function getReviewAttributeValue($feedback_id = 0, $field_id = 0) {
	  $query = $this->db->query("SELECT * FROM " . DB_PREFIX . "wk_feedback_attribute_values WHERE feedback_id = '" . (int)$feedback_id . "' AND field_id = ".(int)$field_id);

	  return $query->row;
	}

	public function getSellers($data = array()){

		$sql = "SELECT *,co.name as country,companylocality  FROM " . DB_PREFIX ."customerpartner_to_customer c2c LEFT JOIN `".DB_PREFIX ."customer` c ON (c2c.customer_id = c.customer_id) LEFT JOIN ".DB_PREFIX ."country co ON (c2c.country = co.iso_code_2) WHERE c2c.is_partner = '1'";

		if (!empty($data['filter_name'])) {
			$sql .= " AND ((c.firstname LIKE '%" . $this->db->escape($data['filter_name']) . "%') OR (c.lastname LIKE '%" . $this->db->escape($data['filter_name']) . "%') OR CONCAT(c.firstname,' ',c.lastname) like '%" . $this->db->escape($data['filter_name']) . "%') ";
		}

		if (!empty($data['customer_ids'])) {
			$sql .= " AND c2c.customer_id IN (".implode(',',$data['customer_ids']).")";
		}

		$sort_data = array(
			'c.customer_id'
		);

		if (isset($data['sort']) && in_array($data['sort'], $sort_data)) {
			$sql .= " ORDER BY " . $data['sort'];
		} else {
			$sql .= " ORDER BY c.customer_id";
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
?>
