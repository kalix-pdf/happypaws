<?php
class Controllercustomerpartnerdashboardssale extends Controller {

	public function index() {		

		$this->load->language('customerpartner/dashboards/sale');

		$data['heading_title'] = $this->language->get('heading_title');

		$data['text_view'] = $this->language->get('text_view');

		$this->load->model('customerpartner/dashboard');		
		$customer_id = $this->request->get['customer_id'];
		$today = $this->model_customerpartner_dashboard->getTotalSales($customer_id,array('filter_date_added' => date('Y-m-d', strtotime('-1 day'))));

		$yesterday = $this->model_customerpartner_dashboard->getTotalSales($customer_id,array('filter_date_added' => date('Y-m-d', strtotime('-2 day'))));

		if(isset($today['total']))
		$difference = $today['total'] - isset($yesterday['total'])?$yesterday['total']:0;
		else
		$difference = 0;

		if ($difference && $today['total']) {
			$data['percentage'] = round(($difference / $today['total']) * 100);
		} else {
			$data['percentage'] = 0;
		}

		$paid_amount = $this->model_customerpartner_dashboard->getPaidAmount($customer_id);
		$sales = $this->model_customerpartner_dashboard->getTotalSales($customer_id,array());
		//$sale_total = (float)$sales['total'],2);
		$sale_total 	= isset($sales['total']) ? (float)$sales['total'] : 0;
		$admin_amount 	= isset($sales['admin']) ? (float)$sales['admin'] : 0;
		$seller_amount 	= isset($sales['seller']) ? (float)$sales['seller'] : 0;

		if ($paid_amount) {
			$payable_amount = round($sales['total'] - ($paid_amount + $sales['admin']), 2);
			$payable_amount = $payable_amount;
		} else {
			if (isset($sales['seller']) && $sales['seller']) {
				$payable_amount = $sales['seller'];
			} else {
				$payable_amount = 0;
			}
		}

		$paid_amount = $paid_amount;

		if ($sale_total > 1000000000000) {
			$data['total'] = round($sale_total / 1000000000000, 2) . 'T';
		} elseif ($sale_total > 1000000000) {
			$data['total'] = round($sale_total / 1000000000, 2) . 'B';
		} elseif ($sale_total > 1000000) {
			$data['total'] = round($sale_total / 1000000, 2) . 'M';
		} elseif ($sale_total > 1000) {
			$data['total'] = round($sale_total / 1000, 2) . 'K';
		} else {
			$data['total'] = round($sale_total,2);
		}

		if ($admin_amount > 1000000000000) {
			$data['admin_amount'] = round($admin_amount / 1000000000000, 2) . 'T';
		} elseif ($admin_amount > 1000000000) {
			$data['admin_amount'] = round($admin_amount / 1000000000, 2) . 'B';
		} elseif ($admin_amount > 1000000) {
			$data['admin_amount'] = round($admin_amount / 1000000, 2) . 'M';
		} elseif ($admin_amount > 1000) {
			$data['admin_amount'] = round($admin_amount / 1000, 2) . 'K';
		} else {
			$data['admin_amount'] = round($admin_amount,2);
		}

		if ($seller_amount > 1000000000000) {
			$data['seller_amount'] = round($seller_amount / 1000000000000, 2) . 'T';
		} elseif ($seller_amount > 1000000000) {
			$data['seller_amount'] = round($seller_amount / 1000000000, 2) . 'B';
		} elseif ($seller_amount > 1000000) {
			$data['seller_amount'] = round($seller_amount / 1000000, 2) . 'M';
		} elseif ($seller_amount > 1000) {
			$data['seller_amount'] = round($seller_amount / 1000, 2) . 'K';
		} else {
			$data['seller_amount'] = round($seller_amount,2);
		}

		if ($payable_amount > 1000000000000) {
			$data['payable_amount'] = round($payable_amount / 1000000000000, 2) . 'T';
		} elseif ($payable_amount > 1000000000) {
			$data['payable_amount'] = round($payable_amount / 1000000000, 2) . 'B';
		} elseif ($payable_amount > 1000000) {
			$data['payable_amount'] = round($payable_amount / 1000000, 2) . 'M';
		} elseif ($payable_amount > 1000) {
			$data['payable_amount'] = round($payable_amount / 1000, 2) . 'K';
		} else {
			$data['payable_amount'] = round($payable_amount,2);
		}

		if ($paid_amount > 1000000000000) {
			$data['paid_amount'] = round($paid_amount / 1000000000000, 2) . 'T';
		} elseif ($paid_amount > 1000000000) {
			$data['paid_amount'] = round($paid_amount / 1000000000, 2) . 'B';
		} elseif ($paid_amount > 1000000) {
			$data['paid_amount'] = round($paid_amount / 1000000, 2) . 'M';
		} elseif ($paid_amount > 1000) {
			$data['paid_amount'] = round($paid_amount / 1000, 2) . 'K';
		} else {
			$data['paid_amount'] = round($paid_amount,2);
		}

		$data['sale'] = $this->url->link('customerpartner/orderlist', '', true);		

		return $this->load->view('customerpartner/sale', $data);
	}
}
