<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
  <title>Eduplatter</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="<?php echo base_url('media/css/materialize.css'); ?>" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="https://fonts.googleapis.com/css?family=Courgette" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Roboto:100" rel="stylesheet">
</head>
<body>
<nav class="indigo darken-4" role="navigation">
    <div class="nav-wrapper container">
       <a href="#!" class="brand-logo center">Logo</a>
      <ul class="left hide-on-med-and-down">
        <li><a href="<?php echo base_url(); ?>">Home</a></li>
        <li><a href="<?php echo base_url(); ?>">Plans</a></li>
        <li><a href="<?php echo base_url(); ?>">Blog</a></li>
      </ul>
      <ul class="right hide-on-med-and-down">
      <?php if ($this->session->userdata('login')){ ?>
        <li><a href="<?php echo base_url("index.php/profile"); ?>"><i class="material-icons right" ></i><?php echo $this->session->userdata('uname'); ?></a></li>
        <li><a href="<?php echo base_url("index.php/welcome/logout"); ?>">Log Out</a></li>
        <?php } else { ?>
        <li><a href="<?php echo base_url("index.php/login"); ?>">Login</a></li>
        <li><a href="<?php echo base_url("index.php/signup"); ?>">Signup</a></li>
        <?php } ?>
      </ul>
      <ul id="nav-mobile" class="side-nav">
        <?php if ($this->session->userdata('login')){ ?>
        <li><a href="<?php echo base_url("index.php/profile"); ?>"><i class="material-icons right Small"></i><?php echo $this->session->userdata('uname'); ?></a></li>
        <li><a href="<?php echo base_url("index.php/welcome/logout"); ?>">Log Out</a></li>
        <?php } else { ?>
        <li><a href="<?php echo base_url("index.php/login"); ?>">Login</a></li>
        <li><a href="<?php echo base_url("index.php/signup"); ?>">Signup</a></li>
        <?php } ?>
        <li><a href="<?php echo base_url(); ?>">Home</a></li>
        <li><a href="<?php echo base_url(); ?>">Plans</a></li>
        <li><a href="<?php echo base_url(); ?>">Blog</a></li>
      </ul>
      <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
    </div>
  </nav>
<br/>
<div class="container ">
<br>
	<div class="row">
	<div class="col m4 s12 offset-m4 indigo lighten-5">
	<div class="row" style=" padding-top: 60px; padding-bottom: 20px; padding-left: 2%; padding-right: 2%;">
		<div class="col m12 s12 ">
		<?php $attributes = array("name" => "loginform");
			echo form_open("login/index", $attributes);?>
			<legend>Login</legend>
			<div class="input-field">
				<input class="validate" name="email"  type="text" value="<?php echo set_value('email'); ?>" />
				<label for="name">Email-ID</label>
				<span class="text-danger"><?php echo form_error('email'); ?></span>
			</div>
			<div class="input-field">
				<input class="validate" name="password"  type="password" value="<?php echo set_value('password'); ?>" />
				<label for="name">Password</label>
				<span class="text-danger"><?php echo form_error('password'); ?></span>
			</div>
			<div class="input-field">
				<button name="submit" type="submit" class="btn btn-info">Login</button>
				<button name="cancel" type="reset" class="btn btn-info">Cancel</button>
			</div>
		<?php echo form_close(); ?>
		<?php echo $this->session->flashdata('msg'); ?>
		</div>
	</div>
	<div class="row">
		<div class="col m12 s12  center">	
		New User? <a href="<?php echo base_url(); ?>index.php/signup">Sign Up Here</a>
		</div>
	</div>
	</div>
	</div>
</div>
  
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="<?php echo base_url('media/js/materialize.js'); ?>"></script>
  <script src="<?php echo base_url('media/js/init.js'); ?>"></script>
 
  </body>
</html>
