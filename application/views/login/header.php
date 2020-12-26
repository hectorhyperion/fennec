
<!DOCTYPE HTML>
<html>
<head>
<title>Fennec/login</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Modern Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
 <!-- Bootstrap Core CSS -->
<link href="<?php echo base_url('assets/css/bootstrap.min.css')?>" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="<?php echo base_url('assets/css/style.css')?>" rel='stylesheet' type='text/css' />
<link href="assets/css/font-awesome.css" rel="stylesheet"> 
<!-- jQuery -->
<script src="<?php echo base_url('assets/js/jquery.min.js')?>"></script>
<!----webfonts--->
<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'>
<!---//webfonts--->  
<!-- Bootstrap Core JavaScript -->
<script src="<?php echo base_url('assets/js/bootstrap.min.js')?>"></script>
</head>
<body id="login">
  <div class="login-logo">
    <a href="#"><img src="<?php echo base_url('images/logo.png')?>" alt=""/></a>
  </div>
  <h2 class="form-heading"> Fennec/login</h2>
  <div class="app-cam">
    <?php if($this->session->flashdata('login_failed'))
          {
            ?>
          <div class="alert alert-danger" role="alert">
            <?php
            echo $this->session->flashdata('login_failed');
            ?>
          </div>
          <?php 

            }


           ?>