<?php
class ControllerApiWkrestapiMarketplace1 extends Controller {
  public function getTransactions() {
    $this->load->language('account/mpapi');

    $post = $this->request->post;

		//Get wk_token from header
		if (isset(getallheaders()['wk_token'])) {
			$post['wk_token'] = getallheaders()['wk_token'];
		} elseif (isset(getallheaders()['Wk-Token'])) {
			$post['wk_token'] = getallheaders()['Wk-Token'];
		}

		if (!isset($post['wk_token']) || !$this->checkSession($post['wk_token'])) {
			$this->response->addHeader('Content-Type: application/json');
			$this->response->setOutput(json_encode(array('fault'=>1,'message'=>$this->language->get('text_token_message'))));
		} else {
      $this->load->model('wkrestapi/customer');
      $is_partner = $this->model_wkrestapi_customer->chkIsPartner($this->customer->getId());
      if (($this->config->get('module_marketplace_status') || $this->config->get('marketplace_status')) && $is_partner) {
        $json['error'] = 0;
        $json['transaction'] = array();

  	    $json['sorts'][] = array(
  	      'text'  => htmlspecialchars_decode($this->language->get('transaction_asc_id')),
  	      'value' => 'ct.id',
  	      'order'	=> 'ASC'
  	    );

  			$json['sorts'][] = array(
  	      'text'  => htmlspecialchars_decode($this->language->get('transaction_desc_id')),
  	      'value' => 'ct.id',
  	      'order'	=> 'DESC'
  	    );

  			$json['sorts'][] = array(
  	      'text'  => htmlspecialchars_decode($this->language->get('transaction_asc_amount')),
  	      'value' => 'ct.amount',
  	      'order'	=> 'ASC'
  	    );

  			$json['sorts'][] = array(
  	      'text'  => htmlspecialchars_decode($this->language->get('transaction_desc_amount')),
  	      'value' => 'ct.amount',
  	      'order'	=> 'DESC'
  	    );

  			$json['sorts'][] = array(
  	      'text'  => htmlspecialchars_decode($this->language->get('transaction_asc_details')),
  	      'value' => 'ct.details',
  	      'order'	=> 'ASC'
  	    );

  			$json['sorts'][] = array(
  	      'text'  => htmlspecialchars_decode($this->language->get('transaction_desc_Details')),
  	      'value' => 'ct.details',
  	      'order'	=> 'DESC'
  	    );

        $json['sorts'][] = array(
  	      'text'  => htmlspecialchars_decode($this->language->get('review_asc_date')),
  	      'value' => 'ct.date_added',
  	      'order'	=> 'ASC'
  	    );

  			$json['sorts'][] = array(
  	      'text'  => htmlspecialchars_decode($this->language->get('review_desc_date')),
  	      'value' => 'ct.date_added',
  	      'order'	=> 'DESC'
  	    );

        if (isset($post['filter_id']) && $post['filter_id']) {
  				$filter_id = $post['filter_id'];
  			} else {
  				$filter_id = '';
  			}

  			if (isset($post['filter_details']) && $post['filter_details']) {
  				$filter_details = $post['filter_details'];
  			} else {
  				$filter_details = '';
  			}

  			if (isset($post['filter_date']) && $post['filter_date']) {
  				$filter_date = $post['filter_date'];
  			} else {
  				$filter_date = '';
  			}

        if (isset($post['filter_amount']) && $post['filter_amount']) {
  				$filter_amount = $post['filter_amount'];
  			} else {
  				$filter_amount = '';
  			}

  			if (isset($post['order']) && $post['order']) {
  				$order = $post['order'];
  			} else {
  				$order = 'DESC';
  			}

  			if (isset($post['sort']) && $post['sort']) {
  				$sort = $post['sort'];
  			} else {
  				$sort = 'ct.date_added';
  			}

  			if (isset($post['page']) && $post['page']) {
  				$page = $post['page'];
  			} else {
  				$page = 1;
  			}

  			if (isset($post['limit']) && $post['limit']) {
  				$limit = $post['limit'];
  			} else {
  				$limit = 10;
  			}

  			$filter_array = array(
  				'filter_id'      => $filter_id,
  				'filter_details' => $filter_details,
  				'filter_date'    => $filter_date,
          'filter_amount'  => $filter_amount,
  				'sort'           => $sort,
  				'order'          => $order,
  				'start'          => ($page - 1) * $limit,
  				'limit'          => $limit
  			);

        $this->load->model('customerpartner/transaction');
        $transaction   = $this->model_customerpartner_transaction->viewtotal($filter_array);
        $json['total'] = $this->model_customerpartner_transaction->viewtotalentry($filter_array);

        foreach($transaction as $transaction) {
          $json['transaction'][] = array(
            'id'      => $transaction['id'],
            'amount'  => $transaction['text'],
            'details' => $transaction['details'],
            'date'    => $transaction['date_added']
          );
        }
      } else {
        $json['error']    =  1;
        $json['message']  =  $this->language->get('error_extension');
      }
      $this->response->addHeader('Content-Type: application/json');
			$this->response->setOutput(json_encode($json));
    }
  }
  protected function checkSession($session_id) {

		if (version_compare(VERSION,'3.0.0.0','>=')) {
			if (isset($this->session->data['session_id']) && $this->session->data['session_id'] == $session_id) {
				return true;
			}
		}else{
			foreach ($_SESSION as $key => $value) {
				if(isset($value['session_id']) && $session_id == $value['session_id']) {
					return true;
				}
			}

			if (isset($_SESSION['session_id']) && $_SESSION['session_id'] == $session_id) {
				return true;
			}
		}
		return false;
	}
}
if (!function_exists('getallheaders')) {
	function getallheaders() {
		$headers = [];
		foreach ($_SERVER as $name => $value) {
			if (substr($name, 0, 5) == 'HTTP_') {
				$headers[str_replace(' ', '-', ucwords(strtolower(str_replace('_', ' ', substr($name, 5)))))] = $value;
			}
		}
		return $headers;
	}
}
