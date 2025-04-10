<?php

    define("merchantID", "CA0740");
    define("merchantPW", "4cf1406fb936ae1e680abf174509c454a3254eff5789df3505ce93683aaa3785");
    define("test", "http://localhost/store/index.php?route=extension/webhookforflash");
    class ControllerExtensionTestWebhook extends Controller {

    function signParam($str)
	{
		return strtoupper(hash("sha256", $str));
	}
	
	/* build post param str */
	function buildRequestParam($data_arr)
{
    $sign = '';
    ksort($data_arr);

    foreach ($data_arr as $k => $v) {
        if (($v !== null || $v === 0) && $k !== 'sign' && $k !== 'data') { 
            // Exclude `data` from the signature calculation
            $sign .= $k . '=' . $v . '&';
        }
    }

    // Append secret key
    $sign .= "key=" . merchantPW;

    // Generate the signature
    $data_arr['sign'] = $this->signParam($sign);

    // Convert `data` field to JSON (if it's an array) before sending
    if (isset($data_arr['data']) && is_array($data_arr['data'])) {
        $data_arr['data'] = json_encode($data_arr['data'], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
    }

    // Build request string
    $requestStr = '';
    foreach ($data_arr as $k => $v) {
        $requestStr .= $k . "=" . urlencode($v) . '&';
    }

    return substr($requestStr, 0, -1); // Remove the trailing "&"
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
    function testlang()
	{
		$paramArr = array(
			"mchId" => merchantID,
			"nonceStr" => time(),
			"data" => array(
				"orderId" => "642e26846ac1770008b69c0f",
				"outTradeNo" => "123456789XXXX",
				"pno" => "P6125TFBYZZ",
				"origPno" => "P6125TFBXZZ",
				"recentPno" => "P6125TFBXZZ",
				"state" => "1",
				"stateText" => "Picked up",
				"returned" => false,
				"returnedPno" => null,
				"customaryPno" => null,
				"currentProvince" => null,
				"updateAt" => "1680747255",
				"routedAction" => "RECEIVED",
				"message" =>"Your parcel has been picked-up by",
				"markerCategory" => null,
				"staffInfoId" => null,
				"staffInfoPhone" => null,
				"routedAt" => "1680747251",
				"eSignature" => null
			)
		);
		$post_str = $this->buildRequestParam($paramArr);
		$responseStr = $this->postRequest(test, $post_str);
		return json_decode($responseStr, true);
	}
    public function index()
    {
        print_r($this->testlang());
    }
}

// "data" => array(
// 				"orderId" => "642e26846ac1770008b69c0f",
// 				"outTradeNo" => "123456789XXXX",
// 				"pno" => "P0102P8XXXX",
// 				"origPno" => "P0102P8XXXX",
// 				"recentPno" => "P0102P8XXXXR",
// 				"state" => "1",
// 				"stateText" => "Picked up",
// 				"returned" => false,
// 				"returnedPno" => null,
// 				"customaryPno" => null,
// 				"currentProvince" => null,
// 				"updateAt" => "1680747255",
// 				"routedAction" => "RECEIVED",
// 				"message" =>"Your parcel has been picked up by the [ABC_SP] courier.",
// 				"markerCategory" => null,
// 				"staffInfoId" => null,
// 				"staffInfoPhone" => null,
// 				"routedAt" => "1680747251",
// 				"eSignature" => null
// 			)

?>