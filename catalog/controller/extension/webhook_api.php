<?php

    define("merchantID", "CA0740");
    define("merchantPW", "4cf1406fb936ae1e680abf174509c454a3254eff5789df3505ce93683aaa3785");
    
    define("webhook", "https://open-api-tra.flashexpress.ph/open/v1/setting/web_hook_service");
    define("webhook_infos", "https://open-api-tra.flashexpress.ph/gw/fda/open/standard/webhook/setting/infos");

class ControllerExtensionWebhookAPI extends Controller {
    function signParam($str)
	{
		return strtoupper(hash("sha256", $str));
	}
	/* build post param str */
	function buildRequestParam($data_arr)
	{
		$sign = '';
		ksort($data_arr);
	        foreach($data_arr as $k => $v)
			{
				if((($v != null) || $v === 0) && ($k != 'sign'))
				{
					$sign .= $k.'='.$v.'&';
				}else{
					unset($data_arr[$k]);
				}
        	}
		$sign .= "key=" . merchantPW;
        
		$data_arr['sign'] = $this->signParam($sign);

		$requestStr = '';
		foreach($data_arr as $k => $v)
		{
			$requestStr .= $k . "=" . urlencode($v) . '&';
		}
		return substr($requestStr, 0, -1);
	}
    function postRequest($url, $postData)
	{
		$curl = curl_init ();
		$header[] = "Content-type: application/x-www-form-urlencoded";
		$header[] = "Accept: application/json";
		$header[] = "Accept-Language: en";
		curl_setopt ( $curl, CURLOPT_URL, $url );
		curl_setopt ( $curl, CURLOPT_SSL_VERIFYPEER, false ); // SSL certificate
		curl_setopt ( $curl, CURLOPT_SSL_VERIFYHOST, false );
		curl_setopt ( $curl, CURLOPT_HEADER, 0 );
		curl_setopt ( $curl, CURLOPT_HTTPHEADER, $header );
		curl_setopt ( $curl, CURLOPT_RETURNTRANSFER, 1 );
		curl_setopt ( $curl, CURLOPT_POST, true ); // post
		curl_setopt ( $curl, CURLOPT_POSTFIELDS, $postData ); // post data
		curl_setopt ( $curl, CURLOPT_TIMEOUT, 10 );
		
		$responseText = curl_exec ( $curl );
		if (curl_errno ( $curl )) {
				echo 'Errno' . curl_error ( $curl );
		}
		curl_close ( $curl );
		return $responseText;
	}

    public function webhookInfos($data_arr)
    {
        $post_str = $this->buildRequestParam($data_arr);
		$responseStr = $this->postRequest(webhook_infos, $post_str);
		return json_decode($responseStr, true);
    }
    public function index() 
    {
        $data_arr = array(
            "mchId" => merchantID,
            "nonceStr" => time(),
            "serviceCategory" => 1,
            "url" => 'https://happypaws.ph/hp/index.php?route=extension/webhookRoutes',
            "webhookApiCode" => 4,	
			"webHookStatusEnabled" => true
        );

        $data_infos = array(
            "mchId" => merchantID,
            "nonceStr" => time(),
        );

        echo "<pre>";
        print_r($this->webhookInfos($data_infos));
        echo "</pre>";
 
        $post_str = $this->buildRequestParam($data_arr);
		$responseStr = $this->postRequest(webhook, $post_str);
		$apiResponse = json_decode($responseStr, true);
        echo "<pre>";
        print_r($apiResponse);
        echo "</pre>";
    }
    
}
    
?>