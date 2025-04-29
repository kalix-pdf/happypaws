<?php
class ModelExtensionPaymentXendit extends Model {
	public function getMethod($total) {

		
		if ($this->config->get('payment_xendit_total') > 0 && $this->config->get('payment_xendit_total') > $total) {
			$status = false;
		} elseif (!$this->cart->hasShipping()) {
			$status = false;
		} elseif (!$this->config->get('payment_xendit_geo_zone_id')) {
			$status = true;
		} 
		 else {
			$status = false;
		}

		$method_data = array();

		if ($status) {
			$method_data = array(
				'code'       => 'xendit',
				'title'      => 'xendit',
				'terms'      => '',
				'sort_order' => 1,
			);
		}

		return $method_data;
	}
}
