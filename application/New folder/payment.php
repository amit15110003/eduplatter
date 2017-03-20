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
  <?php $attributes = array("name" => "signupform");
      echo form_open("payment/transaction", $attributes);?>
  <tr><td>txnid</td><td><input type="text" name="txnid" value="<?php echo $txnid=time().rand(1000,99999); ?>" /></td></tr>
  <tr><td>amount</td><td><input type="text" name="amount" value="" /></td></tr>
  <tr><td>firstname</td><td><input type="text" name="firstname" value="<?php echo $this->session->userdata('uname'); ?>" /></td></tr>
  <tr><td>email</td><td><input type="text" name="email" value="<?php echo $this->session->userdata('email'); ?>" /></td></tr>
  <tr><td>phone</td><td><input type="text" name="phone" value="<?php echo $this->session->userdata('contact'); ?>" /></td></tr>
  <tr><td>productinfo</td><td><input type="text" name="productinfo" value="" /></td></tr>
  <tr><td><input type="hidden" name="surl" value="<?php echo base_url("index.php/payment/success"); ?>" size="64" /></td></tr>
  <tr><td><input type="hidden" name="furl" value="<?php echo base_url("index.php/payment/failure"); ?>" size="64" /></td></tr>
  <tr><td><input type="submit" /></td><td><input type="reset" /></td></tr>
  
      <?php echo form_close(); ?>
      <?php echo $this->session->flashdata('msg'); ?>
</table>
</div>
</body>
</html>