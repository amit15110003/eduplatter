<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="<?php echo base_url('media/css/materialize.css'); ?>" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="<?php echo base_url('media/css/home.css'); ?>" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="https://fonts.googleapis.com/css?family=Courgette" rel="stylesheet">
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="<?php echo base_url('media/js/materialize.js'); ?>"></script>
  <script src="<?php echo base_url('media/js/init.js'); ?>"></script>
</head>
<body>
<div class="main">
 <div class="row">
  <div class="row " style=" background-color: #C5CAE9; color: #fff; padding-top: 15px; padding-left: 15px; padding-bottom: 10px; margin-top: -40px; ">
  <h2>Profile</h2>
  </div>
    <div class="col m3"></div>
    <div class="col m6 s12 hoverable" >
    <?php $attributes = array("name" => "profile");
      echo form_open("profile/index", $attributes);?>
      <div class="row">
        <div class="input-field col s12 hide ">
          <input placeholder="<?php echo $this->session->userdata('uid'); ?>"  value="<?php echo $this->session->userdata('uid'); ?>" id="first_name" type="text" class="validate" name="id">
          <label for="first_name"></label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s6">
          <input   value="<?php echo $fname; ?>" id="first_name" type="text" class="validate" name="fname">
          <label for="first_name">First Name</label>
        </div>
        <div class="input-field col s6">
          <input  value="<?php echo $lname; ?>" id="last_name" type="text" class="validate" name="lname">
          <label for="last_name">Last Name</label>
        </div>
      </div>
      <div class="row">
        
        <div class="input-field col s12">
          <input id="number" type="number" class="validate" name="contact" value="<?php echo $ucontact; ?>">
          <label for="number">Contact Number</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input placeholder="<?php echo $this->session->userdata('email'); ?>"  id="email" type="email" class="validate" readonly >
          <label for="email">Email</label>
        </div>
      </div>
      <button class="btn waves-effect waves-light" type="submit" name="submit">Submit
      <i class="material-icons right">send</i>
      </button>
      <?php echo form_close(); ?>
      <?php echo $this->session->flashdata('msg'); ?>
    </div>
  </div>
</div>