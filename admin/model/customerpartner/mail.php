<?php
class ModelCustomerpartnerMail extends Model {

	private $data;

	public function getMailData($id){
		$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "customerpartner_mail WHERE id='".(int)$id."'");

		return $query->row;
	}

	public function deleteentry($id){
		$this->db->query("DELETE FROM " . DB_PREFIX . "customerpartner_mail WHERE id='".(int)$id."'");
	}

	public function gettotal(){

		$sql ="SELECT * FROM " . DB_PREFIX . "customerpartner_mail WHERE 1 ";

		$result = $this->db->query($sql);

		return $result->rows;
	}

	public function viewtotal($data){

		$sql ="SELECT * FROM " . DB_PREFIX . "customerpartner_mail WHERE 1 ";

		if (!empty($data['filter_id'])) {
			$sql .= " AND id = '" . (float)$this->db->escape($data['filter_id']) . "'";
		}

		if (!empty($data['filter_name'])) {
			$sql .= " AND LCASE(name) LIKE '%" . $this->db->escape(utf8_strtolower($data['filter_name'])) . "%'";
		}

		if (!empty($data['filter_subject'])) {
			$sql .= " AND LCASE(subject) LIKE '%" . $this->db->escape(utf8_strtolower($data['filter_subject'])) . "%'";
		}

		if (!empty($data['filter_message'])) {
			$sql .= " AND LCASE(message) LIKE '%" . $this->db->escape(utf8_strtolower($data['filter_message'])) . "%'";
		}

		$sort_data = array(
			'id',
			'name',
			'subject',
			'message',
		);

		if (isset($data['sort']) && in_array($data['sort'], $sort_data)) {
			$sql .= " ORDER BY " . $data['sort'];
		} else {
			$sql .= " ORDER BY id";
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

		$result=$this->db->query($sql);

		return $result->rows;
	}

	public function viewtotalentry($data){

		$sql ="SELECT * FROM " . DB_PREFIX . "customerpartner_mail WHERE 1 ";

		if (!empty($data['filter_id'])) {
			$sql .= " AND id = '" . (float)$this->db->escape($data['filter_id']) . "'";
		}

		if (!empty($data['filter_name'])) {
			$sql .= " AND LCASE(name) LIKE '%" . $this->db->escape(utf8_strtolower($data['filter_name'])) . "%'";
		}

		if (!empty($data['filter_subject'])) {
			$sql .= " AND LCASE(subject) LIKE '%" . $this->db->escape(utf8_strtolower($data['filter_subject'])) . "%'";
		}

		if (!empty($data['filter_message'])) {
			$sql .= " AND LCASE(message) LIKE '%" . $this->db->escape(utf8_strtolower($data['filter_message'])) . "%'";
		}

		$result = $this->db->query($sql);

		return count($result->rows);
	}

	public function addMail($data) {
		$html = preg_replace("/script.*?\/script/ius", " ", $data['message']) ? : $data['message'];

		if($data['mail_id'])
			$this->db->query("UPDATE " . DB_PREFIX . "customerpartner_mail SET name = '" . $this->db->escape($data['name']) . "', message = '" . $this->db->escape($html) . "', subject = '" . $this->db->escape($data['subject']). "' WHERE id='".(int)$data['mail_id']."'");
		else
			$this->db->query("INSERT INTO " . DB_PREFIX . "customerpartner_mail SET name = '" . $this->db->escape($data['name']) . "', message = '" . $this->db->escape($html) . "', subject = '" . $this->db->escape($data['subject']) . "'");

	}

	public function getSeller($id){
		return $this->db->query("SELECT * FROM " . DB_PREFIX . "customer c LEFT JOIN " . DB_PREFIX . "customerpartner_to_customer c2c ON (c.customer_id = c2c.customer_id) WHERE c.customer_id = '".(int)$id."'")->row;
	}

	public function mail($data, $value_index = array()){

		$mail_id = $data['mail_id'];
		$mail_from = $data['mail_from'];
		$mail_to = $data['mail_to'];

		if(isset($data['seller_id']) AND $data['seller_id']){
			$seller_info = $this->getSeller($data['seller_id']);
		} else {
			$seller_info['firstname'] = '';
			$seller_info['lastname'] = '';
		}

		$this->load->model('customerpartner/partner');

		$mail_details = $this->getMailData($mail_id);

		if($mail_details){

			$this->data['store_name'] = $this->config->get('config_name');
			$this->data['store_url'] = HTTP_SERVER;
			$this->data['logo'] = HTTP_SERVER.'image/' . $this->config->get('config_logo');

			$find = array(
				'{order}',
				'{seller_message}',
				'{customer_message}',
				'{commission}',
				'{product_name}',
				'{transaction_message}',
				'{transaction_amount}',
				'{seller_name}',
				'{seller_id}',
				'{config_logo}',
				'{config_icon}',
				'{config_currency}',
				'{config_image}',
				'{config_name}',
				'{config_owner}',
				'{config_address}',
				'{config_geocode}',
				'{config_email}',
				'{config_telephone}',
				);

			$replace = array(
				'order' => '',
				'seller_message' => '',
				'customer_message' => '',
				'commission' => '',
				'product_name' => '',
				'transaction_message' => '',
				'transaction_amount' => '',
				'seller_name' => $seller_info['firstname'].' '.$seller_info['lastname'],
				'seller_id' => '',
				'config_logo' => '<a href="'.HTTP_SERVER.'" title="'.$this->data['store_name'].'"><img src="'.HTTP_SERVER.'image/' . $this->config->get('config_logo').'" alt="'.$this->data['store_name'].'" /></a>',
				'config_icon' => '<img src="'.HTTP_SERVER.'image/' . $this->config->get('config_icon').'">',
				'config_currency' => $this->config->get('config_currency'),
				'config_image' => '<img src="'.HTTP_SERVER.'image/' . $this->config->get('config_image').'">',
				'config_name' => $this->config->get('config_name'),
				'config_owner' => $this->config->get('config_owner'),
				'config_address' => $this->config->get('config_address'),
				'config_geocode' => $this->config->get('config_geocode'),
				'config_email' => $this->config->get('config_email'),
				'config_telephone' => $this->config->get('config_telephone'),
			);

			$replace = array_merge($replace,$value_index);

			$mail_details['message'] = trim(str_replace($find, $replace, $mail_details['message']));
			$mail_details['message'] = html_entity_decode($mail_details['message'],ENT_QUOTES,"UTF-8");
			$this->data['subject'] = $mail_details['subject'];
			$this->data['message'] = $mail_details['message'];

			$html = $this->load->view('customerpartner/mail', $this->data);

			if (preg_match('/^[^\@]+@.*\.[a-z]{2,6}$/i', $mail_to) AND preg_match('/^[^\@]+@.*\.[a-z]{2,6}$/i', $mail_from) ) {

				if(VERSION == '2.0.0.0' || VERSION == '2.0.1.0' || VERSION == '2.0.1.1'  ) {
					/*Old mail code*/
					$mail = new Mail($this->config->get('config_mail'));
					$mail->setTo($mail_to);
					$mail->setFrom($mail_from);
					$mail->setSender($this->data['store_name']);
					$mail->setSubject($mail_details['subject']);
					$mail->setHtml($html);
					$mail->setText(strip_tags($html));
					$mail->send();
				} else {
					$mail = new Mail($this->config->get('config_mail_engine'));
					$mail->parameter = $this->config->get('config_mail_parameter');
					$mail->smtp_hostname = $this->config->get('config_mail_smtp_hostname');
					$mail->smtp_username = $this->config->get('config_mail_smtp_username');
					$mail->smtp_password = html_entity_decode($this->config->get('config_mail_smtp_password'), ENT_QUOTES, 'UTF-8');
					$mail->smtp_port = $this->config->get('config_mail_smtp_port');
					$mail->smtp_timeout = $this->config->get('config_mail_smtp_timeout');

					$mail->setTo($mail_to);
					$mail->setFrom($mail_from);
					$mail->setSender(html_entity_decode($this->data['store_name'], ENT_QUOTES, 'UTF-8'));
					$mail->setSubject(html_entity_decode($mail_details['subject'], ENT_QUOTES, 'UTF-8'));
					$mail->setHtml($html);
					$mail->send();
				}
			}
		}
	}

	public function insertSampleTemplates() {
		$logo = HTTPS_CATALOG . 'image/catalog/opencart-logo.png';

		$sql = "INSERT INTO `" . DB_PREFIX . "customerpartner_mail` (`name`, `subject`, `message`) VALUES
		('Admin Approve/Disapprove Seller/Customer',	'Partnership Request has been Approved',	'&lt;p style=&quot;color: rgb(102, 102, 102);&quot;&gt;&lt;/p&gt;&lt;p style=&quot;color: rgb(102, 102, 102);&quot;&gt;&lt;img src=&quot;" . $logo . "&quot; style=&quot;width: 264px;&quot;&gt;&lt;br&gt;&lt;/p&gt;&lt;p style=&quot;font-size: 16px; color: rgb(32, 151, 197); border-bottom: 1px solid;&quot;&gt;Marketplace Message from {config_name}&lt;/p&gt;&lt;p&gt;&lt;br style=&quot;color: rgb(102, 102, 102);&quot;&gt;&lt;span style=&quot;color: rgb(102, 102, 102);&quot;&gt;Hi&amp;nbsp;&lt;/span&gt;&lt;span style=&quot;color: rgb(32, 151, 197); font-size: 14px;&quot;&gt;{seller_name}&lt;/span&gt;&lt;span style=&quot;color: rgb(102, 102, 102);&quot;&gt;,&lt;/span&gt;&lt;br style=&quot;color: rgb(102, 102, 102);&quot;&gt;&lt;br style=&quot;color: rgb(102, 102, 102);&quot;&gt;&lt;span style=&quot;color: rgb(102, 102, 102);&quot;&gt;Be ready to Add your Product at&lt;/span&gt;&lt;span style=&quot;color: rgb(32, 151, 197);&quot;&gt;&amp;nbsp;&lt;span style=&quot;font-weight: bold;&quot;&gt;{config_name}&lt;/span&gt;&lt;/span&gt;&lt;br style=&quot;color: rgb(102, 102, 102);&quot;&gt;&lt;span style=&quot;color: rgb(102, 102, 102);&quot;&gt;Our Commission will be &amp;nbsp;-&amp;nbsp;&lt;/span&gt;&lt;span style=&quot;color: rgb(32, 151, 197); font-weight: bold; font-style: italic;&quot;&gt;{commission}&lt;/span&gt;&lt;br style=&quot;color: rgb(102, 102, 102);&quot;&gt;&lt;br style=&quot;color: rgb(102, 102, 102);&quot;&gt;&lt;br style=&quot;color: rgb(102, 102, 102);&quot;&gt;&lt;span style=&quot;color: rgb(102, 102, 102);&quot;&gt;Thanks,&lt;/span&gt;&lt;br style=&quot;color: rgb(102, 102, 102);&quot;&gt;&lt;span style=&quot;color: rgb(32, 151, 197);&quot;&gt;{config_name}&lt;/span&gt;&lt;br&gt;&lt;/p&gt;'),
		('Customer Apply for SellerShip (To Customer)',	'Thanks For Applying for SellerShip',	'&lt;div style=&quot;color: rgb(102, 102, 102);&quot;&gt;&lt;p&gt;&lt;/p&gt;&lt;p&gt;&lt;img src=&quot;" . $logo . "&quot; style=&quot;width: 264px;&quot;&gt;&lt;br&gt;&lt;/p&gt;&lt;p style=&quot;font-size: 16px; color: rgb(32, 151, 197); border-bottom: 1px solid;&quot;&gt;Marketplace Message from {config_name}&lt;/p&gt;&lt;br&gt;Hi&amp;nbsp;&lt;span style=&quot;color: rgb(32, 151, 197); font-size: 14px;&quot;&gt;{seller_name}&lt;/span&gt;,&lt;br&gt;&lt;br&gt;Thanks for&amp;nbsp;&lt;span style=&quot;line-height: 20px;&quot;&gt;registering at&lt;/span&gt;&amp;nbsp;&lt;span style=&quot;color: rgb(32, 151, 197);&quot;&gt;&lt;span style=&quot;font-weight: bold;&quot;&gt;{config_name}.&amp;nbsp;&lt;/span&gt;&lt;/span&gt;Your Request for Sellership has been Approved successfully.&lt;/div&gt;&lt;div style=&quot;color: rgb(102, 102, 102);&quot;&gt;Our Commission will be &amp;nbsp;-&amp;nbsp;&lt;span style=&quot;color: rgb(32, 151, 197); font-weight: bold; font-style: italic;&quot;&gt;{commission} .&lt;/span&gt;&lt;/div&gt;&lt;div style=&quot;color: rgb(102, 102, 102);&quot;&gt;Be ready to Add your Product at&lt;span style=&quot;color: rgb(32, 151, 197);&quot;&gt;&amp;nbsp;&lt;span style=&quot;font-weight: bold;&quot;&gt;{config_name}&lt;/span&gt;&lt;/span&gt;&lt;br&gt;&lt;br&gt;Thanks,&lt;br&gt;&lt;span style=&quot;color: rgb(32, 151, 197);&quot;&gt;{config_name}&lt;/span&gt;&lt;/div&gt;'),
		('Customer Apply for SellerShip (To Admin)',	'Customer Apply for PartnerShip',	'&lt;p style=&quot;color: rgb(102, 102, 102);&quot;&gt;&lt;br&gt;&lt;/p&gt;&lt;p style=&quot;color: rgb(102, 102, 102);&quot;&gt;&lt;img src=&quot;" . $logo . "&quot; style=&quot;width: 264px;&quot;&gt;&lt;br&gt;&lt;/p&gt;&lt;p style=&quot;font-size: 16px; color: rgb(32, 151, 197); border-bottom: 1px solid;&quot;&gt;Marketplace Message from {config_name}&lt;/p&gt;&lt;p&gt;&lt;br style=&quot;color: rgb(102, 102, 102);&quot;&gt;&lt;span style=&quot;color: rgb(102, 102, 102);&quot;&gt;Hi&amp;nbsp;&lt;/span&gt;&lt;span style=&quot;color: rgb(32, 151, 197); font-size: 14px;&quot;&gt;{config_owner}&lt;/span&gt;&lt;span style=&quot;color: rgb(102, 102, 102);&quot;&gt;,&lt;/span&gt;&lt;br style=&quot;color: rgb(102, 102, 102);&quot;&gt;&lt;br style=&quot;color: rgb(102, 102, 102);&quot;&gt;&lt;span style=&quot;color: rgb(102, 102, 102);&quot;&gt;Customer Applied for PartnerShip and has been approved through Auto Approve seller -&amp;nbsp;&lt;/span&gt;&lt;span style=&quot;color: rgb(32, 151, 197);&quot;&gt;&amp;nbsp;&lt;span style=&quot;font-weight: bold;&quot;&gt;{seller_name}&lt;/span&gt;&lt;/span&gt;&lt;span style=&quot;font-weight: bold; color: rgb(32, 151, 197);&quot;&gt;&amp;nbsp;&lt;/span&gt;&lt;br style=&quot;color: rgb(102, 102, 102);&quot;&gt;&lt;span style=&quot;color: rgb(102, 102, 102);&quot;&gt;Our Commission will be &amp;nbsp;-&amp;nbsp;&lt;/span&gt;&lt;span style=&quot;color: rgb(32, 151, 197); font-weight: bold; font-style: italic;&quot;&gt;{commission}&lt;/span&gt;&lt;br style=&quot;color: rgb(102, 102, 102);&quot;&gt;&lt;br style=&quot;color: rgb(102, 102, 102);&quot;&gt;&lt;span style=&quot;color: rgb(102, 102, 102);&quot;&gt;Thanks,&lt;/span&gt;&lt;br style=&quot;color: rgb(102, 102, 102);&quot;&gt;&lt;span style=&quot;color: rgb(32, 151, 197);&quot;&gt;{config_name}&lt;/span&gt;&lt;br&gt;&lt;/p&gt;'),
		('Seller Added Product  (To Seller)',	'Thanks for Adding your Product',	'&lt;div style=&quot;color: rgb(102, 102, 102);&quot;&gt;&lt;p&gt;&lt;br&gt;&lt;/p&gt;&lt;p&gt;&lt;img src=&quot;" . $logo . "&quot; style=&quot;width: 264px;&quot;&gt;&lt;br&gt;&lt;/p&gt;&lt;p style=&quot;font-size: 16px; color: rgb(32, 151, 197); border-bottom: 1px solid;&quot;&gt;Marketplace Message from {config_name}&lt;/p&gt;&lt;br&gt;Hi {seller_name},&lt;br&gt;&lt;br&gt;Thanks for&amp;nbsp;&lt;span style=&quot;line-height: 20px;&quot;&gt;adding your product at&lt;/span&gt;&amp;nbsp;&lt;span style=&quot;color: rgb(32, 151, 197);&quot;&gt;&lt;span style=&quot;font-weight: bold;&quot;&gt;{config_name}.&amp;nbsp;&lt;/span&gt;&lt;/span&gt;Your product {product_name} has been Approved.&lt;/div&gt;&lt;div style=&quot;color: rgb(102, 102, 102);&quot;&gt;&lt;br&gt;Thanks,&lt;br&gt;&lt;span style=&quot;color: rgb(32, 151, 197);&quot;&gt;{config_name}&lt;/span&gt;&lt;/div&gt;'),
		('Approve Seller Product (manually)',	'Product Approved',	'&lt;div style=&quot;color: rgb(102, 102, 102);&quot;&gt;&lt;p&gt;&lt;/p&gt;&lt;p&gt;&lt;/p&gt;&lt;p&gt;&lt;img src=&quot;" . $logo . "&quot; style=&quot;width: 264px;&quot;&gt;&lt;br&gt;&lt;/p&gt;&lt;p style=&quot;font-size: 16px; color: rgb(32, 151, 197); border-bottom: 1px solid;&quot;&gt;Marketplace Message from {config_name}&lt;/p&gt;&lt;br&gt;Hi&amp;nbsp;&lt;span style=&quot;color: rgb(32, 151, 197); font-size: 14px;&quot;&gt;{seller_name}&lt;/span&gt;,&lt;br&gt;&lt;br&gt;Your Product has been passed our rules and regulations so we are approving your Product&amp;nbsp;&lt;span style=&quot;color: rgb(32, 151, 197); font-weight: bold;&quot;&gt;{product_name}&amp;nbsp;&lt;/span&gt;&amp;nbsp;please do maintain your store like this. Thanks for&amp;nbsp;&lt;span style=&quot;line-height: 20px;&quot;&gt;add&amp;nbsp;your product at&lt;/span&gt;&amp;nbsp;&lt;span style=&quot;color: rgb(32, 151, 197);&quot;&gt;&lt;span style=&quot;font-weight: bold;&quot;&gt;{config_name}.&amp;nbsp;&lt;/span&gt;&lt;/span&gt;&lt;/div&gt;&lt;div style=&quot;color: rgb(102, 102, 102);&quot;&gt;&lt;span style=&quot;color: rgb(32, 151, 197);&quot;&gt;&lt;span style=&quot;font-weight: bold;&quot;&gt;Enjoy !&lt;/span&gt;&lt;/span&gt;&lt;/div&gt;&lt;div style=&quot;color: rgb(102, 102, 102);&quot;&gt;&lt;br&gt;Thanks,&lt;br&gt;&lt;span style=&quot;color: rgb(32, 151, 197);&quot;&gt;{config_name}&lt;/span&gt;&lt;/div&gt;'),
		('Transaction mail to Seller',	'Transaction has been send to You',	'&lt;div style=&quot;color: rgb(102, 102, 102);&quot;&gt;&lt;p&gt;&lt;img src=&quot;" . $logo . "&quot; style=&quot;width: 264px;&quot;&gt;&lt;br&gt;&lt;/p&gt;&lt;p style=&quot;font-size: 16px; color: rgb(32, 151, 197); border-bottom: 1px solid;&quot;&gt;Marketplace Message from {config_name}&lt;/p&gt;&lt;br&gt;Hi&amp;nbsp;&lt;span style=&quot;color: rgb(32, 151, 197); font-size: 14px;&quot;&gt;{seller_name}&lt;/span&gt;,&lt;br&gt;&lt;/div&gt;&lt;div style=&quot;color: rgb(102, 102, 102);&quot;&gt;&lt;br&gt;&lt;/div&gt;&lt;div style=&quot;color: rgb(102, 102, 102);&quot;&gt;&amp;nbsp;&lt;span style=&quot;color: rgb(32, 151, 197);&quot;&gt;&lt;span style=&quot;font-weight: bold;&quot;&gt;{config_name}&amp;nbsp;&lt;/span&gt;&lt;/span&gt;successfully transferred &amp;nbsp;&lt;span style=&quot;color: rgb(32, 151, 197);&quot;&gt;&lt;span style=&quot;font-weight: bold;&quot;&gt;{transaction_amount}&amp;nbsp;&lt;/span&gt;&lt;/span&gt;&amp;nbsp;to your Account. Please check and if you didn\'t get then please contact us.&lt;/div&gt;&lt;div style=&quot;color: rgb(102, 102, 102);&quot;&gt;{transaction_message}&lt;/div&gt;&lt;div style=&quot;color: rgb(102, 102, 102);&quot;&gt;&lt;br&gt;&lt;/div&gt;&lt;div style=&quot;color: rgb(102, 102, 102);&quot;&gt;Thanks,&lt;br&gt;&lt;span style=&quot;color: rgb(32, 151, 197);&quot;&gt;{config_name}&lt;/span&gt;&lt;/div&gt;'),
		('Customer Contact Seller (to Seller)',	'Customer Contact You',	'&lt;div style=&quot;color: rgb(102, 102, 102);&quot;&gt;&lt;p&gt;&lt;br&gt;&lt;img src=&quot;" . $logo . "&quot; style=&quot;width: 264px;&quot;&gt;&lt;/p&gt;&lt;p style=&quot;font-size: 16px; color: rgb(32, 151, 197); border-bottom: 1px solid;&quot;&gt;Marketplace Message from {config_name}&lt;/p&gt;&lt;br&gt;Hi&amp;nbsp;&lt;span style=&quot;color: rgb(32, 151, 197); font-size: 14px;&quot;&gt;{seller_name}&lt;/span&gt;,&lt;br&gt;&lt;/div&gt;&lt;div style=&quot;color: rgb(102, 102, 102);&quot;&gt;&lt;br&gt;&lt;/div&gt;&lt;div style=&quot;color: rgb(102, 102, 102);&quot;&gt;Customer&amp;nbsp;&lt;span style=&quot;color: rgb(32, 151, 197); font-weight: bold;&quot;&gt;{customer_name}&lt;/span&gt;&amp;nbsp;contacted you from&amp;nbsp;&lt;span style=&quot;color: rgb(32, 151, 197); font-weight: bold;&quot;&gt;{config_name}&lt;/span&gt;.&lt;/div&gt;&lt;div style=&quot;color: rgb(102, 102, 102);&quot;&gt;Message -&amp;nbsp;&lt;span style=&quot;color: rgb(32, 151, 197); font-weight: bold;&quot;&gt;{message}&lt;/span&gt;&lt;/div&gt;&lt;div style=&quot;color: rgb(102, 102, 102);&quot;&gt;Reply ASAP.&lt;/div&gt;&lt;div style=&quot;color: rgb(102, 102, 102);&quot;&gt;&lt;br&gt;Thanks,&lt;br&gt;&lt;span style=&quot;color: rgb(32, 151, 197);&quot;&gt;{config_name}&lt;/span&gt;&lt;/div&gt;'),
		('Seller Contact Admin (to Admin)',	'Seller Contact You',	'&lt;div style=&quot;color: rgb(102, 102, 102);&quot;&gt;&lt;p&gt;&lt;img src=&quot;" . $logo . "&quot; style=&quot;width: 264px;&quot;&gt;&lt;br&gt;&lt;/p&gt;&lt;p style=&quot;font-size: 16px; color: rgb(32, 151, 197); border-bottom: 1px solid;&quot;&gt;Marketplace Message from {config_name}&lt;/p&gt;&lt;br&gt;Hi&amp;nbsp;&lt;span style=&quot;color: rgb(32, 151, 197); font-size: 14px;&quot;&gt;{config_owner}&lt;/span&gt;,&lt;br&gt;&lt;/div&gt;&lt;div style=&quot;color: rgb(102, 102, 102);&quot;&gt;&lt;br&gt;&lt;/div&gt;&lt;div style=&quot;color: rgb(102, 102, 102);&quot;&gt;Seller&amp;nbsp;&lt;span style=&quot;color: rgb(32, 151, 197); font-weight: bold;&quot;&gt;{seller_name}&lt;/span&gt;&amp;nbsp;contacted you from&amp;nbsp;&lt;span style=&quot;color: rgb(32, 151, 197); font-weight: bold;&quot;&gt;{config_name}&lt;/span&gt;.&lt;/div&gt;&lt;div style=&quot;color: rgb(102, 102, 102);&quot;&gt;Message -&amp;nbsp;&lt;span style=&quot;color: rgb(32, 151, 197); font-weight: bold;&quot;&gt;{message}&lt;/span&gt;&lt;/div&gt;&lt;div style=&quot;color: rgb(102, 102, 102);&quot;&gt;Reply ASAP.&lt;/div&gt;&lt;div style=&quot;color: rgb(102, 102, 102);&quot;&gt;&lt;br&gt;Thanks,&lt;br&gt;&lt;span style=&quot;color: rgb(32, 151, 197);&quot;&gt;{config_name}&lt;/span&gt;&lt;/div&gt;'),
		('Mail to Seller After Order ',	'Your Product has been sold',	'&lt;div style=&quot;color: rgb(102, 102, 102);&quot;&gt;&lt;p&gt;&lt;br&gt;&lt;img src=&quot;" . $logo . "&quot; style=&quot;width: 264px;&quot;&gt;&lt;/p&gt;&lt;p style=&quot;font-size: 16px; color: rgb(32, 151, 197); border-bottom: 1px solid;&quot;&gt;Marketplace Message from {config_name}&lt;/p&gt;&lt;br&gt;&lt;div&gt;Hi&amp;nbsp;&lt;span style=&quot;color: rgb(32, 151, 197); font-size: 14px;&quot;&gt;{seller_name}&lt;/span&gt;,&lt;br&gt;&lt;/div&gt;&lt;div&gt;&lt;br&gt;&lt;/div&gt;&lt;div&gt;Your Product(s) has been sold from&amp;nbsp;&lt;span style=&quot;color: rgb(32, 151, 197); font-weight: bold;&quot;&gt;{config_name}&lt;/span&gt;. Congratulations on that and be ready to deliver the product(s).&lt;/div&gt;&lt;div&gt;These are the order details of your product(s)&lt;/div&gt;&lt;div&gt;&lt;br&gt;&lt;/div&gt;&lt;div&gt;{order}&lt;/div&gt;&lt;div&gt;&lt;br&gt;Thanks,&lt;br&gt;&lt;span style=&quot;color: rgb(32, 151, 197);&quot;&gt;{config_name}&lt;/span&gt;&lt;/div&gt;&lt;/div&gt;'),
		('Mail To Admin After Product Add',	'Seller added product ',	'&lt;p style=&quot;color: rgb(102, 102, 102);&quot;&gt;&lt;/p&gt;&lt;p style=&quot;color: rgb(102, 102, 102);&quot;&gt;&lt;img src=&quot;" . $logo . "&quot; style=&quot;width: 264px;&quot;&gt;&lt;br&gt;&lt;/p&gt;&lt;p style=&quot;font-size: 16px; color: rgb(32, 151, 197); border-bottom: 1px solid;&quot;&gt;Marketplace Message from {config_name}&lt;/p&gt;&lt;p&gt;&lt;br style=&quot;color: rgb(102, 102, 102);&quot;&gt;&lt;span style=&quot;color: rgb(102, 102, 102);&quot;&gt;Hi&amp;nbsp;&lt;/span&gt;&lt;span style=&quot;color: rgb(32, 151, 197); font-size: 14px;&quot;&gt;{config_owner}&lt;/span&gt;&lt;span style=&quot;color: rgb(102, 102, 102);&quot;&gt;,&lt;/span&gt;&lt;br style=&quot;color: rgb(102, 102, 102);&quot;&gt;&lt;br style=&quot;color: rgb(102, 102, 102);&quot;&gt;&lt;span style=&quot;color: rgb(102, 102, 102);&quot;&gt;Seller -&amp;nbsp;&lt;/span&gt;&lt;span style=&quot;color: rgb(32, 151, 197);&quot;&gt;&lt;span style=&quot;font-weight: bold;&quot;&gt;{seller_name}&amp;nbsp;&lt;/span&gt;&lt;/span&gt;&lt;span style=&quot;color: rgb(102, 102, 102);&quot;&gt;has added product.&lt;/span&gt;&lt;span style=&quot;color: rgb(32, 151, 197);&quot;&gt;&lt;span style=&quot;font-weight: bold;&quot;&gt;&amp;nbsp;&lt;/span&gt;&lt;/span&gt;&lt;span style=&quot;color: rgb(102, 102, 102);&quot;&gt;Product name is &amp;nbsp;{product_name}. You can check.&lt;/span&gt;&lt;/p&gt;&lt;p&gt;&lt;br style=&quot;color: rgb(102, 102, 102);&quot;&gt;&lt;span style=&quot;color: rgb(102, 102, 102);&quot;&gt;Thanks,&lt;/span&gt;&lt;br style=&quot;color: rgb(102, 102, 102);&quot;&gt;&lt;span style=&quot;color: rgb(32, 151, 197);&quot;&gt;{config_name}&lt;/span&gt;&lt;/p&gt;'),
		('Edit Product Mail To Admin',	'Seller edited product',	'&lt;div style=&quot;color: rgb(102, 102, 102);&quot;&gt;&lt;p&gt;&lt;/p&gt;&lt;p&gt;&lt;img src=&quot;" . $logo . "&quot; style=&quot;width: 264px;&quot;&gt;&lt;br&gt;&lt;/p&gt;&lt;p style=&quot;font-size: 16px; color: rgb(32, 151, 197); border-bottom: 1px solid;&quot;&gt;Marketplace Message from {config_name}&lt;/p&gt;&lt;br&gt;Hi&amp;nbsp;&lt;span style=&quot;color: rgb(32, 151, 197); font-size: 14px;&quot;&gt;{config_owner}&lt;/span&gt;,&lt;/div&gt;&lt;div style=&quot;color: rgb(102, 102, 102);&quot;&gt;&lt;br&gt;Seller- {seller_name} has edited the product. {product_name} has been edited by the seller - {seller_name}.&lt;/div&gt;&lt;div style=&quot;color: rgb(102, 102, 102);&quot;&gt;&lt;br&gt;Thanks,&lt;br&gt;&lt;span style=&quot;color: rgb(32, 151, 197);&quot;&gt;{config_name}&lt;/span&gt;&lt;/div&gt;'),
		('Edit Product Mail To Seller ',	'You Edited your product ',	'&lt;div style=&quot;color: rgb(102, 102, 102);&quot;&gt;&lt;p&gt;&lt;/p&gt;&lt;p&gt;&lt;img src=&quot;" . $logo . "&quot; style=&quot;width: 264px;&quot;&gt;&lt;br&gt;&lt;/p&gt;&lt;p style=&quot;font-size: 16px; color: rgb(32, 151, 197); border-bottom: 1px solid;&quot;&gt;Marketplace Message from {config_name}&lt;/p&gt;&lt;br&gt;Hi {seller_name},&lt;br&gt;&lt;br&gt;You have edited your product {product_name}. Soon it will be approved by the&amp;nbsp;&lt;span style=&quot;color: rgb(32, 151, 197); font-size: 16px;&quot;&gt;{config_name}&lt;/span&gt;&lt;/div&gt;&lt;div style=&quot;color: rgb(102, 102, 102);&quot;&gt;&lt;br&gt;Thanks,&lt;br&gt;&lt;span style=&quot;color: rgb(32, 151, 197);&quot;&gt;{config_name}&lt;/span&gt;&lt;/div&gt;'),
		('Low Stock Mail To Seller',	'Low Stock mail',	'&lt;div style=&quot;color: rgb(102, 102, 102);&quot;&gt;&lt;p&gt;&lt;/p&gt;&lt;p&gt;&lt;img src=&quot;" . $logo . "&quot; style=&quot;width: 264px;&quot;&gt;&lt;br&gt;&lt;/p&gt;&lt;p style=&quot;font-size: 16px; color: rgb(32, 151, 197); border-bottom: 1px solid;&quot;&gt;Marketplace Message from {config_name}&lt;/p&gt;&lt;br&gt;Hi {seller_name},&lt;br&gt;&lt;br&gt;Your product {product_name} is at low stock. Kindly check for the same.&amp;nbsp;&lt;/div&gt;&lt;div style=&quot;color: rgb(102, 102, 102);&quot;&gt;&lt;br&gt;Thanks,&lt;br&gt;&lt;span style=&quot;color: rgb(32, 151, 197);&quot;&gt;{config_name}&lt;/span&gt;&lt;/div&gt;'),
		('Order status has been updated',	'Order status has been updated',	'&lt;div style=&quot;color: rgb(102, 102, 102);&quot;&gt;&lt;p&gt;&lt;br&gt;&lt;img src=&quot;" . $logo . "&quot; style=&quot;width: 264px;&quot;&gt;&lt;/p&gt;&lt;p style=&quot;font-size: 16px; color: rgb(32, 151, 197); border-bottom: 1px solid;&quot;&gt;Marketplace Message from {config_name}&lt;/p&gt;&lt;br&gt;Hi&amp;nbsp;&lt;span style=&quot;color: rgb(32, 151, 197); font-size: 14px;&quot;&gt;{config_owner}&lt;/span&gt;,&lt;br&gt;&lt;/div&gt;&lt;div style=&quot;color: rgb(102, 102, 102);&quot;&gt;&lt;br&gt;&lt;/div&gt;&lt;div style=&quot;color: rgb(102, 102, 102);&quot;&gt;Order status has been updated by the seller.&lt;/div&gt;&lt;div style=&quot;color: rgb(102, 102, 102);&quot;&gt;These are order details of your product(s)&lt;/div&gt;&lt;div style=&quot;color: rgb(102, 102, 102);&quot;&gt;&lt;br&gt;&lt;/div&gt;&lt;div style=&quot;color: rgb(102, 102, 102);&quot;&gt;{order}&lt;/div&gt;&lt;div style=&quot;color: rgb(102, 102, 102);&quot;&gt;&lt;br&gt;Thanks,&lt;br&gt;&lt;span style=&quot;color: rgb(32, 151, 197);&quot;&gt;{config_name}&lt;/span&gt;&lt;/div&gt;')";

		$this->db->query($sql);
	}

}
?>
