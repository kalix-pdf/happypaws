<?php
class ControllerExtensionHitPayWebhook extends Controller {
    public function index() {
        $this->log->write('[HitPay Webhook] Received request');

        $payload = file_get_contents('php://input');
        $headers = getallheaders();

        $signature = $headers['Hitpay-Signature'] ?? '';
        $secret = 'JDJ5JDEwJGUzN1JMbGJjWVlpelExZHpjd0RRaXV5dHc0S0NVckRiUllKdzRpd2M4c0ZwZGkuM2VFdlou'; 
        $hash = base64_encode(hash_hmac('sha256', $payload, $secret, true));

        if ($signature !== $hash) {
            $this->log->write('[HitPay Webhook] Invalid signature');
            $this->response->addHeader('Content-Type: application/json');
            $this->response->setOutput(json_encode(['status' => 'invalid signature']));
            return;
        }

        $data = json_decode($payload, true);
        if (!$data) {
            $this->log->write('[HitPay Webhook] Invalid JSON');
            $this->response->addHeader('Content-Type: application/json');
            $this->response->setOutput(json_encode(['status' => 'invalid json']));
            return;
        }

        $order_id = $data['order']['order_display_number'] ?? 0;
        $status = $data['status'] ?? '';

        if ($order_id && $status == 'succeeded') {
            $this->load->model('checkout/order');
            $this->model_checkout_order->addPaymentStatus($order_id);
            $this->log->write("[HitPay Webhook] Order $order_id marked as paid");
        } else {
            $this->log->write("[HitPay Webhook] No update. Order ID: $order_id, Status: $status");
        }

        $this->response->addHeader('Content-Type: application/json');
        $this->response->setOutput(json_encode(['status' => 'ok']));
    }
}
