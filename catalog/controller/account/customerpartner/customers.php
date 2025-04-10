<?php
require_once DIR_SYSTEM . 'ocMpTrait.php';
class ControllerAccountCustomerpartnerCustomers extends Controller
{
	use OcMpTrait;

	private $error = array();
	private $data = array();

	public function index()
	{
		$this->checkMpModuleStatus();

		if (!$this->customer->isLogged()) {
			$this->session->data['redirect'] = $this->url->link('account/customerpartner/customers', '', true);
			$this->response->redirect($this->url->link('account/login', '', true));
		}

		$this->load->model('account/customerpartner');

		$this->data['chkIsPartner'] = $this->model_account_customerpartner->chkIsPartner();

		if (!$this->data['chkIsPartner'] || (isset($this->session->data['marketplace_seller_mode']) && !$this->session->data['marketplace_seller_mode'])) {
			$this->response->redirect($this->url->link('account/account', '', true));
		}

		$this->getList();
	}

	protected function getList()
	{

		$this->language->load('account/customerpartner/customers');

		$this->document->setTitle($this->language->get('heading_title'));

		$this->data['breadcrumbs'] = array();

		$this->data['breadcrumbs'][] = array(
			'text'      => $this->language->get('text_home'),
			'href'      => $this->url->link('common/home', '', true),
			'separator' => false
		);

		$this->data['breadcrumbs'][] = array(
			'text'      => $this->language->get('text_account'),
			'href'      => $this->url->link('account/account', '', true),
			'separator' => $this->language->get('text_separator')
		);

		$this->data['breadcrumbs'][] = array(
			'text'      => $this->language->get('text_productlist'),
			'href'      => $this->url->link('account/customerpartner/customers', '', true),
			'separator' => $this->language->get('text_separator')
		);

		// filter
		if (isset($this->request->get['filter_customer_id'])) {
			$filter_customer_id = $this->request->get['filter_customer_id'];
		} else {
			$filter_customer_id = null;
		}

		if (isset($this->request->get['filter_name'])) {
			$filter_name = $this->request->get['filter_name'];
		} else {
			$filter_name = null;
		}

		if (isset($this->request->get['filter_phone'])) {
			$filter_phone = $this->request->get['filter_phone'];
		} else {
			$filter_phone = null;
		}

		if (isset($this->request->get['filter_email'])) {
			$filter_email = $this->request->get['filter_email'];
		} else {
			$filter_email = null;
		}

		if (isset($this->request->get['sort'])) {
			$sort = $this->request->get['sort'];
		} else {
			$sort = 'oc.customer_id';
		}

		if (isset($this->request->get['order'])) {
			$order = $this->request->get['order'];
		} else {
			$order = 'DESC';
		}

		if (isset($this->request->get['page'])) {
			$page = $this->request->get['page'];
		} else {
			$page = 1;
		}

		$data = array(
			'filter_customer_id'	=> $filter_customer_id,
			'filter_name'	        => $filter_name,
			'filter_phone'	        => $filter_phone,
			'filter_email'	        => $filter_email,
			'sort'                  => $sort,
			'order'                 => $order,
			'start'                 => ($page - 1) * 10,
			'limit'                 => 10
		);

		$this->data['customers'] = array();
		// get customers
		$customers = $this->model_account_customerpartner->getCustomersLists($data);
		// get customer total
		$orderstotal = $this->model_account_customerpartner->getCustomersListsTotal($data);

		// customer data creation
		if (!empty($customers)) {
			foreach ($customers as $customer) {
				if ($customer['total'] > 1000000000000) {
					$total = number_format(round($customer['total'] / 1000000000000, 1), 2) . 'T';
				} elseif ($customer['total'] > 1000000000) {
					$total = number_format(round($customer['total'] / 1000000000, 1), 2) . 'B';
				} elseif ($customer['total'] > 1000000) {
					$total = number_format(round($customer['total'] / 1000000, 1), 2) . 'M';
				} elseif ($customer['total'] > 1000) {
					$total = number_format(round($customer['total'] / 1000, 1), 2) . 'K';
				} else {
					$total = number_format($customer['total'], 2);
				}

				$this->data['customers'][] = [
					'customer_id'   => $customer['customer_id'],
					'name'          => $customer['name'],
					'telephone'     => $customer['telephone'],
					'telephone'     => $customer['telephone'],
					'email'         => $customer['email'],
					'email'         => $customer['email'],
					'total'         => $total,
					'date_added'    => $customer['date_added']
				];
			}
		}
		// end

		$url = '';

		if (isset($this->request->get['filter_customer_id'])) {
			$url .= '&filter_customer_id=' . (int)$this->request->get['filter_customer_id'];
		}

		if (isset($this->request->get['filter_name'])) {
			$url .= '&filter_name=' . urlencode(html_entity_decode($this->request->get['filter_name'], ENT_QUOTES, 'UTF-8'));
		}

		if (isset($this->request->get['filter_phone'])) {
			$url .= '&filter_phone=' . $this->request->get['filter_phone'];
		}

		if (isset($this->request->get['filter_email'])) {
			$url .= '&filter_email=' . $this->request->get['filter_email'];
		}

		if ($order == 'ASC') {
			$url .= '&order=DESC';
		} else {
			$url .= '&order=ASC';
		}

		if (isset($this->request->get['page'])) {
			$url .= '&page=' . $this->request->get['page'];
		}

		$this->data['sort_customer_id'] = $this->url->link('account/customerpartner/customers', '' . '&sort=oc.customer_id' . $url, true);
		$this->data['sort_firstname'] = $this->url->link('account/customerpartner/customers', '' . '&sort=o.firstname' . $url, true);
		$this->data['sort_date'] = $this->url->link('account/customerpartner/customers', '' . '&sort=oc.date_added' . $url, true);

		$url = '';

		if (isset($this->request->get['filter_customer_id'])) {
			$url .= '&filter_customer_id=' . (int)$this->request->get['filter_customer_id'];
		}

		if (isset($this->request->get['filter_name'])) {
			$url .= '&filter_name=' . urlencode(html_entity_decode($this->request->get['filter_name'], ENT_QUOTES, 'UTF-8'));
		}

		if (isset($this->request->get['filter_phone'])) {
			$url .= '&filter_phone=' . $this->request->get['filter_phone'];
		}

		if (isset($this->request->get['filter_email'])) {
			$url .= '&filter_email=' . $this->request->get['filter_email'];
		}

		if (isset($this->request->get['sort'])) {
			$url .= '&sort=' . $this->request->get['sort'];
		}

		if (isset($this->request->get['order'])) {
			$url .= '&order=' . $this->request->get['order'];
		}

		$pagination = new Pagination();
		$pagination->total = $orderstotal;
		$pagination->page = $page;
		$pagination->limit = 10;
		$pagination->url = $this->url->link('account/customerpartner/customers' . $url, '&page={page}', true);

		$this->data['pagination'] = $pagination->render();
		$this->data['results'] = sprintf($this->language->get('text_pagination'), ($orderstotal) ? (($page - 1) * 10) + 1 : 0, ((($page - 1) * 10) > ($orderstotal - 10)) ? $orderstotal : ((($page - 1) * 10) + 10), $orderstotal, ceil($orderstotal / 10));

		$this->data['filter_customer_id']   = $filter_customer_id;
		$this->data['filter_name']          = $filter_name;
		$this->data['filter_phone']         = $filter_phone;
		$this->data['filter_email']         = $filter_email;

		$this->data['sort'] = $sort;
		$this->data['order'] = $order;

		$this->data['back'] = $this->url->link('account/account', '', true);

		$this->data['isMember'] = true;
		if ($this->config->get('module_wk_seller_grouper_group_status')) {
			$this->data['module_wk_seller_grouper_group_status'] = true;
			$this->load->model('account/customer_group');
			$isMember = $this->model_account_customer_group->getSellerMembershipGroup($this->customer->getId());
			if ($isMember) {
				$allowedAccountMenu = $this->model_account_customer_group->getaccountMenu($isMember['gid']);
				if ($allowedAccountMenu['value']) {
					$accountMenu = explode(',', $allowedAccountMenu['value']);
					if ($accountMenu && !in_array('customers:customers', $accountMenu)) {
						$this->data['isMember'] = false;
					}
				}
			} else {
				$this->data['isMember'] = false;
			}
		} else {
			if (!is_array($this->config->get('marketplace_allowed_account_menu')) || !in_array('customers', $this->config->get('marketplace_allowed_account_menu'))) {
				$this->response->redirect($this->url->link('account/account', '', true));
			}
		}

		$this->data['current'] = $this->url->link('account/customerpartner/customers');
		$this->data['column_left'] = $this->load->controller('common/column_left');
		$this->data['column_right'] = $this->load->controller('common/column_right');
		$this->data['content_top'] = $this->load->controller('common/content_top');
		$this->data['content_bottom'] = $this->load->controller('common/content_bottom');
		$this->data['footer'] = $this->load->controller('common/footer');
		$this->data['header'] = $this->load->controller('common/header');

		$this->data['separate_view'] = false;

		$this->data['separate_column_left'] = '';

		if ($this->config->get('marketplace_separate_view') && isset($this->session->data['marketplace_separate_view']) && $this->session->data['marketplace_separate_view'] == 'separate') {
			$this->data['separate_view'] = true;
			$this->data['column_left'] = '';
			$this->data['column_right'] = '';
			$this->data['content_top'] = '';
			$this->data['content_bottom'] = '';
			$this->data['separate_column_left'] = $this->load->controller('account/customerpartner/column_left');
			$this->data['footer'] = $this->load->controller('account/customerpartner/footer');
			$this->data['header'] = $this->load->controller('account/customerpartner/header');
		}

		$this->response->setOutput($this->load->view('account/customerpartner/customers', $this->data));
	}
}
