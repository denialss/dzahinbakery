<!DOCTYPE html>
<!--
* CoreUI - Free Bootstrap Admin Template
* @version v4.2.2
* @link https://coreui.io/product/free-bootstrap-admin-template/
* Copyright (c) 2023 creativeLabs Łukasz Holeczek
* Licensed under MIT (https://github.com/coreui/coreui-free-bootstrap-admin-template/blob/main/LICENSE)
-->

<html lang="en">
  <head>
    <base href="./">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="description" content="CoreUI - Open Source Bootstrap Admin Template">
    <meta name="author" content="Łukasz Holeczek">
    <meta name="keyword" content="Bootstrap,Admin,Template,Open,Source,jQuery,CSS,HTML,RWD,Dashboard">
    <!-- Logo Favicon -->
    <link href="<?php echo base_url('assets/img/logo_dzahin_bakery.png');?>" rel="icon" Type="text/ico">
    <title>Login Admin - Dzahin Bakery</title>
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous" />
    <!-- font awesome  -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous" />
  </head>
  
  <body>
    <div class="bg-light min-vh-100 d-flex flex-row align-items-center">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-8">
            <div class="card-group d-block d-md-flex row">
              <div class="card col-md-7 p-4 mb-0">
                <div class="card-body">
                  <h1>Login</h1>
                  <p class="text-medium-emphasis">Sign In to your account</p>
                    <form action="<?php echo site_url('admin/login_action'); ?>" method="post" id="login" autocomplete="off">
                    <div class="input-group mb-3">
                      <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1"><i class="fas fa-user"></i></span>
                      </div>
                      <input name="username" type="text" value="" class="form-control" placeholder="username" aria-label="Username" aria-describedby="basic-addon1" />
                    </div>
                    <div class="input-group mb-3">
                      <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1"><i class="fas fa-lock"></i></span>
                      </div>
                      <input name="password" type="password" value="" class="form-control" id="password" placeholder="password" required="true" aria-label="password" aria-describedby="basic-addon1" />
                      <div class="input-group-append">
                        <span class="input-group-text" onclick="password_show_hide();">
                          <i class="fas fa-eye" id="show_eye"></i>
                          <i class="fas fa-eye-slash d-none" id="hide_eye"></i>
                        </span>
                      </div>
                    </div>
                      <div class="row">
                        <div class="col-6">
                          <button class="btn btn-primary px-4" type="submit">Login</button>
                        </div>
                        <div class="col-6 text-end">
                          <button class="btn btn-link px-0" type="button" disabled>Forgot password?</button>
                        </div>
                      </div>
				            </form>
                </div>
              </div>
              <div class="card">
                <img class="card-img" src="<?php echo base_url('assets/img/tes.png');?>" alt="Card image">
              </div>


            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Login Script-->
    <script src="<?php echo base_url('assets/admin/build/js/login.js');?>"></script>
  </body>
</html>