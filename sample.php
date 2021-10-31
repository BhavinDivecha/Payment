<html>
    <body>

<p>Hello</p>
        <?php

require_once("PaytmChecksum.php");

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



?>
</body>
</html>
