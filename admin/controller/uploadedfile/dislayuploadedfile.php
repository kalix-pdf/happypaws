<?php
class ControllerCustomer extends Controller {
    public function index() {
        $this->load->model('customerpartner/master');

            if (isset($this->request->get['customer_id'])) {
                $customer_id = (int)$this->request->get['customer_id'];

                $files = $this->model_customerpartner_master->getUploadedFilesByCustomerId($customer_id);

                $data['files'] = $files;    
        
                $this->response->setOutput($this->load->view('customerpartner/documents/uploaded_documents.twig', $data));
            }
        
 
    }
}
