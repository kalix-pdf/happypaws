<?php

class ControllerExtensionWebhookForFlash extends Controller {

    private function logWebhook($message)
    {
        $logFile = DIR_LOGS . 'webhook.log'; 
        $logMessage = date('Y-m-d H:i:s') . ' - ' . $message . PHP_EOL;

        file_put_contents($logFile, $logMessage, FILE_APPEND);
    }
    private function logTrackingUpdate($trackingNumber, $status) 
    {
        $logFile = DIR_LOGS . 'webhook.log'; 
        $logMessage = date('Y-m-d H:i:s') . ' - Tracking Number: ' . $trackingNumber . ' | Status: ' . $status . PHP_EOL;

        file_put_contents($logFile, $logMessage, FILE_APPEND);
    }
        public function index() {
            
            $rawData = file_get_contents('php://input');
            parse_str(trim($rawData), $data);
           
            if (isset($data['data']) && is_string($data['data'])) {
                $decodedData = json_decode($data['data'], true);
                if (json_last_error() === JSON_ERROR_NONE) {
                    $data['data'] = $decodedData; 
                }
            }

            $this->logWebhook('Flash Express Webhook Parsed Data: ' . json_encode($data, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES));
            // $this->logWebhook('Signature Data: ' . json_encode($data['sign']));
            // // $this->logWebhook('Merchant Data: ' . json_encode($data['mchId']));
            $this->logWebhook('Tacking Number: ' . json_encode($data['data']['pno']));
            $this->logWebhook('Status: ' . json_encode($data['data']['message']));
            $this->logTrackingUpdate($data['data']['pno'], $data['data']['message']);
            

            if (!isset($data['mchId'], $data['nonceStr'], $data['sign'])) {
                http_response_code(400);
                echo json_encode(["errorCode" => "0", "message" => "Missing parameters!!"]);
                return;
            }
    
            // if (!$this->verifySignature($data['mchId'], $data['nonceStr'], $data['sign'])) {
            //     http_response_code(401);
            //     echo json_encode(["errorCode" => "0", "message" => "Invalid signature"]);
            //     return;
            // }
    
            // Process webhook data (update order status, save to DB, etc.)
            // $this->processWebhookData($data['data']);
    
            // Respond with success
            http_response_code(200);
            echo json_encode(["Code" => "1", "state" => "success"]);
            // / echo json_encode($data);
            
        }
    
        private function verifySignature($mchId, $nonceStr, $sign) {
            $secretKey = '4cf1406fb936ae1e680abf174509c454a3254eff5789df3505ce93683aaa3785'; 
            $signString = "mchId={$mchId}&nonceStr={$nonceStr}&key=" . $secretKey;
            $expectedSign = strtoupper(hash("sha256", $signString));

            // $this->log->write("Generated Signature: $expectedSign");
            // $this->log->write("Received Signature: $sign");

            return $sign === $expectedSign;
        }
    
        private function processWebhookData($webhookData) {
            // Example: Log or update order status
            $this->log->write('Processing Webhook Data: ' . json_encode($webhookData));
        }
}

?>