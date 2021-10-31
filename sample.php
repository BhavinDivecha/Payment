<html>
    <body>

<p>Hello</p>
<?php
/*
* import checksum generation utility
* You can get this utility from https://developer.paytm.com/docs/checksum/
*/
require_once("PaytmChecksum.php");

$orderId=$_POST["ORDERID"];
echo $orderId;
$paytmParams = array();
$paytmParams["body"] =  array(
    "requestType"   => "Payment",
    "mid"           => "nbCBZo84436307724140",
    "websiteName"   => "WEBSTAGING",
    "orderId"       => $orderId,
    "callbackUrl"   => "https://securegw-stage.paytm.in/theia/paytmCallback?ORDER_ID=".$orderId,
    "txnAmount"     => array(
        "value"     => "1.00",
        "currency"  => "INR"
    ),
    "userInfo"      => array(
        "custId"    => "CUST_001"
    )
);
/* initialize an array */
$paytmParam = array();

/* add parameters in Array */
$paytmParam["MID"] = "nbCBZo84436307724140";
$paytmParam["ORDERID"] = $orderId;

/**
* Generate checksum by parameters we have
* Find your Merchant Key in your Paytm Dashboard at https://dashboard.paytm.com/next/apikeys 
*/
// $paytmChecksum = PaytmChecksum::generateSignature($paytmParam, 'HsKuY%63DZkHISOz');
// $verifySignature = PaytmChecksum::verifySignature($paytmParam, 'HsKuY%63DZkHISOz', $paytmChecksum);

// $paytmParams["head"] = array(
//     "signature"    => $paytmChecksum
// );
// echo "\n".$paytmChecksum;

/*
* Generate checksum by parameters we have in body
* Find your Merchant Key in your Paytm Dashboard at https://dashboard.paytm.com/next/apikeys 
*/
$checksum = PaytmChecksum::generateSignature(json_encode($paytmParams["body"], JSON_UNESCAPED_SLASHES), "HsKuY%63DZkHISOz");

$paytmParams["head"] = array(
    "signature"    => $checksum
);
echo "\n".$checksum;
$post_data = json_encode($paytmParams, JSON_UNESCAPED_SLASHES);

/* for Staging */
$url = "https://securegw-stage.paytm.in/theia/api/v1/initiateTransaction?mid=nbCBZo84436307724140&orderId=".$orderId;

/* for Production */
// $url = "https://securegw.paytm.in/theia/api/v1/initiateTransaction?mid=nbCBZo84436307724140&orderId=".$orderId;

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $post_data);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); 
curl_setopt($ch, CURLOPT_HTTPHEADER, array("Content-Type: application/json")); 
$response = curl_exec($ch);
print_r($response);
?>
</body>
</html>
