<!DOCTYPE html>
<html>
    <body>
        <form method="post" action="sample.php">

        ORDER ID: <input type="text" id="ORDERID" name="ORDERID">
            Amount: <input type="text" id="AMOUNT" name="AMOUNT">
            CUS ID: <input type="text" id="CUSID" name="CUSID">
            <input type="submit">
        </form>
        <br><br>
        <form method="post" action="sendOTP.php">

Email: <input type="text" id="EMAILID" name="EMAILID">
OTP: <input type="text" id="OTP" name="OTP">
    <input type="Send">
</form>
    </body>
</html>