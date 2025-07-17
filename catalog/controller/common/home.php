<?php
class ControllerCommonHome extends Controller {
	public function index() {
		$this->document->setTitle($this->config->get('config_meta_title'));
		$this->document->setDescription($this->config->get('config_meta_description'));
		$this->document->setKeywords($this->config->get('config_meta_keyword'));

		if (isset($this->request->get['route'])) {
			$this->document->addLink($this->config->get('config_url'), 'canonical');
		}

		$this->load->model('account/customerpartner');
		$subs_data = $this->model_account_customerpartner->getAllProductSubscriptions();

		date_default_timezone_set('Asia/Manila');
		$current_time = date('Y-m-d H:i:s');

		foreach ($subs_data as $sub) {
			if (isset($sub['date_expired']) && $sub['date_expired'] < $current_time) {
				$product = $this->model_account_customerpartner->getProduct($sub['product_id']);
				if ($product && isset($product['status']) && $product['status'] == 1) {
					$this->db->query("UPDATE " . DB_PREFIX . "product SET status = 0 WHERE product_id = '" . (int)$sub['product_id'] . "'");
				}
			}
		}

		$data['sellmenu'] = $this->load->controller('extension/module/marketplace/sellmenu');
		$data['menu'] = $this->load->controller('common/menu');
		$data['shopping_cart'] = $this->url->link('checkout/cart');
		$data['cart'] = $this->load->controller('common/cart');
		$data['search'] = $this->load->controller('common/search');

		$data['column_left'] = $this->load->controller('common/column_left');
		$data['column_right'] = $this->load->controller('common/column_right');
		$data['content_top'] = $this->load->controller('common/content_top');
		$data['content_bottom'] = $this->load->controller('common/content_bottom');
		$data['footer'] = $this->load->controller('common/footer');
		$data['header'] = $this->load->controller('common/header');

		$this->response->setOutput($this->load->view('common/home', $data));
	}
}
