<?php
class Controllercustomerpartnerdashboardsorder extends Controller {

	public function index() {
		// return;

		$this->load->language('customerpartner/dashboards/order');

		$data['heading_title'] = $this->language->get('heading_title');

		$data['text_view'] = $this->language->get('text_view');

		// Total Orders
		$this->load->model('customerpartner/customerpartner');
		$customer_id = $this->request->get['customer_id'];
		$today = $this->model_customerpartner_customerpartner->getSellerOrdersTotal($customer_id,array('filter_date' => date('Y-m-d', strtotime('-1 day'))));

		$yesterday = $this->model_customerpartner_customerpartner->getSellerOrdersTotal($customer_id,array('filter_date' => date('Y-m-d', strtotime('-2 day'))));

		$difference = $today - $yesterday;

		if ($difference && $today) {
			$data['percentage'] = round(($difference / $today) * 100);
		} else {
			$data['percentage'] = 0;
		}
		
		$order_total = $this->model_customerpartner_customerpartner->getSellerOrdersTotal($customer_id,array());
		
		if ($order_total > 1000000000000) {
			$data['total'] = round($order_total / 1000000000000, 2) . 'T';
		} elseif ($order_total > 1000000000) {
			$data['total'] = round($order_total / 1000000000, 2) . 'B';
		} elseif ($order_total > 1000000) {
			$data['total'] = round($order_total / 1000000, 2) . 'M';
		} elseif ($order_total > 1000) {
			$data['total'] = round($order_total / 1000, 2) . 'K';
		} else {
			$data['total'] = round($order_total,2);
		}
				
		$data['order'] = $this->url->link('customerpartner/orderlist', '', true);

		return $this->load->view('customerpartner/order', $data);
	}
}
