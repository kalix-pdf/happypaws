<?php

class DisplayUploadedFiles {
    public function index() {
        $this->load->model('customerpartner/master');
        $data = array();
    
        $query = $this->db->query("SELECT * FROM customer_to_documents");
        $data['files'] = $query->rows;
    
        $this->response->setOutput($this->load->view('customerpartner/sell/display_files', $data));
    }
}

?>