<?php
class ControllerCustomerpartnerSell extends Controller
{

	private $error = array();
	private $data = array();

	public function index()
	{
		$data = [];
		$data = array_merge($data, $this->language->load('customerpartner/sell'));

		$this->document->setTitle($this->language->get('heading_title'));

		$this->document->addStyle('catalog/view/theme/default/stylesheet/MP/sell.css');
		$this->document->addStyle('catalog/view/javascript/jquery/swiper/css/swiper.min.css');
		$this->document->addStyle('catalog/view/javascript/jquery/swiper/css/opencart.css');
		$this->document->addScript('catalog/view/javascript/jquery/swiper/js/swiper.jquery.min.js');

		$this->load->model('tool/image');

		$this->load->model('customerpartner/master');

		$data['text_compare'] = sprintf($this->language->get('text_compare'), (isset($this->session->data['compare']) ? count($this->session->data['compare']) : 0));
		$data['compare'] = $this->url->link('product/compare');
		if (isset($this->request->get['sort'])) {
			$sort = $this->request->get['sort'];
		} else {
			$sort = 'c2p.product_id';
		}

		if (isset($this->request->get['order'])) {
			$order = $this->request->get['order'];
		} else {
			$order = 'ASC';
		}

		if (isset($this->request->get['page'])) {
			$page = $this->request->get['page'];
		} else {
			$page = 1;
		}

		if (isset($this->request->get['limit'])) {
			$limit = (int)$this->request->get['limit'];
		} else {
			$limit = 10;
		}

		$buttontitle = $this->config->get('marketplace_sellbuttontitle');
		$sellerHeader = $this->config->get('marketplace_sellheader');

		$data['sell_title'] = isset($buttontitle[$this->config->get('config_language_id')]) ? $buttontitle[$this->config->get('config_language_id')] : '';
		$data['sell_header'] = isset($sellerHeader[$this->config->get('config_language_id')]) ? $sellerHeader[$this->config->get('config_language_id')] : '';
		$data['showpartners'] = $this->config->get('marketplace_showpartners');
		$data['showproducts'] = $this->config->get('marketplace_showproducts');

		/**
		 * Marketplace Sell page tab
		 */
		$data['tabs'] = array();
		$marketplace_tab = $this->config->get('marketplace_tab');
		if (isset($marketplace_tab['heading']) and $marketplace_tab['heading']) {
			ksort($marketplace_tab['heading']);
			ksort($marketplace_tab['description']);
			foreach ($marketplace_tab['heading'] as $key => $value) {
				$text = $marketplace_tab['description'][$key][$this->config->get('config_language_id')];
				$text = trim(html_entity_decode($text));
				$data['tabs'][] = array(
					'id' => $key,
					'hrefValue' => $value[$this->config->get('config_language_id')],
					'description' => $text,
				);
			}
		}
		/**
		 * Marketplace Sell page tab
		 */

		/**
		 * Marketplace shows sellers
		 * [$partners get long term sellers ]
		 * @var [type]
		 */
		$partners = $this->model_customerpartner_master->getOldPartner();

		$data['partners'] = array();

		foreach ($partners as $key => $result) {

			$feedbacks = $this->model_customerpartner_master->getFeedbackList($result['customer_id']);
			$feedback_count = $this->model_customerpartner_master->getTotalFeedback($result['customer_id']);
			$feedback_total = $this->model_customerpartner_master->getAverageFeedback($result['customer_id']);

			if ($result['avatar']) {
				$image = $this->model_tool_image->resize($result['avatar'], 250, 250);
			} else if ($result['avatar'] == 'removed') {
				$image = '';
			} else if ($this->config->get('marketplace_default_image_name')) {
				$image = $this->model_tool_image->resize($this->config->get('marketplace_default_image_name'), 250, 250);
			} else {
				$image = $this->model_tool_image->resize('placeholder.png', 250, 250);
			}

			$data['partners'][] = array(
				'customer_id' 		=> $result['customer_id'],
				'name' 		  		=> isset($result['companyname']) && $result['companyname'] ? $result['companyname'] : $result['firstname'] . ' ' . $result['lastname'],
				'companyname' 		=> $result['companyname'],
				'backgroundcolor' 		=> $result['backgroundcolor'],
				'country'  	  		=> $result['country'],
				'sellerHref'  		=> $this->url->link('customerpartner/profile', 'seller_id=' . $result['customer_id'], true),
				'thumb'       		=> $image,
				'total_products'    => $this->model_customerpartner_master->getPartnerCollectionCount($result['customer_id']),
				'feedback_total'    => $feedback_total,
				'feedback_count'    => $feedback_count,

			);
		}

		$filter_data = array(
			'sort'                => $sort,
			'order'               => $order,
			'start'               => ($page - 1) * $limit,
			'limit'               => $limit
		);

		//products
		$latest = $this->model_customerpartner_master->getLatest($filter_data);
		$totalLatest = $this->model_customerpartner_master->getTotalLatest($filter_data);
		$data['latest'] = array();

		$this->load->model('catalog/product');

		if (defined('JOURNAL3_ACTIVE')) {
			$globalProductStat1 = $this->db->query("SELECT `setting_value`
			FROM `" . DB_PREFIX . "journal3_skin_setting`
			WHERE `setting_name` IN ('globalProductStat1')")->row;

			$globalProductStat2 = $this->db->query("SELECT`setting_value`
			FROM `" . DB_PREFIX . "journal3_skin_setting`
			WHERE `setting_name` IN ('globalProductStat2')")->row;
		}

		foreach ($latest as $key => $result) {

			$product_info = $this->model_catalog_product->getProduct($result['product_id']);
			$sellerInfo = $this->model_customerpartner_master->checkIsSellerProduct($result['product_id']);

			if (isset($product_info['price']) && $product_info['price']) {
				$result['price'] = $product_info['price'];
			}

			if ($result['image'] && is_file(DIR_IMAGE . $result['image'])) {
				$image = $this->model_tool_image->resize($result['image'], $this->config->get('theme_' . $this->config->get('config_theme') . '_image_product_width'), $this->config->get('theme_' . $this->config->get('config_theme') . '_image_product_height'));
			} else {
				$image = $this->model_tool_image->resize('placeholder.png', $this->config->get('theme_' . $this->config->get('config_theme') . '_image_product_width'), $this->config->get('theme_' . $this->config->get('config_theme') . '_image_product_height'));
			}

			if ($result['avatar']) {
				$avatar = $this->model_tool_image->resize($result['avatar'], 70, 70);
			} else if ($result['avatar'] == 'removed') {
				$avatar = '';
			} else if ($this->config->get('marketplace_default_image_name')) {
				$avatar = $this->model_tool_image->resize($this->config->get('marketplace_default_image_name'), 50, 50);
			} else {
				$avatar = $this->model_tool_image->resize('no_image.png', 50, 50);
			}

			if (($this->config->get('config_customer_price') && $this->customer->isLogged()) || !$this->config->get('config_customer_price')) {
				$price = $this->currency->format($this->tax->calculate($result['price'], $result['tax_class_id'], $this->config->get('config_tax')), $this->session->data['currency']);
			} else {
				$price = false;
			}

			if ((float)$result['special']) {
				$special = $this->currency->format($this->tax->calculate($result['special'], $result['tax_class_id'], $this->config->get('config_tax')), $this->session->data['currency']);
			} else {
				$special = false;
			}

			if ($this->config->get('config_tax')) {
				$tax = $this->currency->format((float)$result['special'] ? $result['special'] : $result['price'], $this->session->data['currency']);
			} else {
				$tax = false;
			}

			if ($this->config->get('config_review_status')) {
				$rating = (int)$result['rating'];
			} else {
				$rating = false;
			}

			if (defined('JOURNAL3_ACTIVE')) {
				$classes = $this->journal3_product_extras->exclude_button($product_info);
				$labels = $this->journal3_product_extras->labels($product_info);
				$extra_buttons = $this->journal3_product_extras->extra_buttons($product_info);

				$classes['out-of-stock'] = $product_info['quantity'] <= 0;
				$classes['has-zero-price'] = ($product_info['special'] ?: $product_info['price']) <= 0;
				$classes['has-countdown'] = !empty($product_info['special_date_end']) ? (bool)$product_info['special_date_end'] : false;
				$classes['has-special'] = (bool)$product_info['special'];
				$classes['has-extra-button'] = (bool)$extra_buttons;
			}

			$data['latest'][] = array(
				'seller_tag'  => $this->language->get('text_seller_tag'),
				'product_id'  => $result['product_id'],
				'seller_name' => !empty($sellerInfo) ? $sellerInfo[$result['product_id']]['seller_name'] : '',
				'country'  	  => $result['country'],
				'avatar'  	  => $avatar,
				'backgroundcolor'  	  => $result['backgroundcolor'],
				'sellerHref'  => $this->url->link('customerpartner/profile', 'seller_id=' . $result['customer_id'], true),
				'thumb'       => $image,
				'name'        => $result['name'],
				'description' => utf8_substr(strip_tags(html_entity_decode($result['description'], ENT_QUOTES, 'UTF-8')), 0, $this->config->get('theme_' . $this->config->get('config_theme') . '_product_description_length')) . '..',
				'price'       => $price,
				'special'     => $special,
				'minimum'     => $result['minimum'],
				'tax'         => $tax,
				'rating'      => $result['rating'],
				'category' => $product_info['manufacturer'],
				'href'        => $this->url->link('product/product', 'product_id=' . $result['product_id'], true),
				'stock_status'   => defined('JOURNAL3_ACTIVE') ? $product_info['stock_status'] : [],
				'classes'        => defined('JOURNAL3_ACTIVE') ? $classes : [],
				'labels'         => defined('JOURNAL3_ACTIVE') ? $labels : [],
				'extra_buttons'  => defined('JOURNAL3_ACTIVE') ? $extra_buttons : [],
				'stat1' => defined('JOURNAL3_ACTIVE') ? $this->journal3_product_extras->stat($product_info, !empty($globalProductStat1) ? $globalProductStat1['setting_value'] : 'none') : [],
				'stat2' => defined('JOURNAL3_ACTIVE') ? $this->journal3_product_extras->stat($product_info, !empty($globalProductStat2) ? $globalProductStat2['setting_value'] : 'none') : [],
				'qid'            => uniqid('q-'),
				'button_cart'    => defined('JOURNAL3_ACTIVE') ? $this->journal3->get('filterAddToCartStock') && $product_info['quantity'] <= 0 ? $product_info['stock_status'] : $this->language->get('button_cart') : [],
			);
		}

		$url = '';

		if (isset($this->request->get['limit'])) {
			$url .= '&limit=' . $this->request->get['limit'];
		} else {
			$url .= '&limit=10';
		}

		$data['sorts'] = array();

		$data['sorts'][] = array(
			'text'  => $this->language->get('text_default'),
			'value' => 'c2p.product_id-ASC',
			'href'  => $this->url->link('customerpartner/sell', 'sort=c2p.product_id&order=ASC' . $url, true)
		);

		$data['sorts'][] = array(
			'text'  => $this->language->get('text_name_asc'),
			'value' => 'pd.name-ASC',
			'href'  => $this->url->link('customerpartner/sell', 'sort=pd.name&order=ASC' . $url, true)
		);

		$data['sorts'][] = array(
			'text'  => $this->language->get('text_name_desc'),
			'value' => 'pd.name-DESC',
			'href'  => $this->url->link('customerpartner/sell', 'sort=pd.name&order=DESC' . $url, true)
		);

		$data['sorts'][] = array(
			'text'  => $this->language->get('text_price_asc'),
			'value' => 'p.price-ASC',
			'href'  => $this->url->link('customerpartner/sell', 'sort=p.price&order=ASC' . $url, true)
		);

		$data['sorts'][] = array(
			'text'  => $this->language->get('text_price_desc'),
			'value' => 'p.price-DESC',
			'href'  => $this->url->link('customerpartner/sell', 'sort=p.price&order=DESC' . $url, true)
		);

		if ($this->config->get('config_review_status')) {
			$data['sorts'][] = array(
				'text'  => $this->language->get('text_rating_desc'),
				'value' => 'rating-DESC',
				'href'  => $this->url->link('customerpartner/sell', 'sort=rating&order=DESC' . $url, true)
			);

			$data['sorts'][] = array(
				'text'  => $this->language->get('text_rating_asc'),
				'value' => 'rating-ASC',
				'href'  => $this->url->link('customerpartner/sell', 'sort=rating&order=ASC' . $url, true)
			);
		}

		$data['sorts'][] = array(
			'text'  => $this->language->get('text_model_asc'),
			'value' => 'p.model-ASC',
			'href'  => $this->url->link('customerpartner/sell', 'sort=p.model&order=ASC' . $url, true)
		);

		$data['sorts'][] = array(
			'text'  => $this->language->get('text_model_desc'),
			'value' => 'p.model-DESC',
			'href'  => $this->url->link('customerpartner/sell', 'sort=p.model&order=DESC' . $url, true)
		);

		$url = '';

		if (isset($this->request->get['sort'])) {
			$url .= '&sort=' . $this->request->get['sort'];
		}

		if (isset($this->request->get['order'])) {
			$url .= '&order=' . $this->request->get['order'];
		}

		$data['limits'] = array();

		$limits = array_unique(array(10, 25, 50, 75, 100));

		sort($limits);

		foreach ($limits as $value) {
			$data['limits'][] = array(
				'text'  => $value,
				'value' => $value,
				'href'  => $this->url->link('customerpartner/sell', $url . '&limit=' . $value, true)
			);
		}

		$url = '';

		if (isset($this->request->get['sort'])) {
			$url .= '&sort=' . $this->request->get['sort'];
		}

		if (isset($this->request->get['order'])) {
			$url .= '&order=' . $this->request->get['order'];
		}

		if (isset($this->request->get['limit'])) {
			$url .= '&limit=' . $this->request->get['limit'];
		} else {
			$url .= '&limit=10';
		}


		$pagination = new Pagination();
		$pagination->total = $totalLatest;
		$pagination->page = $page;
		$pagination->limit = $limit;
		$pagination->url = $this->url->link('customerpartner/sell', $url . '&page={page}', true);

		$data['pagination'] = $pagination->render();

		$data['results'] = sprintf($this->language->get('text_pagination'), ($totalLatest) ? (($page - 1) * $limit) + 1 : 0, ((($page - 1) * $limit) > ($totalLatest - $limit)) ? $totalLatest : ((($page - 1) * $limit) + $limit), $totalLatest, ceil($totalLatest / $limit));

		$data['sort'] = $sort;
		$data['order'] = $order;
		$data['limit'] = $limit;


		if ($this->config->get('marketplace_seller_info_hide')) {

			$data['showpartners'] = false;
			$data['showpartnerdetails'] = false;
		} else {
			$data['showpartnerdetails'] = true;
		}

		$data['column_left'] = $this->load->controller('common/column_left');
		$data['column_right'] = $this->load->controller('common/column_right');
		$data['content_top'] = $this->load->controller('common/content_top');
		$data['content_bottom'] = $this->load->controller('common/content_bottom');

		$data['footer'] = $this->load->controller('common/footer');
		$data['header'] = $this->load->controller('common/header');


		$this->response->setOutput($this->load->view('customerpartner/sell', $data));
	}

	public function wkmpregistation()
	{

		$this->load->model('customerpartner/master');

		$json = array();
		$json['error'] = false;
		$json['success'] = false;
		if (isset($this->request->post['shop']) && trim($this->request->post['shop'])) {
			$data = urldecode(html_entity_decode($this->request->post['shop'], ENT_QUOTES, 'UTF-8'));
			if ($this->model_customerpartner_master->getShopData($data)) {
				$json['error'] = true;
			} else {
				$json['success'] = true;
			}
		} else {
			$json['error'] = true;
		}

		$this->response->setOutput(json_encode($json));
	}
	
    public function wkmpregistration1() 
	{
		error_log(print_r($_POST, true));  // Log the entire POST request
		error_log('FILES data: ' . print_r($_FILES, true));
		$this->load->model('customerpartner/master');
		//$this->load->controller('account/register');

		$json = ['error' => [], 'success' => []];

		$firstname = isset($this->request->post['firstname']) ? trim($this->request->post['firstname']) : '';
		$lastname = isset($this->request->post['lastname']) ? trim($this->request->post['lastname']) :'';
		$email = isset($this->request->post['email']) ? trim($this->request->post['email']) :'';
		$password = isset( $this->request->post['password']) ? trim($this->request->post['password']) :'';

		if (empty($firstname) ||  empty($lastname) 
			|| empty($email) || empty($password)) 
		{
			$json=['error'=> true,'message'=> 'Please fill in all the required documents'];
			$this->response->addHeader('Content-Type: application/json');
			$this->response->setOutput(json_encode($json));
			return;
		}

		if (!empty($_FILES['birfile']['name']) && !empty($_FILES['dtifile']['name']) && 
		!empty($_FILES['mayorfile']['name']) && !empty($_FILES['validid']['name'])) {    
			
			$allowed_extensions = ['jpg', 'jpeg', 'png', 'pdf'];
			$max_size = 5 * 1024 * 1024; // 5MB limit

			$bir_path = '';
			$dti_path = '';
			$mayor_path = '';
			$validid_path = '';

			foreach ($_FILES as $key => $file) {
				if (!empty($file['name'])) {
					$file_ext = strtolower(pathinfo($file['name'], PATHINFO_EXTENSION));
					$file_size = $file['size'];
					$tmp_name = $file['tmp_name'];

					if (!in_array($file_ext, $allowed_extensions)) {
						$json['error'][$key] = "Invalid file type! Only JPG, JPEG, PNG, and PDF are allowed.";
						continue;
					}

					if ($file_size > $max_size) {
						$json['error'][$key] = "File size exceeds 5MB limit.";
						continue;
					}

					$prefix = '';
					if ($key === 'birfile') {
						$prefix = 'AB_';
					} elseif ($key === 'dtifile') {
						$prefix = 'ADTI_';
					} elseif ($key === 'mayorfile') {
						$prefix = 'AMAYORS_PERMIT_';
					} elseif ($key === 'validid') {
						$prefix = 'AVALIDID_';
					}

					$new_filename = uniqid($prefix, true) . '.' . $file_ext;
					//$target_file = $upload_dir . $new_filename;
					$relative_path = 'image/uploads/' . $new_filename;
        			$absolute_path = DIR_IMAGE . 'uploads/' . $new_filename;

					if (move_uploaded_file($tmp_name, $absolute_path)) {
						if ($key === 'birfile') {
							$bir_path = $relative_path;
							$json['success'][$key] = "BIR File uploaded successfully.";
						} elseif ($key === 'dtifile') {
							$dti_path = $relative_path;
							$json['success'][$key] = "DTI File uploaded successfully.";
						} elseif ($key === 'mayorfile')	{
							$mayor_path = $relative_path;
							$json['success'][$key] = 'Mayors Permit uploaded successfully';
						} elseif ($key === 'validid') {
							$validid_path = $relative_path;
							$json['success'][$key] = 'Valid ID uploaded successfullu';
						}					
						
					} else {
						$json['error'][$key] = "Failed to upload file.";
					}
				}
			}

			if (!empty($bir_path) && !empty($dti_path) && !empty($mayor_path) && !empty($validid_path)) {
				$customer_id = $this->db->getLastId();
				$this->model_customerpartner_master->addShopData($customer_id, $bir_path, 
				$dti_path, $mayor_path, $validid_path);
			}
		} else {
			$json['error']['files'] = "No file uploaded.";
		}

		$this->response->setOutput(json_encode($json));
	}

}

// if (!empty($_FILES['birfile']['name'])) {
// 	$file = $_FILES['birfile'];
// 	$allowed_extensions = array('jpg', 'jpeg', 'png', 'pdf');
// 	$max_size = 5 * 1024 * 1024; // 5MB limit

// 	$file_ext = strtolower(pathinfo($file['name'], PATHINFO_EXTENSION));

// 	if (!in_array($file_ext, $allowed_extensions)) {
// 		$json['error'] = 'Invalid file type! Only JPG, JPEG, PNG, and PDF are allowed.';
// 	} elseif ($file['size'] > $max_size) {
// 		$json['error'] = 'File size must be under 5MB.';
// 	} else {
// 		$upload_dir = DIR_IMAGE . 'uploads/';
// 		if (!is_dir($upload_dir)) {
// 			mkdir($upload_dir, 0777, true);
// 		}
		
// 		$new_filename = uniqid('bir_', true) . '.' . $file_ext;
// 		$target_file = $upload_dir . $new_filename;

// 		if (move_uploaded_file($file['tmp_name'], $target_file)) {
	
// 			$file_path = 'uploads/' . $new_filename;
			
// 			$this->model_customerpartner_master->addShopData($customer_id, $file_path);

// 			$json['success'] = 'File uploaded successfully!';
// 			$json['file_path'] = $file_path;
// 			$json['image'] = $new_filename; 
// 		} else {
// 			$json['error'] = 'Failed to upload file.';
// 		}
// 	}
// } else {
// 	$json['error'] = 'No file uploaded.';
// }

// $this->response->setOutput(json_encode($json));