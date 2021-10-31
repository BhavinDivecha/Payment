<html>
    <body>
<?php

require_once("./PaytmChecksum.php");

/* initialize an array */
$paytmParams = array();

/* add parameters in Array */
$paytmParams["MID"] = "nbCBZo84436307724140";
$paytmParams["ORDERID"] = $_POST["ORDERID"];

/**
* Generate checksum by parameters we have
* Find your Merchant Key in your Paytm Dashboard at https://dashboard.paytm.com/next/apikeys 
*/
$paytmChecksum = PaytmChecksum::generateSignature($paytmParams, 'HsKuY%63DZkHISOz');
$verifySignature = PaytmChecksum::verifySignature($paytmParams, 'HsKuY%63DZkHISOz', $paytmChecksum);
echo sprintf("generateSignature Returns: %s\n", $paytmChecksum);
echo sprintf("verifySignature Returns: %b\n\n", $verifySignature);


/* initialize JSON String */  
$body = "{\"mid\":\"nbCBZo84436307724140\",\"orderId\":\".$_POST["ORDERID"].\"}";

/**
* Generate checksum by parameters we have in body
* Find your Merchant Key in your Paytm Dashboard at https://dashboard.paytm.com/next/apikeys 
*/
$paytmChecksum = PaytmChecksum::generateSignature($body, 'HsKuY%63DZkHISOz');
$verifySignature = PaytmChecksum::verifySignature($body, 'HsKuY%63DZkHISOz', $paytmChecksum);
echo sprintf("generateSignature Returns: %s\n", $paytmChecksum);
echo sprintf("verifySignature Returns: %b\n\n", $verifySignature);
?>
<p>Hello</p>
</body>
</html>