<?php
class ModelExtensionShippingFlashexpress extends Model 
{
    function getQuote($address) {
        $this->load->language('extension/shipping/flashexpress');
    
    
        $quote_data = array();
        $method_data = array();

        $cost = 39.00;
    
        $quote_data['flashexpress'] = array(
            'code'         => 'flashexpress.flashexpress',
            'title'        => 'Flash Express Shipping',
            'cost'         => $cost,
            'tax_class_id' => 0,
            'text'         => $this->currency->format($cost, $this->session->data['currency'])
        );
    
        $method_data = array(
            'code'       => 'flashexpress',
            'title'      => 'Flash Express Shipping',
            'quote'      => $quote_data,
            'sort_order' => 1,
            'error'      => false
        );
    
        return $method_data;
    }
    
}
?>