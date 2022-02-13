<!DOCTYPE html>
<html>
    <body>

    <form action='https://secure.payu.in/_payment' method='post'>
            <!-- <form action='https://test.payu.in/_payment' method='post'> -->

<input type="text" name="key" value="Cm0Gy1" />
<input type="text" name="txnid" value=<?php echo $_GET["txnid"]?> />
<input type="text" name="productinfo" value=<?php echo $_GET["productinfo"]?> />
<input type="text" name="amount" value=<?php echo $_GET["amount"]?> />
<input type="text" name="email" value=<?php echo $_GET["email"]?> />
<input type="text" name="firstname" value=<?php echo $_GET["firstname"]?> />
<input type="text" name="phone" value=<?php echo $_GET["phone"]?> />
<input type="hidden" name="surl" value="https://bgdlegend.herokuapp.com/success.php" />
<input type="hidden" name="furl" value="https://bgdlegend.herokuapp.com/failed.php" />
<input type="text" name="hash" value=<?php echo $_GET["hash"]?> />
<input type="submit" value="Pay"> </form>
</body>
</html>