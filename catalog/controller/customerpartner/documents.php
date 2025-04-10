<?php
class ControllerCustomerpartnerDocuments extends Controller {

    public function wkmpregistation1() 
    {
        $this->load->model('customerpartner/master');
        $json = array();

        if (!empty($_FILES['birfile']['name'])) {
            $file = $_FILES['birfile'];
            $allowed_extensions = array('jpg', 'jpeg', 'png', 'gif', 'pdf');
            $max_size = 5 * 1024 * 1024; // 5MB limit
    
            $file_ext = strtolower(pathinfo($file['name'], PATHINFO_EXTENSION));

            if (!in_array($file_ext, $allowed_extensions)) {
                $json['error'] = 'Invalid file type! Only JPG, JPEG, PNG, GIF, and PDF are allowed.';
            } 
           
            elseif ($file['size'] > $max_size) {
                $json['error'] = 'File size must be under 5MB.';
            } 
            else {
                
                $upload_dir = DIR_IMAGE . 'uploads/';
                
                if (!is_dir($upload_dir)) {
                    mkdir($upload_dir, 0755, true);
                }

                $new_filename = uniqid('bir_', true) . '.' . $file_ext;
                $target_file = $upload_dir . $new_filename;
    
                if (move_uploaded_file($file['tmp_name'], $target_file)) {

                    $customer_id = $this->customer->getId();    
                    $file_path = 'image/uploads/' . $new_filename;
                   
                    $this->db->query("UPDATE " . DB_PREFIX . "customerpartner_to_customer 
                              SET uploaded_image = '" . $this->db->escape($file_path) . "' 
                              WHERE customer_id = '" . (int)$customer_id . "'");

                    $json['success'] = 'File uploaded successfully!';
                    $json['file_path'] = $file_path;
                } else {
                    $json['error'] = 'Failed to upload file.';
                }
            }
        } else {
            $json['error'] = 'No file uploaded.';
        }
    
        $this->response->setOutput(json_encode($json));
    }
}
?>
