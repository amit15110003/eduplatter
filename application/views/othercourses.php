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
    <h2>Educational Details</h2>
    </div>
    <div class="container">
        <a class="waves-effect waves-light btn" href="<?php echo base_url("index.php/education"); ?>"><i class="material-icons right">mode_edit</i>College/University</a>
        <a class="waves-effect waves-light btn" href="<?php echo base_url("index.php/education/school"); ?>"><i class="material-icons right">mode_edit</i>High School</a>
        <a class="waves-effect waves-light btn" href="<?php echo base_url("index.php/education/othercourses"); ?>"><i class="material-icons right">note_add</i>Other Courses</a>
    </div>
     <div class="row">
     <br>
    <div class="col m3"></div>
    <div class="col m6 s12 hoverable">
    <?php $attributes = array("name" => "courses");
      echo form_open("education/othercourses", $attributes);?>
      <div class="row">
      <div class="row">
        <div class="input-field col s12 hide ">
          <input   value="<?php echo $this->session->userdata('uid'); ?>" id="first_name" type="text" class="validate" name="uid">
          <label for="first_name"></label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="schoolname" type="text" class="validate" name="name" >
          <label for="name">Course Name</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <textarea id="textarea1" class="materialize-textarea" name="desc"></textarea>
          <label for="textarea1">Description</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="percentage" type="text" class="validate" name="duration" >
          <label for="Course">Durtion</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <textarea id="textarea1" class="materialize-textarea" name="add"></textarea>
          <label for="textarea1">Additional details</label>
        </div>
      </div>
      <button class="btn waves-effect waves-light" type="submit" name="submit">Add
      <i class="material-icons right">send</i>
      </button>
    </div>
    </div>
    <?php echo form_close(); ?>
      <?php echo $this->session->flashdata('msg'); ?>
  </div>
</div>
</div>