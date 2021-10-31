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

?>
</body>
</html>
