<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Trainer Keilmiahan ITS</title>

  <!-- core CSS -->
  <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>assets/css/font-awesome.min.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>assets/css/animate.min.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>assets/css/prettyPhoto.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>assets/css/main.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>assets/css/responsive.css" rel="stylesheet">
  <!--[if lt IE 9]>
  <script src="js/html5shiv.js"></script>
  <script src="js/respond.min.js"></script>
  <![endif]-->
  <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/images/ico/favicon.ico">
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo base_url(); ?>assets/images/ico/apple-touch-icon-144-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo base_url(); ?>assets/images/ico/apple-touch-icon-114-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo base_url(); ?>assets/images/ico/apple-touch-icon-72-precomposed.png">
  <link rel="apple-touch-icon-precomposed" href="<?php echo base_url(); ?>assets/images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body class="homepage">
  <nav class="navbar navbar-inverse" role="banner" style="background-color: #434354;">
    <div class="container">
      <div class="navbar-header" >
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="<?php echo base_url(); ?>"><img src="<?php echo base_url(); ?>assets/images/Logo_Navigator.png" alt="logo" width=125px;></a>
      </div>

      <div class="collapse navbar-collapse navbar-right">
        <ul class="nav navbar-nav">
          <li <?php if($aktif == 'index') echo "class='active'>" ?> ><a href="javascript:void(0)" onclick="location.href='<?php echo site_url("home"); ?>';">Home</a></li>
          <li <?php if($aktif == 'about') echo "class='active'>" ?> ><a href="javascript:void(0)" onclick="location.href='<?php echo site_url("about"); ?>';">About Us</a></li>
          <li <?php if($aktif == 'anggota') echo "class='active'>" ?> ><a href="javascript:void(0)" onclick="location.href='<?php echo site_url("anggota"); ?>';">Anggota</a></li>
          <li <?php if($aktif == 'sop') echo "class='active'>" ?> ><a href="javascript:void(0)" onclick="location.href='<?php echo site_url("sop"); ?>';">SOP</a></li>
          <li <?php if($aktif == 'berita') echo "class='active'>" ?> ><a href="javascript:void(0)" onclick="location.href='<?php echo site_url("berita/index/all/1/3"); ?>';">Berita</a></li>
          <li <?php if($aktif == 'artikel') echo "class='active'>" ?> ><a href="javascript:void(0)" onclick="location.href='<?php echo site_url("artikel/index/all/1/3"); ?>';">Artikel</a></li>
          <li <?php if($aktif == 'lomba') echo "class='active'>" ?> ><a href="javascript:void(0)" onclick="location.href='<?php echo site_url("lomba/index/all/1/3"); ?>';">Info Lomba</a></li>
          <li <?php if($aktif == 'registrasi') echo "class='active'>" ?><?php if($authenticated == 0) { ?> ><a href="javascript:void(0)" onclick="location.href='<?php echo site_url("registrasi"); ?>';">Register</a></li><?php } ?>
          <li <?php if($authenticated == 0) { ?> ><a href="javascript:void(0)" onclick="location.href='<?php echo site_url("loginform"); ?>';">Login</a></li><?php } ?>
          <li <?php if($authenticated != 0) { ?> ><a href="javascript:void(0)" onclick="location.href='<?php echo site_url("logout"); ?>';" style="background-color:rgb(200,200,200); color:black;">Logout</a></li><?php } ?>
          <li <?php if($authenticated == 3) { ?> ><a href="javascript:void(0)" onclick="location.href='<?php echo site_url("user/data"); ?>';" style="background-color:rgb(200,200,200); color:black;">Pengguna</a></li><?php } ?>
          <li <?php if($authenticated == 2) { ?> ><a href="javascript:void(0)" onclick="location.href='<?php echo site_url("trainer/list"); ?>';" style="background-color:rgb(200,200,200); color:black;">Admin</a></li><?php } ?>
          <li <?php if($authenticated == 1) { ?> ><a href="javascript:void(0)" onclick="location.href='<?php echo site_url("trainer/list"); ?>';" style="background-color:rgb(200,200,200); color:black;">Trainer</a></li><?php } ?>
        </ul>
      </div>
    </div><!--/.container-->
  </nav><!--/nav-->

</header><!--/header-->
