<?php 

// Change the Merchant key here as provided by Payumoney
	$MERCHANT_KEY = "4pmxEu9O";

// Change the Merchant Salt as provided by Payumoney
    $SALT = "LLik2yb45l";
    $firstname=$this->session->userdata('uname');
    $email=$this->session->userdata('email');
	$txnid=time().rand(1000,99999);

	//$ =$_POST[''];

	$hashseq=$MERCHANT_KEY.'|'.$txnid.'|'.$amount.'|'.$productinfo.'|'.$firstname.'|'.$email.'|||||||||||'.$SALT;
	$hash =strtolower(hash("sha512", $hashseq)); 
	

?>
<!DOCTYPE html>
<html>
<head>
</head>
<body>
	<div>
		<h2>Payment Gateway Testing Sample</h2>
		<h3>Fill the form and submit it for starting the transaction...</h3>
	</div>

<div>
<table>
	<form name="postForm" action="https://secure.payu.in/_payment" method="POST" >
	<input type="hidden" name="key" value="<?php echo $MERCHANT_KEY; ?>" />
	<input type="hidden" name="hash" value="<?php echo $hash;  ?>"/>
	<tr><td>txnid</td><td><input type="text" name="txnid" value="<?php echo $txnid; ?>" /></td></tr>
	<tr><td>amount</td><td><input type="text" name="amount" value="<?php echo $amount; ?>" /></td></tr>
	<tr><td>firstname</td><td><input type="text" name="firstname" value="<?php echo $this->session->userdata('uname'); ?>" /></td></tr>
	<tr><td>email</td><td><input type="text" name="email" value="<?php echo $this->session->userdata('email'); ?>" /></td></tr>
	<tr><td>phone</td><td><input type="text" name="phone" value="<?php echo $this->session->userdata('contact'); ?>" /></td></tr>
	<tr><td>productinfo</td><td><input type="text" name="productinfo" value="<?php echo $productinfo; ?>" /></td></tr>
	<input type="hidden" name="service_provider" value="payu_paisa" size="64" />
	<tr><td>success url</td><td><input type="hidden" name="surl" value="<?php echo base_url("index.php/payment/success"); ?>" size="64" /></td></tr>
	<tr><td>failure url</td><td><input type="hidden" name="furl" value="<?php echo base_url("index.php/payment/failure"); ?>" size="64" /></td></tr>
	<tr><td><input type="submit" /></td><td><input type="reset" /></td></tr>
	</form>
</table>
</div>
</body>
</html>