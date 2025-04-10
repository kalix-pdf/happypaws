<?php
class ControllerCheckoutSuccess extends Controller {
	public function index() {
		$this->load->language('checkout/success');

		//load order model. Custom//
		// $this->load->model('checkout/order');
		
		// $order_data = $this->model_checkout_order->getOrder($order_id);
		// $products = $this->model_checkout_order->getOrderProducts($order_id);

		// $data['flash_order'] = array(
		// 	"order_no" => isset($order_data['order_id']) ? $order_data['order_id'] : '',
		// 	"recipient" => array(
		// 		"name" => trim($order_data['firstname'] . ' ' . $order_data['lastname']),
		// 		"Mobile Number" => isset($order_data['telephone']) ? $order_data['telephone'] : '',
		// 		"address" => isset($order_data['shipping_address_1']) ? $order_data['shipping_address_1'] : '',
		// 		"postcode" => isset($order_data['shipping_postcode']) ? $order_data['shipping_postcode'] : '',
		// 		"city" => isset($order_data['shipping_city']) ? $order_data['shipping_city'] : '',
		// 		"country" => isset($order_data['shipping_country']) ? $order_data['shipping_country'] : '',
		// 	),
		// );
		
		// $data['products'] = array(); // Ensure it's an array
		
		// if (!empty($products)) {
		// 	foreach ($products as $product) {
		// 		$data['products'][] = array(
		// 			'name'     => $product['name'],
		// 			'quantity' => $product['quantity'],
		// 			'price'    => $this->currency->format(
		// 				$product['price'],
		// 				$order_data['currency_code'],
		// 				$order_data['currency_value']
		// 			)
		// 		);
		// 	}
		// }
		
		

		if (isset($this->session->data['order_id'])) {
			$this->cart->clear();

			unset($this->session->data['shipping_method']);
			unset($this->session->data['shipping_methods']);
			unset($this->session->data['payment_method']);
			unset($this->session->data['payment_methods']);
			unset($this->session->data['guest']);
			unset($this->session->data['comment']);
			unset($this->session->data['order_id']);
			unset($this->session->data['coupon']);
			unset($this->session->data['reward']);
			unset($this->session->data['voucher']);
			unset($this->session->data['vouchers']);
			unset($this->session->data['totals']);
		}

		$this->document->setTitle($this->language->get('heading_title'));

		$data['breadcrumbs'] = array();

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_home'),
			'href' => $this->url->link('common/home')
		);

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_basket'),
			'href' => $this->url->link('checkout/cart')
		);

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_checkout'),
			'href' => $this->url->link('checkout/checkout', '', true)
		);

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_success'),
			'href' => $this->url->link('checkout/success')
		);

		if ($this->customer->isLogged()) {
			$data['text_message'] = sprintf($this->language->get('text_customer'), $this->url->link('account/account', '', true), $this->url->link('account/order', '', true), $this->url->link('account/download', '', true), $this->url->link('information/contact'));
		} else {
			$data['text_message'] = sprintf($this->language->get('text_guest'), $this->url->link('information/contact'));
		}

		$data['continue'] = $this->url->link('common/home');

		$data['column_left'] = $this->load->controller('common/column_left');
		$data['column_right'] = $this->load->controller('common/column_right');
		$data['content_top'] = $this->load->controller('common/content_top');
		$data['content_bottom'] = $this->load->controller('common/content_bottom');
		$data['footer'] = $this->load->controller('common/footer');
		$data['header'] = $this->load->controller('common/header');

		$this->response->setOutput($this->load->view('common/success', $data));
	}
}