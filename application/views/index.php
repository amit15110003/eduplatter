<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
  <title>Eduplatter</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="<?php echo base_url('media/css/materialize.css'); ?>" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="<?php echo base_url('media/css/style.css'); ?>"type="text/css" rel="stylesheet" media="screen,projection"/>
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

  <div id="index-banner" class="parallax-container indigo darken-4 z-depth-1">
    <div class="section no-pad-bot">
      <div class="container">
        <br><br>
        <h2 class="header center teal-text text-lighten-2" style="font-family: 'Courgette', cursive;">internship on platter</h2>
        <div class="row center">
          
        </div>
        <div class="row center">
          <form class="col s12 center">
            <div class="row center">
              <div class="input-field col s12 m12"></div>
              <div class="input-field col s12 m3"></div>
              <div class="input-field col s12 m6">
                <i class="material-icons prefix">search</i>
                <input id="icon_search" type="tel" class="validate">
                <label for="icon_search">Search</label>
              </div>
              <div class="input-field col s3"></div>
            </div>
          </form>
        </div>
        <br><br>

      </div>
    </div>
  </div>


  <div class="container">
    <div class="section">
      <div class="row">
        <br><br><br>
        <h4 class="header center" style="font-family: 'Roboto', sans-serif;font-weight: 500;">What We Do</h4>
        <hr>
      </div>
      <!--   Icon Section   -->
      <div class="row">

        <div class="col s12 m4">
          <div class="card hoverable">
            <br>
            <div class="card-image">
              <img src="<?php echo base_url('media/image/cv.png'); ?>" style=" width: 150px; display: block; margin: auto; width: 40%; padding-top: 30px; ">
            </div>
            <div class="card-content">
              <p>Resume or Curriculum Vitae is the first impression that you leave on your future supervisor
              or Industry HR person. We specialise in the best suited Resume/CV Making particular to the place you apply and personally decide on every single entry with precision and care.</p>
            </div>
            <br><br>
          </div>
        </div>


        <div class="col s12 m4">
          <div class="card hoverable">
            <br>
            <div class="card-image">
              <img src="<?php echo base_url('media/image/letter.png'); ?>" style=" width: 150px;  display: block; margin: auto; width: 40%; padding-top: 30px;">
            </div>
            <div class="card-content">
              <p>Letters play the role of your introduction - Cover Letter or the Recommendation. We provide <i>tailor-made</i> solutions to best suit your application, depicting your experience and field of expertise. All letters are drafted by qualified mentors with substantial experience in the field.</p>
            </div>
            <br><br>
          </div>
      </div>

        <div class="col s12 m4">
          <div class="card hoverable">
            <br>
            <div class="card-image">
              <img src="<?php echo base_url('media/image/consult.png'); ?>" style=" width: 150px;  display: block; margin: auto; width: 40%; padding-top: 30px;">
            </div>
            <div class="card-content">
              <p>Consultancy/Mentorship is our USP, consulting on what you want to do, where you want to apply, and then mentoring you through all support including applications and mailing is what we would love to work on. With the motto - <i><b>Your success is our pride </b></i>- we work relentlessly.</p>
            </div>
            <br><br>
          </div>
        </div>
      </div>
    </div>
    <br><br><br>
  </div>

  <div class=" parallax-container service hoverable">
    <div class="container" style="padding-top: 80px;">
    <div class="row">
      <div class="col s12 m4 center">
        <span class="counter" style="font-family: 'Roboto', sans-serif;font-weight: 100;display: inline-block; font-size: 60px;">150</span>
        <p class="center" >Colleges</p>
      </div>
      <div class="col s12 m4 center">
        <span class="counter" style="display: inline-block;font-family: 'Roboto', sans-serif;font-weight: 100;font-size: 60px;">10,000</span>
        <p class="center">Professor</p>
      </div>
      <div class="col s12 m4 center">
        <span class="counter" style="display: inline-block; font-family: 'Roboto', sans-serif;font-weight: 100; font-size: 60px;">1,00,000</span>
        <p class="center">Students Enrolled</p>
      </div>
    </div>
    </div>
  </div>


  <!--<div class="parallax-container">
    <div class="parallax testomial"><img src="<?php echo base_url('media/image/random1.jpg'); ?>"></div>
    <div class="container">
    <div class="row" style="padding-top: 100px;">
      <div class="col s12 m4">
        <h2 class="center " style="color: #ffffff; font-weight: 800; font-size: 80px;">400</h2>
        <p class="center">Colleges</p>
      </div>
      <div class="col s12 m4">
        <h2 class="center " style="color: #d32f2f ; font-weight: 800; font-size: 80px;">400</h2>
        <p class="center">Colleges</p>
      </div>
      <div class="col s12 m4">
        <h2 class="center" style="color: #000000; font-weight: 800; font-size: 80px;">400</h2>
        <p class="center">Colleges</p>
      </div>
    </div>
    </div>
  </div>-->


  <div class="container">
    <div class="section">
      <div class="row" >
        <br><br><br>
        <h4 class="header center" style="font-family: 'Roboto', sans-serif;font-weight: 500;">Plans</h4>
        <hr>
      </div>
      <!--   Icon Section   -->
      <div class="row">

        <div class="col s12 m4">
          <div class="card hoverable">
            <div class="card-content center">
              <h4 style="font-family: 'Roboto', sans-serif;font-weight: 100;">Basic</h4>
              <p>  Resume </p>
              <p>  Curriculum Vitae </p>        
              <p>  Consultancy/Mentorship  </p>
              <br>
              <br>
              <br>
              <br><br><br>
              <div class="line"></div>
              <h5 style="font-family: 'Roboto', sans-serif;font-weight: 300;">INR 599</h5>
            </div>
          </div>
        </div>


        <div class="col s12 m4 blue darken-1 hoverable">
          <div class="card ">
            <div class="card-content center">
              <h4 style="font-family: 'Roboto', sans-serif;font-weight: 100;">Pro</h4>
               <p>  Resume </p>
              <p>  Curriculum Vitae </p>
              <p>  Consultancy/Mentorship  </p>
              <p>  Cover Letter  </p>
              <br><br><br><br><br>
              <div class="line"></div>
              <h5 style="font-family: 'Roboto', sans-serif;font-weight: 300;">INR 999</h5>
            </div>
          </div>
      </div>

        <div class="col s12 m4 ">
          <div class="card hoverable" >
            <div class="card-content center" >
              <h4 style="font-family: 'Roboto', sans-serif;font-weight: 100;">Pro Plus</h4>
              <p>  Resume </p>
              <p>  Curriculum Vitae </p>
              <p>  Consultancy/Mentorship  </p>
              <p>  Cover Letter  </p>
              <p>  Statement of Purpose </p>
              <p>  Letters of Recommendation </p>
              <p>  Mailing Support</p><br>
              <div class="line"></div>
              <h5 style="font-family: 'Roboto', sans-serif;font-weight: 300;">INR 1199</h5>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row center">
    <a href="<?php echo base_url("index.php/refer"); ?>" class="waves-effect waves-light btn btn-large bold z-depth-1 " style=" font-weight: bolder; font-size: 20px;">Buy  Now</a>
    </div>
  </div>

<div class="row " style=" padding-top: 7%; padding-bottom: 7%;">
<div class="col m8 offset-m2" >
  <div class="carousel carousel-slider blue-grey lighten-4 transparent lighten-5 center" data-indicators="true" >
    <div class="carousel-item white-text " href="#one!" >
      <h2>First Panel</h2>
      <p class="white-text ">This is your first panel</p>
    </div>
    <div class="carousel-item white-text glass" href="#two!" >
      <h2>Second Panel</h2>
      <p class="white-text">This is your second panel</p>
    </div>
    <div class="carousel-item  white-text glass" href="#three!" >
      <h2>Third Panel</h2>
      <p class="white-text">This is your third panel</p>
    </div>
    <div class="carousel-item  white-text glass" href="#four!" >
      <h2>Fourth Panel</h2>
      <p class="white-text">This is your fourth panel</p>
    </div>
  </div>
  </div>
  </div>

  <div class="container">
    <div class="section">

      <div class="row">
        <div class="col s12 center">
          <h3><i class="mdi-content-send brown-text"></i></h3>
          <h4></h4>
          <p class="left-align light"></p>
        </div>
      </div>

    </div>
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
  <script src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script> 
  <script src="<?php echo base_url('media/js/jquery.counterup.min.js'); ?>"></script> 

  <script src="<?php echo base_url('media/js/line.js'); ?>"></script>
  <script src="<?php echo base_url('media/js/jquery.lazylinepainter-1.7.0.min.js'); ?>"></script>
<script>
    jQuery(document).ready(function( $ ) {
        $('.counter').counterUp({
            delay: 10,
            time: 1000
        });
    });
</script>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36251023-1']);
  _gaq.push(['_setDomainName', 'jqueryscript.net']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
<script type="text/javascript">
  $('.carousel.carousel-slider').carousel({full_width: true});
</script>
  </body>
</html>
