<?php 
// Change the Merchant key here as provided by Payumoney
$MERCHANT_KEY = "JBZaLc";

// Change the Merchant Salt as provided by Payumoney
$SALT = "GQs7yium";


	$firstname =$_POST['firstname'];
	$email =$_POST['email'];
	$phone =$_POST['phone'];
	$productinfo =$_POST['productinfo'];
	$service_provider =$_POST['service_provider'];
	$amount =$_POST['amount'];
	$txnid =$_POST['txnid'];
	$productinfo =$_POST['productinfo'];
	$surl =$_POST['surl'];
	$furl =$_POST['furl'];
	

	//$ =$_POST[''];

	$hashseq=$MERCHANT_KEY.'|'.$txnid.'|'.$amount.'|'.$productinfo.'|'.$firstname.'|'.$email.'|||||||||||'.$SALT;
	$hash =strtolower(hash("sha512", $hashseq)); 
	

?>


<!DOCTYPE html>
<html>
<head>

<title>Payment Processing</title>
	<script>
    function submitForm() {
      var postForm = document.forms.postForm;
      postForm.submit();
    }
</script>
</head>
<body onload="submitForm();">

<div>
<h2>Payment Gateway Testing Sample</h2>
<table>
<tr><td>Transaction Id</td><td><strong><?php echo $_POST['txnid']; ?></strong></td><td>Amount: </td><td><strong>Rs. <?php echo $_POST['amount']; ?></strong></td>
</table>
<div >
<p>In this page we will genrate hash and send it to payumoney.</p>
<br>
<p>Please be patient. this process might take some time,<br />please do not hit refresh or browser back button or close this window</p>
</div>
</div>

<div>
	<form name="postForm" action="https://test.payu.in/_payment" method="POST" >
		<input type="hidden" name="key" value="<?php echo $MERCHANT_KEY; ?>" />
		<input type="hidden" name="hash" value="<?php echo $hash;  ?>"/>
		<input type="hidden" name="txnid" value="<?php echo $_POST['txnid'];  ?>" />
		<input type="hidden" name="amount" value="<?php echo $_POST['amount'];  ?>" />
		<input type="hidden" name="firstname" value="<?php echo $_POST['firstname'];  ?>" />
		<input type="hidden" name="email" value="<?php echo $_POST['email'];  ?>" />
		<input type="hidden" name="phone" value="<?php echo $_POST['phone'];  ?>" />
		<input type="hidden" name="productinfo" value="<?php echo $_POST['productinfo'];  ?>" />
		<input type="hidden" name="service_provider" value="payu_paisa" size="64" />
		<input type="hidden" name="surl" value="<?php echo $_POST['surl'];  ?>" />
		<input type="hidden" name="furl" value="<?php echo $_POST['furl'];  ?>" />
	</form>
</div>
</body>
</html>