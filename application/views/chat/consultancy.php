<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="<?php echo base_url('media/css/materialize.css'); ?>" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="<?php echo base_url('media/css/home.css'); ?>" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="<?php echo base_url('media/css/chat.css'); ?>" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="https://fonts.googleapis.com/css?family=Courgette" rel="stylesheet">
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="<?php echo base_url('media/js/materialize.js'); ?>"></script>
  <script src="<?php echo base_url('media/js/init.js'); ?>"></script>
</head>
<body>
<div class="main blue lighten-5" style=" margin-top: -40px;" >
<?php $attributes = array("name" => "education");
      echo form_open("consultancy/index", $attributes);?>
  <div class="chat" style=" width: 100%;">
  <div class="container" style="padding-bottom: 100px;padding-top: 50px;">
  <?php
    foreach($query as $row)
     {?> 
    <?php  if($row->status=='user'){
              ?>
        <div class="row">
        <div class="col s8 m8">
         <div class="card-panel hoverable"><?php  echo $row->msg;?> 
          </div></div></div><?php }?>

          <?php  if($row->status=='admin'){
              ?>
         <div class="row">
         <div class="col s4 m4"></div>
        <div class="col s8 m8">
         <div class="card-panel hoverable"><?php  echo $row->msg;?> 
          </div></div></div>
          <?php }}?>
           
          </div>

     <div class="card-panel hoverable bottom indigo darken-4" style="margin-bottom: 0px; position:fixed;bottom:0px;width:100%;height: 90px;">
        <div  class="row">
        <div class="input-field col s12 hide ">
          <input   value="<?php echo $this->session->userdata('uid'); ?>" id="first_name" type="text" class="validate" name="uid">
          <label for="first_name"></label>
        </div>
          <textarea  style="background-color: #fff; height: 60px; padding: 10px;" class="col m8 s10" name="msg"></textarea>
          <div class="col m1 s2">
          <button class="btn waves-effect waves-light" type="submit" name="submit">Send
          <i class="material-icons right">send</i>
          </button>
          </div>
        </div>      
     </div>     
  </div>
  <?php echo form_close(); ?>
</div>

