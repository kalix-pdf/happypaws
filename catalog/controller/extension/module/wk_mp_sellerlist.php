<?php
class ControllerExtensionModuleWkMpSellerlist extends Controller
{
	public function index($setting)
	{

		$this->document->addStyle('catalog/view/theme/journal3/lib/swiper/swiper.min.css');
		if (!defined('JOURNAL3_ACTIVE')) {
			$this->document->addStyle('catalog/view/javascript/jquery/swiper/css/opencart.css');
		}
		$this->document->addScript('catalog/view/theme/journal3/lib/swiper/swiper.min.js');

		$this->load->language('extension/module/wk_mp_sellerlist');
		$this->load->model('customerpartner/master');
		$this->load->model('tool/image');

		$data['partners'] = [];

		$sellerList = $this->model_customerpartner_master->getSellers(['customer_ids' => $setting['sellers']]);

		foreach ($sellerList as $key => $result) {

			$feedbacks = $this->model_customerpartner_master->getFeedbackList($result['customer_id']);
			$feedback_count = $this->model_customerpartner_master->getTotalFeedback($result['customer_id']);
			$feedback_total = $this->model_customerpartner_master->getAverageFeedback($result['customer_id']);

			if ($result['avatar']) {
				$image = $this->model_tool_image->resize($result['avatar'], defined('JOURNAL3_ACTIVE') ? $this->journal3->themeConfig('image_manufacturer_width') : 328, defined('JOURNAL3_ACTIVE') ? $this->journal3->themeConfig('image_manufacturer_width') : 222);
			} else if ($result['avatar'] == 'removed') {
				$image = '';
			} else if ($this->config->get('marketplace_default_image_name')) {
				$image = $this->model_tool_image->resize($this->config->get('marketplace_default_image_name'), defined('JOURNAL3_ACTIVE') ? $this->journal3->themeConfig('image_manufacturer_width') : 328, defined('JOURNAL3_ACTIVE') ? $this->journal3->themeConfig('image_manufacturer_width') : 222);
			} else {
				$image = $this->model_tool_image->resize('placeholder.png', defined('JOURNAL3_ACTIVE') ? $this->journal3->themeConfig('image_manufacturer_width') : 328, defined('JOURNAL3_ACTIVE') ? $this->journal3->themeConfig('image_manufacturer_width') : 222);
			}

			$data['partners'][] = array(
				'customer_id' 		=> $result['customer_id'],
				'name' 		  		=> isset($result['companyname']) && $result['companyname'] ? $result['companyname'] : $result['firstname'] . ' ' . $result['lastname'],
				'companyname' 		=> $result['companyname'],
				'backgroundcolor' 		=> $result['backgroundcolor'],
				'country'  	  		=> $result['country'],
				'sellerHref'  		=> $this->url->link('customerpartner/profile', 'seller_id=' . $result['customer_id'], true),
				'thumb'       		=> $image,
				'total_products'    => $this->model_customerpartner_master->getPartnerCollectionCount($result['customer_id']),
				'feedback_total'    => $feedback_total,
				'feedback_count'    => $feedback_count,

			);
		}

		$data['title'] = $setting['name'];

		if (empty($data['partners'])) {
			return false;
		}

		if (isset($this->request->get['route']) and $this->request->get['route'] == 'product/product' and isset($this->request->get['product_id'])) {
		} else {
			return $this->load->view('extension/module/wk_mp_sellerlist', $data);
		}
	}
}
