<?php
class ControllerAccountCustomerpartnerColumnLeft extends Controller
{
	public function index()
	{

		$this->load->language('account/customerpartner/column_left');

		$this->load->model('tool/image');

		$data['firstname'] = '';
		$data['lastname'] = '';
		$data['screenname'] = '';
		$data['image'] = '';
		$data['version'] = VERSION;

		$data['menus'] = array();

		if ($this->config->get('module_marketplace_status') && is_array($this->config->get('marketplace_allowed_account_menu')) && $this->config->get('marketplace_allowed_account_menu')) {

			$this->load->model('account/customerpartner');

			$sellerProfile = $this->model_account_customerpartner->getProfile();

			if (isset($sellerProfile['firstname']) && $sellerProfile['firstname']) {
				$data['firstname'] = $sellerProfile['firstname'];
			}

			if (isset($sellerProfile['lastname']) && $sellerProfile['lastname']) {
				$data['lastname'] = $sellerProfile['lastname'];
			}

			if (isset($sellerProfile['screenname']) && $sellerProfile['screenname']) {
				$data['screenname'] = $sellerProfile['screenname'];
			}

			if (isset($sellerProfile['avatar']) && $sellerProfile['avatar'] && is_file(DIR_IMAGE . $sellerProfile['avatar'])) {
				$data['image'] = $this->model_tool_image->resize($sellerProfile['avatar'], 45, 45);
			} else {
				$data['image'] = '';
			}
			$data['isMember'] = false;
			if ($this->config->get('module_wk_seller_group_status')) {
				$data['module_wk_seller_group_status'] = true;
				$this->load->model('account/customer_group');
				$isMember = $this->model_account_customer_group->getSellerMembershipGroup($this->customer->getId());
				if ($isMember) {
					$allowedAccountMenu = $this->model_account_customer_group->getaccountMenu($isMember['gid']);
					if ($allowedAccountMenu['value']) {
						$accountMenu = explode(',', $allowedAccountMenu['value']);
						foreach ($accountMenu as $key => $menu) {
							$aMenu = explode(':', $menu);
							$data['marketplace_allowed_account_menu'][$aMenu[0]] = $aMenu[1];
						}
					}
					$data['isMember'] = true;
				} else {
					$data['isMember'] = false;
					$data['marketplace_allowed_account_menu'] = [];
				}
			} else {
				$data['marketplace_allowed_account_menu'] = $this->config->get('marketplace_allowed_account_menu');
			}

			// Marketplace Custom Shipping
			if (!$this->config->get('shipping_wk_custom_shipping_status') || !$this->config->get('shipping_wk_custom_shipping_seller_details')) {
				unset($data['marketplace_allowed_account_menu']['manageshipping']);
			}

			if (in_array('dashboard',  $data['marketplace_allowed_account_menu'])) {
				$data['menus'][] = array(
					'id'       => 'menu-dashboard',
					'icon'	   => 'fa-dashboard',
					'name'	   => $this->language->get('text_dashboard'),
					'href'     => $this->url->link('account/customerpartner/dashboard', '', true),
					'children' => array()
				);
			}

			if (in_array('profile',  $data['marketplace_allowed_account_menu'])) {
				$data['menus'][] = array(
					'id'       => 'menu-profile',
					'icon'	   => 'fa-user-plus',
					'name'	   => $this->language->get('text_profile'),
					'href'     => $this->url->link('account/customerpartner/profile', '', true),
					'children' => array()
				);
			}

			if (in_array('category',  $data['marketplace_allowed_account_menu'])) {
				$data['menus'][] = array(
					'id'       => 'menu-category',
					'icon'	   => 'fa-tags',
					'name'	   => $this->language->get('text_category'),
					'href'     => $this->url->link('account/customerpartner/category', '', true),
					'children' => array()
				);
			}

			$product = array();

			if (in_array('productlist',  $data['marketplace_allowed_account_menu'])) {
				$product[] = array(
					'name'	   => $this->language->get('text_productlist'),
					'href'     => $this->url->link('account/customerpartner/productlist', '', true),
					'children' => array()
				);
			}

			if (in_array('addproduct',  $data['marketplace_allowed_account_menu'])) {
				$product[] = array(
					'name'	   => $this->language->get('text_addproduct'),
					'href'     => $this->url->link('account/customerpartner/addproduct', '', true),
					'children' => array()
				);
			}

				$product[] = array(
					'name'	   => 'Add Product Variety',
					'href'     => $this->url->link('account/customerpartner/addproductoption', '', true),
					'children' => array()
				);
			


			if ($product) {
				$data['menus'][] = array(
					'id'       => 'menu-product',
					'icon'	   => 'fa-building', 
					'name'	   => $this->language->get('text_product'),
					'href'     => '',
					'children' => $product
				);
			}

			if (in_array('orderhistory',  $data['marketplace_allowed_account_menu'])) {
				$data['menus'][] = array(
					'id'       => 'menu-orderhistory',
					'icon'	   => 'fa-shopping-cart',
					'name'	   => $this->language->get('text_orderhistory'),
					'href'     => $this->url->link('account/customerpartner/orderlist', '', true),
					'children' => array()
				);
			}

			if (in_array('income',  $data['marketplace_allowed_account_menu'])) {
				$data['menus'][] = array(
					'id'       => 'menu-income',
					'icon'	   => 'fa-money',
					'name'	   => $this->language->get('text_income'),
					'href'     => $this->url->link('account/customerpartner/income', '', true),
					'children' => array()
				);
			}

			if (in_array('transaction',  $data['marketplace_allowed_account_menu'])) {
				$data['menus'][] = array(
					'id'       => 'menu-transaction',
					'icon'	   => 'fa-credit-card',
					'name'	   => $this->language->get('text_transaction'),
					'href'     => $this->url->link('account/customerpartner/transaction', '', true),
					'children' => array()
				);
			}

			if (in_array('downloads',  $data['marketplace_allowed_account_menu'])) {
				$data['menus'][] = array(
					'id'       => 'menu-downloads',
					'icon'	   => 'fa-download',
					'name'	   => $this->language->get('text_downloads'),
					'href'     => $this->url->link('account/customerpartner/download', '', true),
					'children' => array()
				);
			}

			if (in_array('manageshipping',  $data['marketplace_allowed_account_menu'])) {
				$data['menus'][] = array(
					'id'       => 'menu-manageshipping',
					'icon'	   => 'fa-truck',
					'name'	   => $this->language->get('text_manageshipping'),
					'href'     => $this->url->link('account/customerpartner/add_shipping_mod', '', true),
					'children' => array()
				);
			}

			if (in_array('review',  $data['marketplace_allowed_account_menu'])) {
				$data['menus'][] = array(
					'id'       => 'menu-review',
					'icon'	   => 'fa-comments-o',
					'name'	   => $this->language->get('text_review'),
					'href'     => $this->url->link('account/customerpartner/review', '', true),
					'children' => array()
				);
			}

			if (in_array('information', $data['marketplace_allowed_account_menu'])) {
				$data['menus'][] = array(
					'id'       => 'menu-information',
					'icon'	   => 'fa-info-circle',
					'name'	   => $this->language->get('text_information'),
					'href'     => $this->url->link('account/customerpartner/information', '', true),
					'children' => array()
				);
			}

			if (in_array('notification',  $data['marketplace_allowed_account_menu'])) {
				$data['menus'][] = array(
					'id'       => 'menu-notification',
					'icon'	   => 'fa-bell-o',
					'name'	   => $this->language->get('text_notification'),
					'href'     => $this->url->link('account/customerpartner/notification', '', true),
					'children' => array()
				);
			}
			if (in_array('wk_upsell',  $data['marketplace_allowed_account_menu'])) {
				$data['menus'][] = array(
					'id'       => 'menu-wk_upsell',
					'icon'	   => 'far fa-thumbs-up',
					'name'	   => $this->language->get('text_upsell'),
					'href'     => $this->url->link('account/customerpartner/upsell', '', true),
					'children' => array()
				);
			}
			if (in_array('wk_crosssell',  $data['marketplace_allowed_account_menu'])) {
				$data['menus'][] = array(
					'id'       => 'menu-wk_crosssell',
					'icon'	   => 'fas fa-times',
					'name'	   => $this->language->get('text_crosssells'),
					'href'     => $this->url->link('account/customerpartner/crosssell', '', true),
					'children' => array()
				);
			}
			if (in_array('pricealert',  $data['marketplace_allowed_account_menu'])) {
				$data['menus'][] = array(
					'id'       => 'menu-pricealert',
					'icon'	   => 'fa-credit-card',
					'name'	   => $this->language->get('text_pricealert'),
					'href'     => $this->url->link('account/customerpartner/pricealert', '', true),
					'children' => array()
				);
			}

			if (in_array('pa_request',  $data['marketplace_allowed_account_menu'])) {
				$data['menus'][] = array(
					'id'       => 'menu-pa_request',
					'icon'	   => 'fa-bell-o',
					'name'	   => $this->language->get('text_pa_request'),
					'href'     => $this->url->link('account/customerpartner/pa_request', '', true),
					'children' => array()
				);
			}

			if (in_array('customers',  $data['marketplace_allowed_account_menu'])) {
				$data['menus'][] = array(
					'id'       => 'menu-customers',
					'icon'	   => 'fa-users',
					'name'	   => $this->language->get('text_customers'),
					'href'     => $this->url->link('account/customerpartner/customers', '', true),
					'children' => array()
				);
			}

			if (in_array('sales',  $data['marketplace_allowed_account_menu'])) {
				$data['menus'][] = array(
					'id'       => 'menu-sales',
					'icon'	   => 'fa-line-chart',
					'name'	   => $this->language->get('text_sales'),
					'href'     => $this->url->link('account/customerpartner/sales', '', true),
					'children' => array()
				);
			}
		}
		return $this->load->view('account/customerpartner/column_left', $data);
	}
}
