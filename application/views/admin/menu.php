<!-- top navigation -->
<div class="top_nav fixed-top">
          <div class="nav_menu">
              <div class="nav toggle">
                <a id="menu_toggle"><i class="bi bi-list h5"></i></a>
              </div>
              <nav class="nav navbar-nav">
              <ul class=" navbar-right">
                <li class="nav-item dropdown open" style="padding-left: 15px;">
                  <a href="javascript:;" class="user-profile dropdown-toggle" aria-haspopup="true" id="navbarDropdown" data-toggle="dropdown" aria-expanded="false">
                    <img src="<?php echo base_url('assets/img/profiladmin.jpg');?>" alt=""><b style="font-size:15px;"><?=$this->session->userdata('username')?></b>
                  </a>
                  <div class="dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item"  href="<?php echo site_url('admin/settings');?>"><i class="bi bi-person-fill"></i>
                    <span>Profile</span>
                    <a class="dropdown-item"  href="<?php echo site_url('admin/logout');?>"><i class="bi bi-box-arrow-right"></i>
                    <span>Log out</span>
                    </a>
                  </div>
                </li>

              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->