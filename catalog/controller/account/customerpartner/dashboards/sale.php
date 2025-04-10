<?php
class ControllerAccountCustomerpartnerDashboardsSale extends Controller
{

	public function index()
	{

		$this->load->language('account/customerpartner/dashboards/sale');

		$data['heading_title'] = $this->language->get('heading_title');

		$data['text_view'] = $this->language->get('text_view');

		$this->load->model('customerpartner/dashboard');

		$today = $this->model_customerpartner_dashboard->getTotalSales(array('filter_date_added' => date('Y-m-d', strtotime('-1 day'))));

		$yesterday = $this->model_customerpartner_dashboard->getTotalSales(array('filter_date_added' => date('Y-m-d', strtotime('-2 day'))));

		$data['percentage'] = isset($today['total']) && isset($yesterday['total']) ? round(($yesterday['total'] / $today['total']) * 100) : 0;

		$paid_amount = $this->model_customerpartner_dashboard->getPaidAmount();

		$sales = $this->model_customerpartner_dashboard->getTotalSales();
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
			$data['total'] = round($sale_total, 2);
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
			$data['admin_amount'] = round($admin_amount, 2);
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
			$data['seller_amount'] = round($seller_amount, 2);
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
			$data['payable_amount'] = round($payable_amount, 2);
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
			$data['paid_amount'] = round($paid_amount, 2);
		}

		if ($this->config->get('marketplace_separate_view') && isset($this->session->data['marketplace_separate_view']) && $this->session->data['marketplace_separate_view'] == 'separate') {
			$data['separate_view'] = true;
		}


		$data['sale'] = $this->url->link('account/customerpartner/income', '&sort=c2o.date_added&order=DESC&filter_display_type=order&filter_display_group=year&dashboard=wk_filter', true);

		return ($this->load->view('account/customerpartner/dashboards/sale', $data));
	}
}
