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
    <div class="row " style=" background-color: #C5CAE9; color: #fff; padding-top: 15px; padding-left: 15px; padding-bottom: 10px; margin-top: -40px; ">
    <h2>Skills</h2>
    </div>
     <div class="row">
     <br>
    <div class="col m3"></div>
    <div class="col m6 s12 hoverable">
          <?php $attributes = array("name" => "skills");
      echo form_open("profile/skills", $attributes);?>
      <?php
if (isset($data))
{
	
}
else {
	$data=0;
}?>
      <div class="row">
      <div class="row">
        <div class="input-field col s12 hide ">
          <input    value="<?php echo $id;?>" id="first_name" type="text" class="validate" name="id">
          <label for="first_name"></label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12 hide ">
          <input   value="<?php echo $this->session->userdata('uid'); ?>" id="first_name" type="text" class="validate" name="uid">
          <label for="first_name"></label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="schoolname" type="text" class="validate" name="i" value="<?php echo $i;?>">
          <label for="name">Area of Interest</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="schoolboard" type="text" class="validate" name="cl" value="<?php echo $cl; ?>">
          <label for="board">Computer Languages Known</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="percentage" type="text" class="validate" name="s" value="<?php echo $s; ?>">
          <label for="Course">Software Package Known</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="percentage" type="text" class="validate" name="a" value="<?php echo $a; ?>">
          <label for="Course">Scientific Apparatus Handling</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="schoolboard" type="text" class="validate" name="l" value="<?php echo $l; ?>">
          <label for="board"> Languages Known</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="details" class="validate"  type="text" name="details" value="<?php echo $details; ?>">
          <label for="details">Additional details</label>
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
</div>