<?php
class ControllerExtensionModuleMarketplace extends Controller
{

	private $error = array();

	private $files_array = array();
	public function addCommonMenu(&$route = false, &$data = false, &$output = false)
	{
		// marketplace code starts here
		$this->load->language('extension/module/marketplace');

		$marketplace = array();

		if ($this->config->get('module_marketplace_status')) {

			if ($this->user->hasPermission('access', 'extension/module/marketplace')) {
				$marketplace[] = array(
					'name'     => $this->language->get('menu_text_config'),
					'href'     => $this->url->link('extension/module/marketplace', 'user_token=' . $this->session->data['user_token'], true),
					'children' => array()
				);
			}

			$mpcatalog = array();

			if ($this->user->hasPermission('access', 'customerpartner/partner')) {
				$mpcatalog[] = array(
					'name'     => $this->language->get('menu_text_sellerlist'),
					'href'     => $this->url->link('customerpartner/partner', 'user_token=' . $this->session->data['user_token'], true),
					'children' => array()
				);
			}

			if ($this->user->hasPermission('access', 'customerpartner/commission')) {
				$mpcatalog[] = array(
					'name'     => $this->language->get('menu_text_commission'),
					'href'     => $this->url->link('customerpartner/commission', 'user_token=' . $this->session->data['user_token'], true),
					'children' => array()
				);
			}

			if ($this->user->hasPermission('access', 'customerpartner/product')) {
				$mpcatalog[] = array(
					'name'     => $this->language->get('menu_text_productlist'),
					'href'     => $this->url->link('customerpartner/product', 'user_token=' . $this->session->data['user_token'], true),
					'children' => array()
				);
			}
			// mpcategory
			$mpcategory = array();

			if ($this->user->hasPermission('access', 'customerpartner/category')) {
				$mpcategory[] = array(
					'name'     => $this->language->get('menu_text_categories'),
					'href'     => $this->url->link('customerpartner/category', 'user_token=' . $this->session->data['user_token'], true),
					'children' => array()
				);
			}

			if ($this->user->hasPermission('access', 'customerpartner/sellercategory')) {
				$mpcategory[] = array(
					'name'     => $this->language->get('menu_text_seller_categories'),
					'href'     => $this->url->link('customerpartner/sellercategory', 'user_token=' . $this->session->data['user_token'], true),
					'children' => array()
				);
			}

			if ($mpcategory) {
				$mpcatalog[] = array(
					'name'	   => $this->language->get('menu_text_category'),
					'href'     => '',
					'children' => $mpcategory
				);
			}

			if ($mpcatalog) {
				$marketplace[] = array(
					'name'	   => $this->language->get('menu_mp_catalog'),
					'href'     => '',
					'children' => $mpcatalog
				);
			}

			$mppro = array();

			if ($this->user->hasPermission('access', 'customerpartner/topsearch')) {
				$mppro[] = array(
					'name'     => $this->language->get('menu_text_topsearch'),
					'href'     => $this->url->link('customerpartner/topsearch', 'user_token=' . $this->session->data['user_token'], true),
					'children' => array()
				);
			}

			if ($this->user->hasPermission('access', 'customerpartner/reason')) {
				$mppro[] = array(
					'name'     => "Reasons",
					'href'     => $this->url->link('customerpartner/reason', 'user_token=' . $this->session->data['user_token'], true),
					'children' => array()
				);
			}

			if ($this->config->get('module_wk_crosssell_crosssell_status')) {
				if ($this->user->hasPermission('access', 'extension/module/wk_crosssell')) {
					$mppro[] = array(
						'name'     => $this->language->get('menu_text_crosssell'),
						'href'     => $this->url->link('extension/module/wk_crosssell', 'user_token=' . $this->session->data['user_token'], true),
						'children' => array()
					);
				}
			}

			if ($this->config->get('module_wk_upsell_upsell_status')) {
				if ($this->user->hasPermission('access', 'extension/module/wk_upsell')) {
					$mppro[] = array(
						'name'     => $this->language->get('menu_text_upsell'),
						'href'     => $this->url->link('extension/module/wk_upsell', 'user_token=' . $this->session->data['user_token'], true),
						'children' => array()
					);
				}
			}

			if ($this->config->get('module_superbar_status')) {
				if ($this->user->hasPermission('access', 'extension/module/superbar')) {
					$mppro[] = array(
						'name'     => 'Superbar',
						'href'     => $this->url->link('extension/module/superbar', 'user_token=' . $this->session->data['user_token'], true),
						'children' => array()
					);
				}
			}

			if ($this->config->get('total_crosssell_status')) {
				if ($this->user->hasPermission('access', 'extension/total/crosssell')) {
					$mppro[] = array(
						'name'     => 'Total Cross-Sell',
						'href'     => $this->url->link('extension/total/crosssell', 'user_token=' . $this->session->data['user_token'], true),
						'children' => array()
					);
				}
			}

			if ($this->user->hasPermission('access', 'extension/module/pricealert')) {
				$alert[] = array(
					'name'	   => '<i class="fa fa-bell"></i> Price Alert Config',
					'href'     => $this->url->link('extension/module/pricealert', 'user_token=' . $this->session->data['user_token'], true),
					'children' => array()
				);
			}


			if ($this->user->hasPermission('access', 'customerpartner/pricealert')) {
				$alert[] = array(
					'name'	   => '<i class="fa fa-folder-open"></i> Alert Products',
					'href'     => $this->url->link('customerpartner/pricealert', 'user_token=' . $this->session->data['user_token'], true),
					'children' => array()
				);
			}

			if ($this->user->hasPermission('access', 'customerpartner/pa_request')) {
				$alert[] = array(
					'name'	   => '<i class="fa fa-comments fw"></i> Request',
					'href'     => $this->url->link('customerpartner/pa_request', 'user_token=' . $this->session->data['user_token'], true),
					'children' => array()
				);
			}

			if ($this->config->get('module_wk_pricealert_status') && isset($alert)) {
				$mppro[] = array(
					'id'       => 'prece-alert-webkul',
					'icon'	   => 'fa fa-bell',
					'name'	   => 'Price Alert',
					'href'     => '',
					'children' => $alert,
				);
			}

			if ($mppro) {
				$marketplace[] = array(
					'name'	   =>  $this->language->get('menu_mp_pro'),
					'href'     => '',
					'children' => $mppro
				);
			}

			// mpcategory
			$mpmapping = array();

			if ($this->user->hasPermission('access', 'customerpartner/categorymapping')) {
				$mpmapping[] = array(
					'name'     => $this->language->get('menu_text_categories_mapping'),
					'href'     => $this->url->link('customerpartner/categorymapping', 'user_token=' . $this->session->data['user_token'], true),
					'children' => array()
				);
			}

			if ($this->user->hasPermission('access', 'customerpartner/optionmapping')) {
				$mpmapping[] = array(
					'name'     => $this->language->get('menu_text_option_mapping'),
					'href'     => $this->url->link('customerpartner/optionmapping', 'user_token=' . $this->session->data['user_token'], true),
					'children' => array()
				);
			}

			if ($mpmapping) {
				$marketplace[] = array(
					'name'	   => $this->language->get('menu_mp_map'),
					'href'     => '',
					'children' => $mpmapping
				);
			}

			//
			$mpsales = array();

			if ($this->user->hasPermission('access', 'customerpartner/order')) {
				$mpsales[] = array(
					'name'     => $this->language->get('menu_text_order'),
					'href'     => $this->url->link('customerpartner/order', 'user_token=' . $this->session->data['user_token'], true),
					'children' => array()
				);
			}

			if ($this->user->hasPermission('access', 'customerpartner/income')) {
				$mpsales[] = array(
					'name'     => $this->language->get('menu_text_income'),
					'href'     => $this->url->link('customerpartner/income', 'user_token=' . $this->session->data['user_token'], true),
					'children' => array()
				);
			}

			if ($this->user->hasPermission('access', 'customerpartner/transaction')) {
				$mpsales[] = array(
					'name'     => $this->language->get('menu_text_transaction'),
					'href'     => $this->url->link('customerpartner/transaction', 'user_token=' . $this->session->data['user_token'], true),
					'children' => array()
				);
			}

			if ($mpsales) {
				$marketplace[] = array(
					'id'       => 'menu-sale',
					'icon'	   => 'fa-shopping-cart',
					'name'	   => $this->language->get('menu_mp_sales'),
					'href'     => '',
					'children' => $mpsales
				);
			}

			// mpreview
			$mpreview = array();

			if ($this->user->hasPermission('access', 'customerpartner/review')) {
				$mpreview[] = array(
					'name'     => $this->language->get('menu_text_seller_review'),
					'href'     => $this->url->link('customerpartner/review', 'user_token=' . $this->session->data['user_token'], true),
					'children' => array()
				);
			}

			if ($this->user->hasPermission('access', 'customerpartner/reviewfield')) {
				$mpreview[] = array(
					'name'     => $this->language->get('menu_text_review_field'),
					'href'     => $this->url->link('customerpartner/reviewfield', 'user_token=' . $this->session->data['user_token'], true),
					'children' => array()
				);
			}

			if ($mpreview) {
				$marketplace[] = array(
					'name'	   => $this->language->get('menu_mp_reviews'),
					'href'     => '',
					'children' => $mpreview
				);
			}

			if ($this->user->hasPermission('access', 'customerpartner/shipping')) {
				$marketplace[] = array(
					'name'     => $this->language->get('menu_text_shipping'),
					'href'     => $this->url->link('customerpartner/shipping', 'user_token=' . $this->session->data['user_token'], true),
					'children' => array()
				);
			}

			if ($this->user->hasPermission('access', 'customerpartner/mails')) {
				$marketplace[] = array(
					'name'     => $this->language->get('menu_text_mail'),
					'href'     => $this->url->link('customerpartner/mails', 'user_token=' . $this->session->data['user_token'], true),
					'children' => array()
				);
			}


			if ($this->user->hasPermission('access', 'customerpartner/notification')) {
				$marketplace[] = array(
					'name'     => $this->language->get('menu_text_notifications'),
					'href'     => $this->url->link('customerpartner/notification', 'user_token=' . $this->session->data['user_token'], true),
					'children' => array()
				);
			}

			if ($this->user->hasPermission('access', 'customerpartner/information')) {
				$marketplace[] = array(
					'name'     => $this->language->get('menu_text_information'),
					'href'     => $this->url->link('customerpartner/information', 'user_token=' . $this->session->data['user_token'], true),
					'children' => array()
				);
			}

			if ($this->user->hasPermission('access', 'wkcustomfield/wkcustomfield')) {
				$marketplace[] = array(
					'name'     => $this->language->get('menu_text_custom_field'),
					'href'     => $this->url->link('wkcustomfield/wkcustomfield', 'user_token=' . $this->session->data['user_token'], true),
					'children' => array()
				);
			}

			if ($marketplace) {
				$menu[] = array(
					'id'       => 'menu-marketplace',
					'icon'     => 'fa-users',
					'name'     => $this->language->get('heading_title1'),
					'href'     => '',
					'children' => $marketplace
				);
			}
			// marketplace code ends here
			array_splice($data['menus'], 1, 0, $menu);
		}
	}
	public function customfield()
	{

		$data = array();

		$data['module_marketplace_status'] = $this->config->get('module_marketplace_status');

		if ($this->config->get('module_marketplace_status')) {
			$this->load->language("wkcustomfield/wkcustomfield");
			$this->load->model("wkcustomfield/wkcustomfield");
			$wkcustomFields = array();
			$data['wkcustomFields'] = $this->model_wkcustomfield_wkcustomfield->getOptionList();
			$data['user_token'] = $this->session->data['user_token'];
			$data['text_custom_field'] = $this->language->get('text_custom_field');
			$data['entry_select_option'] = $this->language->get('entry_select_option');
			$data['entry_select_date'] = $this->language->get('entry_select_date');
			$data['entry_select_datetime'] = $this->language->get('entry_select_datetime');
			$data['entry_select_time'] = $this->language->get('entry_select_time');
			$data['entry_enter_text'] = $this->language->get('entry_enter_text');

			if (isset($this->request->get['product_id']) || isset($this->request->post['product_custom_field'])) {
				if (isset($this->request->get['product_id'])) {
					$product_id = $this->request->get['product_id'];
				} else {
					$product_id = 0;
				}
				$data['wkPreCustomFields'] = array();
				$wkPreCustomFieldOptions = array();
				$wkPreCustomFields = $this->model_wkcustomfield_wkcustomfield->getProductFields($product_id);
				if (isset($this->request->post['product_custom_field'])) {
					foreach ($this->request->post['product_custom_field'] as $key => $value) {
						if (!isset($wkPreCustomFields[$key])) {
							$wkPreCustomFields[] = array(
								'fieldId' => $value['custom_field_id'],
								'fieldName' => $value['custom_field_name'],
								'fieldType' => $value['custom_field_type'],
								'fieldDescription' => $value['custom_field_des'],
								'id' => '',
								'isRequired' => $value['custom_field_is_required'],
							);
						}
					}
				}
				foreach ($wkPreCustomFields as $field) {
					$wkPreCustomFieldOptions = $this->model_wkcustomfield_wkcustomfield->getOptions($field['fieldId']);
					if ($field['fieldType'] == 'select' || $field['fieldType'] == 'checkbox' || $field['fieldType'] == 'radio') {
						$wkPreCustomProductFieldOptions = $this->model_wkcustomfield_wkcustomfield->getProductFieldOptions($product_id, $field['fieldId'], $field['id']);
					} else {
						$wkPreCustomProductFieldOptions = $this->model_wkcustomfield_wkcustomfield->getProductFieldOptionValue($product_id, $field['fieldId'], $field['id']);
					}
					$data['wkPreCustomFields'][] = array(
						'fieldId'       => $field['fieldId'],
						'fieldName'     => $field['fieldName'],
						'fieldType'     => $field['fieldType'],
						'fieldDes'      => $field['fieldDescription'],
						'productFieldId'      => $field['id'],
						'isRequired'    => $field['isRequired'],
						'fieldOptions'  => $wkPreCustomProductFieldOptions,
						'preFieldOptions' => $wkPreCustomFieldOptions,
					);
				}
			}

			if (isset($this->error['customFieldError'])) {
				$data['customFieldError'] = $this->error['customFieldError'];
			} else {
				$data['customFieldError'] = array();
			}
		}

		return $this->load->view('customerpartner/customfield', $data);
	}

	public function __GetAllFilesPaths()
	{
		$marketplaceFolders = array(
			'customerpartner',
			'shipping',
			'wkcustomfield',
		);

		$files = array();

		// Make path into an array
		foreach ($marketplaceFolders as $key => $folder) {
			$path[] = DIR_APPLICATION . 'controller/' . $folder;
		}

		// While the path array is still populated keep looping through
		while (count($path) != 0) {
			$next = array_shift($path);
			foreach (glob($next) as $file) {
				// If directory add to path array
				if (is_dir($file)) {
					$path[] = $file . '/*';
				}
				// Add the file to the files to be deleted array
				if (is_file($file)) {
					$files[] = $file;
				}
			}
		}
		// Sort the file array
		sort($files);
		return $files;
	}

	public function __addPermissions()
	{

		$files = $this->__GetAllFilesPaths();

		$this->load->model('user/user_group');

		foreach ($files as $file) {
			$controller = substr($file, strlen(DIR_APPLICATION . 'controller/'));
			$permission = substr($controller, 0, strrpos($controller, '.'));
			$this->model_user_user_group->addPermission($this->user->getId(), 'access', $permission);
			$this->model_user_user_group->addPermission($this->user->getId(), 'modify', $permission);
		}
	}

	public function __removePermission()
	{

		$files = $this->__GetAllFilesPaths();
		$this->load->model('user/user_group');
		foreach ($files as $file) {
			$controller = substr($file, strlen(DIR_APPLICATION . 'controller/'));
			$permission = substr($controller, 0, strrpos($controller, '.'));
			$this->model_user_user_group->removePermission($this->user->getId(), 'access', $permission);
			$this->model_user_user_group->removePermission($this->user->getId(), 'modify', $permission);
		}
	}

	public function install()
	{
		$this->load->model('customerpartner/partner');
		$this->model_customerpartner_partner->createCustomerpartnerTable();

		$this->__addPermissions();

		$this->__registerEvents();
	}

	public function __registerEvents()
	{
		$this->load->model('setting/event');
		$event_helper = $this->model_setting_event;
		$event_helper->addEvent(
			'topserch_marketplace',
			'catalog/model/catalog/product/getProducts/after',
			'account/customerpartner/topsearch/_processSearch'
		);

		$event_helper->addEvent(
			'limit_product_order',
			'catalog/controller/checkout/cart/add/before',
			'account/customerpartner/event_handler/handleCartRequest'
		);

		$event_helper->addEvent(
			'limit_update_product_cart',
			'catalog/controller/checkout/cart/edit/before',
			'account/customerpartner/event_handler/handleCartUpdate'
		);

		$code    = "mpCommonMenuLink";
		$trigger = "admin/view/common/column_left/before";
		$action  = "extension/module/marketplace/addCommonMenu";
		$event_helper->addEvent($code, $trigger, $action);

		$code     = "mp_scf_getproduct";
		$trigger  = "catalog/model/catalog/product/getProducts/after";
		$action   = "account/customerpartner/scf/manipulate_SCF_Products";
		$event_helper->addEvent($code, $trigger, $action);

		$code     = "mp_scf_manage_category_url";
		$trigger  = "catalog/view/extension/module/category/before";
		$action   = "account/customerpartner/scf/manage_SCF_Url";
		$event_helper->addEvent($code, $trigger, $action);

		$code     = "mp_scf_manageCategoryPageUrls";
		$trigger  = "catalog/view/product/category/after";
		$action   = "account/customerpartner/scf/manageCategoryPageUrls";
		$event_helper->addEvent($code, $trigger, $action);

		$code     = "mp_scf_manageTotalCatProducts";
		$trigger  = "catalog/model/catalog/product/getTotalProducts/after";
		$action   = "account/customerpartner/scf/manageCategoryProductTotal";
		$event_helper->addEvent($code, $trigger, $action);

		$code     = "webkul_marketplace";
		$trigger  = "catalog/model/checkout/order/deleteOrder/after";
		$action   = "event/marketplace/deleteMPOrder";
		$event_helper->addEvent($code, $trigger, $action);
	}

	public function __deleteEvents()
	{
		$this->load->model('setting/event');
		$event_module_codes = array(
			'webkul_marketplace',
			'mp_scf_manageTotalCatProducts',
			'mp_scf_manageTotalCatProducts',
			'mp_scf_manageCategoryPageUrls',
			'mp_scf_manage_category_url',
			'mp_scf_getproduct',
			'mpCommonMenuLink',
			'limit_update_product_cart',
			'topserch_marketplace',
			'limit_product_order',
		);
		foreach ($event_module_codes as $key => $em_code) {
			$this->model_setting_event->deleteEventByCode($em_code);
		}
	}

	public function uninstall()
	{

		$this->load->model('customerpartner/partner');

		$this->model_customerpartner_partner->removeCustomerpartnerTable();

		$this->__removePermission();

		$this->__deleteEvents();
	}

	public function getdir($controller_path = '')
	{

		$copy = $controller_path;
		$path = DIR_CATALOG . 'controller';
		if ($path != $controller_path)
			$controller_path = $path . '/' . $controller_path;

		if (is_dir($controller_path)) {
			if ($controller_path_files = opendir($controller_path)) {
				while (($new_file = readdir($controller_path_files)) !== false) {
					if ($new_file != '.' and $new_file != '..') {
						if (is_dir($controller_path . '/' . $new_file)) {
							if ($copy)
								$new_file = $copy . '/' . $new_file;
							$this->getdir($new_file);
						} elseif ($copy != 'module' and $copy != 'payment' and $copy != 'shipping' and $copy != 'api' and $copy != 'feed' and $copy != 'tool') { // to discard folders
							$chk = explode(".", $new_file);
							if (end($chk) == 'php')
								$this->files_array[] = $copy . '/' . prev($chk);
						}
					}
				}
			}
		}
	}

	public function index()
	{

		// upgradation code
		$this->load->model('customerpartner/partner');

		$this->load->model('setting/extension');
		$extensions = $this->model_setting_extension->getInstalled('module');
		if (in_array('marketplace', $extensions)) {
			$this->model_customerpartner_partner->upgradeMarketplace();
		} else {
			echo '<pre>';
			print_r('Module is not installed');
			echo '</pre>';
			die;
		}

		$this->model_customerpartner_partner->upgradeMarketplace();

		$this->load->model('setting/event');

		$event_helper = $this->model_setting_event;

		$event_status = $event_helper->getEventByCode('topserch_marketplace');

		if (empty($event_status)) {

			$event_helper->addEvent(
				'topserch_marketplace',
				'catalog/model/catalog/product/getProducts/after',
				'account/customerpartner/topsearch/_processSearch'
			);



			$event_helper->addEvent(
				'limit_product_order',
				'catalog/controller/checkout/cart/add/before',
				'account/customerpartner/event_handler/handleCartRequest'
			);



			$event_helper->addEvent(
				'limit_update_product_cart',
				'catalog/controller/checkout/cart/edit/before',
				'account/customerpartner/event_handler/handleCartUpdate'
			);


			$code    = "mpCommonMenuLink";
			$trigger = "admin/view/common/column_left/before";
			$action  = "extension/module/marketplace/addCommonMenu";


			$event_helper->addEvent($code, $trigger, $action);



			$code     = "mp_scf_getproduct";
			$trigger  = "catalog/model/catalog/product/getProducts/after";
			$action   = "account/customerpartner/scf/manipulate_SCF_Products";


			$event_helper->addEvent($code, $trigger, $action);


			$code     = "mp_scf_manage_category_url";
			$trigger  = "catalog/view/extension/module/category/before";
			$action   = "account/customerpartner/scf/manage_SCF_Url";

			$event_helper->addEvent($code, $trigger, $action);


			$code     = "mp_scf_manageCategoryPageUrls";
			$trigger  = "catalog/view/product/category/after";
			$action   = "account/customerpartner/scf/manageCategoryPageUrls";

			$event_helper->addEvent($code, $trigger, $action);


			$code     = "mp_scf_manageTotalCatProducts";
			$trigger  = "catalog/model/catalog/product/getTotalProducts/after";
			$action   = "account/customerpartner/scf/manageCategoryProductTotal";

			$event_helper->addEvent($code, $trigger, $action);

			$code     = "webkul_marketplace";
			$trigger  = "catalog/model/checkout/order/deleteOrder/after";
			$action   = "event/marketplace/deleteMPOrder";

			$event_helper->addEvent($code, $trigger, $action);
		}


		// upgradation code

		$data = array();

		$data = array_merge($data, $this->load->language('extension/module/marketplace'));

		$this->document->setTitle(strip_tags($data['heading_title']));

		$this->load->model('setting/setting');

		$data['seller_product_store'] = array(
			'own_store' => $data['entry_ownstore'],
			'choose_store' => $data['entry_choosestore'],
			'multi_store' => $data['entry_mulistore'],
		);

		if (($this->request->server['REQUEST_METHOD'] == 'POST') && isset($this->request->files['marketplace_default_image']) && $this->imageValidation($this->request->files['marketplace_default_image']) && $this->validate()) {

			if (!isset($this->request->post['marketplace_allowed_categories'])) {

				$this->request->post['marketplace_allowed_categories'] = array();
			} else {
				$this->request->post['marketplace_allowed_categories'] = $this->model_customerpartner_partner->addCategory($this->request->post['marketplace_allowed_categories']);
			}

			if (isset($this->request->files['marketplace_default_image']) && $this->request->files['marketplace_default_image']['name']) {
				move_uploaded_file($this->request->files['marketplace_default_image']["tmp_name"], DIR_IMAGE . "catalog/" . $this->request->files['marketplace_default_image']["name"]);
				$this->request->post['marketplace_default_image_name'] = "catalog/" . $this->request->files['marketplace_default_image']["name"];
			}

			if (isset($this->request->post['marketplace_SefUrlspath']))
				$this->request->post['marketplace_SefUrlspath'] = array_values($this->request->post['marketplace_SefUrlspath']);
			if (isset($this->request->post['marketplace_SefUrlsvalue']))
				$this->request->post['marketplace_SefUrlsvalue'] = array_values($this->request->post['marketplace_SefUrlsvalue']);

			//remove blank tabs - checked heading
			if (isset($this->request->post['marketplace_tab']['heading'])) {
				foreach ($this->request->post['marketplace_tab']['heading'] as $key => $value) {
					$left_this = false;
					foreach ($value as $language_key => $language_value) {
						if ($language_value)
							$left_this = true;
					}
					if (!$left_this) {
						unset($this->request->post['marketplace_tab']['heading'][$key]);
						unset($this->request->post['marketplace_tab']['description'][$key]);
					}
				}
			}

			$int_field_array = array(
				'marketplace_commission',
				'marketplace_low_stock_quantity',
				'marketplace_noofimages',
				'marketplace_imagesize',
				'marketplace_downloadsize',
				'marketplace_min_cart_value',
				'marketplace_product_quantity_restriction',
				'marketplace_seller_list_limit',
				'marketplace_seller_product_list_limit',
			);

			foreach ($int_field_array as $key => $value) {
				if (isset($this->request->post[$value]) && $this->request->post[$value]) {
					$this->request->post[$value] = (int)abs($this->request->post[$value]);
				}
			}

			if (!isset($this->request->post['marketplace_adminmail']) || !$this->request->post['marketplace_adminmail']) {
				$this->request->post['marketplace_adminmail'] = $this->config->get('config_email');
			}

			if (!isset($this->request->post['marketplace_default_image_name']) || !trim($this->request->post['marketplace_default_image_name'])) {
				$this->request->post['marketplace_default_image_name'] = 'no_image.png';
			} else {
				$this->request->post['marketplace_default_image_name'] = trim($this->request->post['marketplace_default_image_name']);
			}

			$this->checkSEOURLs();

			if (isset($this->request->post['marketplace_store'])) {
				$data_main =  array();
				if (isset($this->request->post['marketplace_tab']['description'])) {
					foreach ($this->request->post['marketplace_tab']['description'] as $key => $valueS) {
						foreach ($valueS as $language => $value) {
							@$html = preg_replace("/script.*?\/script/ius", " ", $value) ?: $value;
							@$data_main['marketplace_tab']['description'][$key][$language] = $html;
						}
					}
				}
				if (isset($data_main['marketplace_tab']['description'])) {
					$this->request->post['marketplace_tab']['description'] = $data_main['marketplace_tab']['description'];;
				}
				$this->model_setting_setting->editSetting('module_marketplace', $this->request->post, $this->request->post['marketplace_store']);
				$this->model_setting_setting->editSetting('marketplace', $this->request->post, $this->request->post['marketplace_store']);
			} else {
				$this->model_setting_setting->editSetting('module_marketplace', $this->request->post);
				$this->model_setting_setting->editSetting('marketplace', $this->request->post);
			}

			$this->session->data['success'] = $this->language->get('text_success');

			$store_id = 0;

			if (isset($this->request->post['marketplace_store']) && $this->request->post['marketplace_store']) {
				$store_id = $this->request->post['marketplace_store'];
			}

			$this->response->redirect($this->url->link('extension/module/marketplace', 'user_token=' . $this->session->data['user_token'] . '&store_id=' . $store_id, true));
		}

		$this->load->model('setting/store');

		$data['stores'] = array();

		$data['stores'][] = array(
			'store_id' => 0,
			'name'     => $this->config->get('config_name'),
		);

		$results = $this->model_setting_store->getStores();

		if ($results) {
			foreach ($results as $result) {
				$data['stores'][] = array(
					'store_id' => $result['store_id'],
					'name'     => $result['name'],
				);
			}
		}

		$config_data = array(

			'module_marketplace_status',

			//general
			'marketplace_mailtoseller',
			'marketplace_mailadmincustomercontactseller',
			'marketplace_notification_filter',
			'marketplace_customercontactseller',
			'marketplace_hideselleremail',
			'marketplace_adminmail',
			'marketplace_productapprov',
			'marketplace_categoryapprov',
			'marketplace_informationapprov',
			'marketplace_sellereditreview',
			'marketplace_partnerapprov',
			'marketplace_sellerorderstatus',
			'marketplace_available_order_status',
			'marketplace_order_status_sequence',
			'marketplace_becomepartnerregistration',
			'marketplace_allowed_shipping_method',
			'marketplace_complete_order_status',
			'marketplace_proccessing_order_status',
			'marketplace_divide_shipping',
			'marketplace_default_image_name',
			'marketplace_cancel_order_status',
			'marketplace_seller_name_cart_status',
			'marketplace_seller_list_limit',
			'marketplace_seller_product_list_limit',
			'marketplace_min_cart_value',
			'marketplace_product_quantity_restriction',
			'marketplace_separate_view',

			//product tab
			'marketplace_allowedproductcolumn',
			'marketplace_allowedproducttabs',
			'marketplace_imagesize',
			'marketplace_noofimages',
			'marketplace_imageex',
			'marketplace_noofdownload',
			'marketplace_downloadex',
			'marketplace_downloadsize',
			'marketplace_productaddemail',
			'marketplace_product_reapprove',
			'marketplace_sellerdeleteproduct',
			'marketplace_sellerproductdelete',
			'marketplace_sellerproductshow',
			'marketplace_sellerbuyproduct',
			'marketplace_adminnotify',
			'marketplace_seller_product_store',

			//advanced tab
			'marketplace_product_purchase_limit',
			'marketplace_product_purchase_limit_based_on',
			'marketplace_product_purchase_limit_qra_seller',
			'marketplace_product_purchase_price_limit',
			'marketplace_product_purchase_limit_pra_seller',
			'marketplace_scf_status',


			//seo tab
			'marketplace_useseo',
			'marketplace_wksell',
			'marketplace_productlist',
			'marketplace_profile',
			'marketplace_addproduct',
			'marketplace_add_shipping_mod',
			'marketplace_dashboard',
			'marketplace_orderlist',
			'marketplace_order_info',
			'marketplace_soldlist',
			'marketplace_soldinvoice',
			'marketplace_editproduct',
			'marketplace_storeprofile',
			'marketplace_collection',
			'marketplace_feedback',
			'marketplace_store',
			'marketplace_downloads',
			'marketplace_transactions',
			//sef tab 2
			'marketplace_SefUrlspath',
			'marketplace_SefUrlsvalue',
			// sef product tab
			'marketplace_product_seo_name',
			'marketplace_product_seo_format',
			'marketplace_product_seo_default_name',
			'marketplace_product_seo_product_name',
			'marketplace_product_seo_page_ext',

			//commission
			'marketplace_boxcommission',
			'marketplace_commission_add',
			'marketplace_commission',
			'marketplace_commissionworkedon',

			//sell tab
			'marketplace_sellheader',
			'marketplace_sellbuttontitle',
			'marketplace_selldescription',
			'marketplace_showpartners',
			'marketplace_showproducts',
			'marketplace_tab',

			//profile tab
			'marketplace_allowedprofilecolumn',
			'marketplace_allowed_public_seller_profile',
			'marketplace_profile_email',
			'marketplace_profile_telephone',

			// 'marketplace_profile_profile',
			'marketplace_profile_store',
			'marketplace_profile_collection',
			'marketplace_profile_review',
			'marketplace_profile_product_review',
			'marketplace_profile_location',

			// module Configuration
			'marketplace_allowed_account_menu',
			'marketplace_account_menu_sequence',
			'marketplace_product_name_display',
			'marketplace_product_show_seller_product',
			'marketplace_product_image_display',

			//mail tab
			'marketplace_mail_keywords',
			'marketplace_mail_partner_request',
			'marketplace_mail_product_request',
			'marketplace_mail_transaction',
			'marketplace_mail_order',
			'marketplace_mail_partner_admin',
			'marketplace_mail_product_admin',
			'marketplace_mail_cutomer_to_seller',
			'marketplace_mail_seller_to_admin',
			'marketplace_mail_partner_approve',
			'marketplace_mail_product_approve',
			'marketplace_mail_admin_on_edit',
			'marketplace_mail_seller_on_edit',

			//paypal tab
			'marketplace_paypal_mode',
			'marketplace_paypal_user',
			'marketplace_paypal_password',
			'marketplace_paypal_client_id',
			'marketplace_paypal_client_secret_id',
			'marketplace_paypal_appid',
			'marketplace_paypal_email_subject',

			// update in marketplace
			'marketplace_seller_manage_order',
			'marketplace_seller_create_order',
			'marketplace_low_stock_notification',
			'marketplace_low_stock_quantity',
			'marketplace_review_only_order',
			'marketplace_seller_info_by_module',
			'marketplace_pdf_order_invoice',
			'marketplace_commission_tax',
			'marketplace_commission_unit_price',
			'marketplace_seller_info_hide',
			'marketplace_seller_category_required',
			'marketplace_allowed_seller_category_type',
			'marketplace_allowed_categories',
			'marketplace_mail_seller_low_stock',
			'marketplace_auto_generate_sku',
		);

		foreach ($config_data as $conf) {
			if (isset($this->request->post[$conf])) {
				$data[$conf] = $this->request->post[$conf];
			}
		}

		$google_analytic = array(
			//Google analytic update
			'marketplace_google_analytic_id',
			'marketplace_google_analytic_allowed_page',
			'marketplace_google_analytic_seller_status',
		);

		foreach ($google_analytic as $conf) {
			if (isset($this->request->post[$conf])) {
				$data[$conf] = $this->request->post[$conf];
			} else {
				$data[$conf] = $this->config->get($conf);
			}
		}

		$data['analytic_allowed_page'] = array(
			'profile' 	 => $this->language->get('entry_seller_profile'),
			'collection' => $this->language->get('entry_seller_collection'),
			'product'    => $this->language->get('entry_seller_product'),
		);

		if (isset($this->request->get['store_id'])) {
			$data['marketplace_store'] = $this->request->get['store_id'];
			$data = array_merge($data, $this->model_setting_setting->getSetting('module_marketplace', $this->request->get['store_id']));
			$data = array_merge($data, $this->model_setting_setting->getSetting('marketplace', $this->request->get['store_id']));
		} else {
			$data = array_merge($data, $this->model_setting_setting->getSetting('module_marketplace', 0));
			$data = array_merge($data, $this->model_setting_setting->getSetting('marketplace', 0));
		}


		$this->load->model('tool/image');

		if (isset($data['marketplace_default_image_name']) && $data['marketplace_default_image_name']) {
			$data['marketplace_default_image_name'] = $data['marketplace_default_image_name'];
			$data['marketplace_default_image'] = $this->model_tool_image->resize($data['marketplace_default_image_name'], 90, 90);
		}

		if (isset($this->error['warning'])) {
			$data['error_warning'] = $this->error['warning'];
		} else {
			$data['error_warning'] = '';
		}

		if (isset($this->session->data['success'])) {
			$data['success'] = $this->session->data['success'];
			unset($this->session->data['success']);
		} else {
			$data['success'] = '';
		}

		$data['breadcrumbs'] = array();

		$data['breadcrumbs'][] = array(
			'text'      => $this->language->get('text_home'),
			'href'      => $this->url->link('common/dashboard', 'user_token=' . $this->session->data['user_token'], true),
		);

		$data['breadcrumbs'][] = array(
			'text'      => $this->language->get('text_module'),
			'href'      => $this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=module', true),
		);

		$data['breadcrumbs'][] = array(
			'text'      => $this->language->get('heading_title'),
			'href'      => $this->url->link('extension/module/marketplace', 'user_token=' . $this->session->data['user_token'], true),
		);

		$data['action'] = $this->url->link('extension/module/marketplace', 'user_token=' . $this->session->data['user_token'], true);
		$data['cancel'] = $this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=module', true);

		$product_table = $this->db->query("SELECT COLUMN_NAME FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_SCHEMA = '" . DB_DATABASE . "' AND table_name = '" . DB_PREFIX . "product'")->rows;

		$product_table = array_slice($product_table, 2, -3);

		$data['product_table'] = array();

		foreach ($product_table as $key => $value) {
			if ($value['COLUMN_NAME'] != 'status') {
				$data['product_table'][] = $value['COLUMN_NAME'];
			}
		}

		$data['product_table'][] = 'keyword';

		$data['product_tabs'] = array('links', 'attribute', 'options', 'discount', 'special', 'images', 'custom-field');

		//folder path for SEF urls
		$this->getdir();
		$data['paths'] = $this->files_array;

		$data['profile_table'] = array();
		$profile_table = $this->db->query("SELECT COLUMN_NAME FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_SCHEMA = '" . DB_DATABASE . "' AND table_name = '" . DB_PREFIX . "customerpartner_to_customer'")->rows;

		// $profile_table = array_slice($profile_table, 3, -1);

		$profileFeidls = [
			// 'screenname',
			'avatar',
			'gender',
			'shortprofile',
			'twitterid',
			'facebookid',
			'youtube',
			'instagram',
			'companylocality',
			'country',
			'backgroundcolor',
			'companybanner',
			'companylogo',
			'companydescription',
			'paypalid',
			'otherpayment',
			'taxinfo'
		];

		$profile_table = array_column($profile_table, 'COLUMN_NAME');

		foreach ($profile_table as $key => $value) {
			if (!in_array($value, $profileFeidls)) {
				unset($profile_table[array_search($value, $profileFeidls)]);
			} else {
				$data['profile_table'][] = $value;
			}
		}

		$data['account_menu'] = array(
			'profile' => $this->language->get('entry_mod_profile'),
			'dashboard' => $this->language->get('entry_mod_dashboard'),
			'orderhistory' => $this->language->get('entry_mod_order'),
			'transaction' => $this->language->get('entry_mod_transaction'),
			'productlist' => $this->language->get('entry_mod_productlist'),
			'category' => $this->language->get('entry_mod_category'),
			'addproduct' => $this->language->get('entry_mod_addproduct'),
			'downloads' => $this->language->get('entry_mod_downloads'),
			'manageshipping' => $this->language->get('entry_mod_manageshipping'),
			'asktoadmin' => $this->language->get('entry_mod_asktoadmin'),
			'notification' => $this->language->get('entry_mod_notification'),
			'information' => $this->language->get('entry_mod_information'),
			'review' => $this->language->get('entry_mod_review'),
			'income' => $this->language->get('entry_mod_income'),
			'customers' => $this->language->get('entry_mod_customers'),
			'sales' => $this->language->get('entry_mod_sales'),
		);

		$data['publicSellerProfile'] = array(
			'store' => $this->language->get('entry_store_tab'),
			'collection' => $this->language->get('entry_collection_tab'),
			'review' => $this->language->get('entry_review_tab'),
			'productReview' => $this->language->get('entry_product_review_tab'),
			//'location' => $this->language->get('entry_location_tab'),
		);

		/*
		Membership code
		Add memebership option to existing array
		 */
		if ($this->config->get('module_wk_seller_group_status')) {
			$data['wk_seller_group_status'] = true;
			$data['account_menu']['membership'] = $this->language->get('entry_mod_membership');
			$data['marketplace_account_menu_sequence']['membership'] = $this->language->get('entry_mod_membership');

			$data['account_menu']['membership_quote'] = $this->language->get('entry_mod_membership_quote');
			$data['marketplace_account_menu_sequence']['membership_quote'] = $this->language->get('entry_mod_membership_quote');
		} else {
			$data['wk_seller_group_status'] = false;
			if (isset($data['account_menu']['membership'])) {
				unset($data['account_menu']['membership']);
			}
			if (isset($data['marketplace_account_menu_sequence']['membership'])) {
				unset($data['marketplace_account_menu_sequence']['membership']);
			}

			if (isset($data['account_menu']['membership_quote'])) {
				unset($data['account_menu']['membership_quote']);
			}
			if (isset($data['marketplace_account_menu_sequence']['membership_quote'])) {
				unset($data['marketplace_account_menu_sequence']['membership_quote']);
			}
		}
		/*
        end here
         */
		/*
	 			PRiceAlert mod
	 			Adding PRiceAlert mod to existing array
	 			 */
		if ($this->config->get('module_wk_pricealert_status')) {
			$data['wk_pricealert'] = true;
			$data['account_menu']['pricealert'] = $this->language->get('entry_mod_pricealert');
			$data['marketplace_account_menu_sequence']['pricealert'] = $this->language->get('entry_mod_pricealert');
			$data['account_menu']['pa_request'] = $this->language->get('entry_mod_pa_request');
			$data['marketplace_account_menu_sequence']['pa_request'] = $this->language->get('entry_mod_pa_request');
		} else {
			$data['wk_pricealert'] = false;
			if (isset($data['marketplace_account_menu_sequence']['pricealert'])) {
				unset($data['marketplace_account_menu_sequence']['pq_request']);
			}
		}

		/*
	 			end here
	 			 */

		/*
 			Promotional mod
 			Adding promotional mod to existing array
 			 */
		if ($this->config->get('module_wk_upsell_upsell_status')) {
			$data['wk_upsell_upsell_status'] = true;
			$data['account_menu']['wk_upsell'] = $this->language->get('entry_mod_wk_upsell');
			$data['marketplace_account_menu_sequence']['wk_upsell'] = $this->language->get('entry_mod_wk_upsell');
		} else {
			$data['wk_upsell_upsell_status'] = false;
			if (isset($data['marketplace_account_menu_sequence']['wk_upsell'])) {
				unset($data['marketplace_account_menu_sequence']['wk_upsell']);
			}
		}

		if ($this->config->get('module_wk_crosssell_crosssell_status')) {
			$data['wk_crosssell_crosssell_status'] = true;
			$data['account_menu']['wk_crosssell'] = $this->language->get('entry_mod_wk_crosssell');
			$data['marketplace_account_menu_sequence']['wk_crosssell'] = $this->language->get('entry_mod_wk_crosssell');
		} else {
			$data['wk_crosssell_crosssell_status'] = false;
			if (isset($data['marketplace_account_menu_sequence']['wk_crosssell'])) {
				unset($data['marketplace_account_menu_sequence']['wk_crosssell']);
			}
		}
		/*
 			end here
 			 */

		$this->load->model('localisation/language');
		$data['languages'] = $this->model_localisation_language->getLanguages();
		$data['config_language_id'] = $this->config->get('config_language_id');

		$this->load->model('localisation/order_status');
		$data['order_statuses'] = $this->model_localisation_order_status->getOrderStatuses();

		$this->load->model('setting/extension');

		$shipping_methods = $this->model_setting_extension->getInstalled('shipping');
		foreach ($shipping_methods as $key => $shipping_method) {
			$file = glob(DIR_APPLICATION . 'controller/extension/shipping/' . $shipping_method . '.php');
			if ($file) {
				$this->load->language('extension/shipping/' . $shipping_method);
				$data['shipping_methods'][] = array(
					'code' => $shipping_method,
					'name' => $this->language->get('heading_title'),
				);
			}
		}

		$data['currency_symbol'] = $this->currency->getSymbolLeft($this->config->get('config_currency'));
		if (!isset($data['marketplace_available_order_status'])) {
			$data['marketplace_order_status_sequence'] = array();
		}
		//get total mail
		$this->load->model('customerpartner/mail');
		$data['mails'] = $this->model_customerpartner_mail->gettotal();

		$data['user_token'] = $this->session->data['user_token'];
		$data['header'] = $this->load->controller('common/header');
		$data['footer'] = $this->load->controller('common/footer');
		$data['column_left'] = $this->load->controller('common/column_left');

		$this->response->setOutput($this->load->view('extension/module/marketplace', $data));
	}

	private function validate()
	{
		if (!$this->user->hasPermission('modify', 'extension/module/marketplace')) {
			$this->error['warning'] = $this->language->get('error_permission');
		}

		if (isset($this->request->post['marketplace_SefUrlsvalue']) && $this->request->post['marketplace_SefUrlsvalue'] && count($this->request->post['marketplace_SefUrlsvalue']) != count(array_unique($this->request->post['marketplace_SefUrlsvalue']))) {
			$this->error['warning'] = $this->language->get('error_sef');
		}

		if (isset($this->request->post['marketplace_SefUrlsvalue']) && $this->request->post['marketplace_SefUrlsvalue'] && is_array($this->request->post['marketplace_SefUrlsvalue'])) {
			foreach ($this->request->post['marketplace_SefUrlsvalue'] as $key => $value) {
				if (preg_match('/[^A-Za-z0-9_-]/', $value)) {
					$this->error['warning'] = $this->language->get('error_sef');
					break;
				}
			}
		}

		if (!$this->error) {
			return true;
		} else {
			return false;
		}
	}

	private function imageValidation($value)
	{

		$this->load->language('extension/module/customerpartner');
		$error = true;

		if (isset($value['name']) && !empty($value['name']) && is_file($value['tmp_name'])) {
			// Sanitize the filename
			$filename = basename(html_entity_decode($value['name'], ENT_QUOTES, 'UTF-8'));

			// Validate the filename length
			if ((utf8_strlen($filename) < 3) || (utf8_strlen($filename) > 255)) {
				$this->error['warning'] = $this->language->get('error_filename');
				$error = false;
			}

			// Allowed file extension types
			$allowed = array(
				'jpg',
				'jpeg',
				'gif',
				'png'
			);

			if (!in_array(utf8_strtolower(utf8_substr(strrchr($filename, '.'), 1)), $allowed)) {
				$this->error['warning'] = $this->language->get('error_filetype');
				$error = false;
			}

			// Allowed file mime types
			$allowed = array(
				'image/jpeg',
				'image/pjpeg',
				'image/png',
				'image/x-png',
				'image/gif'
			);

			if (!in_array($value['type'], $allowed)) {
				$this->error['warning'] = $this->language->get('error_filetype');
				$error = false;
			}

			// Check to see if any PHP files are trying to be uploaded
			$content = file_get_contents($value['tmp_name']);

			if (preg_match('/\<\?php/i', $content)) {
				$this->error['warning'] = $this->language->get('error_filetype');
				$error = false;
			}

			// Return any upload error
			if ($value['error'] != UPLOAD_ERR_OK) {
				$this->error['warning'] = $this->language->get('error_upload_' . $value['error']);
				$error = false;
			}
		}

		return $error;
	}

	public function autocomplete()
	{
		$json = array();

		if (isset($this->request->get['filter_name'])) {

			$allowed_categories = '';
			if (isset($this->request->post['allowed_categories']) && $this->request->post['allowed_categories']) {
				foreach ($this->request->post['allowed_categories'] as $categories) {

					$allowed_categories .= ',' . $categories;
				}

				if ($allowed_categories) {
					$allowed_categories = ltrim($allowed_categories, ',');
				}
			}

			$this->load->model('customerpartner/partner');

			$filter_data = array(
				'filter_name' => $this->request->get['filter_name'],
				'sort'        => 'name',
				'order'       => 'ASC',
				'start'       => 0,
				'limit'       => 5
			);

			$results = $this->model_customerpartner_partner->getCategories($allowed_categories,$filter_data);

			foreach ($results as $result) {
				$json[] = array(
					'category_id' => $result['category_id'],
					'name'        => strip_tags(html_entity_decode($result['name'], ENT_QUOTES, 'UTF-8'))
				);
			}
		}

		$sort_order = array();

		foreach ($json as $key => $value) {
			$sort_order[$key] = $value['name'];
		}

		array_multisort($sort_order, SORT_ASC, $json);

		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));
	}

	private function checkSEOURLs()
	{
		if (!isset($this->request->post['marketplace_SefUrlspath']) && !isset($this->request->post['marketplace_SefUrlspath'])) {
			$this->request->post['marketplace_SefUrlspath'] = ["customerpartner/sell", "account/customerpartner/topsearch", "account/customerpartner/category", "account/customerpartner/crosssell", "account/customerpartner/upsell", "account/customerpartner/addproduct", "account/customerpartner/pricealert", "account/customerpartner/soldlist", "account/customerpartner/dashboard", "account/customerpartner/profile", "account/customerpartner/download", "account/customerpartner/orderlist", "account/customerpartner/productlist", "account/customerpartner/transaction", "account/customerpartner/orderinfo", "account/customerpartner/pa_request", "account/customerpartner/add_shipping_mod", "account/customerpartner/information", "account/customerpartner/review", "account/customerpartner/income", "account/customerpartner/customers", "account/customerpartner/sales", "account/customerpartner/notification", "account/customerpartner/reason", "account/customerpartner/config", "account/wk_pricealert", "account/customerpartner/soldinvoice", "account/soldinvoice"];

			$this->request->post['marketplace_SefUrlsvalue'] = ["vendors", "vendor-topsearch", "vendor-categories", "vendor-crossell", "vendor-upsell", "vendor-addproduct", "vendor-pricealert", "vendor-soldlist", "vendor-dashboard", "vendor-profile", "vendor-downloads", "vendor-orders", "vendor-products", "vendor-transactions", "vendor-order-info", "vendor-pricealert-requests", "vendor-add-shipping", "vendor-informations", "vendor-reviews", "vendor-income", "vendor-customers", "vendor-total-sales", "vendor-notifications", "vendor-reason", "vendor-config", "price-alert", "vendor-invoice", "invoice"];
		}
	}
}
