<?php
class ControllerAccountCustomerpartnerBecomePartner extends Controller
{

	private $error = array();
	private $data = array();

	public function index()
	{

		if (!$this->customer->isLogged()) {
			$this->session->data['redirect'] = $this->url->link('account/customerpartner/become_partner', '', true);
			$this->response->redirect($this->url->link('account/register', '', true));
		}

		$this->load->language('account/customerpartner/become_partner');

		$this->document->setTitle($this->language->get('heading_title_become_partner'));
		$this->data['heading_title_become_partner'] = $this->language->get('heading_title_become_partner');
		$this->data['error_warning_authenticate'] = $this->language->get('error_warning_authenticate');

		$customer_id = $this->customer->getId();
		$this->data['customer_id'] = $customer_id;

		$this->load->model('account/customerpartner');
		$this->load->model('customerpartner/master');

		if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validateForm()) {
			//$country_id = $this->model_account_customerpartner->CustomerCountry_Id($this->customer->getId());
			$upload_dir = DIR_IMAGE . 'uploads/';
			$file_paths = [];

			foreach (['birfile', 'dtifile', 'mayorfile', 'validid'] as $file) {
				if (!empty($this->request->files[$file]['name'])) {
					$new_filename = uniqid($file . '_') . '.' . pathinfo($this->request->files[$file]['name'], PATHINFO_EXTENSION);
					$absolute_path = $upload_dir . $new_filename;
					$relative_path = 'image/uploads/' . $new_filename;

					if (move_uploaded_file($this->request->files[$file]['tmp_name'], $absolute_path)) {
						$file_paths[$file] = $relative_path;
					}
				}
			}

			if (!$this->error) {
				$this->model_account_customerpartner->becomePartner(
				    $this->request->post['shoppartner'], 
				    $customer_country_id = '',
				    $customer_id, 
				    $this->request->post['description']
				    );

				$this->model_customerpartner_master->addShopData(
					$customer_id, $file_paths
				);
			} 
			//else {
			//	$this->model_account_customerpartner->becomePartner($this->request->post['shoppartner'], $country_id['country_id'], $this->customer->getId(), $this->request->post['description']);
			//}
			$this->session->data['success'] = $this->language->get('text_success');
			$this->response->redirect($this->url->link('account/account', '', true));
		}

		$this->data['breadcrumbs'] = array();

		$this->data['breadcrumbs'][] = array(
			'text'      => $this->language->get('text_home'),
			'href'      => $this->url->link('common/home', '', true),
		);

		$this->data['breadcrumbs'][] = array(
			'text'      => $this->language->get('text_account'),
			'href'      => $this->url->link('account/account', '', true),
		);

		$this->data['breadcrumbs'][] = array(
			'text'      => $this->language->get('heading_title_become_partner'),
			'href'      => $this->url->link('account/customerpartner/become_partner', '', true),
		);

		if (isset($this->error['warning'])) {
			$this->data['error_warning'] = $this->error['warning'];
		} else {
			$this->data['error_warning'] = '';
		}

		if (isset($this->session->data['success'])) {
			$this->data['success'] = $this->session->data['success'];
			unset($this->session->data['success']);
		} else {
			$this->data['success'] = '';
		}

		$this->data['in_process'] = false;

		$hasApplied = $this->model_account_customerpartner->IsApplyForSellership();

		if ($hasApplied) {

			if ($this->model_account_customerpartner->chkIsPartner())
				$this->response->redirect($this->url->link('account/customerpartner/dashboard', '', true));
			else {
				$this->data['in_process'] = true;
				$this->data['text_delay'] = $this->language->get('text_delay');
			}
		} else {

			if (isset($this->error['error_shoppartner'])) {
				$this->data['error_shoppartner'] = $this->error['error_shoppartner'];
			} else {
				$this->data['error_shoppartner'] = '';
			}

			if (isset($this->error['error_description'])) {
				$this->data['error_description'] = $this->error['error_description'];
			} else {
				$this->data['error_description'] = '';
			}

			if (isset($this->error['SBSTYPE'])) {
				$this->data['error_SBSTYPE'] = $this->error['error_SBSTYPE'];
			} else {
				$this->data['error_SBSTYPE'] = '';
			}

			if (isset($this->request->post['shoppartner'])) {
				$this->data['shoppartner'] = $this->request->post['shoppartner'];
			} else {
				$this->data['shoppartner'] = '';
			}

			if (isset($this->request->post['description'])) {
				$this->data['description'] = $this->request->post['description'];
			} else {
				$this->data['description'] = '';
			}
		
			if (isset($this->request->post['SBSTYPE'])) {
				$this->data['SBSTYPE'] = $this->request->post['SBSTYPE'];
			} else {
				$this->data['SBSTYPE'] = '';
			}
			
		}

		$this->data['button_continue'] = $this->language->get('button_continue');
		$this->data['button_back'] = $this->language->get('button_back');

		$this->data['action'] = $this->url->link('account/customerpartner/become_partner', '', true);
		$this->data['back'] = $this->url->link('account/account', '', true);

		$this->data['isMember'] = true;

		$this->data['column_left'] = $this->load->controller('common/column_left');
		$this->data['column_right'] = $this->load->controller('common/column_right');
		$this->data['content_top'] = $this->load->controller('common/content_top');
		$this->data['content_bottom'] = $this->load->controller('common/content_bottom');
		$this->data['footer'] = $this->load->controller('common/footer');
		$this->data['header'] = $this->load->controller('common/header');

		$this->data['separate_view'] = false;

		$this->data['separate_column_left'] = '';

		// if ($this->config->get('marketplace_separate_view') && isset($this->session->data['marketplace_separate_view']) && $this->session->data['marketplace_separate_view'] == 'separate') {
		// 	$this->data['separate_view'] = true;
		// 	$this->data['column_left'] = '';
		// 	$this->data['column_right'] = '';
		// 	$this->data['content_top'] = '';
		// 	$this->data['content_bottom'] = '';
		// 	$this->data['separate_column_left'] = $this->load->controller('account/customerpartner/column_left');
		// 	$this->data['footer'] = $this->load->controller('account/customerpartner/footer');
		// 	$this->data['header'] = $this->load->controller('account/customerpartner/header');
		// }

		$this->response->setOutput($this->load->view('account/customerpartner/become_partner', $this->data));
	}

	private function validateForm()
	{
		$this->request->post['shoppartner'] = isset($this->request->post['shoppartner']) ? trim($this->request->post['shoppartner']) : '';
		$this->request->post['description'] = isset($this->request->post['description']) ? trim($this->request->post['description']) : '';
	
		$allowed_extensions = ['jpg', 'jpeg', 'png', 'pdf'];
		$max_size = 5 * 1024 * 1024; // 5MB limit

		$required_files = ['birfile', 'dtifile', 'mayorfile', 'validid'];

		foreach ($required_files as $file_key) {
			if (!isset($this->request->files[$file_key]) || empty($this->request->files[$file_key]['name'])) {
				$this->error["error_{$file_key}"] = "This file is required.";
				continue;
			}

			$file_data = $this->request->files[$file_key];
			$file_ext = strtolower(pathinfo($file_data['name'], PATHINFO_EXTENSION));
			$file_size = $file_data['size'];

			if (!in_array($file_ext, $allowed_extensions)) {
				$this->error["error_{$file_key}"] = "Invalid file type! Allowed: JPG, JPEG, PNG, PDF.";
			} elseif ($file_size > $max_size) {
				$this->error["error_{$file_key}"] = "File size exceeds 5MB.";
			}
		}

		foreach ($required_files as $file_key) {
			$this->data["error_{$file_key}"] = isset($this->error["error_{$file_key}"]) ? $this->error["error_{$file_key}"] : '';
		}
		

		if (utf8_strlen($this->request->post['shoppartner']) <= 3) {
			$this->error['error_shoppartner'] = $this->language->get('error_validshop');
		} elseif (utf8_strlen($this->request->post['description']) <= 3) {
			$this->error['error_description'] = $this->language->get('error_message');
		} else {
			$this->load->model('customerpartner/master');
			if ($this->model_customerpartner_master->getShopData($this->request->post['shoppartner'])) {
				$this->error['error_shoppartner'] = $this->language->get('error_message');
			}
		}

		// if (empty($this->request->post['SBSTYPE']))
		// {
		// 	$this->error['error_SBSTYPE'] = "Please select a pricing option.";
		// }

		if (!$this->error) {
			return true;
		} else {
			return false;
		}
	}
}
