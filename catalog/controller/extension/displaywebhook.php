<?php
class ControllerExtensionDisplayWebhook extends Controller {
    public function index($tracking_number)
    {
        // $tracking_number = "P6125TFBXZA";
        $log_file = DIR_LOGS . 'webhook.log';
        $logs = [];

        if (file_exists($log_file)) {
            $lines = file($log_file, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
            
            foreach ($lines as $line) {
                if (strpos($line, "Tracking Number: $tracking_number") !== false) {
                    $logs[] = $line;
                }
            }
        }
        $data['logs'] = $logs;
        // var_dump($logs);
        // $this->response->setOutput($this->load->view('extension/webhook', $data));
        return $this->load->view('extension/webhook', $data);
    }
}


?>