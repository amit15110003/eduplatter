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
        <li><a href="<?php echo base_url("index.php/profile"); ?>"><i class="material-icons right" >settings</i><?php echo $this->session->userdata('uname'); ?></a></li>
        <li><a href="<?php echo base_url("index.php/welcome/logout"); ?>">Log Out</a></li>
        <?php } else { ?>
        <li><a href="<?php echo base_url("index.php/login"); ?>">Login</a></li>
        <li><a href="<?php echo base_url("index.php/signup"); ?>">Signup</a></li>
        <?php } ?>
      </ul>
      <ul id="nav-mobile" class="side-nav">
        <?php if ($this->session->userdata('login')){ ?>
        <li><a href="<?php echo base_url("index.php/profile"); ?>"><i class="material-icons right Small">settings</i><?php echo $this->session->userdata('uname'); ?></a></li>
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
<br><br>
<?php $attributes = array("name" => "signupform");
      echo form_open("payment/index", $attributes);?>
<div class="container">
  <div class="row">
      <div class="col m8">
        <h4>Comprehensive Plans</h4>
        <hr>
        <div class="row">
        <div class="col m6 ">
        <h5><input name="plan" value="1" type="radio" id="test1"  required/>
          <label for="test1"></label> Basic</h5>
        </div>
        <div class="col m6">
        <h5>INR 599</h5>
        </div>
        </div>
        <div class="row">
         <div class="col m4">
        <p >  Resume </p>
        </div>
         <div class="col m4">
        <p>  Curriculum Vitae </p>
        </div>
         <div class="col m4">        
        <p >  Consultancy/Mentorship  </p>
        </div>
        </div>
        <hr>
        <div class="row">
        <div class="col m6">
        <h5><input name="plan" value="2" type="radio" id="test2" required />
          <label for="test2"></label> Pro</h5>
        </div>
        <div class="col m6">
        <h5>INR 999</h5>
        </div>
        </div>
        <div class="row">
         <div class="col m4">
        <p >  Resume </p>
        <p >  Cover Letter  </p>
        </div>
         <div class="col m4">
        <p>  Curriculum Vitae </p>
        </div>
         <div class="col m4">        
        <p >  Consultancy/Mentorship  </p>
        </div>
        </div><hr>
         <div class="row">
        <div class="col m6">
        <h5><input name="plan" value="3" type="radio" id="test3" required />
          <label for="test3"></label> Pro Plus</h5>
        </div>
        <div class="col m6">
        <h5>INR 1199</h5>
        </div>
        </div>
         <div class="row">
         <div class="col m4">
           <p >  Resume </p>
           <p >  Cover Letter  </p>
           <p >  Mailing Support</p>
         </div>
          <div class="col m4">
            <p>  Curriculum Vitae </p>
            <p >  Statement of Purpose </p>
          </div>
        <div class="col m4">
          <p >  Consultancy/Mentorship  </p>
          <p >  Letters of Recommendation </p>
        </div>
        </div>
        <hr>
        <h4>Individual Plans</h4><hr>
        <div class="row">
         <div class="col m6">
        <p>
          <input name="plan" value="4" type="radio" id="test4" required/>
          <label for="test4">Letters of Recommendation</label>
        </p>
        </div>
        <div class="col m6">
        <h5>INR 149</h5>
        </div>
        </div>
        <div class="row">
        <div class="col m6">
        <p>
          <input name="plan" value="5" type="radio" id="test5" required />
          <label for="test5">Resume</label>
        </p>
        </div>
        <div class="col m6">
        <h5>INR 199</h5>
        </div>
        </div>
        <div class="row">
         <div class="col m6">
        <p>
          <input name="plan" value="6" type="radio" id="test6" required/>
          <label for="test6">Curriculum Vitae</label>
        </p>
        </div>
        <div class="col m6">
        <h5>INR 249</h5>
        </div>
        </div>
        <div class="row">
        <div class="col m6">
        <p>
          <input name="plan" value="7" type="radio" id="test7" required />
          <label for="test7">Consultancy</label>
        </p>
        </div>
        <div class="col m6">
        <h5>INR 299</h5>
        </div>
        </div>
        <hr>
        <!--<h4>Combo Plans</h4>
        <hr>
        <div class="row">
        <div class="col m6">
        <h6>Resume + Curriculum Vitae</h6>
        </div>
        <div class="col m6">
        <h5>INR 349</h5>
        </div>
         <div class="col m6">
        <h6>Resume + Curriculum Vitae + Letters of Recommendation </h6>
        </div>
        <div class="col m6">
        <h5>INR 499</h5>
        </div>
        </div>-->
      </div>
      <div class="col m4 s12  grey lighten-5">
        <div class="center  grey lighten-5">
          <br><br>
          <!--<h5>Enter your Referral Code</h5>
          <div class="input-field col s12 grey lighten-5">
            <input id="first_name2" type="text" class="validate">
            <label class="active" for="first_name2">Code</label>
          </div>-->
          <div class="row center">
            <button name="submit" type="submit" class="btn btn-info">BUY</button>
            <br><br>
            </div>
        </div>
      </div>
  </div>
  <?php echo form_close(); ?>
      <?php echo $this->session->flashdata('msg'); ?>
</div>
  
  <footer class="page-footer indigo darken-4">
    <div class="container">
      <div class="row">
        <div class="col l6 s12">
          <h5 class="white-text">Company Bio</h5>
          <p class="grey-text text-lighten-4">We are a team of college students working on this project like it's our full time job. Any amount would help support and continue development on this project and is greatly appreciated.</p>


        </div>
        <div class="col l3 s12">
          <h5 class="white-text">Settings</h5>
          <ul>
            <li><a class="white-text" href="#!">Link 1</a></li>
            <li><a class="white-text" href="#!">Link 2</a></li>
            <li><a class="white-text" href="#!">Link 3</a></li>
            <li><a class="white-text" href="#!">Link 4</a></li>
          </ul>
        </div>
        <div class="col l3 s12">
          <h5 class="white-text">Connect</h5>
          <ul>
            <li><a class="white-text" href="#!">Link 1</a></li>
            <li><a class="white-text" href="#!">Link 2</a></li>
            <li><a class="white-text" href="#!">Link 3</a></li>
            <li><a class="white-text" href="#!">Link 4</a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="footer-copyright">
      <div class="container">
      2016 <a class="brown-text text-lighten-3" href="http://eduplatter.com"> Eduplatter</a>
      </div>
    </div>
  </footer>


  <!--  Scripts-->
  
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="<?php echo base_url('media/js/materialize.js'); ?>"></script>
  <script src="<?php echo base_url('media/js/init.js'); ?>"></script>
 
  </body>
</html>
