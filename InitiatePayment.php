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
        <script type="text/javascript">
            
        // This code is just here to demonstrate the the submit button will
// wind up getting its click event triggerd and because it is a submit
// button, that will trigger the submit event of the form.
document.querySelector("form").addEventListener("submit", function(evt){
  evt.preventDefault();
  alert("You triggered the click event of the button!");
});

// Just call the .click method of the button
document.querySelector("input[type='submit']").click();
    
            </script>
    <div class="parent">
<div class="child">
<!-- <form action='https://secure.payu.in/_payment' method='post'> -->
            <!-- <form action='https://test.payu.in/_payment' method='post'> -->
                <form action='?' method='post'>
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