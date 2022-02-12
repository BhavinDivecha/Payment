<!DOCTYPE html>
<html>
    <body>
        <form method="post" action="payment_bgdlegend_paytm.php">

        ORDER ID: <input type="text" id="ORDERID" name="ORDERID">
            Amount: <input type="text" id="AMOUNT" name="AMOUNT">
            CUS ID: <input type="text" id="CUSID" name="CUSID">
            <input type="submit">
        </form>
        <br><br>
        <form method="post" action="PHPMailer/sendOTP.php">

Email: <input type="text" id="EMAILID" name="EMAILID">
OTP: <input type="text" id="OTP" name="OTP">
    <input type="submit">
</form>
<form method="post" action="payUHash.php">

txnid ID: <input type="text" id="txnid" name="txnid">
            Amount: <input type="text" id="amount" name="amount">
            productinfo ID: <input type="text" id="productinfo" name="productinfo">
            firstname: <input type="text" id="firstname" name="firstname">

            email: <input type="email" id="email" name="email">

            udf1: <input type="text" id="udf1" name="udf1">
            udf2: <input type="text" id="udf2" name="udf2">
            udf3: <input type="text" id="udf3" name="udf3">
            udf4: <input type="text" id="udf4" name="udf4">
            udf5: <input type="text" id="udf5" name="udf5">

            <input type="submit">
        </form>
    </body>
</html>
