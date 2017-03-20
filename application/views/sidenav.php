<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
  <title>Profile | Eduplatter</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="<?php echo base_url('media/css/materialize.css'); ?>" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="<?php echo base_url('media/css/home.css'); ?>" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="https://fonts.googleapis.com/css?family=Courgette" rel="stylesheet">
  
</head>
<body>

<ul id="slide-out" class="side-nav fixed">
    <li><div class="userView " >
      <img class="background" src="<?php echo base_url('media/image/random.jpg'); ?>">
      <br>
      <a href="#!name"><span class="white-text name"><?php echo $this->session->userdata('uname'); ?></span></a>
      <a href="#!email"><span class="white-text email"><?php echo $this->session->userdata('email'); ?></span></a>
    </div></li>
    <?php if ($this->session->userdata('status')=='B') { ?>
    <li><a href="<?php echo base_url("index.php/profile"); ?>">Profile</a></li>
    <li><a href="<?php echo base_url("index.php/education"); ?>">Educational Details</a></li>
    <li><a href="<?php echo base_url("index.php/profile/skills"); ?>">Skills</a></li>
    <li><a href="<?php echo base_url("index.php/work"); ?>">Research/Work Experience</a></li>
    <li><a href="<?php echo base_url("index.php/profile/achievements"); ?>">Achievements</a></li>
    <?php } 
    elseif ($this->session->userdata('status')=='P') {
    ?>
    <li><a href="<?php echo base_url("index.php/profile"); ?>">Profile</a></li>
    <li><a href="<?php echo base_url("index.php/education"); ?>">Educational Details</a></li>
    <li><a href="<?php echo base_url("index.php/profile/skills"); ?>">Skills</a></li>
    <li><a href="<?php echo base_url("index.php/work"); ?>">Research/Work Experience</a></li>
    <li><a href="<?php echo base_url("index.php/profile/achievements"); ?>">Achievements</a></li>
    <li><a href="<?php echo base_url("index.php/consultancy"); ?>"><i class="material-icons">launch</i>Consultancy</a></li>
    <?php } 
    elseif($this->session->userdata('status')=='PP') {
    ?>
    <li><a href="<?php echo base_url("index.php/profile"); ?>">Profile</a></li>
    <li><a href="<?php echo base_url("index.php/education"); ?>">Educational Details</a></li>
    <li><a href="<?php echo base_url("index.php/profile/skills"); ?>">Skills</a></li>
    <li><a href="<?php echo base_url("index.php/work"); ?>">Research/Work Experience</a></li>
    <li><a href="<?php echo base_url("index.php/profile/achievements"); ?>">Achievements</a></li>
    <li><a href="<?php echo base_url("index.php/consultancy"); ?>"><i class="material-icons">launch</i>Consultancy</a></li>
    <li><a href="<?php echo base_url("index.php/welcome/profile"); ?>"><i class="material-icons">launch</i>Cover Letter</a></li>
    <li><a href="<?php echo base_url("index.php/welcome/logout"); ?>"><i class="material-icons">launch</i>Letters of Recommendation</a></li>
    <?php } ?>
    <!--<ul class="collapsible collapsible-accordion">
        <li class="bold"><a class="collapsible-header  waves-effect waves-teal">Resume/CV</a>
            <div class="collapsible-body">
            <ul>
            	<li><a href="color.html">Educational Details</a></li>
                <li><a href="grid.html">Skills</a></li>
                <li><a href="helpers.html">Research/Work Experience</a></li>
                <li><a href="media-css.html">Achievents</a></li>
            </ul>
            </div>
        </li>    
    </ul>-->
    
    <li><div class="divider"></div></li>
    <li><a class="waves-effect" href="<?php echo base_url("index.php/welcome/logout"); ?>">Log Out</a></li>
  </ul>
 
  <a href="#" data-activates="slide-out" class="button-collapse"><i class="material-icons">menu</i></a>
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="<?php echo base_url('media/js/materialize.js'); ?>"></script>
  <script src="<?php echo base_url('media/js/init.js'); ?>"></script>
