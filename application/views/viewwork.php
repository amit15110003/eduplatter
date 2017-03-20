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
<div class="container">
<?php
foreach($query as $row)
 {?>
   <div class="row ">
      <div class="col s12 m12">
        <div class="card-panel  grey lighten-5 hoverable">
          <span  style=" font-size: 18px; font-weight: bold;  "><?php echo $row->project; ?>
          </span><hr>
          <p > <?php echo $row->supervisor; ?></p>
          <p > <?php echo $row->position; ?></p>
          <p > <?php echo $row->duration; ?></p>
          <a class="btn-floating btn-large waves-effect waves-light red right" href="<?php echo base_url().'index.php/work/Deletework/'.$row->id; ?>"><i class="material-icons">delete</i></a>
        </div>
      </div>
    </div>
<?php }?>
</div>
<br><br>
<div class="divider"></div>
</div>