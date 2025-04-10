<?php
class ControllerExtensionShippingFlashExpress extends Controller {
    private $error = array();

    public function index() {
        $this->load->language('extension/shipping/flashexpress');
        $this->document->setTitle($this->language->get('heading_title'));

        $this->load->model('setting/setting');

        if ($this->request->server['REQUEST_METHOD'] == 'POST') {
            $this->model_setting_setting->editSetting('shipping_flashexpress', $this->request->post);
            $this->session->data['success'] = 'Success: You have modified Flash Express shipping!';
            $this->response->redirect($this->url->link('marketplace/extension', 'type=shipping', true));
        }

        $data['shipping_flashexpress_status'] = $this->config->get('shipping_flashexpress_status');
        $data['shipping_flashexpress_sort_order'] = $this->config->get('shipping_flashexpress_sort_order');

        $data['action'] = $this->url->link('extension/shipping/flashexpress', '', true);
        $data['cancel'] = $this->url->link('marketplace/extension', 'type=shipping', true);

        $this->response->setOutput($this->load->view('extension/shipping/flashexpress', $data));
    }
}
