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
$paytmParams = array();

$paytmParams["body"] = array(
    "requestType"   => "Payment",
    "mid"           => "nbCBZo84436307724140",
    "websiteName"   => "BlackStoneGameDevelopement",
    "orderId"       => $orderId,
    "callbackUrl"   => "http://blackstonegamedevelopment.in",
    "txnAmount"     => array(
        "value"     => "1.00",
        "currency"  => "INR",
    ),
    "userInfo"      => array(
        "custId"    => "CUST_001",
    ),
);

/*
* Generate checksum by parameters we have in body
* Find your Merchant Key in your Paytm Dashboard at https://dashboard.paytm.com/next/apikeys 
*/
$checksum = PaytmChecksum::generateSignature(json_encode($paytmParams["body"], JSON_UNESCAPED_SLASHES), "HsKuY%63DZkHISOz");

$paytmParams["head"] = array(
    "signature"    => $checksum
);
?>
</body>
</html>