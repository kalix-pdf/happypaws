<?php
class ControllerApiWkrestapiMarketplace extends Controller {

	/**
	 * Get the customer data for contacting to seller
	 * @return json       return success
	 */

	public function contactToSeller() {

		$this->load->language('account/api');

		$post = $this->request->post;

		//Accepting data in json format / raw data

		$raw_data = json_decode(file_get_contents("php://input"),true);

		if ($raw_data) {
			foreach ($raw_data as $key => $value) {
					$post[$key] = $value;
			}
		}

		//Get wk_token from header
		if (isset(getallheaders()['wk_token'])) {
			$post['wk_token'] = getallheaders()['wk_token'];
		} elseif (isset(getallheaders()['Wk-Token'])) {
			$post['wk_token'] = getallheaders()['Wk-Token'];
		}

		if (!isset($post['wk_token']) || !$this->checkSession($post['wk_token'])) {
			$this->response->addHeader('Content-Type: application/json');
			$this->response->setOutput(json_encode(array('fault'=>1,'message'=>$this->language->get('text_token_message'))));
		} else {
			if(isset($post['seller_id']) && $post['seller_id'] && isset($post['message']) && $post['message'] && isset($post['subject']) && $post['subject']) {
				$this->load->model('account/customerpartner');
				$seller_email = $this->model_account_customerpartner->getsellerEmail($post['seller_id']);
				$commission = $this->model_account_customerpartner->getSellerCommission($post['seller_id']);

				$data = array(
					'seller_message' => $post['message'],
					'seller_id' => $post['seller_id'],
					'customer_id' => $this->customer->getId(),
					'mail_id' => $this->config->get('marketplace_mail_cutomer_to_seller'),
					'mail_from' => $this->customer->getEmail(),
					'mail_to' => $seller_email,
				);

				$values = array (
					'message' => $post['message'],
					'subject' => $post['subject'],
					'customer_name' => $this->customer->getFirstName().' '.$this->customer->getLastName(),
					'commission' => $commission,
				);
				$this->load->model('customerpartner/mail');
				$this->model_customerpartner_mail->mail($data,$values);

				if($this->config->get('marketplace_mailadmincustomercontactseller')) {
					$data['mail_to'] = $this->config->get('marketplace_adminmail');
					$this->model_customerpartner_mail->mail($data,$values);
				}
				$return_array['error'] = 0;
				$return_array['message'] = $this->language->get('text_mail_success');
			} else {
				$return_array['error'] = 1;
				$return_array['message'] = $this->language->get('text_verify');
			}

			$this->response->addHeader('Content-Type: application/json');
			$this->response->setOutput(json_encode($return_array));
		}
	}

	public function getSellers() {
		$this->load->language('account/api');

		$post = $this->request->post;

		//Accepting data in json format / raw data

		$raw_data = json_decode(file_get_contents("php://input"),true);

		if ($raw_data) {
			foreach ($raw_data as $key => $value) {
					$post[$key] = $value;
			}
		}

		//Get wk_token from header
		if (isset(getallheaders()['wk_token'])) {
			$post['wk_token'] = getallheaders()['wk_token'];
		} elseif (isset(getallheaders()['Wk-Token'])) {
			$post['wk_token'] = getallheaders()['Wk-Token'];
		}

		if (!isset($post['wk_token']) || !$this->checkSession($post['wk_token'])) {
			$this->response->addHeader('Content-Type: application/json');
			$this->response->setOutput(json_encode(array('fault'=>1,'message'=>$this->language->get('text_token_message'))));
		} else {
			if (!isset($post['page']) || !$post['page'])
			$post['page'] = 1;

			if (!isset($post['limit']) || !$post['limit'])
			$post['limit'] = 5;

			if (!isset($post['width']) || !$post['width'])
			$post['width'] = 100;

			$start = ($post['page']-1)*$post['limit'];

			$this->load->model('wkrestapi/catalog');
			$this->load->model('customerpartner/master');
			$this->load->model('tool/image');
			$partners = $this->model_wkrestapi_catalog->getOldPartner($start,$post['limit']);
			$sellers = array();

			foreach ($partners as $key => $result) {
				if ($result['avatar']) {
					$image = $this->model_tool_image->resize($result['avatar'], $post['width'], $post['width']);
					$dc_image = DIR_IMAGE.$result['avatar'];
				} else if($result['avatar'] == 'removed') {
					$image = '';
					$dc_image = '';
				} else if($this->config->get('marketplace_default_image_name')) {
					$image = $this->model_tool_image->resize($this->config->get('marketplace_default_image_name'), $post['width'], $post['width']);
					$dc_image = DIR_IMAGE.$this->config->get('marketplace_default_image_name');
				} else {
					$image = $this->model_tool_image->resize('no_image.png', $post['width'], $post['width']);
					$dc_image = DIR_IMAGE.'no_image.png';
				}

				$this->load->model('wkrestapi/catalog');
				$dominant_color = $this->model_wkrestapi_catalog->getDominantColor($dc_image);

				$sellers[] = array(
					'customer_id' 		=> $result['customer_id'],
					'name' 		  		=> $result['firstname'].' '.$result['lastname'],
					'companyname' 		=> $result['companyname'],
					'backgroundcolor' 		=> $result['backgroundcolor'],
					'country'  	  		=> $result['country'],
					'thumb'       		=> $image,
					'dominant_color' => $dominant_color,
					'total_products'    => $this->model_customerpartner_master->getPartnerCollectionCount($result['customer_id']),
				);
			}
			$return_array = array(
				'error'    => 0,
				'partners' => $sellers,
				'total'    => $this->model_wkrestapi_catalog->getTotalOldPartner()
			);
			$this->response->addHeader('Content-Type: application/json');
			$this->response->setOutput(json_encode($return_array));
		}
	}

	public function autocomplete() {

		$this->load->language('account/api');

		$post = $this->request->post;

		//Accepting data in json format / raw data

		$raw_data = json_decode(file_get_contents("php://input"),true);

		if ($raw_data) {
			foreach ($raw_data as $key => $value) {
					$post[$key] = $value;
			}
		}

		//Get wk_token from header
		if (isset(getallheaders()['wk_token'])) {
			$post['wk_token'] = getallheaders()['wk_token'];
		} elseif (isset(getallheaders()['Wk-Token'])) {
			$post['wk_token'] = getallheaders()['Wk-Token'];
		}

		if (!isset($post['wk_token']) || !$this->checkSession($post['wk_token'])) {
			$this->response->addHeader('Content-Type: application/json');
			$this->response->setOutput(json_encode(array('fault'=>1,'message'=>$this->language->get('text_token_message'))));
		} else {
			$json['error'] = 0;
			$json['result'] = array();

			if (!isset($post['filter_name']))
			$post['filter_name'] = '';

			if (!isset($post['function']))
			$post['function'] = '';

			$this->load->model('account/customerpartner');
			$this->load->model('tool/image');
			$filters = array(
				'filter_name' => $post['filter_name'],
				'start'       => 0,
				'limit'       => 10
			);

			if ($post['function'] == 'manufacturer') {
				$results = $this->model_account_customerpartner->getManufacturers($filters);

				foreach ($results as $result) {
					$json['result'][] = array(
						'manufacturer_id' => $result['manufacturer_id'],
						'name'            => html_entity_decode($result['name'], ENT_QUOTES, 'UTF-8')
					);
				}
			} elseif ($post['function'] == 'filter') {
				$results = $this->model_account_customerpartner->getFilters($filters);

				foreach ($results as $filter) {
					$name = $filter['group'] . ' &gt; ' . $filter['name'];
					$json['result'][] = array(
						'filter_id' => $filter['filter_id'],
						'name'      => html_entity_decode($name, ENT_QUOTES, 'UTF-8')
					);
				}
			} elseif ($post['function'] == 'download') {
				$results = $this->model_account_customerpartner->getDownloads($filters);

				foreach ($results as $result) {
					$json['result'][] = array(
						'download_id' => $result['download_id'],
						'name'        => html_entity_decode($result['name'], ENT_QUOTES, 'UTF-8')
					);
				}
			} elseif ($post['function'] == 'related') {
				$results = $this->model_account_customerpartner->getProductsSeller($filters);
				foreach ($results as $result) {
					$json['result'][] = array(
						'product_id' => $result['product_id'],
						'name'       => html_entity_decode($result['name'], ENT_QUOTES, 'UTF-8')
					);
				}
			} elseif ($post['function'] == 'attribute') {
				$results = $this->model_account_customerpartner->getAttributes($filters);

				foreach ($results as $result) {
					$json['result'][] = array(
						'attribute_id'    => $result['attribute_id'],
						'name'            => html_entity_decode($result['name'], ENT_QUOTES, 'UTF-8')
					);
				}
			} elseif ($post['function'] == 'option') {
				$options = $this->model_account_customerpartner->getOptions($filters);

				foreach ($options as $option) {
					$option_value_data = array();

					if ($option['type'] == 'select' || $option['type'] == 'radio' || $option['type'] == 'checkbox' || $option['type'] == 'image') {
						$option_values = $this->model_account_customerpartner->getOptionValues($option['option_id']);

						foreach ($option_values as $option_value) {
							if ($option_value['image'] && file_exists(DIR_IMAGE . $option_value['image'])) {
								$image = $this->model_tool_image->resize($option_value['image'], 50, 50);
							} else {
								$image = '';
							}

							$option_value_data[] = array(
								'option_value_id' => $option_value['option_value_id'],
								'name'            => html_entity_decode($option_value['name'], ENT_QUOTES, 'UTF-8'),
								'image'           => $image
							);
						}

						$sort_order = array();

						foreach ($option_value_data as $key => $value) {
							$sort_order[$key] = $value['name'];
						}

						array_multisort($sort_order, SORT_ASC, $option_value_data);
					}

					$type = '';

					if ($option['type'] == 'select' || $option['type'] == 'radio' || $option['type'] == 'checkbox' || $option['type'] == 'image') {
						$type = $this->language->get('text_choose');
					}

					if ($option['type'] == 'text' || $option['type'] == 'textarea') {
						$type = $this->language->get('text_input');
					}

					if ($option['type'] == 'file') {
						$type = $this->language->get('text_file');
					}

					if ($option['type'] == 'date' || $option['type'] == 'datetime' || $option['type'] == 'time') {
						$type = $this->language->get('text_date');
					}

					$json['result'][] = array(
						'option_id'    => $option['option_id'],
						'name'         => strip_tags(html_entity_decode($option['name'], ENT_QUOTES, 'UTF-8')),
						'category'     => $type,
						'type'         => $option['type'],
						'option_value' => $option_value_data
					);
				}
			}
			$this->response->addHeader('Content-Type: application/json');
			$this->response->setOutput(json_encode($json));
		}
	}

	public function getLatestProducts() {
		$this->load->language('account/api');

		$post = $this->request->post;

		//Accepting data in json format / raw data

		$raw_data = json_decode(file_get_contents("php://input"),true);

		if ($raw_data) {
			foreach ($raw_data as $key => $value) {
					$post[$key] = $value;
			}
		}

		//Get wk_token from header
		if (isset(getallheaders()['wk_token'])) {
			$post['wk_token'] = getallheaders()['wk_token'];
		} elseif (isset(getallheaders()['Wk-Token'])) {
			$post['wk_token'] = getallheaders()['Wk-Token'];
		}

		if (!isset($post['wk_token']) || !$this->checkSession($post['wk_token'])) {
			$this->response->addHeader('Content-Type: application/json');
			$this->response->setOutput(json_encode(array('fault'=>1,'message'=>$this->language->get('text_token_message'))));
		} else {
			if (!isset($post['page']) || !$post['page'])
			$post['page'] = 1;

			if (!isset($post['limit']) || !$post['limit'])
			$post['limit'] = 5;

			$filter_data = array(
				'start'              => ($post['page']-1)*$post['limit'],
				'limit'              => $post['limit']
			);

			$this->load->model('tool/image');
			$this->load->model('customerpartner/master');
			$this->load->model('wkrestapi/catalog');
			$latest = $this->model_customerpartner_master->getLatest($filter_data);
			$products = array();

			foreach($latest as $key => $result){

				if ($result['image']) {
					$image = $this->model_tool_image->resize($result['image'], 100, 100);
				} else {
					$image = $this->model_tool_image->resize('no_image.png', 100, 100);
				}
				if (isset($result['image']) && is_file(DIR_IMAGE.$result['image']))
				$dc_image = DIR_IMAGE.$result['image'];
				elseif (is_file(DIR_IMAGE.'placeholder.png'))
				$dc_image = DIR_IMAGE.'placeholder.png';
				else
				$dc_image = '';

				$dominant_color = $this->model_wkrestapi_catalog->getDominantColor($dc_image);

				if ($result['avatar']) {
					$avatar = $this->model_tool_image->resize($result['avatar'], 70, 70);
					$dc_image = DIR_IMAGE.$result['avatar'];
				} else if($result['avatar'] == 'removed') {
					$avatar = '';
					$dc_image = '';
				} else if($this->config->get('marketplace_default_image_name')) {
					$avatar = $this->model_tool_image->resize($this->config->get('marketplace_default_image_name'), 50, 50);
					$dc_image = DIR_IMAGE.$this->config->get('marketplace_default_image_name');
				} else {
					$dc_image = DIR_IMAGE.'no_image.png';
					$avatar = $this->model_tool_image->resize('no_image.png', 50, 50);
				}

				$avatar_dominant_color = $this->model_wkrestapi_catalog->getDominantColor($dc_image);

				if (($this->config->get('config_customer_price') && $this->customer->isLogged()) || !$this->config->get('config_customer_price')) {
					$price = $this->currency->format($this->tax->calculate($result['price'], $result['tax_class_id'], $this->config->get('config_tax')),$this->session->data['currency']);
				} else {
					$price = false;
				}

				if ((float) $result['special']) {
					$formatedSpecial = $this->currency->format($this->tax->calculate($result['special'], $result['tax_class_id'], $this->config->get('config_tax')), $this->session->data['currency']);
					$special = $result['special'];
				} else {
					$formatedSpecial = '';
					$special = 0.00;
				}

				if ($this->config->get('config_tax')) {
					$tax = $this->currency->format(((float)$result['special'] ? $result['special'] : $result['price']),$this->session->data['currency']);
				} else {
					$tax = false;
				}

				if ($this->config->get('config_review_status')) {
					$rating = (int)$result['rating'];
				} else {
					$rating = false;
				}

				$this->load->model('catalog/product');

				$product_info = $this->model_catalog_product->getProduct($result['product_id']);

				if ($product_info['quantity'] <= 0) {
					$stock = $product_info['stock_status'];
				} elseif ($this->config->get('config_stock_display')) {
					$stock = $product_info['quantity'];
				} else {
					$stock = 'In Stock';
				}

				$products[] = array(
					'product_id'  => $result['product_id'],
					'customer_id'  => $result['customer_id'],
					'seller_name' => $result['seller_name'],
					'country'  	  => $result['country'],
					'avatar'  	  => $avatar,
					'avatar_dominant_color' => $avatar_dominant_color,
					'backgroundcolor'  	  => $result['backgroundcolor'],
					'sellerHref'  => html_entity_decode($this->url->link('customerpartner/profile', 'id=' . $result['customer_id'], 'SSL')),
					'thumb'       => $image,
					'dominant_color' => $dominant_color,
					'name'        => html_entity_decode($result['name'],ENT_QUOTES,"UTF-8"),
					'description' => utf8_substr(strip_tags(html_entity_decode($result['description'], ENT_QUOTES, 'UTF-8')), 0, $this->config->get('config_product_description_length')) . '..',
					'price'       => $price,
					'special' 	 => (float) $special,
					'formatted_special' => $formatedSpecial,
					'tax'         => $tax,
					'hasOption'	  => $this->model_wkrestapi_catalog->productOption($result['product_id']),
					'stock'		  => $stock,
					'rating'      => $result['rating'],
					'href'        => html_entity_decode($this->url->link('product/product', 'product_id=' . $result['product_id'], 'SSL'))
				);
			}

			$return_array = array(
				'error'    => 0,
				'products' => $products,
				'total'    => $this->model_customerpartner_master->getTotalLatest()
			);
			$this->response->addHeader('Content-Type: application/json');
			$this->response->setOutput(json_encode($return_array));
		}
	}

	/**
	 * Get the customer data for becoming partner
	 * @return json       return customer became seller or not
	 */

	public function becomeSeller() {

		$this->load->language('account/api');

		$post = $this->request->post;

		//Accepting data in json format / raw data

		$raw_data = json_decode(file_get_contents("php://input"),true);

		if ($raw_data) {
			foreach ($raw_data as $key => $value) {
					$post[$key] = $value;
			}
		}

		//Get wk_token from header
		if (isset(getallheaders()['wk_token'])) {
			$post['wk_token'] = getallheaders()['wk_token'];
		} elseif (isset(getallheaders()['Wk-Token'])) {
			$post['wk_token'] = getallheaders()['Wk-Token'];
		}

		if (!isset($post['wk_token']) || !$this->checkSession($post['wk_token'])) {
			$this->response->addHeader('Content-Type: application/json');
			$this->response->setOutput(json_encode(array('fault'=>1,'message'=>$this->language->get('text_token_message'))));
		} else {
			$return_array['error'] = 1;
			$this->language->load('account/customerpartner/become_partner');
			$this->load->model('customerpartner/master');
			if ($this->customer->getId()) {
				if (isset($post['shop']) && $post['shop'] && isset($post['message']) && $post['message']) {
					if (utf8_strlen($post['shop']) <= 3) {
						$return_array['message'] = $this->language->get('error_validshop');
					} elseif (utf8_strlen($post['message']) <=3 ) {
						$return_array['message'] = $this->language->get('error_message');
					} elseif ($this->model_customerpartner_master->getShopData($post['shop'])) {
						$return_array['message'] = $this->language->get('error_message');
					} else {
						$this->load->model('account/customerpartner');
						$hasApplied = $this->model_account_customerpartner->IsApplyForSellership();
						if ($hasApplied) {
						$return_array['message'] = strip_tags($this->language->get('text_delay'));
						} else {
							$country_id = $this->model_account_customerpartner->CustomerCountry_Id($this->customer->getId());
							$return_array['error'] = 0;
							$return_array['message'] = $this->language->get('text_success');
							if (empty($country_id)) {
								$this->model_account_customerpartner->becomePartner($post['shop'],$customer_country_id='',$this->customer->getId(),$post['message']);
							} else {
								$this->model_account_customerpartner->becomePartner($post['shop'],$country_id['country_id'],$this->customer->getId(),$post['message']);
							}

							$return_array['partner'] = 0;
							if ($this->model_account_customerpartner->chkIsPartner())
							$return_array['partner'] = 1;
						}
					}
				} else {
					$return_array['message'] = $this->language->get('text_verify');
				}
			} else {
				$return_array['message'] = $this->language->get('text_login_error');
			}
			$this->response->addHeader('Content-Type: application/json');
			$this->response->setOutput(json_encode($return_array));
		}
	}

	/**
	 * Get the profile data of a seller on product page
	 * @return json       return seller profile and his product data
	 */
	public function getSellerProfile(){

		$this->load->language('account/api');

		$post = $this->request->post;

		//Accepting data in json format / raw data

		$raw_data = json_decode(file_get_contents("php://input"),true);

		if ($raw_data) {
			foreach ($raw_data as $key => $value) {
			    $post[$key] = $value;
			}
		}

		//Get wk_token from header
		if (isset(getallheaders()['wk_token'])) {
			$post['wk_token'] = getallheaders()['wk_token'];
		} elseif (isset(getallheaders()['Wk-Token'])) {
		  $post['wk_token'] = getallheaders()['Wk-Token'];
		}

		if (!isset($post['wk_token']) || !$this->checkSession($post['wk_token'])) {
			$this->response->addHeader('Content-Type: application/json');
			$this->response->setOutput(json_encode(array('fault'=>1,'message'=>$this->language->get('text_token_message'))));
		} else {

			$sellerData = array();

			foreach ($post as $key => $value) {
			    $sellerData[$key] = $value;
			}

			if (isset($sellerData['id'])) {
				$id = (int)$sellerData['id'];
			} else {
				$id = 0;
			}

			if(isset($sellerData['width']))
				$width = $sellerData['width'];
			else
				$width = 100;

			if (isset($sellerData['page'])) {
				$page = $sellerData['page'];
			} else {
				$page = 1;
			}	

			if (isset($sellerData['limit'])) {
				$limit = $sellerData['limit'];
			} else {
				$limit = 10;
			}	
			$filter_data = array(
				'start'           => ($page - 1) * 10,
				'limit'           => $limit
			);
			$this->load->model('tool/image');

			$this->load->model('customerpartner/master');

			$this->language->load('customerpartner/profile');
			$partner = $this->model_customerpartner_master->getProfile($id);
			
			
			
			if ($partner['companybanner'] && file_exists(DIR_IMAGE . $partner['companybanner'])) {
				$partner['companybanner'] = HTTP_SERVER.'image/'.$partner['companybanner'];
			} else {
				if($partner['companybanner'] != 'removed' && $this->config->get('marketplace_default_image_name')) {
					$partner['companybanner'] = HTTP_SERVER.'image/'.$this->config->get('marketplace_default_image_name');
				} else {
					$partner['companybanner'] = '';
				}
			}

			if ($partner['companylogo'] && file_exists(DIR_IMAGE . $partner['companylogo'])) {
				$partner['companylogo'] = $this->model_tool_image->resize($partner['companylogo'], ($width), $width/2 );
				$dc_image = DIR_IMAGE.$partner['companylogo'];
			} else if($this->config->get('marketplace_default_image_name') && file_exists(DIR_IMAGE . $this->config->get('marketplace_default_image_name'))) {
				if($partner['companylogo'] != 'removed') {
					$dc_image = DIR_IMAGE.$this->config->get('marketplace_default_image_name');
					$partner['companylogo'] = $this->model_tool_image->resize($this->config->get('marketplace_default_image_name'), ($width), $width/2  );
				} else {
					$partner['companylogo'] = '';
					$dc_image = '';
				}
			}

			$this->load->model('wkrestapi/catalog');
			$data['company_logo_dominant_color'] = $this->model_wkrestapi_catalog->getDominantColor($dc_image);


			if ($partner['avatar'] && file_exists(DIR_IMAGE . $partner['avatar'])) {
				$partner['avatar'] = $this->model_tool_image->resize($partner['avatar'], $width/4, $width/4);
				$dc_image = DIR_IMAGE.$partner['avatar'];
			} else if($this->config->get('marketplace_default_image_name') && file_exists(DIR_IMAGE . $this->config->get('marketplace_default_image_name'))) {
				if($partner['avatar'] != 'removed') {
					$dc_image = DIR_IMAGE.$this->config->get('marketplace_default_image_name');
					$partner['avatar'] = $this->model_tool_image->resize($this->config->get('marketplace_default_image_name'), $width/4, $width/4);
				} else {
					$partner['avatar'] = '';
					$dc_image = '';
				}
			}

			$data['avatar_dominant_color'] = $this->model_wkrestapi_catalog->getDominantColor($dc_image);

			$fields=array(
				'screenname',
				'gender',				
				'avatar',
				'twitterid',
				'paypalid',
				'facebookid',
				'backgroundcolor',
				'country',
				'companybanner',
				'companylogo',
				'companylocality',
				'companyname',			
				'countrylogo',
				'firstname',
				'lastname',
				'telephone',
				'email',
				'fax',
				'city'
				);

			foreach ($fields as $value) {
				$data[$value] = strip_tags(html_entity_decode(html_entity_decode($partner[$value])));
			}
			
			$data['companydescription'] = html_entity_decode(html_entity_decode($partner['companydescription'])); 
			$data['shortprofile'] = html_entity_decode(html_entity_decode($partner['shortprofile'])); 
			$data = array_merge($data,$this->language->load('customerpartner/profile'));

			$this->load->model('customerpartner/master');
			$product_feedback_total = $this->model_customerpartner_master->getTotalProductFeedbackList($id);
			$data['product_feedback_total']=$product_feedback_total;
			

			$reviews = $this->model_customerpartner_master->getProductFeedbackList($id,$filter_data);			
			$feedbacks = $this->model_customerpartner_master->getFeedbackList($id);

			$data['feedbacks'] = array();

			if ($feedbacks) {
				$review_fields = $this->model_customerpartner_master->getAllReviewFields();

				$data['review_fields'] = array();

				if ($review_fields) {
				  foreach ($review_fields as $key => $value) {
				    $data['review_fields'][] = array(
				      'title' => $value['field_name'],
				      'average_rating' => $this->model_customerpartner_master->getAverageFeedback($id,$value['field_id'])
				    );
				  }
				}

				foreach ($feedbacks as $key => $feedback) {

					$review_attributes = array();

					if ($review_fields) {
						foreach ($review_fields as $key => $value) {
							$attribute_value = $this->model_customerpartner_master->getReviewAttributeValue($feedback['id'],$value['field_id']);
							if (isset($attribute_value['field_value']) && $attribute_value['field_value']) {
								$review_attributes[] = array(
									'title' => $value['field_name'],
									'rating' => $attribute_value['field_value']
								);
							}
						}
					}

					$date = strtotime($feedback['createdate']);
					if (isset($time_diff) && $time_diff) {
						$date = $date + $time_diff;
					}
					$data['feedbacks'][] = array(
			            'id' => $feedback['id'],
			            'customer_id' => $feedback['customer_id'],
			            'seller_id' => $feedback['seller_id'],
			            'nickname' => $feedback['nickname'],
			            'summary' => $feedback['summary'],
			            'review' => $feedback['review'],
			            'createdate' => date('F j, Y', $date),
									'review_attributes'	=> $review_attributes
					);
				}
			}

			$feedback_total = $this->model_customerpartner_master->getTotalFeedback($id);
			$data['feedback_total']=$feedback_total;
			$data['reviews'] = array();
			
			$reviews = $this->model_customerpartner_master->getProductFeedbackList($id,$filter_data);

			$data['reviews'] = array();
			if($reviews) {
				foreach ($reviews as $key => $review) {
					$d = date_create($review['date_added']);
					$data['reviews'][] = array(
						'author' => $review['author'],
						'name' => $review['name'],						
						'text' => $review['text'],
						'rating' => $review['rating'],
						'date_added' => date_format($d, 'F j, Y'),
					);
				}
			}
		
			$data['collection']=array();

			$this->load->model('catalog/category');

			$this->load->model('account/customerpartner');

			$this->load->model('customerpartner/master');

			$this->language->load('customerpartner/collection');

			$this->language->load('product/category');

			if ($this->config->get('marketplace_customercontactseller'))
			$data['contact_status'] = 1;
			else
			$data['contact_status'] = 0;

			if ($this->config->get('marketplace_profile_email'))
			$data['email_status'] = 1;
			else
			$data['email_status'] = 0;

			if ($this->config->get('marketplace_profile_telephone'))
			$data['telephone_status'] = 1;
			else
			$data['telephone_status'] = 0;

			$data['text_refine'] = $this->language->get('text_refine');
			$data['text_empty'] = $this->language->get('text_no_products');
			$data['text_quantity'] = $this->language->get('text_quantity');
			$data['text_manufacturer'] = $this->language->get('text_manufacturer');
			$data['text_model'] = $this->language->get('text_model');
			$data['text_price'] = $this->language->get('text_price');
			$data['text_tax'] = $this->language->get('text_tax');
			$data['text_points'] = $this->language->get('text_points');
			$data['text_compare'] = sprintf($this->language->get('text_compare'), (isset($this->session->data['compare']) ? count($this->session->data['compare']) : 0));
			$data['text_sort'] = $this->language->get('text_sort');
			$data['text_limit'] = $this->language->get('text_limit');

			$data['button_cart'] = $this->language->get('button_cart');
			$data['button_wishlist'] = $this->language->get('button_wishlist');
			$data['button_compare'] = $this->language->get('button_compare');
			$data['button_continue'] = $this->language->get('button_continue');
			$data['button_list'] = $this->language->get('button_list');

			if (isset($sellerData['sort'])) {
				$sort = $sellerData['sort'];
			} else {
				$sort = 'p.sort_order';
			}

			if (isset($sellerData['order'])) {
				$order = $sellerData['order'];
			} else {
				$order = 'ASC';
			}

			if (isset($sellerData['page'])) {
				$page = $sellerData['page'];
			} else {
				$page = 1;
			}

			if (isset($sellerData['limit'])) {
				$limit = $sellerData['limit'];
			} else {
				$limit = 10;
			}

			$data['button_grid'] = $this->language->get('button_grid');


			$filter_data = array(
				'customer_id'		 => $id,
				'filter_category_id' => 0,
				'sort'               => $sort,
				'order'              => $order,
				'start'              => ($page - 1) * $limit,
				'limit'              => $limit,
				'filter_store' 		 => $this->config->get('config_store_id'),
				'filter_status'		 => 1
			);

			$data['categories'] = array();

			$categories = $this->model_catalog_category->getCategories(0);

			foreach ($categories as $category) {
				$children_data = array();

				$children = $this->model_catalog_category->getCategories($category['category_id']);

				foreach ($children as $child) {

					$filter_data ['filter_category_id']  = $child['category_id'];

					$products_in_category = $this->model_account_customerpartner->getTotalProductsSeller($filter_data);

					if($products_in_category)
						$children_data[] = array(
							'category_id' => $child['category_id'],
							'name'        => $child['name'] . ($this->config->get('config_product_count') ? ' (' . $products_in_category . ')' : ''),
						);
				}

				$filter_data ['filter_category_id']  = $category['category_id'];

				$products_in_category = $this->model_account_customerpartner->getTotalProductsSeller($filter_data);

				if($products_in_category){
					$data['categories'][] = array(
						'category_id' => $category['category_id'],
						'name'        => $category['name'] . ($this->config->get('config_product_count') ? ' (' . $products_in_category . ')' : ''),
						'children'    => $children_data,
					);
				}elseif ($children_data) {
					$data['categories'][] = array(
						'category_id' => $category['category_id'],
						'name'        => $category['name'] . ($this->config->get('config_product_count') ? ' (' . count($children_data) . ')' : ''),
						'children'    => $children_data,
					);
				}
			}

			if (isset($sellerData['path'])) {
				$parts = explode('_', (string)$sellerData['path']);
			} else {
				$parts = array();
			}

			if (isset($parts[0])) {
				$data['category_id'] = $category_id = $parts[0];
			} else {
				$data['category_id'] = $category_id = 0;
			}

			if (isset($parts[1])) {
				$data['child_id'] = $category_id = $parts[1];
			} else {
				$data['child_id'] = 0;
			}

			$filter_data ['filter_category_id']  = $category_id;

			if (isset($sellerData['path'])) {
				$url .= '&path=' . $sellerData['path'];
			}

			$results = $this->model_account_customerpartner->getProductsSeller($filter_data);

			$product_total = $this->model_account_customerpartner->getTotalProductsSeller($filter_data);

			$data['products'] = array();

			foreach ($results as $result) {


				if ($result['image']) {
					$image = $this->model_tool_image->resize($result['image'], $width/4, $width/4);
				} else {
					$image = $this->model_tool_image->resize('no_image.png', $width/4, $width/4);
				}

				if (isset($result['image']) && is_file(DIR_IMAGE.$result['image'])) {
					$dc_image = DIR_IMAGE.$result['image'];
				} elseif (is_file(DIR_IMAGE.'placeholder.png')) {
					$dc_image = DIR_IMAGE.'placeholder.png';
				} else {
					$dc_image = '';
				}

					$dominant_color = $this->model_wkrestapi_catalog->getDominantColor($dc_image);

					if (($this->config->get('config_customer_price') && $this->customer->isLogged()) || !$this->config->get('config_customer_price')) {
						/*
						 * Marketplace
						 */
						$this->load->model('account/customerpartner');
						$this->load->model('account/customerpartnerorder');
						$check_seller = $this->model_account_customerpartner->getProductSellerDetails($result['product_id']);
						$seller_id = 0;
						if (isset($check_seller['customer_id']) && $check_seller['customer_id']) {
								$seller_id = $check_seller['customer_id'];
						}
						$commissions = $this->model_account_customerpartnerorder->calculateCommission(array('product_id'=>$result['product_id'], 'product_total'=>$result['price']),$seller_id);
						$result['price']= $commissions['commission'] + $commissions['customer'];
						/*
						* Marketplace
						*/
						$price = $this->currency->format($this->tax->calculate($result['price'], $result['tax_class_id'], $this->config->get('config_tax')), $this->session->data['currency']);
					} else {
						$price = false;
					}

				if ((float) $result['special']) {
	        $formatedSpecial = $this->currency->format($this->tax->calculate($result['special'], $result['tax_class_id'], $this->config->get('config_tax')), $this->session->data['currency']);
	        $special = $result['special'];
	      } else {
	        $formatedSpecial = '';
	        $special = 0.00;
	      }

				if ($this->config->get('config_tax')) {
					$tax = $this->currency->format(((float)$result['special'] ? $result['special'] : $result['price']),$this->session->data['currency']);
				} else {
					$tax = false;
				}

				if ($this->config->get('config_review_status')) {
					$rating = (int)$result['rating'];
				} else {
					$rating = false;
				}

				$this->load->model('catalog/product');

				$this->load->model('wkrestapi/catalog');

				$product_info = $this->model_catalog_product->getProduct($result['product_id']);

				if ($product_info['quantity'] <= 0) {
					$stock = $product_info['stock_status'];
				} elseif ($this->config->get('config_stock_display')) {
					$stock = $product_info['quantity'];
				} else {
					$stock = 'In Stock';
				}

				$already_status = false;
				if (version_compare(VERSION,'2.1.0.1	','>=')) {
				foreach($this->model_wkrestapi_catalog->getDBWishlist() as $wishlist) {
					if($wishlist['product_id'] == $result['product_id']){
						$already_status = true;
					}
				}
			}

				$data['products'][] = array(
					'product_id'  => $result['product_id'],
					'thumb'       => $image,
					'dominant_color' => $dominant_color,
					'name'        => html_entity_decode($result['name'],ENT_QUOTES,"UTF-8"),
					'description' => utf8_substr(strip_tags(html_entity_decode($result['description'], ENT_QUOTES, 'UTF-8')), 0, $this->config->get('config_product_description_length')) . '..',
					'price'       => $price,
					'special' 	 => (float) $special,
		      'formatted_special' => $formatedSpecial,
					'tax'         => $tax,
					'wishlist_status' => $already_status,
					'rating'      => $result['rating'],
					'hasOption'	  => $this->model_wkrestapi_catalog->productOption($result['product_id']),
					'stock'		  => $stock,
					'href'        => html_entity_decode($this->url->link('product/product', 'product_id=' . $result['product_id'], 'SSL'))
				);
			}

			$data['text_average'] = 'Average Rating';
			$data['average_rating'] = $this->model_customerpartner_master->getAverageFeedback($id);

			if ($data) {
				$this->response->addHeader('Content-Type: application/json');
				$this->response->setOutput(json_encode($data));
			} else {
				$return_array = array(
						'error'		=> 1
					);
				$this->response->addHeader('Content-Type: application/json');
				$this->response->setOutput(json_encode($return_array));
			}
		}
	}

	/**
	 * Get the orders of seller
	 * @param  json data contains the id as param for order_id
	 * @return json       return order info if order id set otherwise all orders of seller
	 */
	public function getSellerOrders(){

		$this->load->language('account/api');

		$post = $this->request->post;
	
		//Accepting data in json format / raw data

		$raw_data = json_decode(file_get_contents("php://input"),true);

		if ($raw_data) {
			foreach ($raw_data as $key => $value) {
			    $post[$key] = $value;
			}
		}

		//Get wk_token from header
		if (isset(getallheaders()['wk_token'])) {
			$post['wk_token'] = getallheaders()['wk_token'];
		} elseif (isset(getallheaders()['Wk-Token'])) {
		  $post['wk_token'] = getallheaders()['Wk-Token'];
		}

		if (!isset($post['wk_token']) || !$this->checkSession($post['wk_token'])) {
			$this->response->addHeader('Content-Type: application/json');
			$this->response->setOutput(json_encode(array('fault'=>1,'message'=>$this->language->get('text_token_message'))));
		} else {

			if(isset($post['id']))
				$id=$post['id'];
			else
				$id ='';

			$this->load->model('account/customerpartner');

			$data['chkIsPartner'] = $this->model_account_customerpartner->chkIsPartner();

			if($this->customer->isLogged() && $data['chkIsPartner']) {

				if($id != '') {

					$order_id = $id;
					$this->language->load('account/customerpartner/orderinfo');

					$this->load->model('account/order');
					$order_info = $this->model_account_customerpartner->getOrder((int)$id);

					if ($order_info) {
						$data['order_modify_status'] = $this->config->get('marketplace_sellerorderstatus') ? true : false;

						if ($order_info['invoice_no']) {
						  $data['invoice_no'] = $order_info['invoice_prefix'] . $order_info['invoice_no'];
						} else {
							$data['invoice_no'] = '';
						}
						$data['invoice_link'] = html_entity_decode($this->url->link('account/customerpartner/soldinvoice', 'order_id=' . $id, ''), ENT_QUOTES, 'UTF-8');

						$data['date_added'] = date($this->language->get('date_format_short'), strtotime($order_info['date_added']));

						if ($order_info['payment_address_format']) {
							$format = $order_info['payment_address_format'];
						} else {
							$format = '{firstname} {lastname}' . "\n" . '{company}' . "\n" . '{address_1}' . "\n" . '{address_2}' . "\n" . '{city} {postcode}' . "\n" . '{zone}' . "\n" . '{country}';
						}

						$find = array('{firstname}','{lastname}','{company}','{address_1}','{address_2}','{city}','{postcode}','{zone}','{zone_code}','{country}');

						$replace = array(
							'firstname' => $order_info['payment_firstname'],
							'lastname'  => $order_info['payment_lastname'],
							'company'   => $order_info['payment_company'],
							'address_1' => $order_info['payment_address_1'],
							'address_2' => $order_info['payment_address_2'],
							'city'      => $order_info['payment_city'],
							'postcode'  => $order_info['payment_postcode'],
							'zone'      => $order_info['payment_zone'],
							'zone_code' => $order_info['payment_zone_code'],
							'country'   => $order_info['payment_country']
						);

						$data['payment_address'] = str_replace(array("\r\n", "\r", "\n"), '<br />', preg_replace(array("/\s\s+/", "/\r\r+/", "/\n\n+/"), '<br />', trim(str_replace($find, $replace, $format))));

						$data['payment_method'] = $order_info['payment_method'];

						if ($order_info['shipping_address_format']) {
							$format = $order_info['shipping_address_format'];
						} else {
							$format = '{firstname} {lastname}' . "\n" . '{company}' . "\n" . '{address_1}' . "\n" . '{address_2}' . "\n" . '{city} {postcode}' . "\n" . '{zone}' . "\n" . '{country}';
						}

						$find = array('{firstname}','{lastname}','{company}','{address_1}','{address_2}','{city}','{postcode}','{zone}','{zone_code}','{country}');

						$replace = array(
							'firstname' => $order_info['shipping_firstname'],
							'lastname'  => $order_info['shipping_lastname'],
							'company'   => $order_info['shipping_company'],
							'address_1' => $order_info['shipping_address_1'],
							'address_2' => $order_info['shipping_address_2'],
							'city'      => $order_info['shipping_city'],
							'postcode'  => $order_info['shipping_postcode'],
							'zone'      => $order_info['shipping_zone'],
							'zone_code' => $order_info['shipping_zone_code'],
							'country'   => $order_info['shipping_country']
						);

						$data['shipping_address'] = str_replace(array("\r\n", "\r", "\n"), '<br />', preg_replace(array("/\s\s+/", "/\r\r+/", "/\n\n+/"), '<br />', trim(str_replace($find, $replace, $format))));

						$data['shipping_method'] = $order_info['shipping_method'];

						$this->load->model('mp_localisation/order_status');
						$order_statuses = $this->model_mp_localisation_order_status->getOrderStatuses();

						$data['products'] = array();

						$products = $this->model_account_customerpartner->getSellerOrderProducts($order_id);

			      		foreach ($products as $product) {
							$option_data = array();

							$options = $this->model_account_order->getOrderOptions($order_id, $product['order_product_id']);

			         		foreach ($options as $option) {
								if ($option['type'] != 'file') {
									$value = $option['value'];
								} else {
									$this->load->model('tool/upload');

									$download = $this->model_tool_upload->getUploadByCode($option['value']);

									$value = $download['name'];
									// $value = utf8_substr($option['value'], 0, utf8_strrpos($option['value'], '.'));
								}

								$option_data[] = array(
									'name'  => $option['name'],
									'value' => (utf8_strlen($value) > 20 ? utf8_substr($value, 0, 20) . '..' : $value)
								);
			        		}

			        		$product_tracking = $this->model_account_customerpartner->getOdrTracking($id, $product['product_id'],$this->customer->getId());

			        		if($product['paid_status'] == 1) {
			        			$paid_status = $this->language->get('text_paid');
			        		} else {
			        			$paid_status = $this->language->get('text_not_paid');
			        		}

			        		$this->load->model('catalog/product');

			        		$this->load->model('wkrestapi/catalog');

							$product_info = $this->model_catalog_product->getProduct($product['product_id']);

							if ($product_info['quantity'] <= 0) {
								$stock = $product_info['stock_status'];
							} elseif ($this->config->get('config_stock_display')) {
								$stock = $product_info['quantity'];
							} else {
								$stock = 'In Stock';
							}
							$order_product_status_name = '';
							foreach($order_statuses as $order_status) {
								if ($order_status['order_status_id'] == $product['order_product_status'])
								$order_product_status_name = $order_status['name'];
							}
							$data['products'][] = array(
								'order_product_id' => $product['order_product_id'],
								'product_id'     => $product['product_id'],
								'name'     => html_entity_decode($product['name'],ENT_QUOTES,"UTF-8"),
								'model'    => $product['model'],
								'order_product_status' => $product['order_product_status'],
								'order_product_status_name' => $order_product_status_name,
								'option'   => $option_data,
								'tracking' => isset($product_tracking['tracking']) ? $product_tracking['tracking'] : '',
								'quantity' => $product['quantity'],
								'paid_status' => $paid_status,
								'hasOption'	  => $this->model_wkrestapi_catalog->productOption($product['product_id']),
								'stock'		  => $stock,
								'price'    => $this->currency->format($product['price'] + ($this->config->get('config_tax') ? $product['tax'] : 0), $order_info['currency_code'], $order_info['currency_value']),
								'total'    => $this->currency->format($product['total'] + ($this->config->get('config_tax') ? ($product['tax'] * $product['quantity']) : 0), $order_info['currency_code'], $order_info['currency_value']),
			        		);
		      			}

						// Voucher
						$data['vouchers'] = array();

						$vouchers = $this->model_account_order->getOrderVouchers($order_id);

						foreach ($vouchers as $voucher) {
							$data['vouchers'][] = array(
								'description' => $voucher['description'],
								'amount'      => $this->currency->format($voucher['amount'], $order_info['currency_code'], $order_info['currency_value'])
							);
						}
			      		$data['totals'] = array();

			      		$totals = $this->model_account_customerpartner->getOrderTotals($order_id);

								if (isset($totals[0]['shipping_applied']) && $totals[0]['shipping_applied']) {
							    $data['totals'][] = array(
							      'title' => $totals[0]['shipping'],
							      'text'  => $this->currency->format($totals[0]['shipping_applied'], $order_info['currency_code'], $order_info['currency_value']),
							    );
							  }

			      	 if($totals && isset($totals[0]['total'])) {
								$data['totals'][] = array(
									'title' => $this->language->get('column_total'),
									'text'  => $this->currency->format($totals[0]['total'], $order_info['currency_code'], $order_info['currency_value']));
							}

						$data['comment'] = nl2br($order_info['comment']);

						$data['histories'] = array();

						$results = $this->model_account_customerpartner->getOrderHistories($order_id);

			      		foreach ($results as $result) {
			        		$data['histories'][] = array(
			          			'date_added' => date($this->language->get('date_format_short'), strtotime($result['date_added'])),
			          			'status'     => $result['status'],
			          			'comment'    => nl2br($result['comment'])
			        		);
			      		}

		      		//list of status

							 $marketplace_order_status_sequence = $this->config->get('marketplace_order_status_sequence');
							 $data['cancel_order_status'] = $this->config->get('marketplace_cancel_order_status');
							 $marketplace_available_order_status = $this->config->get('marketplace_available_order_status');

						    if ($data['cancel_order_status'] && $marketplace_available_order_status) {
					  			$cancel_order_statusId_key_available =  array_search($this->config->get('marketplace_cancel_order_status'),$marketplace_available_order_status,true);

					  			if ($cancel_order_statusId_key_available === 0 || $cancel_order_statusId_key_available) {
					  			    unset($marketplace_order_status_sequence[$this->config->get('marketplace_cancel_order_status')]);
					  			}
					  		}

								$data['marketplace_order_status_sequence'] = array();

								if(isset($marketplace_order_status_sequence)) {
									foreach ($marketplace_order_status_sequence as $order_sequence) {
										foreach ($order_statuses as $order_status) {
											if($order_sequence['order_status_id'] == $order_status['order_status_id']){
												$data['marketplace_order_status_sequence'][] = array(
													'order_status_id' => $order_status['order_status_id'],
													'name'            => $order_status['name']
												);
											}
										}
									}
							  }

			      		$data['order_status_id'] = $order_info['order_status_id'];
								$data['complete_order_status'] = $this->config->get('marketplace_complete_order_status');
			      	}

					$return_array = array(
						'error' => 0,
						'data'  => $data
					);
				} else {
					$this->load->model('account/customerpartner');

					if (isset($post['filter_order']) && $post['filter_order']) {
					  $filter_order = $post['filter_order'];
					} else {
					  $filter_order = null;
					}

					if (isset($post['filter_name']) && $post['filter_name']) {
					  $filter_name = $post['filter_name'];
					} else {
					  $filter_name = null;
					}

					if (isset($post['filter_status']) && $post['filter_status']) {
					  $filter_status = $post['filter_status'];
					} else {
					  $filter_status = null;
					}

					if (isset($post['filter_date']) && $post['filter_date']) {
					  $filter_date = $post['filter_date'];
					} else {
					  $filter_date = null;
					}

					if (isset($post['page'])) {
					  $page = $post['page'];
					} else {
					  $page = 1;
					}

					$filter_data = array(
					  'filter_order'    => $filter_order,
					  'filter_name'	  => $filter_name,
					  'filter_status'   => $filter_status,
					  'filter_date'	  => $filter_date,
					  'start'           => ($page - 1) * 10,
					  'limit'           => 10
					);

					$this->load->model('mp_localisation/order_status');
					$data['order_statuses'] = $this->model_mp_localisation_order_status->getOrderStatuses();

					$orders = $this->model_account_customerpartner->getSellerOrders($filter_data);
					$orderstotal = $this->model_account_customerpartner->getSellerOrdersTotal($filter_data);

					$data['orderTotals']=$orderstotal;
					if($orders){

						foreach($orders as $key => $order_list){

							$products = $this->model_account_customerpartner->getSellerOrderProducts($order_list['order_id']);

							$marketplace_complete_order_status = $this->config->get('marketplace_complete_order_status');
							$marketplace_cancel_order_status = $this->config->get('marketplace_cancel_order_status');
							$order_product_status = array();

							$orders[$key]['products'] = $products;
							$orders[$key]['productname'] = '';
							$orders[$key]['total'] = 0;
							$orders[$key]['order_status_id'] = $this->db->query("SELECT order_status_id FROM " . DB_PREFIX . "order WHERE order_id = '" . $order_list['order_id'] . "'")->row['order_status_id'];

							if($products){
								foreach ($products as $key2 => $value) {
									$orders[$key]['productname'] = $orders[$key]['productname'].$value['name'].' x '.$value['quantity'].' , ';
								}
							}

							$totals = $this->model_account_customerpartner->getOrderTotals($order_list['order_id']);
							if ($totals) {
							  if (isset($totals[0]['total'])) {
							    $orders[$key]['total'] = $totals[0]['total'];
							  }
							}
							$orders[$key]['total'] = $this->currency->format($orders[$key]['total'],$orders[$key]['currency_code'],$orders[$key]['currency_value']);
							$orders[$key]['productname'] = substr($orders[$key]['productname'], 0, -2);

							$orders[$key]['orderidlink']= $this->url->link('account/customerpartner/orderinfo', 'order_id=' . $order_list['order_id'], 'SSL');
						}
					}
					$data['orders'] = $orders;
					$return_array = array('error' => 0,'data'  => $data);
				}
			} else {
				$return_array = array('error' => 1);
			}

			$this->response->addHeader('Content-Type: application/json');
			$this->response->setOutput(json_encode($return_array));
		}
	}

	public function getSellerProducts() {
		$this->load->language('account/api');

		$post = $this->request->post;

		//Accepting data in json format / raw data

		$raw_data = json_decode(file_get_contents("php://input"),true);

		if ($raw_data) {
			foreach ($raw_data as $key => $value) {
			    $post[$key] = $value;
			}
		}

		//Get wk_token from header
		if (isset(getallheaders()['wk_token'])) {
			$post['wk_token'] = getallheaders()['wk_token'];
		} elseif (isset(getallheaders()['Wk-Token'])) {
		  $post['wk_token'] = getallheaders()['Wk-Token'];
		}

		if (!isset($post['wk_token']) || !$this->checkSession($post['wk_token'])) {
			$this->response->addHeader('Content-Type: application/json');
			$this->response->setOutput(json_encode(array('fault'=>1,'message'=>$this->language->get('text_token_message'))));
		} else {

			if (!isset($post['id']))
			$post['id'] = 0;

			if (!isset($post['path']) || !$post['path'])
			$post['path'] = 0;

			if(!isset($post['width']) || !$post['width'])
			$post['width'] = 100;

			if (!isset($post['sort']) || !$post['sort'])
			$post['sort'] = 'p.sort_order';

			if (!isset($post['order']) || !$post['order'])
			$post['order'] = 'ASC';

			if (!isset($post['page']) || !$post['page'])
			$post['page'] = 1;

			if (!isset($post['limit']) || !$post['limit'])
			$post['limit'] = 10;

			$filter_data = array(
				'customer_id'		 => (int) $post['id'],
				'filter_category_id' => $post['path'],
				'sort'               => $post['sort'],
				'order'              => $post['order'],
				'start'              => ($post['page'] - 1) * $post['limit'],
				'limit'              => $post['limit'],
				'filter_store' 		 => $this->config->get('config_store_id'),
				'filter_status'		 => 1
			);

			$this->load->model('account/customerpartner');
			$this->load->model('wkrestapi/catalog');
			$this->load->model('catalog/category');
			$this->load->model('tool/image');

			$return_array['error'] = 0;

			$this->language->load('product/category');

			$return_array['sorts'][] = array(
				'text'  => html_entity_decode($this->language->get('text_default'),ENT_QUOTES,'UTF-8'),
				'sort' => 'p.sort_order',
				'order' => 'ASC'
			);

			$return_array['sorts'][] = array(
				'text'  => html_entity_decode($this->language->get('text_name_asc'),ENT_QUOTES,'UTF-8'),
				'sort' => 'pd.name',
				'order' => 'ASC'
			);

			$return_array['sorts'][] = array(
				'text'  => html_entity_decode($this->language->get('text_name_desc'),ENT_QUOTES,'UTF-8'),
				'sort' => 'pd.name',
				'order' => 'DESC'
			);

			$return_array['sorts'][] = array(
				'text'  => html_entity_decode($this->language->get('text_price_asc'),ENT_QUOTES,'UTF-8'),
				'sort' => 'p.price',
				'order' => 'ASC'
			);

			$return_array['sorts'][] = array(
				'text'  => html_entity_decode($this->language->get('text_price_desc'),ENT_QUOTES,'UTF-8'),
				'sort' => 'p.price',
				'order' => 'DESC'
			);

			if ($this->config->get('config_review_status')) {
				$return_array['sorts'][] = array(
					'text'  => html_entity_decode($this->language->get('text_rating_desc'),ENT_QUOTES,'UTF-8'),
					'sort' => 'rating',
					'order' => 'DESC'
				);

				$return_array['sorts'][] = array(
					'text'  => html_entity_decode($this->language->get('text_rating_asc'),ENT_QUOTES,'UTF-8'),
					'sort' => 'rating',
					'order' => 'ASC'
				);
			}

			$return_array['sorts'][] = array(
				'text'  => html_entity_decode($this->language->get('text_model_asc'),ENT_QUOTES,'UTF-8'),
				'sort' => 'p.model',
				'order' => 'ASC'
			);

			$return_array['sorts'][] = array(
				'text'  => html_entity_decode($this->language->get('text_model_desc'),ENT_QUOTES,'UTF-8'),
				'sort' => 'p.model',
				'order' => 'DESC'
			);

		$return_array['product_total'] = $this->model_account_customerpartner->getTotalProductsSeller($filter_data);

		$return_array['products'] = array();

		$results = $this->model_account_customerpartner->getProductsSeller($filter_data);

		foreach ($results as $result) {


			if ($result['image']) {
				$image = $this->model_tool_image->resize($result['image'], $post['width'], $post['width']);
			} else {
				$image = $this->model_tool_image->resize('no_image.png', $post['width'], $post['width']);
			}

			if (isset($result['image']) && is_file(DIR_IMAGE.$result['image'])) {
				$dc_image = DIR_IMAGE.$result['image'];
			} elseif (is_file(DIR_IMAGE.'placeholder.png')) {
				$dc_image = DIR_IMAGE.'placeholder.png';
			} else {
				$dc_image = '';
			}

				$dominant_color = $this->model_wkrestapi_catalog->getDominantColor($dc_image);

				if (($this->config->get('config_customer_price') && $this->customer->isLogged()) || !$this->config->get('config_customer_price')) {
					/*
					 * Marketplace
					 */
					$this->load->model('account/customerpartner');
					$this->load->model('account/customerpartnerorder');
					$check_seller = $this->model_account_customerpartner->getProductSellerDetails($result['product_id']);
					$seller_id = 0;
					if (isset($check_seller['customer_id']) && $check_seller['customer_id']) {
							$seller_id = $check_seller['customer_id'];
					}
					$commissions = $this->model_account_customerpartnerorder->calculateCommission(array('product_id'=>$result['product_id'], 'product_total'=>$result['price']),$seller_id);
					$result['price']= $commissions['commission'] + $commissions['customer'];
					/*
					* Marketplace
					*/
					$price = $this->currency->format($this->tax->calculate($result['price'], $result['tax_class_id'], $this->config->get('config_tax')), $this->session->data['currency']);
				} else {
					$price = false;
				}

			if ((float) $result['special']) {
				$formatedSpecial = $this->currency->format($this->tax->calculate($result['special'], $result['tax_class_id'], $this->config->get('config_tax')), $this->session->data['currency']);
				$special = $result['special'];
			} else {
				$formatedSpecial = '';
				$special = 0.00;
			}

			if ($this->config->get('config_tax')) {
				$tax = $this->currency->format(((float)$result['special'] ? $result['special'] : $result['price']),$this->session->data['currency']);
			} else {
				$tax = false;
			}

			if ($this->config->get('config_review_status')) {
				$rating = (int)$result['rating'];
			} else {
				$rating = false;
			}

			$this->load->model('catalog/product');

			$this->load->model('wkrestapi/catalog');

			$product_info = $this->model_catalog_product->getProduct($result['product_id']);

			if ($product_info['quantity'] <= 0) {
				$stock = $product_info['stock_status'];
			} elseif ($this->config->get('config_stock_display')) {
				$stock = $product_info['quantity'];
			} else {
				$stock = 'In Stock';
			}

			$already_status = false;
			if (version_compare(VERSION,'2.1.0.1	','>=')) {
			foreach($this->model_wkrestapi_catalog->getDBWishlist() as $wishlist) {
				if($wishlist['product_id'] == $result['product_id']){
					$already_status = true;
				}
			}
		}

			$return_array['products'][] = array(
				'product_id'  => $result['product_id'],
				'thumb'       => $image,
				'dominant_color' => $dominant_color,
				'name'        => html_entity_decode($result['name'],ENT_QUOTES,"UTF-8"),
				'description' => utf8_substr(strip_tags(html_entity_decode($result['description'], ENT_QUOTES, 'UTF-8')), 0, $this->config->get('config_product_description_length')) . '..',
				'price'       => $price,
				'special' 	 => (float) $special,
				'formatted_special' => $formatedSpecial,
				'tax'         => $tax,
				'wishlist_status' => $already_status,
				'rating'      => $result['rating'],
				'hasOption'	  => $this->model_wkrestapi_catalog->productOption($result['product_id']),
				'stock'		  => $stock,
				'href'        => html_entity_decode($this->url->link('product/product', 'product_id=' . $result['product_id'], 'SSL'))
			);
		}

		$return_array['categories'][] = array(
		'path' => "0",
		'name'        => $this->language->get('text_all'),
		'children'    => false
	);

			$categories = $this->model_catalog_category->getCategories(0);

			foreach ($categories as $category) {
				$child_count = 0;

				$children = $this->model_catalog_category->getCategories($category['category_id']);

				foreach ($children as $child) {

					$filter_data ['filter_category_id']  = $child['category_id'];

					$products_in_category = $this->model_account_customerpartner->getTotalProductsSeller($filter_data);

					if($products_in_category)
						$child_count++;
				}

				$filter_data ['filter_category_id']  = $category['category_id'];

				$products_in_category = $this->model_account_customerpartner->getTotalProductsSeller($filter_data);

				if ($products_in_category) {
					$return_array['categories'][] = array(
						'path' => $category['category_id'],
						'name'        => html_entity_decode($category['name'],ENT_QUOTES,'UTF-8') . ($this->config->get('config_product_count') ? ' (' . $products_in_category . ')' : ''),
						'children'    => $child_count ? true : false
					);
				} elseif ($child_count) {
					$return_array['categories'][] = array(
						'path' => $category['category_id'],
						'name'        => html_entity_decode($category['name'],ENT_QUOTES,'UTF-8') . ($this->config->get('config_product_count') ? ' (' . $child_count . ')' : ''),
						'children'    => $child_count ? true : false
					);
				}
			}

			$this->response->addHeader('Content-Type: application/json');
			$this->response->setOutput(json_encode($return_array));
		}
	}

	/**
	 * getSellerSubCategory   [uses for seller subcategory]
	 * @param json $post contains request params
	 */
	public function getSellerSubCategory() {
	  $this->load->language('account/api');

	  $post = $this->request->post;

	  //Accepting data in json format / raw data

	  $raw_data = json_decode(file_get_contents("php://input"), true);

	  if ($raw_data) {
	    foreach ($raw_data as $key => $value) {
	      $post[$key] = $value;
	    }
	  }

	  //Get wk_token from header
	  if (isset(getallheaders()['wk_token'])) {
	  $post['wk_token'] = getallheaders()['wk_token'];
	  } elseif (isset(getallheaders()['Wk-Token'])) {
	  $post['wk_token'] = getallheaders()['Wk-Token'];
	  }

	  if (!isset($post['wk_token']) || !$this->checkSession($post['wk_token'])) {
	    $this->response->addHeader('Content-Type: application/json');
	    $this->response->setOutput(json_encode(array('fault'=>1,'message'=>$this->language->get('text_token_message'))));
	  } else {

	    $return_array['error'] = 0;
			$return_array['categories'] = array();

	    if (isset($post['path'])) {
	      $path = $post['path'];
	    } else {
	      $path = null;
	    }

	    if (isset($post['id'])) {
	      $id = $post['id'];
	    } else {
	      $id = 0;
	    }

			$filter_data = array(
				'customer_id'		 		 => (int)$post['id']
			);

			$this->load->model('catalog/category');
			$this->load->model('account/customerpartner');

	    $categories = $this->model_catalog_category->getCategories($path);

	    foreach ($categories as $category) {
	      $child_count = 0;

	      $children = $this->model_catalog_category->getCategories($category['category_id']);

	      foreach ($children as $child) {

	        $filter_data ['filter_category_id']  = $child['category_id'];

	        $products_in_category = $this->model_account_customerpartner->getTotalProductsSeller($filter_data);

	        if($products_in_category)
	          $child_count++;
	      }

	      $filter_data ['filter_category_id']  = $category['category_id'];

	      $products_in_category = $this->model_account_customerpartner->getTotalProductsSeller($filter_data);

	      if ($products_in_category) {
	        $return_array['categories'][] = array(
	          'path' => $category['category_id'],
	          'name'        => html_entity_decode($category['name'],ENT_QUOTES,'UTF-8') . ($this->config->get('config_product_count') ? ' (' . $products_in_category . ')' : ''),
	          'children'    => $child_count ? true : false
	        );
	      } elseif ($child_count) {
	        $return_array['categories'][] = array(
	          'path' => $category['category_id'],
	          'name'        => html_entity_decode($category['name'],ENT_QUOTES,'UTF-8') . ($this->config->get('config_product_count') ? ' (' . $child_count . ')' : ''),
	          'children'    => $child_count ? true : false
	        );
	      }
	    }

	    $this->response->addHeader('Content-Type: application/json');

	    $this->response->setOutput(json_encode($return_array));
	  }
	}

	/**
	 * Gettting the dashboard data of seller
	 * @return json       return dashboard data of seller
	 */
    public function getDashbordData(){

    	$this->load->language('account/api');

    	$post = $this->request->post;

    	//Accepting data in json format / raw data

		$raw_data = json_decode(file_get_contents("php://input"),true);

		if ($raw_data) {
			foreach ($raw_data as $key => $value) {
			    $post[$key] = $value;
			}
		}

		//Get wk_token from header
		if (isset(getallheaders()['wk_token'])) {
			$post['wk_token'] = getallheaders()['wk_token'];
		} elseif (isset(getallheaders()['Wk-Token'])) {
		  $post['wk_token'] = getallheaders()['Wk-Token'];
		}

		if (!isset($post['wk_token']) || !$this->checkSession($post['wk_token'])) {
			$this->response->addHeader('Content-Type: application/json');
			$this->response->setOutput(json_encode(array('fault'=>1,'message'=>$this->language->get('text_token_message'))));
		} else {

			$this->load->model('account/customerpartner');

			$data['chkIsPartner'] = $this->model_account_customerpartner->chkIsPartner();

			if($this->customer->isLogged() && $data['chkIsPartner']) {

				$this->language->load('account/customerpartner/dashboard');

				$this->document->setTitle($this->language->get('heading_title'));

				$data['dashbord']['heading_title']= $this->language->get('heading_title');
				$data['dashbord']['text_sale'] = $this->language->get('text_sale');
				$data['dashbord']['text_map'] = $this->language->get('text_map');
				$data['dashbord']['text_activity'] = $this->language->get('text_activity');
				$data['dashbord']['text_recent'] = $this->language->get('text_recent');

				//for order.php

				$this->load->language('account/customerpartner/dashboards/order');
				$data['order']['heading_title'] = $this->language->get('heading_title');
				$data['order']['text_view'] = $this->language->get('text_view');
				$this->load->model('account/customerpartner');

				$today = $this->model_account_customerpartner->getSellerOrdersTotal(array('filter_date' => date('Y-m-d', strtotime('-1 day'))));

				$yesterday = $this->model_account_customerpartner->getSellerOrdersTotal(array('filter_date' => date('Y-m-d', strtotime('-2 day'))));

				$difference = $today - $yesterday;

				if ($difference && $today) {
					$data['order']['percentage'] = round(($difference / $today) * 100);
				} else {
					$data['order']['percentage'] = 0;
				}

				$order_total = $this->model_account_customerpartner->getSellerOrdersTotal();

				if ($order_total > 1000000000000) {
					$data['order']['total'] = round($order_total / 1000000000000, 1) . 'T';
				} elseif ($order_total > 1000000000) {
					$data['order']['total'] = round($order_total / 1000000000, 1) . 'B';
				} elseif ($order_total > 1000000) {
					$data['order']['total'] = round($order_total / 1000000, 1) . 'M';
				} elseif ($order_total > 1000) {
					$data['order']['total'] = round($order_total / 1000, 1) . 'K';
				} else {
					$data['order']['total'] = $order_total;
				}

				//for sale.php

				$this->load->language('account/customerpartner/dashboards/sale');
				$data['sale']['heading_title'] = $this->language->get('heading_title');
				$data['sale']['text_view'] = $this->language->get('text_view');

				$this->load->model('customerpartner/dashboard');

				$today = $this->model_customerpartner_dashboard->getTotalSales(array('filter_date_added' => date('Y-m-d', strtotime('-1 day'))));

				$yesterday = $this->model_customerpartner_dashboard->getTotalSales(array('filter_date_added' => date('Y-m-d', strtotime('-2 day'))));

				$difference = $today['total'] - $yesterday['total'];

				if ($difference && $today['total']) {
					$data['sale']['percentage'] = round(($difference / $today['total']) * 100);
				} else {
					$data['sale']['percentage'] = 0;
				}

				$paid_amount = $this->model_customerpartner_dashboard->getPaidAmount();
				$sales = $this->model_customerpartner_dashboard->getTotalSales();

				$sale_total = (float)$sales['total'];

				$admin_amount = number_format((float)$sales['admin'],2);
				$seller_amount = number_format((float)$sales['seller'],2);

				if($paid_amount) {
					$payable_amount = round($sales['total']-($paid_amount+$sales['admin']),2);
					$payable_amount = number_format((float)$payable_amount,2);
				} else {
					$payable_amount = 0;
				}
				$paid_amount = number_format((float)$paid_amount,2);

				if ($sale_total > 1000000000000) {
					$data['sale']['total'] = round($sale_total / 1000000000000, 1) . 'T';
				} elseif ($sale_total > 1000000000) {
					$data['sale']['total'] = round($sale_total / 1000000000, 1) . 'B';
				} elseif ($sale_total > 1000000) {
					$data['sale']['total'] = round($sale_total / 1000000, 1) . 'M';
				} elseif ($sale_total > 1000) {
					$data['sale']['total'] = round($sale_total / 1000, 1) . 'K';
				} else {
					$data['sale']['total'] = $sale_total;
				}

				if ($admin_amount > 1000000000000) {
					$data['sale']['admin_amount'] = round($admin_amount / 1000000000000, 1) . 'T';
				} elseif ($admin_amount > 1000000000) {
					$data['sale']['admin_amount'] = round($admin_amount / 1000000000, 1) . 'B';
				} elseif ($admin_amount > 1000000) {
					$data['sale']['admin_amount'] = round($admin_amount / 1000000, 1) . 'M';
				} elseif ($admin_amount > 1000) {
					$data['sale']['admin_amount'] = round($admin_amount / 1000, 1) . 'K';
				} else {
					$data['sale']['admin_amount'] = $admin_amount;
				}

				if ($seller_amount > 1000000000000) {
					$data['sale']['seller_amount'] = round($seller_amount / 1000000000000, 1) . 'T';
				} elseif ($seller_amount > 1000000000) {
					$data['sale']['seller_amount'] = round($seller_amount / 1000000000, 1) . 'B';
				} elseif ($seller_amount > 1000000) {
					$data['sale']['seller_amount'] = round($seller_amount / 1000000, 1) . 'M';
				} elseif ($seller_amount > 1000) {
					$data['sale']['seller_amount'] = round($seller_amount / 1000, 1) . 'K';
				} else {
					$data['sale']['seller_amount'] = $seller_amount;
				}

				if ($payable_amount > 1000000000000) {
					$data['sale']['payable_amount'] = round($payable_amount / 1000000000000, 1) . 'T';
				} elseif ($payable_amount > 1000000000) {
					$data['sale']['payable_amount'] = round($payable_amount / 1000000000, 1) . 'B';
				} elseif ($payable_amount > 1000000) {
					$data['sale']['payable_amount'] = round($payable_amount / 1000000, 1) . 'M';
				} elseif ($payable_amount > 1000) {
					$data['sale']['payable_amount'] = round($payable_amount / 1000, 1) . 'K';
				} else {
					$data['sale']['payable_amount'] = $payable_amount;
				}

				if ($paid_amount > 1000000000000) {
					$data['sale']['paid_amount'] = round($paid_amount / 1000000000000, 1) . 'T';
				} elseif ($paid_amount > 1000000000) {
					$data['sale']['paid_amount'] = round($paid_amount / 1000000000, 1) . 'B';
				} elseif ($paid_amount > 1000000) {
					$data['sale']['paid_amount'] = round($paid_amount / 1000000, 1) . 'M';
				} elseif ($paid_amount > 1000) {
					$data['sale']['paid_amount'] = round($paid_amount / 1000, 1) . 'K';
				} else {
					$data['sale']['paid_amount'] = $paid_amount;
				}
				// for customer data
				$this->load->language('account/customerpartner/dashboards/customer');

				$data['customer']['heading_title'] = $this->language->get('heading_title');

				$data['customer']['text_view'] = $this->language->get('text_view');
				$this->load->model('customerpartner/dashboard');

				$today = $this->model_customerpartner_dashboard->getTotalCustomers(array('filter_date_added' => date('Y-m-d', strtotime('-1 day'))));

				$yesterday = $this->model_customerpartner_dashboard->getTotalCustomers(array('filter_date_added' => date('Y-m-d', strtotime('-2 day'))));

				$difference = $today - $yesterday;

				if ($difference && $today) {
					$data['customer']['percentage'] = round(($difference / $today) * 100);
				} else {
					$data['customer']['percentage'] = 0;
				}

				$customer_total = $this->model_customerpartner_dashboard->getTotalCustomers();

				if ($customer_total > 1000000000000) {
					$data['customer']['total'] = round($customer_total / 1000000000000, 1) . 'T';
				} elseif ($customer_total > 1000000000) {
					$data['customer']['total'] = round($customer_total / 1000000000, 1) . 'B';
				} elseif ($customer_total > 1000000) {
					$data['customer']['total'] = round($customer_total / 1000000, 1) . 'M';
				} elseif ($customer_total > 1000) {
					$data['customer']['total'] = round($customer_total / 1000, 1) . 'K';
				} else {
					$data['customer']['total'] = $customer_total;
				}
				//for map data
				$this->load->language('account/customerpartner/dashboards/map');

				$data['map']['heading_title'] = $this->language->get('heading_title');
				$data['map']['text_order'] = $this->language->get('text_order');
				$data['map']['text_sale'] = $this->language->get('text_sale');
				$map = array();

				$this->load->model('customerpartner/dashboard');

				$resul = $this->model_customerpartner_dashboard->getTotalOrdersByCountry();

				foreach ($resul as $result) {
					$map[] = array(
						'total'  => $result['total'],
						'country' => $result['iso_code_2'],
						'amount' => $this->currency->format($result['amount'],$this->session->data['currency'])
					);
				}
				$data['mapdata']=$map;

				//for chart data
				$this->load->language('account/customerpartner/dashboards/chart');

				$data['chart']['heading_title'] = $this->language->get('heading_title');
				$data['chart']['text_day'] = $this->language->get('text_day');
				$data['chart']['text_week'] = $this->language->get('text_week');
				$data['chart']['text_month'] = $this->language->get('text_month');
				$data['chart']['text_year'] = $this->language->get('text_year');
				$data['chart']['text_view'] = $this->language->get('text_view');

				$this->load->model('customerpartner/dashboard');
				$json['order'] = array();
				$json['customer'] = array();
				$json['xaxis'] = array();

				$json['order']['label'] = $this->language->get('text_order');
				$json['customer']['label'] = $this->language->get('text_customer');
				$json['order']['data'] = array();
				$json['customer']['data'] = array();

				if (isset($post['range'])) {
					$range = $post['range'];
				} else {
					$range = 'day';
				}

				$json['range'] = $range;
				switch ($range) {
					default:
					case 'day':
						$results = $this->model_customerpartner_dashboard->getTotalOrdersByDay();

						foreach ($results as $key => $value) {
							$json['order']['data'][] = array($key, $value['total']);
						}

						$results = $this->model_customerpartner_dashboard->getTotalCustomersByDay();

						foreach ($results as $key => $value) {
							$json['customer']['data'][] = array($key, $value['total']);
						}

						for ($i = 0; $i < 24; $i++) {
							$json['xaxis'][] = array($i, $i);
						}
						
					
						break;
					case 'week':
						$results = $this->model_customerpartner_dashboard->getTotalOrdersByWeek();

						foreach ($results as $key => $value) {
							$json['order']['data'][] = array($key, $value['total']);
						}

						$results = $this->model_customerpartner_dashboard->getTotalCustomersByWeek();

						foreach ($results as $key => $value) {
							$json['customer']['data'][] = array($key, $value['total']);
						}

						$date_start = strtotime('-' . date('w') . ' days');

						for ($i = 0; $i < 7; $i++) {
							$date = date('Y-m-d', $date_start + ($i * 86400));

							$json['xaxis'][] = array(date('w', strtotime($date)), date('D', strtotime($date)));
						}
			
						
						
						
						break;
					case 'month':
						$results = $this->model_customerpartner_dashboard->getTotalOrdersByMonth();

						foreach ($results as $key => $value) {
							$json['order']['data'][] = array($key, $value['total']);
						}

						$results = $this->model_customerpartner_dashboard->getTotalCustomersByMonth();

     


						foreach ($results as $key => $value) {
							$json['customer']['data'][] = array($key, $value['total']);
						}

						for ($i = 1; $i <= date('t'); $i++) {
							$date = date('Y') . '-' . date('m') . '-' . $i;

							$json['xaxis'][] = array(date('j', strtotime($date)), date('d', strtotime($date)));
						}
						break;
					case 'year':
						$results = $this->model_customerpartner_dashboard->getTotalOrdersByYear();
              
						foreach ($results as $key => $value) {
							$json['order']['data'][] = array($key, $value['total']);
						}

						$results = $this->model_customerpartner_dashboard->getTotalCustomersByYear();

						foreach ($results as $key => $value) {
							$json['customer']['data'][] = array($key, $value['total']);
						}

						for ($i = 1; $i <= 12; $i++) {
							$json['xaxis'][] = array($i, date('M', mktime(0, 0, 0, $i)));
						}
						break;
				}
				$data['chartdata']=$json;
                
                   

				//for recent data

				$this->load->language('account/customerpartner/dashboards/recent');
				$this->load->model('account/customerpartner');
				$this->load->model('customerpartner/dashboard');

				$data['heading_title'] = $this->language->get('heading_title');

				$data['text_no_results'] = $this->language->get('text_no_results');

				$data['column_order_id'] = $this->language->get('column_order_id');
				$data['column_customer'] = $this->language->get('column_customer');
				$data['column_status'] = $this->language->get('column_status');
				$data['column_date_added'] = $this->language->get('column_date_added');
				$data['column_total'] = $this->language->get('column_total');
				$data['column_action'] = $this->language->get('column_action');

				$data['button_view'] = $this->language->get('button_view');

				// Last 5 Orders
				$data['orders'] = array();

				$filter_data = array(
					'sort'  => 'o.date_added',
					'order' => 'DESC',
					'start' => 0,
					'limit' => 5
				);


				$results = $this->model_account_customerpartner->getSellerOrders($filter_data);


				foreach ($results as $result) {

					$order_total = $this->model_customerpartner_dashboard->getTotalSales(array('filter_order_id' => $result['order_id']));
					if(isset($order_total['total']))
						$total = $order_total['total'];
					else
						$total = 0;

					$data['orders'][] = array(
						'order_id'   => $result['order_id'],
						'customer'   => $result['name'],
						'status'     => $result['orderstatus'],
						'date_added' => date($this->language->get('date_format_short'), strtotime($result['date_added'])),
						'total'      => $this->currency->format($this->currency->convert($total, $result['currency_code'],$this->session->data['currency']),$this->session->data['currency']),
					);
				}
				$return_array = array('error' => 0,'data' => $data);
			} else{
				$return_array = array('error' => 1);
			}

			$this->response->addHeader('Content-Type: application/json');

			$this->response->setOutput(json_encode($return_array));
		}
    }

  /**
 * @param  json $data contains the order_id
 * @return json       return dashboard data of seller
 */
 public function addHistory() {

	$this->load->language('account/api');

	$post = $this->request->post;
	
	
	//Accepting dasta in json format / raw data

	$raw_data = json_decode(file_get_contents("php://input"),true);

	if ($raw_data) {
		foreach ($raw_data as $key => $value) {
				$post[$key] = $value;
		}
	}

	//Get wk_token from header
	if (isset(getallheaders()['wk_token'])) {
		$post['wk_token'] = getallheaders()['wk_token'];
	} elseif (isset(getallheaders()['Wk-Token'])) {
		$post['wk_token'] = getallheaders()['Wk-Token'];
	}
	if (!isset($post['wk_token']) || !$this->checkSession($post['wk_token'])) {
		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode(array('fault'=>1,'message'=>$this->language->get('text_token_message'))));
	} else {
		$this->language->load('account/customerpartner/orderinfo');

		if (!isset($post['comment'])) {
			$post['comment'] = '';
		}

		if (!isset($post['order_id']) || !$post['order_id']) {
			$error = $this->language->get('text_order_id_error');
		}

		if (!isset($error) && (!isset($post['order_status_id']) || !$post['order_status_id'])) {
			$error = $this->language->get('text_order_status_id_error');
		}

		if (!isset($error) && !isset($post['product_ids'])) {
			$error = $this->language->get('error_product_select');
		}

		if (!isset($error)) {

			if ($this->config->get('marketplace_cancel_order_status')) {
				$marketplace_cancel_order_status = $this->config->get('marketplace_cancel_order_status');
			}else{
				$marketplace_cancel_order_status = '';
			}


      if (isset($post['comment']) && !empty($post['comment']) && empty($post['product_ids'])) {
				$this->load->model('account/customerpartner');

				$getOrderStatusId = $this->model_account_customerpartner->getOrderStatusId((int)$post['order_id']);


	    $this->model_account_customerpartner->addOrderHistory((int)$post['order_id'],$post);
      	$this->model_account_customerpartner->addSellerOrderStatus((int)$post['order_id'],'',$post);
				$return_array = array('error' => 0, 'message' => $this->language->get('text_success_history'));
      } elseif (isset($post['product_ids']) && !empty($post['product_ids'])) {
   
      	$products = explode(",", $post['product_ids']);
				if (version_compare(VERSION,'3.0.0.0', '>=')) {
	
					$this->load->model('mp_localisation/order_status');
					$order_statuses = $this->model_mp_localisation_order_status->getOrderStatuses();
				
					
				} else {
				
					$this->load->model('localisation/order_status');
					$order_statuses = $this->model_localisation_order_status->getOrderStatuses();
	
				}


      	foreach ($order_statuses as $value) {
					if (in_array($post['order_status_id'], $value)) {
						$seller_change_order_status_name = $value['name'];
					}
				}

				if (isset($seller_change_order_status_name) && $seller_change_order_status_name) {
					if ($post['order_status_id'] == $marketplace_cancel_order_status) {
						$this->request->get['order_id'] = $post['order_id'];
						
					
						
						$this->load->controller('account/customerpartner/orderinfo/history');
					} else {
						
						$this->request->get['order_id'] = $post['order_id'];
						
	
						$this->load->controller('account/customerpartner/orderinfo/history');
					}
				}

      	$return_array = array('error' => 0, 'message' => $this->language->get('text_success_history'));
      } else {
				$return_array = array('error' => 0, 'message' => $this->language->get('error_product_select'));
      }
		} else {
			$return_array = array('error' => 1, 'message' => $error);
		}

		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($return_array));
	}
	}

	/**
 * [reviewFields]
 * @param  json $post contains request
 * @return [json] $json [success or failure message]
 */

 public function getreviewFields() {
	 $this->load->language('account/api');

	 $post = $this->request->post;

	 //Get wk_token from header
	 if (isset(getallheaders()['wk_token'])) {
		 $post['wk_token'] = getallheaders()['wk_token'];
	 } elseif (isset(getallheaders()['Wk-Token'])) {
		 $post['wk_token'] = getallheaders()['Wk-Token'];
	 }

	 if (!isset($post['wk_token']) || !$this->checkSession($post['wk_token'])) {
		 $this->response->addHeader('Content-Type: application/json');
		 $this->response->setOutput(json_encode(array('fault'=>1,'message'=>$this->language->get('text_token_message'))));
	 } else {
		 $json['error'] = 0;
		 $json['fields'] = array();

		 if ($this->config->get('marketplace_status') || $this->config->get('module_marketplace_status')) {
			 $this->load->model('customerpartner/master');
			 $fields = $this->model_customerpartner_master->getAllReviewFields();
			 if ($fields) {
				$json['fields'] = $fields;
			 }
		 } else {
			 $json['error'] = 1;
			 $json['message'] = $this->language->get('marketplace_disabled');
		 }
		 $this->response->addHeader('Content-Type: application/json');
 		 $this->response->setOutput(json_encode($json));
	 }
 }

/**
* [reviews]
* @param  json $post contains request
* @return [json] $json [success or failure message]
*/

public function getReviews() {
	$this->load->language('account/api');

	$post = $this->request->post;

	//Accepting data in json format / raw data

	$raw_data = json_decode(file_get_contents("php://input"),true);

	if ($raw_data) {
		foreach ($raw_data as $key => $value) {
				$post[$key] = $value;
		}
	}

	//Get wk_token from header
	if (isset(getallheaders()['wk_token'])) {
		$post['wk_token'] = getallheaders()['wk_token'];
	} elseif (isset(getallheaders()['Wk-Token'])) {
		$post['wk_token'] = getallheaders()['Wk-Token'];
	}

	if (!isset($post['wk_token']) || !$this->checkSession($post['wk_token'])) {
		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode(array('fault'=>1,'message'=>$this->language->get('text_token_message'))));
	} else {
		$json['error'] = 0;
		$json['reviews'] = array();
		if ($this->config->get('marketplace_status') || $this->config->get('module_marketplace_status')) {
			$this->load->model('customerpartner/review');

			if (isset($post['filter_customer']) && $post['filter_customer']) {
				$filter_customer = $post['filter_customer'];
			} else {
				$filter_customer = null;
			}

			if (isset($post['filter_status']) && $post['filter_status'] != "") {
				$filter_status = $post['filter_status'];
			} else {
				$filter_status = null;
			}

			if (isset($post['filter_createdate']) && $post['filter_createdate']) {
				$filter_date = $post['filter_createdate'];
			} else {
				$filter_date = null;
			}

			if (isset($post['order']) && $post['order']) {
				$order = $post['order'];
			} else {
				$order = 'ASC';
			}

			if (isset($post['sort']) && $post['sort']) {
				$sort = $post['sort'];
			} else {
				$sort = 'c2f.createdate';
			}

			if (isset($post['page']) && $post['page']) {
				$page = $post['page'];
			} else {
				$page = 1;
			}

			if (isset($post['limit']) && $post['limit']) {
				$limit = $post['limit'];
			} else {
				$limit = 10;
			}

			$filter_data = array(
				'filter_customer'   => $filter_customer,
				'filter_status'     => $filter_status,
				'filter_createdate' => $filter_date,
				'sort'              => $sort,
				'order'             => $order,
				'start'             => ($page - 1) * $limit,
				'limit'             => $limit
			);
			$this->load->language('account/mpapi');

	    $json['sorts'][] = array(
	      'text'  => htmlspecialchars_decode($this->language->get('review_asc_customer')),
	      'value' => 'c2f.customer_id',
	      'order'	=> 'ASC'
	    );

			$json['sorts'][] = array(
	      'text'  => htmlspecialchars_decode($this->language->get('review_desc_customer')),
	      'value' => 'c2f.customer_id',
	      'order'	=> 'DESC'
	    );

			$json['sorts'][] = array(
	      'text'  => htmlspecialchars_decode($this->language->get('review_asc_status')),
	      'value' => 'c2f.status',
	      'order'	=> 'ASC'
	    );

			$json['sorts'][] = array(
	      'text'  => htmlspecialchars_decode($this->language->get('review_desc_status')),
	      'value' => 'c2f.status',
	      'order'	=> 'DESC'
	    );

			$json['sorts'][] = array(
	      'text'  => htmlspecialchars_decode($this->language->get('review_asc_date')),
	      'value' => 'c2f.createdate',
	      'order'	=> 'ASC'
	    );

			$json['sorts'][] = array(
	      'text'  => htmlspecialchars_decode($this->language->get('review_desc_date')),
	      'value' => 'c2f.createdate',
	      'order'	=> 'DESC'
	    );

			$json['review_edit_delete_status'] = (int) $this->config->get('marketplace_sellereditreview');
			$json['total'] = (int) $this->model_customerpartner_review->getTotalReviews($filter_data);
			$reviews = $this->model_customerpartner_review->getReviews($filter_data);
			if ($reviews) {
				foreach($reviews as $review) {
					$json['reviews'][] = array(
						'review_id' 				=> $review['id'],
						'customer_name' 		=> $review['customer_name'],
						'description' 		  => strip_tags(html_entity_decode($review['review'], ENT_QUOTES, "UTF-8")),
						'status' 						=> $review['status'],
						'date' 							=> date('d/m/Y',strtotime($review['createdate'])),
					);
				}

			}
		} else {
			$json['error'] = 1;
			$json['message'] = $this->language->get('marketplace_disabled');
		}
		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));
	}
}

/**
* [reviewDetails]
* @param  json $post contains request
* @return [json] $json [success or failure message]
*/

public function getReviewDetails() {
 $this->load->language('account/api');

 $post = $this->request->post;

 //Get wk_token from header
 if (isset(getallheaders()['wk_token'])) {
	 $post['wk_token'] = getallheaders()['wk_token'];
 } elseif (isset(getallheaders()['Wk-Token'])) {
	 $post['wk_token'] = getallheaders()['Wk-Token'];
 }

 if (!isset($post['wk_token']) || !$this->checkSession($post['wk_token'])) {
	 $this->response->addHeader('Content-Type: application/json');
	 $this->response->setOutput(json_encode(array('fault'=>1,'message'=>$this->language->get('text_token_message'))));
 } else {
	 $json['error'] = 0;
	 if (!isset($post['review_id']) || !$post['review_id'])
		$post['review_id'] = 0;
	 if ($this->config->get('marketplace_status') || $this->config->get('module_marketplace_status')) {
		 $this->load->model('customerpartner/master');
		 $fields = $this->model_customerpartner_master->getAllReviewFields();
		 if ($fields) {
			 $this->load->model('customerpartner/review');
			 $review_info = $this->model_customerpartner_review->getReview($post['review_id']);
			 if ($review_info) {
				$json['customer_id'] = $review_info['customer_id'];
				$json['customer_name'] = $review_info['customer_name'];
				$json['text'] = $review_info['review'];
				$json['status'] = $review_info['status'];
				$json['fields'] = array();
				foreach ($fields as $key => $value) {
					$attribute_value = $this->model_customerpartner_review->getReviewAttributeValue($post['review_id'],$value['field_id']);
					if (isset($attribute_value['field_value']) && $attribute_value['field_value']) {
						$fields[$key]['field_value'] = $attribute_value['field_value'];
					} else {
						$fields[$key]['field_value'] = '';
					}
				}
				$json['fields'] = $fields;
			} else {
				$json['error'] = 1;
				$json['message'] = $this->language->get('text_verify');
			}
		 }
	 } else {
		 $json['error'] = 1;
		 $json['message'] = $this->language->get('marketplace_disabled');
	 }
	 $this->response->addHeader('Content-Type: application/json');
	 $this->response->setOutput(json_encode($json));
 }
}

/**
* [editReview]
* @param  json $post contains request
* @return [json] $json [success or failure message]
*/

public function editReview() {
 $this->load->language('account/api');

 $post = $this->request->post;

 //Get wk_token from header
 if (isset(getallheaders()['wk_token'])) {
	 $post['wk_token'] = getallheaders()['wk_token'];
 } elseif (isset(getallheaders()['Wk-Token'])) {
	 $post['wk_token'] = getallheaders()['Wk-Token'];
 }

 if (!isset($post['wk_token']) || !$this->checkSession($post['wk_token'])) {
	 $this->response->addHeader('Content-Type: application/json');
	 $this->response->setOutput(json_encode(array('fault'=>1,'message'=>$this->language->get('text_token_message'))));
 } else {
	 $json['error'] = 0;
	 if ($this->config->get('marketplace_status') || $this->config->get('module_marketplace_status')) {
		 $this->load->model('customerpartner/review');
		 $this->load->language('account/customerpartner/review');

		 if (isset($post['review_attributes']) && !is_array($post['review_attributes'])) {
			 $post['review_attributes'] = stripslashes(html_entity_decode($post['review_attributes']));
			 $post['review_attributes'] = json_decode($post['review_attributes'],true);
		 }

		 if (!isset($post['customer'])) {
			 $post['customer'] = '';
		 }

		 if (!isset($post['cust_id']) || !$post['cust_id']) {
 			$error = $this->language->get('error_customer');
 			}

 		if (!isset($error) && !$this->config->get('marketplace_sellereditreview')) {
 			$error = $this->language->get('error_permission');
 		}

 		if (!isset($error) && (!isset($post['text']) || utf8_strlen($post['text']) < 1)) {
 			$error = $this->language->get('error_text');
 		}

		if(isset($post['cust_id']))
			$post['customer_id'] = $post['cust_id'];

		if (isset($error)) {
			$json['error'] = 1;
			$json['message'] = $error;
		} else {
			$this->model_customerpartner_review->addReview($post);
			$json['message'] = $this->language->get('text_success');
		}
	 } else {
		 $json['error'] = 1;
		 $json['message'] = $this->language->get('marketplace_disabled');
	 }
	 $this->response->addHeader('Content-Type: application/json');
	 $this->response->setOutput(json_encode($json));
 }
}

/**
* [deleteReview]
* @param  json $post contains request
* @return [json] $json [success or failure message]
*/

public function deleteReviews() {
 $this->load->language('account/api');

 $post = $this->request->post;

 //Get wk_token from header
 if (isset(getallheaders()['wk_token'])) {
	 $post['wk_token'] = getallheaders()['wk_token'];
 } elseif (isset(getallheaders()['Wk-Token'])) {
	 $post['wk_token'] = getallheaders()['Wk-Token'];
 }

 if (!isset($post['wk_token']) || !$this->checkSession($post['wk_token'])) {
	 $this->response->addHeader('Content-Type: application/json');
	 $this->response->setOutput(json_encode(array('fault'=>1,'message'=>$this->language->get('text_token_message'))));
 } else {
	 $json['error'] = 0;
	 if ($this->config->get('marketplace_status') || $this->config->get('module_marketplace_status')) {
		 $this->load->model('customerpartner/review');
		 $this->load->language('account/customerpartner/review');
		 if (isset($post['review_ids']) && !is_array($post['review_ids'])) {
			 $post['review_ids'] = stripslashes(html_entity_decode($post['review_ids'], ENT_QUOTES, 'UTF-8'));
			 $post['review_ids'] = json_decode($post['review_ids']);
			 if (is_array($post['review_ids'])) {
				foreach ($post['review_ids'] as $review_id) {
					$this->model_customerpartner_review->deleteReview($review_id);
				}
			 }
		 }
		$json['message'] = $this->language->get('text_success');
	 } else {
		 $json['error'] = 1;
		 $json['message'] = $this->language->get('marketplace_disabled');
	 }
	 $this->response->addHeader('Content-Type: application/json');
	 $this->response->setOutput(json_encode($json));
 }
}

    /**
	 * [writeReview description]
	 * @param  json $data contains the review information such as name text and ratings
	 * @return [json]       [success or failure message]
	 */
	public function writeReview() {

		$this->load->language('account/api');

		$post = $this->request->post;

		//Accepting data in json format / raw data

		$raw_data = json_decode(file_get_contents("php://input"),true);

		if ($raw_data) {
			foreach ($raw_data as $key => $value) {
			    $post[$key] = $value;
			}
		}

		//Get wk_token from header
		if (isset(getallheaders()['wk_token'])) {
			$post['wk_token'] = getallheaders()['wk_token'];
		} elseif (isset(getallheaders()['Wk-Token'])) {
		  $post['wk_token'] = getallheaders()['Wk-Token'];
		}

		if (!isset($post['wk_token']) || !$this->checkSession($post['wk_token'])) {
			$this->response->addHeader('Content-Type: application/json');
			$this->response->setOutput(json_encode(array('fault'=>1,'message'=>$this->language->get('text_token_message'))));
		} else {
			$this->load->language('customerpartner/feedback');
			$this->load->model('customerpartner/master');

			if (isset($post['review_attributes']) && !is_array($post['review_attributes'])) {
				$post['review_attributes'] = stripslashes(html_entity_decode($post['review_attributes']));
				$post['review_attributes'] = json_decode($post['review_attributes'],true);
			}

			if (!isset($post['seller_id']) || !$post['seller_id']) {
				$error = $this->language->get('text_seller_id_error');
			}

			if (!isset($error) && (!isset($post['name']) || (utf8_strlen($post['name']) < 3) || (utf8_strlen($post['name']) > 25))) {
				$error = $this->language->get('error_name');
			}

			if (!isset($error) && (!isset($post['text']) || (utf8_strlen($post['text']) < 25) || (utf8_strlen($post['text']) > 1000))) {
				$error = $this->language->get('error_text');
			}

			$attribute_fields = $this->model_customerpartner_master->getAllReviewFields();

			if ($attribute_fields && isset($post['review_attributes']) && is_array($post['review_attributes'])) {
				foreach ($attribute_fields as $key => $value) {
					if (!isset($post['review_attributes'][$value['field_id']]) || $post['review_attributes'][$value['field_id']] < 0 || $post['review_attributes'][$value['field_id']] > 5) {
						$error = $this->language->get('error_attribute');
					}
				}
			} else {
				$error = $this->language->get('error_attribute');
			}

			if (!isset($error)) {
				$this->model_customerpartner_master->saveFeedback($post,$post['seller_id']);
				$return_array = array('error' => 0,'message' => $this->language->get('text_success'));
			} else {
				$return_array = array('error' =>1,'message' => $error);
			}

			$this->response->addHeader('Content-Type: application/json');

			$this->response->setOutput(json_encode($return_array));
		}
	}

	/**
	 * [contactSeller description]
	 * @param  json $data contains the seller_id and email related data
	 * @return [json       [success/error message]
	 */
	public function contactSeller(){

		$this->load->language('account/api');

		$post = $this->request->post;

		//Accepting data in json format / raw data

		$raw_data = json_decode(file_get_contents("php://input"),true);

		if ($raw_data) {
			foreach ($raw_data as $key => $value) {
			    $post[$key] = $value;
			}
		}

		//Get wk_token from header
		if (isset(getallheaders()['wk_token'])) {
			$post['wk_token'] = getallheaders()['wk_token'];
		} elseif (isset(getallheaders()['Wk-Token'])) {
		  $post['wk_token'] = getallheaders()['Wk-Token'];
		}

		if (!isset($post['wk_token']) || !$this->checkSession($post['wk_token'])) {
			$this->response->addHeader('Content-Type: application/json');
			$this->response->setOutput(json_encode(array('fault'=>1,'message'=>$this->language->get('text_token_message'))));
		} else {

			$this->load->model('customerpartner/mail');

			$this->load->model('account/customerpartner');

			$json = array();

			if (!isset($post['seller_id']) || !$post['seller_id']) {
				$json['error']['seller_id']= $this->language->get('text_seller_id_error');
			}

			if (!isset($post['subject']) || !$post['subject']) {
				$json['error']['subject']= $this->language->get('text_subject_error');
			}

			if (!isset($post['message']) || !$post['message']) {
				$json['error']['message']= $this->language->get('text_message_error');
			}

			if(!isset($json['error'])) {
				$seller_email = $this->model_account_customerpartner->getsellerEmail($post['seller_id']);

				$commission = $this->model_account_customerpartner->getSellerCommission($post['seller_id']);

				$data = array(
					'seller_message' => $post['message'],
					'seller_id' => $post['seller_id'],
					'customer_id' => $this->customer->getId(),
				    'mail_id' => $this->config->get('marketplace_mail_cutomer_to_seller'),
				    'mail_from' => $this->customer->getEmail(),
				    'mail_to' => $seller_email,
				);

				$values = array (
					'message' => $post['message'],
					'subject' => $post['subject'],
					'customer_name' => $this->customer->getFirstName().' '.$this->customer->getLastName(),
					'commission' => $commission,
				);
				$this->model_customerpartner_mail->mail($data,$values);

				if($this->config->get('marketplace_mailadmincustomercontactseller')) {

					$data['mail_to'] = $this->config->get('marketplace_adminmail');
					$this->model_customerpartner_mail->mail($data,$values);
				}
				$this->language->load('module/marketplace');
				$return_array = array("error"=>0,'data'=>$this->language->get('text_success_mail'));
			} else {
				$return_array = array('error' =>1,'data' => $json['error']);
			}

			$this->response->addHeader('Content-Type: application/json');

			$this->response->setOutput(json_encode($return_array));
		}
	}

	public function getSellData(){

		$this->load->language('account/api');

		$post = $this->request->post;

		//Accepting data in json format / raw data

		$raw_data = json_decode(file_get_contents("php://input"),true);

		if ($raw_data) {
			foreach ($raw_data as $key => $value) {
			    $post[$key] = $value;
			}
		}

		//Get wk_token from header
		if (isset(getallheaders()['wk_token'])) {
			$post['wk_token'] = getallheaders()['wk_token'];
		} elseif (isset(getallheaders()['Wk-Token'])) {
		  $post['wk_token'] = getallheaders()['Wk-Token'];
		}

		if (!isset($post['wk_token']) || !$this->checkSession($post['wk_token'])) {
			$this->response->addHeader('Content-Type: application/json');
			$this->response->setOutput(json_encode(array('fault'=>1,'message'=>$this->language->get('text_token_message'))));
		} else {

			if (isset($post['width']) && $post['width']) {
				$width = $post['width'];
			} else {
				$width = 100;
			}

			if (isset($post['page']) && $post['page']) {
				$page = $post['page'];
			} else {
				$page = 1;
			}
			if (isset($post['sort'])) {
				$sort = $post['sort'];
			} else {
				$sort = 'c2p.product_id';
			}
	
			if (isset($post['order'])) {
				$order = $post['order'];
			} else {
				$order = 'ASC';
			}
			if (isset($post['limit']) && $post['limit']) {
				$limit = $post['limit'];
			} else {
				$limit = 10;
			}

			$filter_data = array(
				'start'              => ($page - 1) * $limit,
				'limit'              => $limit
			);

			$this->load->model('tool/image');
			$this->load->model('customerpartner/master');
			$this->load->model('wkrestapi/catalog');
			$this->language->load('customerpartner/sell');

			$buttontitle = $this->config->get('marketplace_sellbuttontitle');
			$sellerHeader = $this->config->get('marketplace_sellheader');

			$data['sell_title'] = $buttontitle[$this->config->get('config_language_id')];
			$data['sell_header'] = $sellerHeader[$this->config->get('config_language_id')];
			$data['showpartners'] = $this->config->get('marketplace_showpartners');
			$data['showproducts'] = $this->config->get('marketplace_showproducts');
			$data['heading_title'] = $this->language->get('heading_title');
			$data['text_long_time_seller'] = $this->language->get('text_long_time_seller');
			$data['text_latest_product'] = $this->language->get('text_latest_product');
			$data['text_tax'] = $this->language->get('text_tax');
			$data['text_from'] = $this->language->get('text_from');
			$data['text_seller'] = $this->language->get('text_seller');
			$data['text_total_products'] = $this->language->get('text_total_products');
			$data['button_cart'] = $this->language->get('button_cart');
			$data['button_wishlist'] = $this->language->get('button_wishlist');
			$data['button_compare'] = $this->language->get('button_compare');

			$partners = $this->model_customerpartner_master->getOldPartner();

			$data['partners'] = array();

			if (!$this->config->get('marketplace_seller_info_hide')) {
			foreach ($partners as $key => $result) {
				if ($result['avatar']) {
					$dc_image = DIR_IMAGE.$result['avatar'];
					$image = $this->model_tool_image->resize($result['avatar'], 100, 100);
				} else if($result['avatar'] == 'removed') {
					$dc_image = '';
					$image = '';
				} else if($this->config->get('marketplace_default_image_name')) {
					$dc_image = DIR_IMAGE.$this->config->get('marketplace_default_image_name');
					$image = $this->model_tool_image->resize($this->config->get('marketplace_default_image_name'), 100, 100);
				} else {
					$dc_image = DIR_IMAGE.'no_image.png';
					$image = $this->model_tool_image->resize('no_image.png', 100, 100);
				}

				$this->load->model('wkrestapi/catalog');
				$dominant_color = $this->model_wkrestapi_catalog->getDominantColor($dc_image);

				$data['partners'][] = array(
					'customer_id' 		=> $result['customer_id'],
					'name' 		  		=> html_entity_decode($result['firstname'].' '.$result['lastname'],ENT_QUOTES,'UTF-8'),
					'companyname' 		=> html_entity_decode($result['companyname'],ENT_QUOTES,'UTF-8'),
					'backgroundcolor' 		=> $result['backgroundcolor'],
					'country'  	  		=> html_entity_decode($result['country'],ENT_QUOTES,'UTF-8'),

					'thumb'       		=> $image,
					'dominant_color' => $dominant_color,
					'total_products'    => $this->model_customerpartner_master->getPartnerCollectionCount($result['customer_id']),
				);
			}
		}
		$filter_data = array(
			'sort'                => $sort,
			'order'               => $order,
			'start'               => ($page - 1) * $limit,
			'limit'               => $limit
		);

			$latest = $this->model_customerpartner_master->getLatest($filter_data);
			$data['total_latest'] = $this->model_customerpartner_master->getTotalLatest($filter_data);
			$data['latest'] = array();
			$data['tabs'] = array();

			$marketplace_tab = $this->config->get('marketplace_tab');

			if(isset($marketplace_tab['heading']) AND $marketplace_tab['heading']){
				ksort($marketplace_tab['heading']);
				ksort($marketplace_tab['description']);
				foreach ($marketplace_tab['heading'] as $key => $value) {
					$text = $marketplace_tab['description'][$key][$this->config->get('config_language_id')];
				    $text = trim(html_entity_decode($text));
					$data['tabs'][] = array(
						'id' => $key,
						'hrefValue' => html_entity_decode($value[$this->config->get('config_language_id')]),
						'description' => $text,
					);
				}
			}

			foreach($latest as $key => $result){

				if ($result['image']) {
					$image = $this->model_tool_image->resize($result['image'], $width/4, $width/4);
				} else {
					$image = $this->model_tool_image->resize('no_image.png', $width/4, $width/4);
				}

				if (isset($result['image']) && is_file(DIR_IMAGE.$result['image'])) {
					$dc_image = DIR_IMAGE.$result['image'];
				} elseif (is_file(DIR_IMAGE.'placeholder.png')) {
					$dc_image = DIR_IMAGE.'placeholder.png';
				} else {
					$dc_image = '';
				}

				$dominant_color = $this->model_wkrestapi_catalog->getDominantColor($dc_image);

				if ($result['avatar']) {
					$dc_image = DIR_IMAGE.$result['avatar'];
					$avatar = $this->model_tool_image->resize($result['avatar'], 70, 70);
				} else if($result['avatar'] == 'removed') {
					$avatar = '';
					$dc_image = '';
				} else if($this->config->get('marketplace_default_image_name')) {
					$dc_image = DIR_IMAGE.$this->config->get('marketplace_default_image_name');
					$avatar = $this->model_tool_image->resize($this->config->get('marketplace_default_image_name'), 50, 50);
				} else {
					$dc_image = DIR_IMAGE.'no_image.png';
					$avatar = $this->model_tool_image->resize('no_image.png', 50, 50);
				}

				$avatar_dominant_color = $this->model_wkrestapi_catalog->getDominantColor($dc_image);

				if (($this->config->get('config_customer_price') && $this->customer->isLogged()) || !$this->config->get('config_customer_price')) {
					$price = $this->currency->format($this->tax->calculate($result['price'], $result['tax_class_id'], $this->config->get('config_tax')),$this->session->data['currency']);
				} else {
					$price = '';
				}

				if ((float) $result['special']) {
	        $formatedSpecial = $this->currency->format($this->tax->calculate($result['special'], $result['tax_class_id'], $this->config->get('config_tax')), $this->session->data['currency']);
	        $special = $result['special'];
	      } else {
	        $formatedSpecial = '';
	        $special = 0.00;
	      }

				if ($this->config->get('config_tax')) {
					$tax = $this->currency->format(((float)$result['special'] ? $result['special'] : $result['price']),$this->session->data['currency']);
				} else {
					$tax = '';
				}

				if ($this->config->get('config_review_status')) {
					$rating = (int)$result['rating'];
				} else {
					$rating = false;
				}

				$this->load->model('catalog/product');

				$product_info = $this->model_catalog_product->getProduct($result['product_id']);

				if ($product_info['quantity'] <= 0) {
					$stock = $product_info['stock_status'];
				} elseif ($this->config->get('config_stock_display')) {
					$stock = $product_info['quantity'];
				} else {
					$stock = 'In Stock';
				}

				$data['latest'][] = array(
					'product_id'  => $result['product_id'],
					'customer_id'  => $result['customer_id'],
					'seller_name' => html_entity_decode($result['seller_name'],ENT_QUOTES,'UTF-8'),
					'country'  	  => html_entity_decode($result['country'],ENT_QUOTES,'UTF-8'),
					'avatar'  	  => $avatar,
					'avatar_dominant_color' => $avatar_dominant_color,
					'backgroundcolor'  	  => $result['backgroundcolor'],
					'sellerHref'  => html_entity_decode($this->url->link('customerpartner/profile', 'id=' . $result['customer_id'], 'SSL')),
					'thumb'       => $image,
					'dominant_color' => $dominant_color,
					'name'        => html_entity_decode($result['name'],ENT_QUOTES,"UTF-8"),
					'description' => utf8_substr(strip_tags(html_entity_decode($result['description'], ENT_QUOTES, 'UTF-8')), 0, $this->config->get('config_product_description_length')) . '..',
					'price'       => $price,
					'special' 	 => (float) $special,
		      'formatted_special' => $formatedSpecial,
					'tax'         => $tax,
					'hasOption'	  => $this->model_wkrestapi_catalog->productOption($result['product_id']),
					'stock'		  => $stock,
					'rating'      => $result['rating'],
					'href'        => html_entity_decode($this->url->link('product/product', 'product_id=' . $result['product_id'], 'SSL'))
				);
			}

			$this->response->addHeader('Content-Type: application/json');

			$this->response->setOutput(json_encode(array('error' => 0, 'data' => $data)));
		}
	}


	/**
	* Get Marketplace allowed product tabs
	*/

	public function getProductTabs() {

		$this->load->language('account/api');

		$post = $this->request->post;

		//Accepting data in json format / raw data

		$raw_data = json_decode(file_get_contents("php://input"),true);

		if ($raw_data) {
			foreach ($raw_data as $key => $value) {
				$post[$key] = $value;
			}
		}

		//Get wk_token from header
		if (isset(getallheaders()['wk_token'])) {
			$post['wk_token'] = getallheaders()['wk_token'];
		} elseif (isset(getallheaders()['Wk-Token'])) {
			$post['wk_token'] = getallheaders()['Wk-Token'];
		}

		if (!isset($post['wk_token']) || !$this->checkSession($post['wk_token'])) {
			$return_data = array('fault'	=>	1, 'message'	=>	$this->language->get('text_token_message'));
		} else {
				if($this->config->get('module_marketplace_status') || $this->config->get('marketplace_status')) {
					$tabs = array('general' => true, 'data' => true);

						$mp_allowed_tab = array();

					if($this->config->get('marketplace_allowedproducttabs')) {
						$mp_allowed_tab = $this->config->get('marketplace_allowedproducttabs');
					}

						$compare_tab = array(
							'links',
							'attribute',
							'options',
							'discount',
							'special',
							'images',
							'custom-field'
						);

						foreach($compare_tab as $key => $value) {
							if(array_key_exists($value,$mp_allowed_tab))
							$tabs[$value] = true;
							else
							$tabs[$value] = false;
						}

					$return_data = array(
						'error'  => 0,
						'mp_allowed_product_tab'  => $tabs
					);
				} else {
					$return_data = array(
						'error'  => 1,
						'message'  => 'Marketplace Extension Disabled'
					);
				}
	}
	if(isset($this->session->data['product_data']))
	unset($this->session->data['product_data']);
	$this->response->addHeader('Content-Type: application/json');
	$this->response->setOutput(json_encode($return_data));
}

/**
* Get Marketplace allowed product tabs
*/

public function setProductData() {

	$this->load->language('account/api');

	$post = $this->request->post;

	//Accepting data in json format / raw data

	$raw_data = json_decode(file_get_contents("php://input"),true);

	if ($raw_data) {
		foreach ($raw_data as $key => $value) {
			$post[$key] = $value;
		}
	}

	//Get wk_token from header
	if (isset(getallheaders()['wk_token'])) {
		$post['wk_token'] = getallheaders()['wk_token'];
	} elseif (isset(getallheaders()['Wk-Token'])) {
		$post['wk_token'] = getallheaders()['Wk-Token'];
	}

	if (!isset($post['wk_token']) || !$this->checkSession($post['wk_token'])) {
		$return_data = array('fault'	=>	1, 'message'	=>	$this->language->get('text_token_message'));
	} else {
			if($this->config->get('module_marketplace_status') || $this->config->get('marketplace_status')) {
				$access_status = true;
				$this->load->model('account/customerpartner');
				if (isset($post['product_id']) && $post['product_id']) {
					$access_status = $this->model_account_customerpartner->chkSellerProductAccess($post['product_id']);
				}

				if ($access_status) {
					$return_data['error'] = 0;

					if(isset($post['function']) && $post['function'] == 'general') {

						$return_data['tab_name'] = 'general';

						$return_data = $this->setGeneralfunction($post);

					} elseif(isset($post['function']) && $post['function'] == 'data') {

						$return_data['tab_name'] = 'data';

						$return_data = $this->setDataFunction($post);
					} elseif(isset($post['function']) && $post['function'] == 'links') {

						$return_data['tab_name'] = 'links';
						$post['product_link_tab'] = 1;

						$return_data = $this->setSamefunction($post);
					} elseif(isset($post['function']) && $post['function'] == 'attribute') {

						$post['product_attribute_tab'] = 1;
						$return_data['tab_name'] = 'attribute';

						$return_data = $this->setSamefunction($post);
					} elseif(isset($post['function']) && $post['function'] == 'options') {

						$return_data['tab_name'] = 'options';
						$post['product_option_tab'] = 1;

						$return_data = $this->setSamefunction($post);
					} elseif(isset($post['function']) && $post['function'] == 'discount') {

						$return_data['tab_name'] = 'discount';
						$post['product_discount_tab'] = 1;

						$return_data = $this->setSamefunction($post);
					} elseif(isset($post['function']) && $post['function'] == 'special') {

						$return_data['tab_name'] = 'special';
						$post['product_special_tab'] = 1;

						$return_data = $this->setSamefunction($post);
					} elseif(isset($post['function']) && $post['function'] == 'images') {

						$return_data['tab_name'] = 'images';

						$return_data = $this->setSameFunction($post);
					} elseif(isset($post['function']) && $post['function'] == 'custom_field') {

						$return_data['tab_name'] = 'custom_field';

						$return_data = $this->setSamefunction($post);
					} else {
						$return_data['error'] = 1;
						$return_data['message'] = 'Function Required';
					}
				} else {
					$return_data['error'] = 1;
					$return_data['message'] = $this->language->get('text_login_error');
				}
			} else {
				$return_data = array(
					'error'  => 1,
					'message'  => 'Marketplace Extension Disabled'
				);
			}
}
$this->response->addHeader('Content-Type: application/json');
$this->response->setOutput(json_encode($return_data));
}

protected function setGeneralfunction($data = array()) {
	$this->language->load('account/customerpartner/addproduct');
		if (isset($data['product_description']) && $data['product_description'] && !is_array($data['product_description'])) {
			$data['product_description'] = stripslashes(html_entity_decode($data['product_description']));
			$data['product_description'] = json_decode($data['product_description'],true);
		}

if(isset($data['product_description']) && is_array($data['product_description'])) {
	foreach ($data['product_description'] as $key => $value) {
		if(isset($value['name'])) {
			if ((utf8_strlen($value['name']) < 3) || (utf8_strlen($value['name']) > 255)) {
				$return_data['error'] = 1;
				$return_data['message'] = $this->language->get('error_name');
			} else {
				$return_data['error'] = 0;
			}
		} else {
			$return_data['error'] = 1;
			$return_data['message'] = $this->language->get('error_name');
		}

		if(isset($value['meta_title'])) {
			if ((utf8_strlen($value['meta_title']) < 3) || (utf8_strlen($value['meta_title']) > 255)) {
				$return_data['error'] = 1;
				$return_data['message'] = $this->language->get('error_meta_title');
			} else {
				$return_data['error'] = 0;
			}
		} else {
			$return_data['error'] = 1;
			$return_data['message'] = $this->language->get('error_meta_title');
		}
	}
} else {
	$return_data['error'] = 1;
	$return_data['message'] = $this->language->get('text_verify');
}

	if($return_data['error'] == 0) {
		$general_data = array();
		foreach($data['product_description'] as $key => $value) {
			if(!isset($value['language_id']))
	    $general_data[1] = $value;
	    else
	    $general_data[$value['language_id']] = $value;
		}
		$this->session->data['product_data']['product_description'] = $general_data;
	}

	return $return_data;
}

protected function setDatafunction($data = array()) {
	$this->language->load('account/customerpartner/addproduct');
	if(isset($data['model'])) {
		if ((utf8_strlen($data['model']) < 1) || (utf8_strlen($data['model']) > 64)) {
			$return_data['error'] = 1;
			$return_data['message'] = $this->language->get('error_model');
		} else {
			$return_data['error'] = 0;
		}
	} else {
		$return_data['error'] = 1;
		$return_data['message'] = $this->language->get('error_model');
	}

	if($return_data['error'] == 0) {
		foreach ($data as $key => $value) {
			$this->session->data['product_data'][$key] = $value;
		}
	}
	if(isset($this->session->data['product_data']['image'])) {
			$explode = explode('/',$this->session->data['product_data']['image']);
			if(count($explode) == 3 ){ 
				$this->session->data['product_data']['image'] = 'wkseller/'. $explode[1] ."/".$explode[count($explode)-1];
			}else{ 
				$this->session->data['product_data']['image'] = 'wkseller/'.$explode[count($explode)-1];
			}
			
	}
	return $return_data;
}

protected function setSamefunction($data = array()) {
	$return_data['error'] = 0;
	foreach ($data as $key => $value) {
		if(!is_array($value)) {
			$value = stripslashes(html_entity_decode($value));
			$value = json_decode($value,true);
		}
		$this->session->data['product_data'][$key] = $value;

	}

	if(isset($data['manufacturer'])) {
		$this->session->data['product_data']['manufacturer'] = $data['manufacturer'];
	}

	if(isset($data['manufacturer_id'])) {
		$this->session->data['product_data']['manufacturer_id'] = $data['manufacturer_id'];
	}

	foreach ($this->getProductFieldName() as $key) {
		if (isset($this->session->data['product_data'][$key]) && $this->session->data['product_data'][$key] && !is_array($this->session->data['product_data'][$key])) {
		$this->session->data['product_data'][$key] = stripslashes(html_entity_decode($data[$key]));
			$this->session->data['product_data'][$key] = json_decode($this->session->data['product_data'][$key],true);
		}
	}
	if(isset($this->session->data['product_data']['product_image'])) {
		$dir = $this->customer->getFirstName().$this->customer->getId();
		foreach($this->session->data['product_data']['product_image'] as $key1 => $value1) {
			$explode = explode('/',$value1['image']);
			if(count($explode) == 3 ){ 
				$this->session->data['product_data']['product_image'][$key1]['image'] = 'wkseller/'. $explode[1] ."/".$explode[count($explode)-1];
			}else{ 
			$this->session->data['product_data']['product_image'][$key1]['image'] = 'wkseller/'.$explode[count($explode)-1];
			}
		
		}
	}

	if (isset($this->session->data['product_data']['product_attribute'])) {
		foreach ($this->session->data['product_data']['product_attribute'] as $key => $product_attribute) {
			if ($product_attribute['attribute_id']) {
				$desc = array();
				foreach ($product_attribute['product_attribute_description'] as $key1 => $product_attribute_description) {
					if(!isset($product_attribute_description['language_id']))
					break 2;
					$desc[$product_attribute_description['language_id']] = $product_attribute_description;
				}
				$this->session->data['product_data']['product_attribute'][$key]['product_attribute_description'] = $desc;
			} else {
				unset($this->session->data['product_data']['product_attribute']);
			}
		}
	}

	return $return_data;
}

protected function getProductFieldName() {
	$return_data = array(
		'product_category',
		'product_related',
		'product_attribute',
		'product_option',
		'product_discount',
		'product_special',
		'product_filter',
		'product_image'
	);
return	$return_data;
}

/**
* Get Marketplace allowed product tabs
*/

public function getProductData() {

	$this->load->language('account/api');

	$post = $this->request->post;

	//Accepting data in json format / raw data

	$raw_data = json_decode(file_get_contents("php://input"),true);

	if ($raw_data) {
		foreach ($raw_data as $key => $value) {
			$post[$key] = $value;
		}
	}

	//Get wk_token from header
	if (isset(getallheaders()['wk_token'])) {
		$post['wk_token'] = getallheaders()['wk_token'];
	} elseif (isset(getallheaders()['Wk-Token'])) {
		$post['wk_token'] = getallheaders()['Wk-Token'];
	}

	if (!isset($post['wk_token']) || !$this->checkSession($post['wk_token'])) {
		$return_data = array('fault'	=>	1, 'message'	=>	$this->language->get('text_token_message'));
	} else {
			if($this->config->get('module_marketplace_status') || $this->config->get('marketplace_status')) {

				$return_data['error'] = 0;
				$required_index = array('product_id' => isset($post['product_id']) ? $post['product_id'] : 0, 'width' => isset($post['width']) ? $post['width'] : 100);

				if(isset($post['function']) && $post['function'] == 'general') {

					$return_data['tab_name'] = 'general';

					$return_data['tab']['general'] = $this->getGeneralfunction($required_index);

				} elseif(isset($post['function']) && $post['function'] == 'data') {

					$return_data['tab_name'] = 'data';


					$return_data['tab']['data'] = $this->getDataFunction($required_index);
				} elseif(isset($post['function']) && $post['function'] == 'links') {

					$return_data['tab_name'] = 'links';

					$return_data['tab']['links'] = $this->getLInksFunction($required_index);

				} elseif(isset($post['function']) && $post['function'] == 'attribute') {

					$return_data['tab_name'] = 'attribute';


					$return_data['tab']['attribute'] = $this->getAttributeFunction($required_index);
				} elseif(isset($post['function']) && $post['function'] == 'options') {

					$return_data['tab_name'] = 'options';

					$return_data['tab']['options'] = $this->getOptionsFunction($required_index);
				} elseif(isset($post['function']) && $post['function'] == 'discount') {

					$return_data['tab_name'] = 'discount';

					$return_data['tab']['discount'] = $this->getDiscountFunction($required_index);
					$this->load->model('account/customerpartner');

					$return_data['tab']['discount']['customer_groups'] = $this->model_account_customerpartner->getCustomerGroups();
				} elseif(isset($post['function']) && $post['function'] == 'special') {

					$return_data['tab_name'] = 'special';
					$return_data['tab']['special'] = $this->getSpecialFunction($required_index);
					$this->load->model('account/customerpartner');
					$return_data['tab']['special']['customer_groups'] = $this->model_account_customerpartner->getCustomerGroups();
				} elseif(isset($post['function']) && $post['function'] == 'images') {

					$return_data['tab_name'] = 'images';

					$return_data['tab']['images'] = $this->getImagesFunction($required_index);
				} elseif(isset($post['function']) && $post['function'] == 'custom_field') {

					$return_data['tab_name'] = 'custom_field';

					$return_data['tab']['custom_field'] = $this->getCustomFieldFunction($required_index);
				} else {
					$return_data['error'] = 1;
					$return_data['message'] = 'Function Required';
				}

			} else {
				$return_data = array(
					'error'  => 1,
					'message'  => 'Marketplace Extension Disabled'
				);
			}
}
$this->response->addHeader('Content-Type: application/json');
$this->response->setOutput(json_encode($return_data));
}

protected function getGeneralfunction($data = array()) {
	$return_data['product_description'] = array();
	 $this->load->model('wkrestapi/catalog');
	 $return_data['languages'] = $this->model_wkrestapi_catalog->getProductLanguage();

	if(isset($this->session->data['product_data']['product_description'])) {
		$general_data = array();
		foreach($this->session->data['product_data']['product_description'] as $key => $value) {
			$general_data[] = $value;
		}
		$return_data['product_description'] = $general_data;
	} elseif (isset($data['product_id']) && $data['product_id']) {
			$this->load->model('account/customerpartner');
			$this->load->model('localisation/language');
			$p_description = $this->model_account_customerpartner->getProductDescriptions($data['product_id']);
			foreach ($p_description as $key => $value) {
				$value['name'] = html_entity_decode($value['name'], ENT_QUOTES, 'UTF-8');
				$language_code = $this->model_localisation_language->getLanguage($key);

				if(isset($language_code['code']))
				$return_data['product_description'][] = array_merge(array('language_id' => $key,'code' => $language_code['code'],'language_name' => $language_code['name']),$value);
			}
		} else {
		$return_data['product_description'] = array();
	}

	if (isset($return_data['product_description']) && !empty($return_data['product_description'])) {
		foreach($return_data['product_description'] as $key => $value) {
			if (isset($return_data['product_description'][$key]['description'])) {
				$return_data['product_description'][$key]['description'] = strip_tags(html_entity_decode(html_entity_decode($return_data['product_description'][$key]['description'],ENT_QUOTES,'UTF-8'),ENT_QUOTES,'UTF-8'));
			}

			if (isset($return_data['product_description'][$key]['meta_description'])) {
				$return_data['product_description'][$key]['meta_description'] = strip_tags(html_entity_decode($return_data['product_description'][$key]['meta_description'],ENT_QUOTES,'UTF-8'));
			}

			if (isset($return_data['product_description'][$key]['meta_title'])) {
				$return_data['product_description'][$key]['meta_title'] = strip_tags(html_entity_decode($return_data['product_description'][$key]['meta_title'],ENT_QUOTES,'UTF-8'));
			}
		}
	}

	return $return_data;
}

protected function getDatafunction($data = array()) {
	if (version_compare(VERSION,'3.0.0.0','>=')) {
		$this->load->model('mp_localisation/tax_class');
		$return_data['tax_classes'] = $this->model_mp_localisation_tax_class->getTaxClasses();

		$this->load->model('mp_localisation/stock_status');
		$return_data['stock_statuses'] = $this->model_mp_localisation_stock_status->getStockStatuses();

		$this->load->model('mp_localisation/weight_class');
		$return_data['weight_classes'] = $this->model_mp_localisation_weight_class->getWeightClasses();

		$this->load->model('mp_localisation/length_class');
		$return_data['length_classes'] = $this->model_mp_localisation_length_class->getLengthClasses();
	} else {
		$this->load->model('localisation/tax_class');
		$return_data['tax_classes'] = $this->model_localisation_tax_class->getTaxClasses();

		$this->load->model('localisation/stock_status');
		$return_data['stock_statuses'] = $this->model_localisation_stock_status->getStockStatuses();

		$this->load->model('localisation/weight_class');
		$return_data['weight_classes'] = $this->model_localisation_weight_class->getWeightClasses();

		$this->load->model('localisation/length_class');
		$return_data['length_classes'] = $this->model_localisation_length_class->getLengthClasses();
	}


	$active_product_field_name = array();
	if($this->config->get('marketplace_allowedproductcolumn'))
	$active_product_field_name = $this->config->get('marketplace_allowedproductcolumn');

	// array for all data tab fields which are managed by admin panel
	$product_column_name = array(
		'sku' 						=> '',
		'upc' 						=> '',
		'ean' 						=> '',
		'jan' 						=> '',
		'isbn' 						=> '',
		'mpn' 						=> '',
		'location' 				=> '',
		'quantity' 				=> '0',
		'stock_status_id' => $this->config->get('config_stock_status_id'),
		'manufacturer_id' => '0',
		'shipping' 				=> '1',
		'price' 					=> '0',
		'points' 					=> '',
		'tax_class_id' 		=> '0',
		'date_available' 	=>  date('Y-m-d', time()),
		'weight' 					=> '',
		'weight_class_id' => '0',
		'length' 					=> '',
		'width' 					=> '',
		'height' 					=> '',
		'length_class_id' => '0',
		'subtract' 				=> '1',
		'minimum' 				=> '1',
		'sort_order' 			=> '0',
	);

	$this->load->model('tool/image');
	$this->load->model('account/customerpartner');
	$this->load->model('wkrestapi/catalog');

	//Product Details
	$product_info = $this->model_account_customerpartner->getProduct($data['product_id']);

	if (isset($data['width']) && $data['width']) {
		$width = $data['width'];
	} else {
		$width = 100;
	}

	//Product Model
	if(isset($this->session->data['product_data']['model']))
	$return_data['model'] = html_entity_decode($this->session->data['product_data']['model'],ENT_QUOTES,'UTF-8');
	elseif(isset($product_info['model']))
	$return_data['model'] = html_entity_decode($product_info['model'],ENT_QUOTES,'UTF-8');
	else
	$return_data['model'] = '';

	foreach($product_column_name as $field => $value) {
			if(array_key_exists($field,$active_product_field_name)) {
				$return_data['is_' . $field] = true;
				if (isset($this->session->data['product_data'][$field])) {
					$return_data[$field] = (string) $this->session->data['product_data'][$field];
				} elseif(is_array($product_info) && isset($product_info[$field])) {
					$return_data[$field] = (string) $product_info[$field];
				} else {
					$return_data[$field] = (string) $value;
				}
			} else {
				$return_data['is_' . $field] = false;
				$return_data[$field] = '';
			}
	}

	if (array_key_exists('image',$active_product_field_name)) {
		$return_data['is_image'] =  true;
		if (isset($this->session->data['product_data']['image']) && is_file(DIR_IMAGE . $this->session->data['product_data']['image'])) {
			$return_data['image'] =  $this->session->data['product_data']['image'];
			$return_data['thumb'] =  $this->model_tool_image->resize($this->session->data['product_data']['image'], $width, $width);
		} elseif(is_array($product_info) && is_file(DIR_IMAGE . $product_info['image'])) {
			$return_data['image'] =  $product_info['image'];
			$return_data['thumb'] =  $this->model_tool_image->resize($product_info['image'], $width, $width);
		} else {
			$return_data['image'] =  'no_image.png';
			$return_data['thumb'] =  $this->model_tool_image->resize('no_image.png', $width, $width);
		}
	} else {
		$return_data['is_image'] =  false;
		$return_data['image'] =  '';
		$return_data['thumb'] =  '';
	}
	return $return_data;
}

protected function getLinksfunction($data = array()) {
	$return_data = array();

	$return_data['is_category'] = false;
	if ($this->config->get('marketplace_seller_category_required'))
	$return_data['is_category'] = true;

	$this->load->model('account/customerpartner');
		$product_info = $this->model_account_customerpartner->getProduct($data['product_id']);

		if (isset($this->session->data['product_data']['manufacturer'])) {
			$return_data['manufacturer'] = html_entity_decode($this->session->data['product_data']['manufacturer'], ENT_QUOTES, 'UTF-8');
		} elseif (isset($product_info['manufacturer'])) {
			$return_data['manufacturer'] = html_entity_decode($product_info['manufacturer'], ENT_QUOTES, 'UTF-8');
		} else {
			$return_data['manufacturer'] = '';
		}

		if (isset($this->session->data['product_data']['manufacturer_id'])) {
			$return_data['manufacturer_id'] = (int) $this->session->data['product_data']['manufacturer_id'];
		} elseif (isset($product_info['manufacturer_id'])) {
			$return_data['manufacturer_id'] = (int) $product_info['manufacturer_id'];
		} else {
			$return_data['manufacturer_id'] = 0;
		}

		if (isset($this->session->data['product_data']['product_category'])) {
			$categories = $this->session->data['product_data']['product_category'];
		} elseif (isset($data['product_id']) && $data['product_id']) {
			$categories = $this->model_account_customerpartner->getProductCategories($data['product_id']);
		} else {
			$categories = array();
		}

		$return_data['product_categories'] = array();

		foreach ($categories as $category_id) {
			$category_info = $this->model_account_customerpartner->getCategory($category_id);
			if ($category_info) {
				$name = ($category_info['path'] ? $category_info['path'] . ' &gt; ' : '') . $category_info['name'];
				$return_data['product_categories'][] = array(
					'category_id' => $category_info['category_id'],
					'name'        => html_entity_decode($name, ENT_QUOTES, 'UTF-8')
				);
			}
		}


	if (isset($this->session->data['product_data']['product_filter'])) {
		$filters = $this->session->data['product_data']['product_filter'];
	} elseif (isset($data['product_id']) && $data['product_id']) {
		$filters = $this->model_account_customerpartner->getProductFilters($data['product_id']);
	} else {
		$filters = array();
	}

	$return_data['product_filters'] = array();

	foreach ($filters as $filter_id) {
	$filter_info = $this->model_account_customerpartner->getFilter($filter_id);

	if ($filter_info) {
			$name = $filter_info['group'] . ' &gt; ' . $filter_info['name'];
			$return_data['product_filters'][] = array(
				'filter_id' => $filter_info['filter_id'],
				'name'      => html_entity_decode($name, ENT_QUOTES, 'UTF-8')
			);
		}
	}
	$tabletype = '';

	if (isset($this->session->data['product_data']['product_download'])) {
		if(!is_array($this->session->data['product_data']['product_download'])) {
			$this->session->data['product_data']['product_download'] = stripslashes(html_entity_decode($this->session->data['product_data']['product_download']));
			$this->session->data['product_data']['product_download'] = json_decode($this->session->data['product_data']['product_download'],true);
		}
		$product_downloads = $this->session->data['product_data']['product_download'];
	} elseif (isset($data['product_id']) && $data['product_id']) {
		$product_downloads = $this->model_account_customerpartner->getProductDownloads($data['product_id'],$tabletype);
	} else {
		$product_downloads = array();
	}

	$return_data['product_downloads'] = array();

	foreach ($product_downloads as $download_id) {
		$download_info = $this->model_account_customerpartner->getDownloadProduct($download_id,$tabletype);

		if ($download_info) {
			$return_data['product_downloads'][] = array(
				'download_id' => $download_info['download_id'],
				'name'        => html_entity_decode($download_info['name'], ENT_QUOTES, 'UTF-8')
			);
		}
	}

	if (isset($this->session->data['product_data']['product_related'])) {
		$products = $this->session->data['product_data']['product_related'];
	} elseif (isset($data['product_id']) && $data['product_id']) {
		$products = $this->model_account_customerpartner->getProductRelated($data['product_id']);
	} else {
		$products = array();
	}

	$return_data['product_relateds'] = array();
	foreach ($products as $product_id) {
		$related_info = $this->model_account_customerpartner->getProductRelatedInfo($product_id,$tabletype);

		if ($related_info) {
			$return_data['product_relateds'][] = array(
				'product_id' => $related_info['product_id'],
				'name'       => html_entity_decode($related_info['name'], ENT_QUOTES, 'UTF-8')
			);
		}
	}

	return $return_data;
}


protected function getAttributefunction($data = array()) {
	// Attributes
	$this->load->model('account/customerpartner');
	if (isset($this->session->data['product_data']['product_attribute'])) {
		$product_attributes = $this->session->data['product_data']['product_attribute'];
	} elseif (isset($data['product_id']) && $data['product_id']) {
		$product_attributes = $this->model_account_customerpartner->getProductAttributes($data['product_id']);
	} else {
		$product_attributes = array();
	}

	$this->load->model('wkrestapi/catalog');
	$return_data['languages'] = $this->model_wkrestapi_catalog->getProductLanguage();

	$return_data['product_attributes'] = array();

	foreach ($product_attributes as $product_attribute) {

	if ($product_attribute) {
			$product_attribute_description = array();

			foreach ($product_attribute['product_attribute_description'] as $key => $value) {
				$product_attribute_description[] = array_merge(array('language_id' => $key),$value);
			}

			$return_data['product_attributes'][] = array(
				'attribute_id'                  => $product_attribute['attribute_id'],
				'name'                          => html_entity_decode($product_attribute['name'], ENT_QUOTES, 'UTF-8'),
				'product_attribute_description' => $product_attribute_description
			);
		}
	}
	return $return_data;
}

protected function getOptionsfunction($data = array()) {
	$this->load->model('account/customerpartner');
	// Options
	if (isset($this->session->data['product_data']['product_option'])) {
		$product_options = $this->session->data['product_data']['product_option'];
	} elseif (isset($data['product_id']) && $data['product_id']) {
		$product_options = $this->model_account_customerpartner->getProductOptions($data['product_id']);
	} else {
		$product_options = array();
	}

	$return_data['product_options'] = array();

	foreach ($product_options as $product_option) {
	if ($product_option['type'] == 'select' || $product_option['type'] == 'radio' || $product_option['type'] == 'checkbox' || $product_option['type'] == 'image') {
	$product_option_value_data = array();

	foreach ($product_option['product_option_value'] as $product_option_value) {
		$product_option_value_data[] = array(
			'product_option_value_id' => isset($product_option_value['product_option_value_id']) ? $product_option_value['product_option_value_id'] : '',
			'option_value_id'         => $product_option_value['option_value_id'],
			'quantity'                => $product_option_value['quantity'],
			'subtract'                => $product_option_value['subtract'],
			'price'                   => number_format($this->currency->convert($product_option_value['price'],$this->config->get('config_currency'),$this->session->data['currency']),2, '.', ''),
			'price_prefix'            => $product_option_value['price_prefix'],
			'points'                  => $product_option_value['points'],
			'points_prefix'           => $product_option_value['points_prefix'],
			'weight'                  => $product_option_value['weight'],
			'weight_prefix'           => $product_option_value['weight_prefix']
		);
	}

			$return_data['product_options'][] = array(
				'product_option_id'    => isset($product_option['product_option_id']) ? $product_option['product_option_id'] : '',
				'product_option_value' => $product_option_value_data,
				'option_id'            => $product_option['option_id'],
				'name'                 => html_entity_decode($product_option['name'], ENT_QUOTES, 'UTF-8'),
				'type'                 => $product_option['type'],
				'required'             => $product_option['required']
			);
			} else {
			$return_data['product_options'][] = array(
				'product_option_id' => isset($product_option['product_option_id']) ? $product_option['product_option_id'] : '',
				'option_id'         => $product_option['option_id'],
				'name'              => html_entity_decode($product_option['name'], ENT_QUOTES, 'UTF-8'),
				'type'              => $product_option['type'],
				'option_value'      => $product_option['option_value'],
				'required'          => $product_option['required']
			);
		}
	}

	$return_data['option_values'] = array();

	foreach ($return_data['product_options'] as $product_option) {
		if ($product_option['type'] == 'select' || $product_option['type'] == 'radio' || $product_option['type'] == 'checkbox' || $product_option['type'] == 'image') {
			$return_data['option_values'][] = array(
				'option_id' => $product_option['option_id'],
				'option_values' => $this->model_account_customerpartner->getOptionValues($product_option['option_id'])
			);
		}
	}

	return $return_data;
}

protected function getDiscountfunction($data = array()) {
	$this->load->model('account/customerpartner');
	if (isset($this->session->data['product_data']['product_discount'])) {
			$return_data['product_discounts'] = $this->session->data['product_data']['product_discount'];
	} elseif (isset($data['product_id']) && $data['product_id']) {
				$return_data['product_discounts'] = $this->model_account_customerpartner->getProductDiscounts($data['product_id']);
	} else {
			$return_data['product_discounts'] = array();
	}

	foreach (	$return_data['product_discounts'] as $key => $value) {
			$return_data['product_discounts'][$key]['price'] = number_format($this->currency->convert($value['price'],$this->config->get('config_currency'),$this->session->data['currency']),2, '.', '');
	}

	return $return_data;
}

protected function getSpecialfunction($data = array()) {
	$this->load->model('account/customerpartner');

	if (isset($this->session->data['product_data']['product_special'])) {
		$return_data['product_specials'] = $this->session->data['product_data']['product_special'];
	} elseif (isset($data['product_id']) && $data['product_id']) {
		$return_data['product_specials'] = $this->model_account_customerpartner->getProductSpecials($data['product_id']);
	} else {
		$return_data['product_specials'] = array();
	}

	foreach ($return_data['product_specials'] as $key => $value) {

		$return_data['product_specials'][$key]['price'] = number_format($this->currency->convert($value['price'],$this->config->get('config_currency'),$this->session->data['currency']),2, '.', '');
	}

	return $return_data;
}

protected function getImagesfunction($data = array()) {
	$this->load->model('tool/image');
	if (isset($this->session->data['product_data']['product_image'])) {
		$product_images = $this->session->data['product_data']['product_image'];
	} elseif (isset($data['product_id']) && $data['product_id']) {
		$this->load->model('catalog/product');
		$product_images = $this->model_catalog_product->getProductImages($data['product_id']);
	} else {
		$product_images = array();
	}

	$return_data['product_images'] = array();
	foreach ($product_images as $product_image) {
		if (is_file(DIR_IMAGE . $product_image['image'])) {
			$image = $product_image['image'];
		} else {
			$image = 'no_image.png';
		}

		$return_data['product_images'][] = array(
			'image'      => $image,
			'thumb'      => $this->model_tool_image->resize($image, $data['width'], $data['width']),
			'sort_order' => $product_image['sort_order']
		);
	}
	$return_data['image'] = 'no_image.png';
	$return_data['thumb'] = $this->model_tool_image->resize('no_image.png', $data['width'], $data['width']);

	return $return_data;
}

/**
 * Add a product
 * @param json $data contains product add
 */
public function addProduct()
{
	$this->load->language('account/api');

	$post = $this->request->post;

	//Accepting data in json format / raw data

	$raw_data = json_decode(file_get_contents("php://input"), true);

	if ($raw_data) {
		foreach ($raw_data as $key => $value) {
			$post[$key] = $value;
		}
	}

	//Get wk_token from header
	if (isset(getallheaders()['wk_token'])) {
	$post['wk_token'] = getallheaders()['wk_token'];
	} elseif (isset(getallheaders()['Wk-Token'])) {
	$post['wk_token'] = getallheaders()['Wk-Token'];
	}

	if (!isset($post['wk_token']) || !$this->checkSession($post['wk_token'])) {
		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode(array('fault'=>1,'message'=>$this->language->get('text_token_message'))));
	} else {
			$this->load->model('account/customerpartner');

			if(isset($post['product_id']) && $post['product_id']) {
				$this->load->model('account/customerpartner');
				$product_info = $this->model_account_customerpartner->getProduct($post['product_id']);

				if ($product_info) {
					$this->session->data['product_data']['product_discount_tab'] 	= true;
					$this->session->data['product_data']['product_special_tab'] 	= true;
					$this->session->data['product_data']['product_link_tab'] 			= true;
					$this->session->data['product_data']['product_option_tab'] 		= true;
					$this->session->data['product_data']['product_attribute_tab'] = true;

					//general tab edit
					if(isset($post['product_id']) && !isset($this->session->data['product_data']['product_description'])) {
						$product_description = $this->model_account_customerpartner->getProductDescriptions($post['product_id']);

						if(isset($product_description)) {
							$this->session->data['product_data']['product_description'] = $product_description;
						}
					}

					//data tab edit
					foreach ($post as $key => $value) {
						if(!isset($this->session->data['product_data'][$key]))
						$this->session->data['product_data'][$key] = $value;
					}

					if (!isset($this->session->data['product_data']['model'])) {
						$this->session->data['product_data']['model'] = $product_info['model'];
					}

						if (!isset($this->session->data['product_data']['price'])) {
							$this->session->data['product_data']['price'] = $this->currency->convert($product_info['price'],$this->config->get('config_currency'),$this->session->data['currency']);
						} else {
							$this->session->data['product_data']['price'] = (float) $this->session->data['product_data']['price'];
						}

					 //link tab edit
						if(!isset($this->session->data['product_data']['product_category'])) {
							$product_categories = $this->model_account_customerpartner->getProductCategories($post['product_id']);

							if(isset($product_categories)) {
								$this->session->data['product_data']['product_category'] = $product_categories;
							}
						}

						if(!isset($this->session->data['product_data']['product_filter'])) {
							$filters = $this->model_account_customerpartner->getProductFilters($post['product_id']);

							if(isset($filters)) {
								$this->session->data['product_data']['product_filter'] = $filters;
							}
						}

					if(!isset($this->session->data['product_data']['download'])) {
						$download = $this->model_account_customerpartner->getProductDownloads($post['product_id']);

						if(isset($download)) {
							$this->session->data['product_data']['download'] = $download;
						}
					}

					if(!isset($this->session->data['product_data']['product_related'])) {
						$related = $this->model_account_customerpartner->getProductRelated($post['product_id']);

						if(isset($related)) {
							$this->session->data['product_data']['product_related'] = $related;
						}
					}

					//attribute tab edit
					if(!isset($this->session->data['product_data']['product_attribute'])) {
						$attributes = $this->model_account_customerpartner->getProductAttributes($post['product_id']);

						if(isset($attributes)) {
							$this->session->data['product_data']['product_attribute'] = $attributes;
						}
					}

					//option tab edit
					if(!isset($this->session->data['product_data']['product_option'])) {
						$options = $this->model_account_customerpartner->getProductOptions($post['product_id']);

						if(isset($options)) {
							$this->session->data['product_data']['product_option'] = $options;
						}
					}

					//discount tab edit
					if(!isset($this->session->data['product_data']['product_discount'])) {
						$discount = $this->model_account_customerpartner->getProductDiscounts($post['product_id']);

						if(isset($discount)) {
							$this->session->data['product_data']['product_discount'] = $discount;
						}
					}

					//special tab edit
					if(!isset($this->session->data['product_data']['product_special'])) {
						$special = $this->model_account_customerpartner->getProductSpecials($post['product_id']);

						if(isset($special)) {
							$this->session->data['product_data']['product_special'] = $special;
						}
					}

					//images tab edit
					$this->load->model('catalog/product');

					if(!isset($this->session->data['product_data']['product_image'])) {
						$images = $this->model_catalog_product->getProductImages($post['product_id']);

						if(isset($images)) {
							$this->session->data['product_data']['product_image'] = $images;
						}
					}
				}
				$this->filter_product();

				$validate_data = $this->validateProduct();

				$this->load->language('account/mpapi');
				if ($validate_data['general'] || $validate_data['data'] || $validate_data['links']) {
					$return_array['error'] = 1;
					if(isset($validate_data['keyword_error'])) {
						$return_array['message'] = $validate_data['keyword_error'];
					} else {
						$return_array['message'] = $this->language->get('error_form');
					}
					$return_array = array_merge($return_array,$validate_data);
				} else {
					$this->request->get['product_id'] = $post['product_id'];
					$this->model_account_customerpartner->editProduct($this->session->data['product_data']);
					$return_array['error'] = 0;
					$return_array['message'] = $this->language->get('text_success_edit');
					unset($this->session->data['product_data']);
				}
			} else {
				$this->filter_product();
				$validate_data = $this->validateProduct();
				$this->load->language('account/mpapi');
				if ($validate_data['general'] || $validate_data['data'] || $validate_data['links']) {
					$return_array['error'] = 1;
					if(isset($validate_data['keyword_error'])) {
						$return_array['message'] = $validate_data['keyword_error'];
					} else {
						$return_array['message'] = $this->language->get('error_form');
					}
					$return_array = array_merge($return_array,$validate_data);
				} else {
					$product_id = $this->model_account_customerpartner->addProduct($this->session->data['product_data']);
					if ($product_id) {
						$return_array['error'] = 0;
						$return_array['message'] = $this->language->get('text_success_add');
						$return_array['product_id'] = $product_id;
						unset($this->session->data['product_data']);
					} else {
						$return_array['error'] = 1;
						$return_array['message'] = $this->language->get('error_unexpected');
					}
				}
			}
		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($return_array));
	}
}

protected function filter_product() {
	if (isset($this->session->data['product_data']['product_download']) && (!$this->session->data['product_data']['product_download'] || (!is_array($this->session->data['product_data']['product_download']) && $this->session->data['product_data']['product_download'] == '[]')))
	unset($this->session->data['product_data']['product_download']);

	if (isset($this->session->data['product_data']['product_filter']) && !$this->session->data['product_data']['product_filter'])
	unset($this->session->data['product_data']['product_filter']);

	if (isset($this->session->data['product_data']['product_related']) && !$this->session->data['product_data']['product_related'])
	unset($this->session->data['product_data']['product_related']);

	if (isset($this->session->data['product_data']['product_attribute']) && !$this->session->data['product_data']['product_attribute'])
	unset($this->session->data['product_data']['product_attribute']);

	if (isset($this->session->data['product_data']['product_option']) && !$this->session->data['product_data']['product_option'])
	unset($this->session->data['product_data']['product_option']);

	if (isset($this->session->data['product_data']['product_discount']) && !$this->session->data['product_data']['product_discount'])
	unset($this->session->data['product_data']['product_discount']);

	if (isset($this->session->data['product_data']['product_special']) && !$this->session->data['product_data']['product_special'])
	unset($this->session->data['product_data']['product_special']);

	if (isset($this->session->data['product_data']['product_image']) && !$this->session->data['product_data']['product_image'])
	unset($this->session->data['product_data']['product_image']);

	if (isset($this->session->data['product_data']['keyword']))
	unset($this->session->data['product_data']['keyword']);

	if (isset($this->session->data['product_data']['price'])) {
		$this->session->data['product_data']['price'] = (float) $this->session->data['product_data']['price'];
	}

	if (isset($this->session->data['product_data']['image']) && !$this->session->data['product_data']['image']) {
		$this->session->data['product_data']['image'] = "no_image.png";
	}
}

protected function validateProduct() {
		$return_data['general'] = false;
		$return_data['data'] 	  = false;
		$return_data['links'] 	= false;

		// General tab validation
		if(isset($this->session->data['product_data']['product_description']) && is_array($this->session->data['product_data']['product_description'])) {
			foreach ($this->session->data['product_data']['product_description'] as $language_id => $value) {
				if(isset($value['name'])) {
					if ((utf8_strlen($value['name']) < 3) || (utf8_strlen($value['name']) > 255)) {
						$return_data['general'] = true;
					}
				}

				if(isset($value['meta_title'])) {
					if ((utf8_strlen($value['meta_title']) < 3) || (utf8_strlen($value['meta_title']) > 255)) {
						$return_data['general'] = true;
					}
				}
			}
		} else {
			$return_data['general'] = true;
		}

		//Data tab validation
		if(isset($this->session->data['product_data']['model'])) {
			if ((utf8_strlen($this->session->data['product_data']['model']) < 1) || (utf8_strlen($this->session->data['product_data']['model']) > 64)) {
				$return_data['data'] = true;
			}
		} else {
			$return_data['data'] = true;
		}

		if (isset($this->session->data['product_data']['keyword']) && utf8_strlen($this->session->data['product_data']['keyword']) > 0) {
			$this->load->model('account/customerpartner');
			$this->load->language('account/mpapi');
			$url_alias_info = $this->model_account_customerpartner->getUrlAlias($this->session->data['product_data']['keyword']);

			if ($url_alias_info && isset($this->session->data['product_data']['product_id']) && $url_alias_info['query'] != 'product_id=' . $this->session->data['product_data']['product_id']) {
				$return_data['data'] = true;
				$return_data['keyword_error'] = $this->language->get('error_keyword');
			}

			if ($url_alias_info && !isset($this->session->data['product_data']['product_id'])) {
				$return_data['data'] = true;
				$return_data['keyword_error'] = $this->language->get('error_keyword');
			}
		}

		//Links tab validation
		if (is_array($this->config->get('marketplace_allowedproducttabs')) && array_key_exists('links', $this->config->get('marketplace_allowedproducttabs')) && $this->config->get('marketplace_seller_category_required') && (!isset($this->session->data['product_data']['product_category']) || empty($this->session->data['product_data']['product_category']))) {
			$return_data['links'] = true;
		}
		return $return_data;
}

public function upload() {
	$dir = $this->customer->getFirstName() . $this->customer->getId();
	$this->load->language('common/filemanager');

	$json = array();

	// Make sure we have the correct directory
	if (isset($this->request->get['directory'])) {
		$directory = rtrim(DIR_IMAGE . 'wkseller/'. str_replace(array('../', '..\\', '..'), '', $this->request->get['directory']), '/');
	} else {
		$directory = DIR_IMAGE . 'wkseller/';
	}


	// Check its a directory
	if (!is_dir($directory)) {
		mkdir($directory);
	}

	if (!$json) {
		if (!empty($this->request->files['file']['name']) && is_file($this->request->files['file']['tmp_name'])) {
			// Sanitize the filename
			$filename = basename(html_entity_decode($this->request->files['file']['name'], ENT_QUOTES, 'UTF-8'));

			// Validate the filename length
			if ((utf8_strlen($filename) < 3) || (utf8_strlen($filename) > 255)) {
				$json['message'] = $this->language->get('error_filename');
			}

			// Allowed file extension types

			if ($this->config->get('module_marketplace_status') || $this->config->get('marketplace_status')) {
					$allowed = explode(',',$this->config->get('marketplace_imageex'));
					if ($this->request->files['file']['size'] > ((int)$this->config->get('marketplace_imagesize') ? (int)$this->config->get('marketplace_imagesize')*1000 : 200000 )) { //1000 = 1kb

					$json['message'] = $this->language->get('error_filesize');
				}
			}else{
				$allowed = array(
					'jpg',
					'jpeg',
					'gif',
					'png'
				);
			}

			// Allowed file mime types
			$allowed_mime = array(
				'image/jpeg',
				'image/pjpeg',
				'image/png',
				'image/x-png',
				'image/gif'
			);

			if (!in_array($this->request->files['file']['type'], $allowed_mime)) {
				$json['message'] = $this->language->get('error_filetype');
			}

			// Check to see if any PHP files are trying to be uploaded
			$content = file_get_contents($this->request->files['file']['tmp_name']);

			if (preg_match('/\<\?php/i', $content)) {
				$json['message'] = $this->language->get('error_filetype');
			}

			// Return any upload error
			if ($this->request->files['file']['error'] != UPLOAD_ERR_OK) {
				$json['message'] = $this->language->get('error_upload_' . $this->request->files['file']['error']);
			}
		} else {
			$json['message'] = $this->language->get('error_upload');
		}
	}

	if (!$json) {
		move_uploaded_file($this->request->files['file']['tmp_name'], $directory . '/' . $filename);

		$json['error'] = 0;
		$json['message'] = $this->language->get('text_uploaded');
	} else {
		$json['error'] = 1;
	}

	$this->response->addHeader('Content-Type: application/json');
	$this->response->setOutput(json_encode($json));
}

	/**
	 * List of the seller's product
	 * @param json $data contains list of product
	 */
	public function productList()
	{
		$this->load->language('account/api');

		$post = $this->request->post;

		//Accepting data in json format / raw data

		$raw_data = json_decode(file_get_contents("php://input"), true);

		if ($raw_data) {
			foreach ($raw_data as $key => $value) {
				$post[$key] = $value;
			}
		}

		//Get wk_token from header
		if (isset(getallheaders()['wk_token'])) {
		$post['wk_token'] = getallheaders()['wk_token'];
		} elseif (isset(getallheaders()['Wk-Token'])) {
		$post['wk_token'] = getallheaders()['Wk-Token'];
		}

		if (!isset($post['wk_token']) || !$this->checkSession($post['wk_token'])) {
			$this->response->addHeader('Content-Type: application/json');
			$this->response->setOutput(json_encode(array('fault'=>1,'message'=>$this->language->get('text_token_message'))));
		} else {
			$data = array();

			foreach ($post as $key => $value) {
				$data[$key] = $value;
			}

			if (isset($data['filter_name'])) {
				$filter_name = $data['filter_name'];
			} else {
				$filter_name = null;
			}

			if (isset($data['filter_model'])) {
				$filter_model = $data['filter_model'];
			} else {
				$filter_model = null;
			}

			if (isset($data['filter_price'])) {
				$filter_price = $data['filter_price'];
			} else {
				$filter_price = null;
			}

			if (isset($data['filter_quantity'])) {
				$filter_quantity = $data['filter_quantity'];
			} else {
				$filter_quantity = null;
			}

			if (isset($data['filter_status'])) {
				$filter_status = $data['filter_status'];
			} else {
				$filter_status = null;
			}

			if (isset($data['sort'])) {
				$sort = $data['sort'];
			} else {
				$sort = 'pd.name';
			}

			if (isset($data['order'])) {
				$order = $data['order'];
			} else {
				$order = 'ASC';
			}

			if (isset($data['page'])) {
				$page = $data['page'];
			} else {
				$page = 1;
			}

			if (isset($data['limit'])) {
				$limit = $data['limit'];
			} else {
				$limit = 10;
			}

			if (isset($data['width'])) {
				$width = $data['width'];
			} else {
				$width = 50;
			}

			$this->load->model('account/customerpartner');

			$data = array(
				'filter_name'	  => $filter_name,
				'filter_model'	  => $filter_model,
				'filter_price'	  => round($this->currency->convert($filter_price,$this->session->data['currency'], $this->config->get('config_currency')), 2),
				'filter_quantity' => $filter_quantity,
				'filter_status'   => $filter_status,
				'sort'            => $sort,
				'order'           => $order,
				'start'           => ($page - 1) * $limit,
				'limit'           => $limit
			);

			$data_total = array(
				'filter_name'	  => $filter_name,
				'filter_model'	  => $filter_model,
				'filter_price'	  => round($this->currency->convert($filter_price,$this->session->data['currency'], $this->config->get('config_currency')), 2),
				'filter_quantity' => $filter_quantity,
				'filter_status'   => $filter_status
			);

			$this->load->model('tool/image');

			$product_total = count($this->model_account_customerpartner->getProductsSeller($data_total));

			$results = $this->model_account_customerpartner->getProductsSeller($data);

			$this->session->data['product_token'] = token(32);

			$product = array();

			foreach ($results as $key => $result) {

				if(!$results[$key]['product_id'])
					$results[]['product_id'] = $result['product_id'] = $key;

				$action = array();

							 // membership codes starts here
				if($this->config->get('wk_seller_group_status')) {
					$action[] = array(
						'text_edit' => $this->language->get('text_edit'),
						'text_relist' => $this->language->get('text_relist'),
						'text_publish' => $this->language->get('text_publish'),
						'text_unpublish' => $this->language->get('text_unpublish'),
						'text_clone_product' => $this->language->get('text_clone_product'),
						'href_edit' => $this->url->link('account/customerpartner/addproduct', '' . '&edit&product_id=' . $result['product_id'] , true),
						'href_relist' => $this->url->link('account/customerpartner/addproduct', '' . '&relist&product_id=' . $result['product_id'] , true),
						'href_active_deactive' => $this->url->link('account/customerpartner/addproduct', '' . '&active_deactive&product_id=' . $result['product_id'] , true),
						'href_clone' => $this->url->link('account/customerpartner/productlist/copy', '' . '&clone=1&product_id=' . $result['product_id'] , true),
						'href_publish' => $this->url->link('account/customerpartner/productlist/publish', '' . '&product_id=' . $result['product_id'] , true),
						'href_unpublish' => $this->url->link('account/customerpartner/productlist/unpublish', '' . '&product_id=' . $result['product_id'] , true),
					);
				} else {
					$action[] = array(
						'text' => $this->language->get('text_edit'),
						'href' => $this->url->link('account/customerpartner/addproduct', '' . '&product_id=' . $result['product_id'] , true)
					);
				}

				 // membership codes ends here

				 if ($result['image'] && file_exists(DIR_IMAGE . $result['image'])) {
					 $thumb = $this->model_tool_image->resize($result['image'], $width, $width);
				 } else {
					 $thumb = $this->model_tool_image->resize('placeholder.png', $width, $width);
					 $result['image'] = 'placeholder.png';
				 }

				 if (isset($result['name'])) {
					 $result['name'] = html_entity_decode($result['name'],ENT_QUOTES,"UTF-8");
				 }

				$product_sold_quantity = array();
				$sold = $totalearn = 0;

				$product_sold_quantity = $this->model_account_customerpartner->getProductSoldQuantity($result['product_id']);

				if($product_sold_quantity){
					$sold = $product_sold_quantity['quantity'] ? $product_sold_quantity['quantity'] : 0;
					$totalearn = $product_sold_quantity['total'] ? $product_sold_quantity['total'] : 0;
				}

				$product[] = array_merge($result,array(
					'product_id' => $key,
					'price' => $this->currency->format($result['price'],$this->session->data['currency']),
					'special' => $result['special'] ? $this->currency->format($result['special'],$this->session->data['currency']): '',
					'thumb' => $thumb,
					'model' => html_entity_decode($result['model'],ENT_QUOTES,'UTF-8'),
					'sold' => $sold,
					'soldlink' => $this->url->link('account/customerpartner/soldlist&product_id='.$result['product_id'],'',true),
					'totalearn' => $this->currency->format($totalearn,$this->session->data['currency']),
					'action' => $action
				));


			}

			$return_array = array(
				'error' => 0,
				'total'   => $product_total,
				'products' => $product
			);

			$this->response->addHeader('Content-Type: application/json');

			$this->response->setOutput(json_encode($return_array));
		}
	}

	public function deleteProduct(){

		$this->load->language('account/api');

		$post = $this->request->post;

		//Accepting data in json format / raw data

		$raw_data = json_decode(file_get_contents("php://input"),true);

		if ($raw_data) {
			foreach ($raw_data as $key => $value) {
				$post[$key] = $value;
			}
		}

		//Get wk_token from header
		if (isset(getallheaders()['wk_token'])) {
			$post['wk_token'] = getallheaders()['wk_token'];
		} elseif (isset(getallheaders()['Wk-Token'])) {
			$post['wk_token'] = getallheaders()['Wk-Token'];
		}

		if (!isset($post['wk_token']) || !$this->checkSession($post['wk_token'])) {
			$return_data = array(
				'fault'	=>	1,
				'message'	=>	$this->language->get('text_token_message')
			);
		} else {
			$this->load->language('account/customerpartner/addproduct');
			if(isset($post['product_id']) && $post['product_id']) {
				$this->load->model('account/customerpartner');
					$this->model_account_customerpartner->deleteProduct($post['product_id']);
				$return_data['error'] = 0;
				$return_data['message'] = $this->language->get('text_success_delete');
			} else {
				$return_data['error'] = 1;
				$return_data['message'] = '';
			}
		}
		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($return_data));
	}

	protected function checkSession($session_id) {

		if (version_compare(VERSION,'3.0.0.0','>=')) {
			if (isset($this->session->data['session_id']) && $this->session->data['session_id'] == $session_id) {
				return true;
			}
		}else{
			foreach ($_SESSION as $key => $value) {
				if(isset($value['session_id']) && $session_id == $value['session_id']) {
					return true;
				}
			}

			if (isset($_SESSION['session_id']) && $_SESSION['session_id'] == $session_id) {
				return true;
			}
		}
		return false;
	}
}
if (!function_exists('getallheaders')) {
	function getallheaders() {
		$headers = [];
		foreach ($_SERVER as $name => $value) {
			if (substr($name, 0, 5) == 'HTTP_') {
				$headers[str_replace(' ', '-', ucwords(strtolower(str_replace('_', ' ', substr($name, 5)))))] = $value;
			}
		}
		return $headers;
	}
}
