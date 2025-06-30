<?php
class ControllerExtensionWebhookStatus extends Controller {
    private function logWebhook($message)
    {
        $logFile = DIR_LOGS . 'webhookStatus.log'; 
        $logMessage = date('Y-m-d H:i:s') . ' - ' . $message . PHP_EOL;

        file_put_contents($logFile, $logMessage, FILE_APPEND);
    }
    private function logTrackingUpdate($trackingNumber, $status) 
    {
        $logFile = DIR_LOGS . 'webhookStatus.log'; 
        $logMessage = date('Y-m-d H:i:s') . ' - Tracking Number: ' . $trackingNumber . ' | Status: ' . $status . PHP_EOL;

        file_put_contents($logFile, $logMessage, FILE_APPEND);
    }
    public function index() {
       
        $log_file = DIR_LOGS . 'webhookStatus.log';
        $flash_mchId = 'CA0740';
        $secret_key = '4cf1406fb936ae1e680abf174509c454a3254eff5789df3505ce93683aaa3785'; 
        
        $rawPayload = file_get_contents("php://input");

        // Optionally log it
        file_put_contents($log_file, date("c") . " RAW: " . $rawPayload . PHP_EOL, FILE_APPEND);
        
        parse_str(trim($rawPayload), $data);
           
        // Decode JSON
        if (isset($data['data']) && is_string($data['data'])) {
            $decodedData = json_decode($data['data'], true);
            if (json_last_error() === JSON_ERROR_NONE) {
                $data['data'] = $decodedData; 
            }
            $this->logWebhook('Flash Express Webhook Parsed Data: ' . json_encode($data, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES));
            $this->logWebhook('Tacking Number: ' . json_encode($data['data']['pno']));
            $this->logWebhook('Status: ' . json_encode($data['data']['message']));
            $this->logTrackingUpdate($data['data']['pno'], $data['data']['message']);    
            // $this->logWebhook('Signature Data: ' . json_encode($data['sign']));
            // $this->logWebhook('Merchant Data: ' . json_encode($data['mchId']));
            
        }

        if (!isset($data['mchId'], $data['nonceStr'], $data['sign'])) {
            http_response_code(400);
            echo json_encode(["errorCode" => "0", "message" => "Missing parameters!!"]);
            return;
        }

        // === Step 1: Verify Signature ===
        if (!$this->verifySignature($data['mchId'], $data['nonceStr'], $data['sign'])) {
            http_response_code(401);
            echo json_encode(["errorCode" => "0", "message" => "Invalid signature"]);
            return;
        }

        // === Step 2: Process Webhook Data ===
        $orderData = $data['data'];

        // Example: Extract tracking info
        $orderId = $orderData['orderId'];
        $outTradeNo = $orderData['outTradeNo'];
        $trackingNumber = $orderData['pno'];
        $status = $orderData['state'];
        $statusText = $orderData['stateText'];
        // $stateDate = $orderData['stateDate'];

        file_put_contents($log_file, date("c") . " ORDER: " . json_encode($orderData) . PHP_EOL, FILE_APPEND);

        // === Step 3: Respond with success ===
        echo json_encode([
            'errorCode' => '1',
            'state' => 'success'
        ]);
        exit;
    }
    private function verifySignature($mchId, $nonceStr, $sign) {
        $secretKey = '4cf1406fb936ae1e680abf174509c454a3254eff5789df3505ce93683aaa3785'; 
        $signString = "mchId={$mchId}&nonceStr={$nonceStr}&key=" . $secretKey;
        $expectedSign = strtoupper(hash("sha256", $signString));

        // $this->log->write("Generated Signature: $expectedSign");
        // $this->log->write("Received Signature: $sign");

        return $sign === $expectedSign;
    }
    
}