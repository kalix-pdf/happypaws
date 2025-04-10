<?php
class ControllerCustomerDisplay extends Controller {
    public function index() {
        $this->load->model('customerpartner/partner');
        $data['header'] = $this->load->controller('common/header');
        $data['footer'] = $this->load->controller('common/footer');
        $data['column_left'] = $this->load->controller('common/column_left');
        $data['customheader'] = $this->load->controller('common/custom/customheader');

            if (isset($this->request->get['customer_id'])) {
                $customer_id = (int)$this->request->get['customer_id'];
                
                $companyname = $this->model_customerpartner_partner->getCompanyNameByCustomerId($customer_id);

                $files = $this->model_customerpartner_partner->getUploadedFilesByCustomerId($customer_id);

                if (empty($files)) {
                    $data['error'] = 'No uploaded documents found for this customer';
                }

                $data ['customer_id'] = $customer_id;
                $data['files'] = $files;    
                $data['companyname'] = $companyname;

                // echo "<pre>";
                // print_r($data);
                // echo "<pre>";

                $this->response->setOutput($this->load->view('customerpartner/documents/uploaded_documents', $data));
            }
            // else {
            //     $data['error'] = 'No ID';
            //     $this->response->setOutput($this->load->view('customerpartner/documents/uploaded_documents', $data));
            // }
    }
}
