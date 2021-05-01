<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>E-PKL SMK BISMA | Log in</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="<?php echo base_url();?>dist/bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url();?>dist/dist/css/AdminLTE.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?php echo base_url();?>dist/plugins/iCheck/square/blue.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body class="hold-transition login-page" style="background-color:#ffffff">
  <div class="login-box" style="border:1px solid white; padding:30px;-webkit-box-shadow: 5px 5px 15px 5px rgba(0,0,0,0.4); 
box-shadow: 5px 5px 15px 5px rgba(0,0,0,0.4);">
    <div class="login-logo">
      <img src="<?php echo base_url();?>dist/images/logo.jpeg" style="width: 200px ">
      <!-- <a href="../../index2.html"><br><b>POSKO </b>TC 2017</a> -->
    </div>
    <!-- /.login-logo -->
  <form action="<?php echo base_url()?>admin/login_proses" method="post">
    <div class="login-box-body" >
    <p class="login-box-msg">SiAlin</p>
    <p class="login-box-msg">LOGIN</p>
    <center>
        <span style="font-weight:bold">Masukan Username dan Password</span>
    </center>
      <div class="form-group has-feedback">
        <input type="text" id="username" class="form-control" placeholder="Masukan Username" name="username">
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" id="password" class="form-control" placeholder="Kata Sandi" name="password">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">
        <div class="col-xs-4">
          <button id="masuk" class="btn btn-primary btn-block btn-flat">Masuk</button>
        </div>
      </div>
    </div>
  </form>
  <div class="text-center">
  <P>SMK BISMA Kersana</P>
  <?php 
	session_destroy(); ?>
  </div>
  <div class="text-center">
    <!-- <a href="<?php echo base_url();?>home">Go To Website</a> -->
  </div>
  </div>

  <!-- jQuery 2.2.3 -->
  <script src="<?php echo base_url();?>dist/plugins/jQuery/jquery-2.2.3.min.js"></script>
  <!-- Bootstrap 3.3.6 -->
  <script src="<?php echo base_url();?>dist/bootstrap/js/bootstrap.min.js"></script>
  <!-- iCheck -->
  <script src="<?php echo base_url();?>dist/plugins/iCheck/icheck.min.js"></script>
  
</body>
</html>