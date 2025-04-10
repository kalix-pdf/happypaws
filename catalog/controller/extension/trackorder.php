<?php

    define("merchantID", "CA0740");
    define("merchantPW", "4cf1406fb936ae1e680abf174509c454a3254eff5789df3505ce93683aaa3785");
    define("queryUrl", "https://open-api-tra.flashexpress.ph/open/v1/orders/{pno}/routes");

class ControllerExtensionTrackorder extends Controller {
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
    function queryParcel($parcelNo)
	{
		$parcelNo = trim($parcelNo);
		$paramArr = array(
			"mchId" => merchantID,
			"nonceStr" => time(),
		);
		$post_str = $this->buildRequestParam($paramArr);
		$url = str_replace("{pno}", $parcelNo, queryUrl);
		$responseStr = $this->postRequest($url, $post_str);
		return json_decode($responseStr, true);
	}
    public function index($tracking = null) {
        if (!$tracking && isset($this->request->get['tracking'])) {
            $tracking = $this->request->get['tracking'];
        }

        if ($tracking) {
            // $this->log->write("Tracking request received: " . $tracking);
            $response = $this->queryParcel($tracking);
            
            
            // $this->log->write("Tracking response: " . json_encode($response));
            return $response;
        }
    }
}
?>