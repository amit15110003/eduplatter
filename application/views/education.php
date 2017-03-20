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
    <?php $attributes = array("name" => "education");
      echo form_open("education/index", $attributes);?>
      <?php
if (isset($data))
{
  
}
else {
  $data=0;
}?>

      <h4 class="center">College /University</h4>
      <div class="row">
      <div class="row">
        <div class="row">
        <div class="input-field col s12 hide ">
          <input    value="<?php echo $id;?>" id="first_name" type="text" class="validate" name="id">
          <label for="first_name"></label>
        </div>
      </div>
        <div class="input-field col s12 hide ">
          <input placeholder="<?php echo $this->session->userdata('uid'); ?>"  value="<?php echo $this->session->userdata('uid'); ?>" id="first_name" type="text" class="validate" name="uid">
          <label for="first_name"></label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="collegename" type="text" class="validate" name="cname" value="<?php echo $cname;?>">
          <label for="name">Name</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="collegeDepartment" type="text" class="validate" name="cdept" value="<?php echo $cdept;?>">
          <label for="Department">Department</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="collegeCourse" type="text" class="validate" name="ccourse" value="<?php echo $ccourse;?>">
          <label for="Course">Course</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="collegeYear" type="number" class="validate" name="cyear" value="<?php echo $cyear;?>">
          <label for="Year">Year Of Study</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s6">
          <input id="collegeCourse" type="number" class="validate" name="cobt" value="<?php echo $cobt;?>">
          <label for="Course">Grade Obtained</label>
        </div>
        <div class="input-field col s6">
          <input id="collegeCourse" type="number" class="validate" name="cout" value="<?php echo $cout;?>">
          <label for="Course">Out Off</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <textarea id="textarea1" class="materialize-textarea" name="cadditional"><?php echo $cadditional;?></textarea>
          <label for="textarea1">Additional details</label>
        </div>
      </div>
    </div>
    <button class="btn waves-effect waves-light" type="submit" name="submit">Submit
      <i class="material-icons right">send</i>
      </button>
    <?php echo form_close(); ?>
      </div>
  </div>
    <!--<div class="row">
    <div class="col m3"></div>
    <div class="col m6 s12">
    <?php $attributes = array("name" => "profile");
      echo form_open("profile/education", $attributes);?>
      <h4>School (Class 12th)</h4>
      <div class="row">
      <div class="row">
        <div class="input-field col s12">
          <input id="schoolname" type="text" class="validate" name="sname">
          <label for="name">Name</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="schoolboard" type="text" class="validate" name="sboard">
          <label for="board">Board</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="percentage" type="text" class="validate" name="sper">
          <label for="Course">Percentage</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <textarea id="textarea1" class="materialize-textarea" name="sadditional"></textarea>
          <label for="textarea1">Additional details</label>
        </div>
      </div>
      <button class="btn waves-effect waves-light" type="ssubmit" name="submit">Submit
      <i class="material-icons right">send</i>
      </button>
    <?php echo form_close(); ?>
      <?php echo $this->session->flashdata('msg'); ?>-->
    </div>
  </div>
</div>
