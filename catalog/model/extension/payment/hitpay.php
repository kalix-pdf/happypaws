<?php
class ModelExtensionPaymentHitpay extends Model {
	public function getMethod($total) {
		
        $status = true;
		// if ($this->config->get('payment_hitpay_total') > 0 && $this->config->get('payment_hitpay_total') > $total) {
		// 	$status = false;
		// } elseif (!$this->cart->hasShipping()) {
		// 	$status = false;
		// } 
		//  else {
		// 	$status = false;
		// }

		$method_data = array();

		if ($status) {
			$method_data = array(
				'code'       => 'hitpay',
				'title'      => 'hitpay',
				'terms'      => '',
				'sort_order' => 0,
			);
		}

		return $method_data;
	}
}
