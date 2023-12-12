<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	  <!-- Logo Favicon -->
    <link href="<?php echo base_url('assets/img/logo_dzahin_bakery.png');?>" rel="icon" Type="text/ico">


    <!-- Ini dari colorlib -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url('assets/admin/colorlib/fonts/icomoon/style.css');?>">

    <link rel="stylesheet" href="<?php echo base_url('assets/admin/colorlib/css/owl.carousel.min.css');?>">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo base_url('assets/admin/colorlib/css/bootstrap.min.css');?>">
    
    <!-- Style -->
    <link rel="stylesheet" href="<?php echo base_url('assets/admin/colorlib/css/style.css');?>">


    <!-- /Ini dari colorlib -->
      <title>Dashboard Admin | Dzahin Bakery</title>
        <!-- Bootstrap -->
        <link rel="stylesheet" href="<?php echo base_url('assets/admin/vendors/bootstrap/css/bootstrap.min.css');?>">
        <!-- BootStrap Icon -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
        <!-- NProgress -->
        <link rel="stylesheet" href="<?php echo base_url('assets/admin/vendors/nprogress/nprogress.css');?>">
        <!-- iCheck -->
        <link rel="stylesheet" href="<?php echo base_url('assets/admin/vendors/iCheck/skins/flat/green.css');?>">
        <!-- bootstrap-progressbar -->
        <link rel="stylesheet" href="<?php echo base_url('assets/admin/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css');?>">
        <!-- JQVMap -->
        <link rel="stylesheet" href="<?php echo base_url('assets/admin/vendors/jqvmap/jqvmap.min.css');?>">
        <!-- bootstrap-daterangepicker -->
        <link rel="stylesheet" href="<?php echo base_url('assets/admin/vendors/bootstrap-daterangepicker/daterangepicker.css');?>">
    
        <!-- Custom Theme Style -->
        <link rel="stylesheet" href="<?php echo base_url('assets/admin/build/css/custom.min.css');?>">

        <link rel="stylesheet" href="<?php echo base_url('assets/admin/build/css/style.css');?>">
        
        
  </head>

      <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col position-fixed" id="sticky-sidebar">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;" >
              <a href="<?php echo site_url('adminpanel/dashboard');?>" class="site_title"><img src="<?php echo base_url('assets/img/logo_dzahin_bakery.png');?>" width="50"> <span>Dzahin Bakery</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="<?php echo base_url('assets/img/profiladmin.jpg');?>" alt="Profil Anda" class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Selamat Datang,</span>
                <h2><?=$this->session->username?></h2>
              </div>
            </div>
            <!-- /menu profile quick info -->
            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                  <li><a href="<?php echo site_url('admin');?>"><i class="bi bi-house-fill h5"></i> Dashboard </a></li>
                  <li><a href="<?php echo site_url('admin/produk');?>"><i class="bi bi-archive-fill h5"></i> Produk </a></li>
                  <li><a href="<?php echo site_url('admin/kategori');?>"><i class="bi bi-tags-fill h5"></i> Kategori </a></li>
                  <li><a href="<?php echo site_url('admin/pesanan');?>"><i class="bi bi-cart-fill h5"></i> Pesanan </a></li>
                  <li><a href="<?php echo site_url('admin/penjualan');?>"><i class="bi bi-bar-chart-line-fill h5"></i> Laporan Penjualan </a></li>
                </ul>
              </div>

            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>