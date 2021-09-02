<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
     <form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="POST">
       <input type="hidden" name="cmd" value="_xclick">
       <input type="hidden" name="business" value="sb-1onue7389926@business.example.com">
       <input type="hidden" name="item_name" value="I-phone">
       <input type="hidden" name="item_number" value="1">
       <input id="payment"  type="hidden" name="amount" value="417">
       <input type="hidden" name="no_shipping" value="0">
       <input type="hidden" name="no_note" value="1">
       <input type="hidden" name="currency_code" value="USD">
       <input type="hidden" name="lc" value="AU">
       <input type="hidden" name="rm" value="2">
       <input type="hidden" name="notify_url" value="http://localhost/paypal/success.php">
       <input type="hidden" name="return" value="http://localhost/paypal/success.php">
       <input type="submit" name="pay" value="Pay now">
     </form>
</body>
</html>
<script>
   let payment_input  = document.getElementById('payment').value=Math.random()*100;
    console.log(payment_input);
</script>