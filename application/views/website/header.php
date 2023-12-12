<!DOCTYPE html>
<html lang="en">

<head>
    <title behavior="scroll">Dzahin Bakery | Memanggang sejak selamanya.</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="format-detection" content="telephone=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="author" content="">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/user/css/bootstrap.min.css');?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/user/css/style.css');?>">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400;500;600;700&family=Poppins:wght@200;300;400;500&display=swap" rel="stylesheet">

    <!-- Detail Produk -->
    <link href="<?php echo base_url('assets/user/css/style_detail.css');?>" rel="stylesheet">
    
    <!-- Cart -->
    <link href="<?php echo base_url('assets/user/css/style_cart.css');?>" rel="stylesheet">

    <!-- Bootstrap Icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">

    
	<!-- Logo Favicon -->
    <link href="<?php echo base_url('assets/img/logo_dzahin_bakery.png');?>" rel="icon" Type="text/ico">

    <!-- Libraries Stylesheet -->
    <link href="<?php echo base_url('assets/user/lib/owlcarousel/assets/owl.carousel.min.css');?>" rel="stylesheet">

    <script src="<?php echo base_url('assets/user/js/modernizr.js');?>"></script>

    <!-- Sweet Alert -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>

<body class="bg-body" data-bs-spy="scroll" data-bs-target="#navbar" data-bs-root-margin="0px 0px -40%"
  data-bs-smooth-scroll="true" tabindex="0">
  <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
    <symbol id="search" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
      <title>Search</title>
      <path fill="currentColor"
        d="M19 3C13.488 3 9 7.488 9 13c0 2.395.84 4.59 2.25 6.313L3.281 27.28l1.439 1.44l7.968-7.969A9.922 9.922 0 0 0 19 23c5.512 0 10-4.488 10-10S24.512 3 19 3zm0 2c4.43 0 8 3.57 8 8s-3.57 8-8 8s-8-3.57-8-8s3.57-8 8-8z" />
    </symbol>
    <symbol xmlns="http://www.w3.org/2000/svg" id="user" viewBox="0 0 16 16">
      <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3Zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z" />
    </symbol>
    <symbol xmlns="http://www.w3.org/2000/svg" id="cart" viewBox="0 0 16 16">
      <path
        d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
    </symbol>
    <symbol xmlns="http://www.w3.org/2000/svg" id="arrow-left" viewBox="0 0 32 32">
      <path fill="currentColor"
        d="m13.281 6.781l-8.5 8.5l-.687.719l.687.719l8.5 8.5l1.438-1.438L7.938 17H28v-2H7.937l6.782-6.781z" />
    </symbol>
    <symbol xmlns="http://www.w3.org/2000/svg" id="arrow-right" viewBox="0 0 32 32">
      <path fill="currentColor"
        d="M18.719 6.781L17.28 8.22L24.063 15H4v2h20.063l-6.782 6.781l1.438 1.438l8.5-8.5l.687-.719l-.687-.719z" />
    </symbol>
    <symbol xmlns="http://www.w3.org/2000/svg" id="shipping-fast" viewBox="0 0 32 32">
      <path fill="currentColor"
        d="M0 6v2h19v15h-6.156c-.446-1.719-1.992-3-3.844-3c-1.852 0-3.398 1.281-3.844 3H4v-5H2v7h3.156c.446 1.719 1.992 3 3.844 3c1.852 0 3.398-1.281 3.844-3h8.312c.446 1.719 1.992 3 3.844 3c1.852 0 3.398-1.281 3.844-3H32v-8.156l-.063-.157l-2-6L29.72 10H21V6zm1 4v2h9v-2zm20 2h7.281L30 17.125V23h-1.156c-.446-1.719-1.992-3-3.844-3c-1.852 0-3.398 1.281-3.844 3H21zM2 14v2h6v-2zm7 8c1.117 0 2 .883 2 2s-.883 2-2 2s-2-.883-2-2s.883-2 2-2zm16 0c1.117 0 2 .883 2 2s-.883 2-2 2s-2-.883-2-2s.883-2 2-2z" />
    </symbol>
    <symbol xmlns="http://www.w3.org/2000/svg" id="shopping-cart" viewBox="0 0 32 32">
      <path fill="currentColor"
        d="M5 7c-.55 0-1 .45-1 1s.45 1 1 1h2.219l2.625 10.5c.222.89 1.02 1.5 1.937 1.5H23.25c.902 0 1.668-.598 1.906-1.469L27.75 10H11l.5 2h13.656l-1.906 7H11.781L9.156 8.5A1.983 1.983 0 0 0 7.22 7zm17 14c-1.645 0-3 1.355-3 3s1.355 3 3 3s3-1.355 3-3s-1.355-3-3-3zm-9 0c-1.645 0-3 1.355-3 3s1.355 3 3 3s3-1.355 3-3s-1.355-3-3-3zm0 2c.563 0 1 .438 1 1c0 .563-.438 1-1 1c-.563 0-1-.438-1-1c0-.563.438-1 1-1zm9 0c.563 0 1 .438 1 1c0 .563-.438 1-1 1c-.563 0-1-.438-1-1c0-.563.438-1 1-1z" />
    </symbol>
    <symbol xmlns="http://www.w3.org/2000/svg" id="gift" viewBox="0 0 32 32">
      <path fill="currentColor"
        d="M12 5c-1.645 0-3 1.355-3 3c0 .352.074.684.188 1H4v6h1v13h22V15h1V9h-5.188A2.95 2.95 0 0 0 23 8c0-1.645-1.355-3-3-3c-1.75 0-2.938 1.328-3.719 2.438c-.105.148-.187.292-.281.437c-.094-.145-.176-.29-.281-.438C14.938 6.329 13.75 5 12 5zm0 2c.625 0 1.438.672 2.063 1.563c.152.218.128.23.25.437H12c-.566 0-1-.434-1-1c0-.566.434-1 1-1zm8 0c.566 0 1 .434 1 1c0 .566-.434 1-1 1h-2.313c.122-.207.098-.219.25-.438C18.563 7.673 19.375 7 20 7zM6 11h20v2h-9v-1h-2v1H6zm1 4h18v11h-8V16h-2v10H7z" />
    </symbol>
    <symbol xmlns="http://www.w3.org/2000/svg" id="return" viewBox="0 0 32 32">
      <path fill="currentColor"
        d="M16 3C8.832 3 3 8.832 3 16s5.832 13 13 13s13-5.832 13-13h-2c0 6.086-4.914 11-11 11S5 22.086 5 16S9.914 5 16 5c3.875 0 7.262 1.984 9.219 5H20v2h8V4h-2v3.719C23.617 4.844 20.02 3 16 3z" />
    </symbol>
    <symbol xmlns="http://www.w3.org/2000/svg" id="quote" viewBox="0 0 24 24">
      <path fill="currentColor" d="m15 17l2-4h-4V6h7v7l-2 4h-3Zm-9 0l2-4H4V6h7v7l-2 4H6Z" />
    </symbol>
    <symbol xmlns="http://www.w3.org/2000/svg" id="nav-icon" viewBox="0 0 16 16">
      <path
        d="M14 10.5a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0 0 1h3a.5.5 0 0 0 .5-.5zm0-3a.5.5 0 0 0-.5-.5h-7a.5.5 0 0 0 0 1h7a.5.5 0 0 0 .5-.5zm0-3a.5.5 0 0 0-.5-.5h-11a.5.5 0 0 0 0 1h11a.5.5 0 0 0 .5-.5z" />
    </symbol>
    <symbol xmlns="http://www.w3.org/2000/svg" id="close" viewBox="0 0 16 16">
      <path
        d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8 2.146 2.854Z" />
    </symbol>
    <symbol xmlns="http://www.w3.org/2000/svg" id="navbar-icon" viewBox="0 0 16 16">
      <path
        d="M14 10.5a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0 0 1h3a.5.5 0 0 0 .5-.5zm0-3a.5.5 0 0 0-.5-.5h-7a.5.5 0 0 0 0 1h7a.5.5 0 0 0 .5-.5zm0-3a.5.5 0 0 0-.5-.5h-11a.5.5 0 0 0 0 1h11a.5.5 0 0 0 .5-.5z" />
    </symbol>
    <symbol xmlns="http://www.w3.org/2000/svg" id="instagram" width="16" height="16" fill="currentColor"
      class="bi bi-instagram" viewBox="0 0 16 16">
      <path
        d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z" />
    </symbol>
    <symbol xmlns="http://www.w3.org/2000/svg" id="whatsapp" width="16" height="16" fill="currentColor"
      class="bi bi-whatsapp" viewBox="0 0 16 16">
      <path
        d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z" />
    </symbol>
  </svg>


  <!-- Header Start -->
  <header id="header" class="site-header text-black">
    <nav id="header-nav" class="navbar navbar-expand-lg px-3 mb-3 top-nav fixed-top" style="background-color: rgba(246, 245, 242, 0.9);">
      <div class="container-fluid">
        <a class="navbar-brand" href="<?php echo site_url('home');?>">
          <img src="<?php echo base_url('assets/img/teslogo.png');?>" class="logo">
        </a>
        <button class="navbar-toggler d-flex d-lg-none order-3 p-2" type="button" data-bs-toggle="offcanvas"
          data-bs-target="#bdNavbar" aria-controls="bdNavbar" aria-expanded="false" aria-label="Toggle navigation">
          <svg class="navbar-icon" width="50" height="50">
            <use xlink:href="#navbar-icon"></use>
          </svg>
        </button>
        <div class="offcanvas offcanvas-end" tabindex="-1" id="bdNavbar" aria-labelledby="bdNavbarOffcanvasLabel">
          <div class="offcanvas-header px-4 pb-0">
            <a class="navbar-brand" href="home.html">
              <img src="images/main-logo.png" class="logo">
            </a>
            <button type="button" class="btn-close btn-close-black" data-bs-dismiss="offcanvas" aria-label="Close"
              data-bs-target="#bdNavbar"></button>
          </div>
          <div class="offcanvas-body">
            <ul id="navbar" class="navbar-nav text-uppercase justify-content-end align-items-center flex-grow-1 pe-3">
              <li class="nav-item">
                <a class="nav-link me-4" href="<?php echo site_url('home');?>">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link me-4" href="<?php echo site_url('home/produk');?>">Produk</a>
              </li>
              <li class="nav-item">
                <a class="nav-link me-4" href="<?php echo site_url('home/about');?>">About Us</a>
              </li>

              <?php if (empty($this->session->userdata('User'))) { ?>
              <li class="nav-item">
                <a type="button" data-toggle="modal" data-target="#loginform" class="btn btn-primary">LOGIN</a>
              </li>
              <?php } else {?>


              <li class="nav-item">
                <div class="user-items ps-5">
                  <ul class="d-flex justify-content-end list-unstyled">

                    <li class="nav-item">
                      <a class="nav-link" href="<?php echo site_url('home/cart');?>">
                        <svg class="cart" width="18" height="18">
                          <use xlink:href="#cart"></use>
                        </svg>
                        <?php if ($this->cart->contents()){ ?>
                        <span class="position-absolute translate-middle p-1 rounded-circle badge badge-secondary badge-pill text-dark"><?php echo $this->cart->total_items(); ?></span> 
                        <span class="visually-hidden">New alerts</span>
                        <?php }?>
                      </a>
                    </li>

                    <li class="nav-item dropdown me-4">
                      <a class="nav-link dropdown-toggle" id="dropdownPages" href="#" data-bs-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        <svg class="user" width="18" height="18">
                          <use xlink:href="#user"></use>
                        </svg>
                      </a>
                      <ul class="dropdown-menu list-unstyled" aria-labelledby="dropdownPages">
                        <li>
                          <a href="<?php echo site_url('home/profil');?>" class="dropdown-item">Profile</a>
                        </li>
                        <li>
                          <a href="<?php echo site_url('home/pesanan');?>" class="dropdown-item item-anchor">Pesanan</a>
                        </li>
                        <li>
                          <a href="<?php echo site_url('home/logout');?>" class="dropdown-item item-anchor">Logout</a>
                        </li>
                      </ul>
                    </li>
                  </ul>
                </div>
              </li>
              <?php } ?>
            </ul>
          </div>
        </div>
      </div>
    </nav>
          <!-- Modal Login-->
          <div class="modal fade" id="loginform" data-keyboard="false" role="dialog" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered">
              <div class="modal-content">
                <div class="modal-body">
                  <div class="row align-items-center">
                    <div class="col-md-6">
                      <h1>LOGIN</h1>
                      <p class="text-medium-emphasis">Sign In to your account</p>
                            <form action="<?php echo site_url('home/login_action'); ?>" method="post" id="login" autocomplete="off">
                              <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                  <span class="input-group-text" id="basic-addon1"><i class="bi bi-person-fill"></i></span>
                                </div>
                                <input name="username" type="text" value="" class="form-control" placeholder="username" aria-label="Username" aria-describedby="basic-addon1" />
                              </div>
                              <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                  <span class="input-group-text" id="basic-addon1"><i class="bi bi-key-fill"></i></span>
                                </div>
                                <input name="password" type="password" class="form-control" required="true" placeholder="password" aria-label="password" aria-describedby="basic-addon1" />
                              </div>
                                <div class="row">
                                  <div class="col-6">
                                    <button class="btn btn-primary px-4" type="submit">Sign In</button>
                                  </div>
                                  <div class="col-6 text-end">
                                    <button class="btn btn-link px-0" type="button" data-toggle="modal" data-dismiss="modal" data-target="#register">Register Now!</button>
                                  </div>
                                </div><br>
                                <div class="row text-center">
                                  <div class="col-12">
                                    <p class="text-medium-emphasis">or Sign in with</p>
                                    <button class="btn btn-primary" disabled><a href=""><svg style="padding:5px;" xmlns="http://www.w3.org/2000/svg" height="2em" viewBox="0 0 488 512"><path d="M488 261.8C488 403.3 391.1 504 248 504 110.8 504 0 393.2 0 256S110.8 8 248 8c66.8 0 123 24.5 166.3 64.9l-67.5 64.9C258.5 52.6 94.3 116.6 94.3 256c0 86.5 69.1 156.6 153.7 156.6 98.2 0 135-70.4 140.8-106.9H248v-85.3h236.1c2.3 12.7 3.9 24.9 3.9 41.4z"/></svg></a></button>
                                    <button class="btn btn-primary" disabled><a href=""><svg style="padding:5px;" xmlns="http://www.w3.org/2000/svg" height="2em" viewBox="0 0 512 512"><path d="M504 256C504 119 393 8 256 8S8 119 8 256c0 123.78 90.69 226.38 209.25 245V327.69h-63V256h63v-54.64c0-62.15 37-96.48 93.67-96.48 27.14 0 55.52 4.84 55.52 4.84v61h-31.28c-30.8 0-40.41 19.12-40.41 38.73V256h68.78l-11 71.69h-57.78V501C413.31 482.38 504 379.78 504 256z"/></svg></a></button>
                                  </div>
                                </div>
                            </form>
                    </div>
                    <div class="col-md-6">
                        <img class="card-img img-fluid" src="<?php echo base_url('assets/img/tes.png');?>" alt="Card image">
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- /Modal Login-->

          <!-- Modal Register -->
          <div class="modal fade" id="register" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered">
              <div class="modal-content">
                <div class="modal-body">
                  <div class="row align-items-center text-center">
                    <div class="col-md-10 mx-auto">
                      <h1>Register</h1>
                      <p class="text-medium-emphasis">Create your account</p>
                            <form action="<?php echo site_url('home/register_action'); ?>" method="post" id="register" autocomplete="off">
                              <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                  <span class="input-group-text" id="basic-addon1"><i class="bi bi-person-fill"></i></span>
                                </div>
                                <input name="username" type="text" value="" class="form-control" placeholder="username" aria-label="Username" required="true" aria-describedby="basic-addon1" />
                              </div>
                              <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                  <span class="input-group-text" id="basic-addon1"><i class="bi bi-key-fill"></i></span>
                                </div>
                                <input name="password" type="password" value="" class="form-control" id="password" placeholder="password" required="true" aria-label="password" aria-describedby="basic-addon1" />
                              </div>
                              <div class="row">
                                  <div class="col-6 text-start">
                                    <div class="input-group mb-3">
                                      <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1"><i class="bi bi-person-fill"></i></span>
                                      </div>
                                      <input name="name" type="text" value="" class="form-control" placeholder="nama" aria-label="Username" required="true" aria-describedby="basic-addon1" />
                                    </div>
                                    <div class="input-group mb-3">
                                      <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1"><i class="bi bi-envelope-fill"></i></span>
                                      </div>
                                      <input name="email" type="email" value="" class="form-control" placeholder="email" aria-label="Username" required="true" aria-describedby="basic-addon1" />
                                    </div>
                                  </div>
                                
                                <div class="col-6 text-end">
                                  <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                      <span class="input-group-text" id="basic-addon1"><i class="bi bi-telephone-fill"></i></span>
                                    </div>
                                    <input name="phone" type="text" value="" class="form-control" placeholder="nomor telepon" aria-label="Username" required="true" aria-describedby="basic-addon1" />
                                  </div>
                                  <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                      <span class="input-group-text" id="basic-addon1"><i class="bi bi-map-fill"></i></span>
                                    </div>
                                    <input name="address" type="text" value="" class="form-control" placeholder="alamat" aria-label="Username" required="true" aria-describedby="basic-addon1" />
                                  </div>
                                </div>
                              </div>
                                <div class="row">
                                  <div class="col-6 text-start">
                                    <button class="btn btn-primary px-4" type="submit">Sign Up</button>
                                  </div>
                                </div>
                            </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- /Modal Register -->

  </header>
  <!-- Header End -->

  
