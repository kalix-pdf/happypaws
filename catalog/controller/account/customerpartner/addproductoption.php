<?php
class ControllerAccountCustomerpartnerAddproductOption extends Controller {
    public function index()
    {
      
		$this->load->language('catalog/option');

		$this->document->setTitle($this->language->get('heading_title'));

		$this->load->model('catalog/option');

		$this->getList();
	}

	public function add() {
		$this->load->language('catalog/option');

		$this->document->setTitle($this->language->get('heading_title'));

		$this->load->model('catalog/option');

		if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validateForm()) {
			$this->request->post['type'] = 'select';
			$this->model_catalog_option->addOption($this->request->post);
			
			// $this->log->write($this->request->post);

			$this->session->data['success'] = $this->language->get('text_success');

			$url = '';

			if (isset($this->request->get['sort'])) {
				$url .= '&sort=' . $this->request->get['sort'];
			}

			if (isset($this->request->get['order'])) {
				$url .= '&order=' . $this->request->get['order'];
			}

			if (isset($this->request->get['page'])) {
				$url .= '&page=' . $this->request->get['page'];
			}

			$this->response->redirect($this->url->link('account/customerpartner/addproductoption', $url, true));
		}

		$this->getForm();
	}

	public function edit() {
		$this->load->language('catalog/option');

		$this->document->setTitle($this->language->get('heading_title'));

		$this->load->model('catalog/option');

		if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validateForm()) {
			$this->model_catalog_option->editOption($this->request->get['option_id'], $this->request->post);

			$this->session->data['success'] = $this->language->get('text_success');

			$url = '';

			if (isset($this->request->get['sort'])) {
				$url .= '&sort=' . $this->request->get['sort'];
			}

			if (isset($this->request->get['order'])) {
				$url .= '&order=' . $this->request->get['order'];
			}

			if (isset($this->request->get['page'])) {
				$url .= '&page=' . $this->request->get['page'];
			}

			$this->response->redirect($this->url->link('account/customerpartner/addproductoption', $url, true));
		}

		$this->getForm();
	}

	public function delete() {
		$this->load->language('catalog/option');

		$this->document->setTitle($this->language->get('heading_title'));

		$this->load->model('catalog/option');

		if (isset($this->request->post['selected']) && $this->validateDelete()) {
			foreach ($this->request->post['selected'] as $option_id) {
				$this->model_catalog_option->deleteOption($option_id);
			}

			$this->session->data['success'] = $this->language->get('text_success');

			$url = '';

			if (isset($this->request->get['sort'])) {
				$url .= '&sort=' . $this->request->get['sort'];
			}

			if (isset($this->request->get['order'])) {
				$url .= '&order=' . $this->request->get['order'];
			}

			if (isset($this->request->get['page'])) {
				$url .= '&page=' . $this->request->get['page'];
			}

			$this->response->redirect($this->url->link('account/customerpartner/addproductoption' . $url, true));
		}

		$this->getList();
	}

	protected function getList() {
		
		$seller_id = $this->customer->getId();
		
		if (isset($this->request->get['sort'])) {
			$sort = $this->request->get['sort'];
		} else {
			$sort = 'od.name';
		}

		if (isset($this->request->get['order'])) {
			$order = $this->request->get['order'];
		} else {
			$order = 'ASC';
		}

		if (isset($this->request->get['page'])) {
			$page = (int)$this->request->get['page'];
		} else {
			$page = 1;
		}

		$url = '';

		if (isset($this->request->get['sort'])) {
			$url .= '&sort=' . $this->request->get['sort'];
		}

		if (isset($this->request->get['order'])) {
			$url .= '&order=' . $this->request->get['order'];
		}

		if (isset($this->request->get['page'])) {
			$url .= '&page=' . $this->request->get['page'];
		}

		$data['breadcrumbs'] = array();

		$data['breadcrumbs'][] = array(
			'text'      => $this->language->get('text_home'),
		);

		$data['breadcrumbs'][] = array(
			'text'      => $this->language->get('Account'),
			'href'      => $this->url->link('account/account', '', true),
		);

		$data['breadcrumbs'][] = array(
			'text'      => $this->language->get('Option List'),
			// 'href'      => $this->url->link('account/customerpartner/addproductoption/getList'),
		);

		$data['add'] = $this->url->link('account/customerpartner/addproductoption/add', true);
		$data['delete'] = $this->url->link('account/customerpartner/addproductoption/delete', true);

		$data['options'] = array();

		$filter_data = array(
			'sort'  => $sort,
			'order' => $order,
			'start' => ($page - 1) * $this->config->get('config_limit_admin'),
			'limit' => $this->config->get('config_limit_admin')
		);

		$option_total = $this->model_catalog_option->getTotalOptions();

		$results = $this->model_catalog_option->getOptionsBySeller($seller_id);

		foreach ($results as $result) {
			$data['options'][] = array(
				'option_id'  => $result['seller_option_id'],
				'name'       => $result['option_name'],
				'edit'       => $this->url->link('account/customerpartner/addproductoption/edit', '&option_id=' . $result['seller_option_id'] . $url, true)
			);
		}			

		if (isset($this->error['warning'])) {
			$data['error_warning'] = $this->error['warning'];
		} else {
			$data['error_warning'] = '';
		}

		if (isset($this->session->data['success'])) {
			$data['success'] = $this->session->data['success'];

			unset($this->session->data['success']);
		} else {
			$data['success'] = '';
		}

		if (isset($this->request->post['selected'])) {
			$data['selected'] = (array)$this->request->post['selected'];
		} else {
			$data['selected'] = array();
		}

		$url = '';

		if ($order == 'ASC') {
			$url .= '&order=DESC';
		} else {
			$url .= '&order=ASC';
		}

		if (isset($this->request->get['page'])) {
			$url .= '&page=' . $this->request->get['page'];
		}

		$data['sort_name'] = $this->url->link('account/customerpartner/addproductoption', '&sort=od.name' . $url, true);
		$data['sort_sort_order'] = $this->url->link('account/customerpartner/addproductoption', '&sort=o.sort_order' . $url, true);

		$url = '';

		if (isset($this->request->get['sort'])) {
			$url .= '&sort=' . $this->request->get['sort'];
		}

		if (isset($this->request->get['order'])) {
			$url .= '&order=' . $this->request->get['order'];
		}

		$pagination = new Pagination();
		$pagination->total = $option_total;
		$pagination->page = $page;
		$pagination->limit = $this->config->get('config_limit_admin');
		$pagination->url = $this->url->link('account/customerpartner/addproductoption', $url . '&page={page}', true);

		$data['pagination'] = $pagination->render();

		$data['results'] = sprintf($this->language->get('text_pagination'), ($option_total) ? (($page - 1) * $this->config->get('config_limit_admin')) + 1 : 0, ((($page - 1) * $this->config->get('config_limit_admin')) > ($option_total - $this->config->get('config_limit_admin'))) ? $option_total : ((($page - 1) * $this->config->get('config_limit_admin')) + $this->config->get('config_limit_admin')), $option_total, ceil($option_total / $this->config->get('config_limit_admin')));

		$data['sort'] = $sort;
		$data['order'] = $order;

		if ($this->config->get('marketplace_separate_view') && isset($this->session->data['marketplace_separate_view']) && $this->session->data['marketplace_separate_view'] == 'separate') {
			$data['separate_view'] = true;
			$data['column_left'] = '';
			$data['column_right'] = '';
			$data['content_top'] = '';
			$data['content_bottom'] = '';
			$data['separate_column_left'] = $this->load->controller('account/customerpartner/column_left');
			$data['footer'] = $this->load->controller('account/customerpartner/footer');
			$data['header'] = $this->load->controller('account/customerpartner/header');
		}
        
		$this->response->setOutput($this->load->view('account/customerpartner/productoption', $data));
	}

	protected function getForm() {
		$data['text_form'] = !isset($this->request->get['option_id']) ? $this->language->get('text_add') : $this->language->get('text_edit');

		if (isset($this->error['warning'])) {
			$data['error_warning'] = $this->error['warning'];
		} else {
			$data['error_warning'] = '';
		}

		if (isset($this->error['name'])) {
			$data['error_name'] = $this->error['name'];
		} else {
			$data['error_name'] = array();
		}

		if (isset($this->error['option_value'])) {
			$data['error_option_value'] = $this->error['option_value'];
		} else {
			$data['error_option_value'] = array();
		}

		$url = '';

		if (isset($this->request->get['sort'])) {
			$url .= '&sort=' . $this->request->get['sort'];
		}

		if (isset($this->request->get['order'])) {
			$url .= '&order=' . $this->request->get['order'];
		}

		if (isset($this->request->get['page'])) {
			$url .= '&page=' . $this->request->get['page'];
		}

		$data['breadcrumbs'] = array();

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_home'),
			'href' => $this->url->link('common/dashboard', true)
		);

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('Option List'),
			'href' => $this->url->link('account/customerpartner/addproductoption'  . $url, true)
		);

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('heading_title'),
			
		);

		if (!isset($this->request->get['option_id'])) {
			$data['action'] = $this->url->link('account/customerpartner/addproductoption/add' . $url, true);
		} else {
			$data['action'] = $this->url->link('account/customerpartner/addproductoption/edit' . '&option_id=' . $this->request->get['option_id'] . $url, true);
		}

		$data['cancel'] = $this->url->link('account/customerpartner/addproductoption', $url, true);

		if (isset($this->request->get['option_id']) && ($this->request->server['REQUEST_METHOD'] != 'POST')) {
			$option_info = $this->model_catalog_option->getOption($this->request->get['option_id']);
		}

		$this->load->model('localisation/language');

		$data['languages'] = $this->model_localisation_language->getLanguages();

		if (isset($this->request->post['option_description'])) {
			$data['option_description'] = $this->request->post['option_description'];
		} elseif (isset($this->request->get['option_id'])) {
			$data['option_description'] = $this->model_catalog_option->getOptionDescriptions($this->request->get['option_id']);
		} else {
			$data['option_description'] = array();
		}

		if (isset($this->request->post['type'])) {
			$data['type'] = $this->request->post['type'];
		} elseif (!empty($option_info)) {
			$data['type'] = $option_info['type'];
		} else {
			$data['type'] = '';
		}

		if (isset($this->request->post['sort_order'])) {
			$data['sort_order'] = $this->request->post['sort_order'];
		} elseif (!empty($option_info)) {
			$data['sort_order'] = $option_info['sort_order'];
		} else {
			$data['sort_order'] = '';
		}

		if (isset($this->request->post['option_value'])) {
			$option_values = $this->request->post['option_value'];
		} elseif (isset($this->request->get['option_id'])) {
			$option_values = $this->model_catalog_option->getOptionValueDescriptions($this->request->get['option_id']);
		} else {
			$option_values = array();
		}

		$this->load->model('tool/image');

		$data['option_values'] = array();

		foreach ($option_values as $option_value) {
			if (is_file(DIR_IMAGE . $option_value['image'])) {
				$image = $option_value['image'];
				$thumb = $option_value['image'];
			} else {
				$image = '';
				$thumb = 'no_image.png';
			}

			$data['option_values'][] = array(
				'option_value_id'          => $option_value['option_value_id'],
				'name' => $option_value['name'],
				'image'                    => $image,
				'thumb'                    => $this->model_tool_image->resize($thumb, 100, 100),
				'sort_order'               => $option_value['sort_order']
			);
	
		}

		// $data['user_token'] = $this->session->data['user_token'];

		$data['placeholder'] = $this->model_tool_image->resize('no_image.png', 100, 100);

        if ($this->config->get('marketplace_separate_view') && isset($this->session->data['marketplace_separate_view']) && $this->session->data['marketplace_separate_view'] == 'separate') {
			$data['separate_view'] = true;
			$data['column_left'] = '';
			$data['column_right'] = '';
			$data['content_top'] = '';
			$data['content_bottom'] = '';
			$data['separate_column_left'] = $this->load->controller('account/customerpartner/column_left');
			$data['footer'] = $this->load->controller('account/customerpartner/footer');
			$data['header'] = $this->load->controller('account/customerpartner/header');
		}
		
        $this->response->setOutput($this->load->view('account/customerpartner/addproductoption', $data));
	}

	protected function validateForm() {
		// if (!$this->user->hasPermission('modify', 'catalog/option')) {
		// 	$this->error['warning'] = $this->language->get('error_permission');
		// }

		if (isset($this->request->post['option_description']['name'])) {
			if ((utf8_strlen($this->request->post['option_description']['name']) < 1) || 
				(utf8_strlen($this->request->post['option_description']['name']) > 128)) {
				$this->error['name'] = $this->language->get('error_name');
			}
		}

		// if (($this->request->post['type'] == 'select' || $this->request->post['type'] == 'radio' || $this->request->post['type'] == 'checkbox') && !isset($this->request->post['option_value'])) {
		// 	$this->error['warning'] = $this->language->get('error_type');
		// }

		if (isset($this->request->post['option_value'])) {
			foreach ($this->request->post['option_value'] as $option_value_id => $option_value) {
				$option_value_description = $option_value['option_value_description'];

				if ((utf8_strlen($option_value_description['name']) < 1) || (utf8_strlen($option_value_description['name']) > 128)) {
					$this->error['option_value'][$option_value_id] = $this->language->get('error_option_value');
				}
			}
		}

		return !$this->error;
	}

	protected function validateDelete() {
		// if (!$this->user->hasPermission('modify', 'catalog/option')) {
		// 	$this->error['warning'] = $this->language->get('error_permission');
		// }

		$this->load->model('catalog/product');

		foreach ($this->request->post['selected'] as $option_id) {
			$product_total = $this->model_catalog_product->getTotalProductsByOptionId($option_id);

			if ($product_total) {
				$this->error['warning'] = sprintf($this->language->get('error_product'), $product_total);
			}
		}

		return !$this->error;
	}

	public function autocomplete() {
		$json = array();

		if (isset($this->request->get['filter_name'])) {
			$this->load->language('catalog/option');

			$this->load->model('catalog/option');

			$this->load->model('tool/image');

			$filter_data = array(
				'filter_name' => $this->request->get['filter_name'],
				'start'       => 0,
				'limit'       => 5
			);

			$options = $this->model_catalog_option->getOptions($filter_data);

			foreach ($options as $option) {
				$option_value_data = array();

				if ($option['type'] == 'select' || $option['type'] == 'radio' || $option['type'] == 'checkbox' || $option['type'] == 'image') {
					$option_values = $this->model_catalog_option->getOptionValues($option['option_id']);

					foreach ($option_values as $option_value) {
						if (is_file(DIR_IMAGE . $option_value['image'])) {
							$image = $this->model_tool_image->resize($option_value['image'], 50, 50);
						} else {
							$image = $this->model_tool_image->resize('no_image.png', 50, 50);
						}

						$option_value_data[] = array(
							'option_value_id' => $option_value['option_value_id'],
							'name'            => strip_tags(html_entity_decode($option_value['name'], ENT_QUOTES, 'UTF-8')),
							'image'           => $image
						);
					}

					$sort_order = array();

					foreach ($option_value_data as $key => $value) {
						$sort_order[$key] = $value['name'];
					}

					array_multisort($sort_order, SORT_ASC, $option_value_data);
				}

				$type = '';

				if ($option['type'] == 'select' || $option['type'] == 'radio' || $option['type'] == 'checkbox') {
					$type = $this->language->get('text_choose');
				}

				if ($option['type'] == 'text' || $option['type'] == 'textarea') {
					$type = $this->language->get('text_input');
				}

				if ($option['type'] == 'file') {
					$type = $this->language->get('text_file');
				}

				if ($option['type'] == 'date' || $option['type'] == 'datetime' || $option['type'] == 'time') {
					$type = $this->language->get('text_date');
				}

				$json[] = array(
					'option_id'    => $option['option_id'],
					'name'         => strip_tags(html_entity_decode($option['name'], ENT_QUOTES, 'UTF-8')),
					'category'     => $type,
					'type'         => $option['type'],
					'option_value' => $option_value_data
				);
			}
		}

		$sort_order = array();

		foreach ($json as $key => $value) {
			$sort_order[$key] = $value['name'];
		}

		array_multisort($sort_order, SORT_ASC, $json);

		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));
	}
}