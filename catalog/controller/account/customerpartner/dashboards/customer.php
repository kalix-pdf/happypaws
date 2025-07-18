<?php
class ControllerAccountCustomerpartnerDashboardsCustomer extends Controller
{

	public function index()
	{

		$this->load->language('account/customerpartner/dashboards/customer');

		$data['heading_title'] = $this->language->get('heading_title');

		$data['text_view'] = $this->language->get('text_view');

		// Total buyers
		$this->load->model('customerpartner/dashboard');

		$today = $this->model_customerpartner_dashboard->getTotalCustomers(array('filter_date_added' => date('Y-m-d', strtotime('-1 day'))));

		$yesterday = $this->model_customerpartner_dashboard->getTotalCustomers(array('filter_date_added' => date('Y-m-d', strtotime('-2 day'))));

		$difference = $today - $yesterday;

		if ($difference && $today) {
			$data['percentage'] = round(($difference / $today) * 100);
		} else {
			$data['percentage'] = 0;
		}

		$customer_total = $this->model_customerpartner_dashboard->getTotalCustomers();

		if ($customer_total > 1000000000000) {
			$data['total'] = round($customer_total / 1000000000000, 2) . 'T';
		} elseif ($customer_total > 1000000000) {
			$data['total'] = round($customer_total / 1000000000, 2) . 'B';
		} elseif ($customer_total > 1000000) {
			$data['total'] = round($customer_total / 1000000, 2) . 'M';
		} elseif ($customer_total > 1000) {
			$data['total'] = round($customer_total / 1000, 2) . 'K';
		} else {
			$data['total'] = round($customer_total, 2);
		}
		if ($this->config->get('marketplace_separate_view') && isset($this->session->data['marketplace_separate_view']) && $this->session->data['marketplace_separate_view'] == 'separate') {
			$data['separate_view'] = true;
		}

		$data['customer'] = $this->url->link('account/customerpartner/customers', '', true);

		return ($this->load->view('account/customerpartner/dashboards/customer', $data));
	}
}
