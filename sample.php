<html>
    <body>

<p>Hello</p>
<?php

require_once("./PaytmChecksum.php");

$orderId=$_POST["ORDERID"];
/* initialize an array */
$paytmParams = array();

/* add parameters in Array */
$paytmParams["MID"] = "nbCBZo84436307724140";
$paytmParams["ORDERID"] = $orderId;

/**
* Generate checksum by parameters we have
* Find your Merchant Key in your Paytm Dashboard at https://dashboard.paytm.com/next/apikeys 
*/
$paytmChecksum = PaytmChecksum::generateSignature($paytmParams, 'HsKuY%63DZkHISOz');
$verifySignature = PaytmChecksum::verifySignature($paytmParams, 'HsKuY%63DZkHISOz', $paytmChecksum);
echo sprintf("generateSignature Returns: %s\n", $paytmChecksum);
echo sprintf("verifySignature Returns: %b\n\n", $verifySignature);


$body = "{"\mid\":"\YOUR_MID_HERE\","\orderId\":".$orderId."}";

/**
* Generate checksum by parameters we have in body
* Find your Merchant Key in your Paytm Dashboard at https://dashboard.paytm.com/next/apikeys 
*/
$paytmChecksum = PaytmChecksum::generateSignature($body, 'HsKuY%63DZkHISOz');
$verifySignature = PaytmChecksum::verifySignature($body, 'HsKuY%63DZkHISOz', $paytmChecksum);
echo sprintf("generateSignature Returns: %s\n", $paytmChecksum);
echo sprintf("verifySignature Returns: %b\n\n", $verifySignature);
?>
</body>
</html>
