<!DOCTYPE html>
<html>
    <head>
        <style>
            .parent {
height: 200px;
display: flex;
align-items: center;
justify-content: center;
}
.child {
width: 100px;
height: 100px;
}
            </style>
    </head>
    <body>
        <script>
            document.querySelector("form").submit();
            </script>
    <div class="parent">
<div class="child">
<form action='https://secure.payu.in/_payment' method='post'>
            <!-- <form action='https://test.payu.in/_payment' method='post'> -->

<input type="hidden" name="key" value="Cm0Gy1" />
<input type="hidden" name="txnid" value=<?php echo $_GET["txnid"]?> />
<input type="hidden" name="productinfo" value=<?php echo $_GET["productinfo"]?> />
<input type="hidden" name="amount" value=<?php echo $_GET["amount"]?> />
<input type="hidden" name="email" value=<?php echo $_GET["email"]?> />
<input type="hidden" name="firstname" value=<?php echo $_GET["firstname"]?> />
<input type="hidden" name="phone" value=<?php echo $_GET["phone"]?> />
<input type="hidden" name="surl" value="https://bgdlegend.herokuapp.com/success.php" />
<input type="hidden" name="furl" value="https://bgdlegend.herokuapp.com/failed.php" />
<input type="hidden" name="hash" value=<?php echo $_GET["hash"]?> />
<input type="submit" value="Pay" style=" width: 150px; background-color: #0D1E29; text-align: center; font-weight: 800; padding: 11px 0px; color: white; font-size: 12px; display: inline-block; text-decoration: none; "> </form>
</div>
</div>
    
</body>
</html>