<?php
class ControllerAccountCustomerpartnerDashboardsChart extends Controller
{

	public function index()
	{
		$this->load->language('account/customerpartner/dashboards/chart');

		$data['heading_title'] = $this->language->get('heading_title');

		$data['text_day'] = $this->language->get('text_day');
		$data['text_week'] = $this->language->get('text_week');
		$data['text_month'] = $this->language->get('text_month');
		$data['text_year'] = $this->language->get('text_year');
		$data['text_view'] = $this->language->get('text_view');
		if ($this->config->get('marketplace_separate_view') && isset($this->session->data['marketplace_separate_view']) && $this->session->data['marketplace_separate_view'] == 'separate') {
			$data['separate_view'] = true;
		}
		return ($this->load->view('account/customerpartner/dashboards/chart', $data));
	}

	public function chart()
	{
		$this->load->language('account/customerpartner/dashboards/chart');

		$json = array();

		$json['order'] = array();
		$json['customer'] = array();
		$json['xaxis'] = array();

		$json['order']['label'] = $this->language->get('text_order');
		$json['customer']['label'] = $this->language->get('text_customer');
		$json['order']['data'] = array();
		$json['customer']['data'] = array();

		$this->load->model('customerpartner/dashboard');

		if (isset($this->request->get['range'])) {
			$range = $this->request->get['range'];
		} else {
			$range = 'day';
		}

		switch ($range) {
			default:
			case 'day':
				// $json[] = array('Hour', $this->language->get('text_order'), $this->language->get('text_customer'));

				$results_order = $this->model_customerpartner_dashboard->getTotalOrdersByDay();

				foreach ($results_order as $key => $value) {
					$json['order']['data'][] = array($key, $value['total']);
				}

				$results_customer = $this->model_customerpartner_dashboard->getTotalOrdersByDay();

				foreach ($results_customer as $key => $value) {
					$json['customer']['data'][] = array($key, $value['total']);
				}

				for ($i = 0; $i < 24; $i++) {
					$json['xaxis'][] = array($i, $i);
				}

				break;
			case 'week':
				// $json[] = array('Day', $this->language->get('text_order'), $this->language->get('text_customer'));

				$results_order = $this->model_customerpartner_dashboard->getTotalOrdersByWeek();

				foreach ($results_order as $key => $value) {
					$json['order']['data'][] = array($key, $value['total']);
				}

				$results_customer = $this->model_customerpartner_dashboard->getTotalCustomersByWeek();

				foreach ($results_customer as $key => $value) {
					$json['customer']['data'][] = array($key, $value['total']);
				}

				$date_start = strtotime('-' . date('w') . ' days');

				for ($i = 0; $i < 7; $i++) {
					$date = date('Y-m-d', $date_start + ($i * 86400));

					$json['xaxis'][] = array(date('w', strtotime($date)), date('D', strtotime($date)));
				}

				break;
			case 'month':
				// $json[] = array('Date', $this->language->get('text_order'), $this->language->get('text_customer'));

				$results_order = $this->model_customerpartner_dashboard->getTotalOrdersByMonth();

				foreach ($results_order as $key => $value) {
					$json['order']['data'][] = array($key, $value['total']);
				}

				$results_customer = $this->model_customerpartner_dashboard->getTotalCustomersByMonth();

				foreach ($results_customer as $key => $value) {
					$json['customer']['data'][] = array($key, $value['total']);
				}

				for ($i = 1; $i <= date('t'); $i++) {
					$date = date('Y') . '-' . date('m') . '-' . $i;

					$json['xaxis'][] = array(date('j', strtotime($date)), date('d', strtotime($date)));
				}

				break;
			case 'year':
				// $json[] = array('Month', $this->language->get('text_order'), $this->language->get('text_customer'));

				$results_order = $this->model_customerpartner_dashboard->getTotalOrdersByYear();
				foreach ($results_order as $key => $value) {
					$json['order']['data'][] = array($key, $value['total']);
				}

				$results_customer = $this->model_customerpartner_dashboard->getTotalCustomersByYear();
				foreach ($results_customer as $key => $value) {
					$json['customer']['data'][] = array($key, $value['total']);
				}

				for ($i = 1; $i <= 12; $i++) {
					$json['xaxis'][] = array($i, date('M', mktime(0, 0, 0, $i)));
				}


				break;
		}

		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));
	}
}
