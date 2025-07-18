<?php
class ControllerExtensionModuleWkMpSellerlist extends Controller {    
    private $error = array();

    public function index() {
        $this->load->language('extension/module/wk_mp_sellerlist');

        $this->document->setTitle($this->language->get('heading_title'));

        $this->load->model('setting/module');

        if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validate()) {
            if (!isset($this->request->get['module_id'])) {
				$this->model_setting_module->addModule('wk_mp_sellerlist', $this->request->post);
			} else {
				$this->model_setting_module->editModule($this->request->get['module_id'], $this->request->post);
			}

            $this->session->data['success'] = $this->language->get('text_success');

            $this->response->redirect($this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=module', true));
            
        }

        //config
        $configIndices = array(
            'name',           
            'status',
            'sellers'
        );

        if (isset($this->request->get['module_id']) && ($this->request->server['REQUEST_METHOD'] != 'POST')) {
			$module_info = $this->model_setting_module->getModule($this->request->get['module_id']);
		}


        foreach ($configIndices as $index) {
            if (isset($this->request->post[$index])) {
                $data[$index] = $this->request->post[$index];
            } elseif (!empty($module_info) && $module_info[$index]) {
                $data[$index] = $module_info[$index];
            } else {
                $data[$index] = '';
            }
        }

        if(isset($this->session->data['success'])) {
            $data['text_success'] = $this->session->data['success'];

            unset($this->session->data['success']);
        } else {
            $data['text_success'] = '';
        }

        
        $this->load->model('customerpartner/partner');

        if(!empty($data['sellers'])) {
            $filter_data = array(            	
                'customer_ids' => $data['sellers']
            );

            $data['sellers'] = $this->model_customerpartner_partner->getSellers($filter_data);
        }

        if (isset($this->error['name'])) {
            $data['error_name'] = $this->error['name'];
        } else {
            $data['error_name'] = '';
        }

        if (isset($this->error['warning'])) {
            $data['error_warning'] = $this->error['warning'];
        } else {
            $data['error_warning'] = '';
        }

        $data['breadcrumbs'] = array();

        $data['breadcrumbs'][] = array(
            'text' => $this->language->get('text_home'),
            'href' => $this->url->link('common/dashboard', 'user_token=' . $this->session->data['user_token'], true)
        );

        $data['breadcrumbs'][] = array(
            'text' => $this->language->get('text_extension'),
            'href' => $this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=module', true)
        );

        if (!isset($this->request->get['module_id'])) {
			$data['breadcrumbs'][] = array(
				'text' => $this->language->get('heading_title'),
				'href' => $this->url->link('extension/module/wk_mp_sellerlist', 'user_token=' . $this->session->data['user_token'], true)
			);
		} else {
			$data['breadcrumbs'][] = array(
				'text' => $this->language->get('heading_title'),
				'href' => $this->url->link('extension/module/wk_mp_sellerlist', 'user_token=' . $this->session->data['user_token'] . '&module_id=' . $this->request->get['module_id'], true)
			);
		}

        if (!isset($this->request->get['module_id'])) {
            $data['action'] = $this->url->link('extension/module/wk_mp_sellerlist', 'user_token=' . $this->session->data['user_token'], true);
        } else {
            $data['action'] = $this->url->link('extension/module/wk_mp_sellerlist', 'user_token=' . $this->session->data['user_token'] . '&module_id=' . $this->request->get['module_id'], true);
        }

        $data['cancel'] = $this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=module', true);

        $data['user_token'] = $this->session->data['user_token'];

        $data['header'] = $this->load->controller('common/header');
        $data['column_left'] = $this->load->controller('common/column_left');
        $data['footer'] = $this->load->controller('common/footer');

        $this->response->setOutput($this->load->view('extension/module/wk_mp_sellerlist', $data));
    }

    private function validate()
    {
        if (!$this->user->hasPermission('modify', 'extension/module/wk_mp_sellerlist')) {
            $this->error['warning'] = $this->language->get('error_permission');
        }

        if ((utf8_strlen(trim($this->request->post['name'])) < 3) || (utf8_strlen(trim($this->request->post['name'])) > 64)) {
            $this->error['name'] = $this->language->get('error_name');
        }

        if (!$this->error) {
            return true;
        } else {
            return false;
        }
    }

    public function autocomplete() {
		$json = array();

		if (isset($this->request->get['filter_name']) || isset($this->request->get['filter_model'])) {
			$this->load->model('customerpartner/partner');

			if (isset($this->request->get['filter_name'])) {
				$filter_name = $this->request->get['filter_name'];
			} else {
				$filter_name = '';
			}

			if (isset($this->request->get['limit'])) {
				$limit = (int)$this->request->get['limit'];
			} else {
				$limit = 5;
			}

			$filter_data = array(
				'filter_name'  => $filter_name,				
				// 'start'        => 0,
				// 'limit'        => $limit
			);

			$results = $this->model_customerpartner_partner->getSellers($filter_data);

			foreach ($results as $result) {			

				$json[] = array(
					'seller_id'         => $result['customer_id'],
					'seller_name'       => strip_tags(html_entity_decode($result['name'], ENT_QUOTES, 'UTF-8')),
					'seller_brand'      => $result['screenname']
				);
			}
		}

		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));
	}
}
