<!-- Modal Lihat Detail -->
                                         <div class="modal fade" id="detailproduk<?php echo $val->idProduk ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                                            <div class="modal-dialog modal-lg" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLongTitle">Detail Produk</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="mx-auto d-block">
                                                            <img src="<?php echo base_url()?>upload/<?=$val->foto?>" alt="Avatar" class="image img-fluid">
                                                            <br><br>
                                                            <div class="row">
                                                                <div class="col-8 col-sm-6">
                                                                <a class="text" style="font-size:20px">Nama produk</a>
                                                                </div>
                                                                <div class="col-4 col-sm-6">
                                                                <a class="text" style="font-size:20px"><?php echo $val->namaProduk; ?></a>
                                                                </div>
                                                            </div>
                                                            <hr>
                                                            <div class="row">
                                                                <div class="col-8 col-sm-6">
                                                                <a class="text" style="font-size:20px">Kategori</a>
                                                                </div>
                                                                <div class="col-4 col-sm-6">
                                                                <a class="text" style="font-size:20px" ><?php echo $val->namaKategori; ?></a>
                                                                </div>
                                                            </div>
                                                            <hr>
                                                            <div class="row">
                                                                <div class="col-8 col-sm-6">
                                                                <a class="text" style="font-size:20px">Stok tersedia</a>
                                                                </div>
                                                                <div class="col-4 col-sm-6">
                                                                <a class="text" style="font-size:20px"><?php echo $val->stok; ?> pcs</a>
                                                                </div>
                                                            </div>
                                                            <hr>
                                                            <div class="row">
                                                                <div class="col-8 col-sm-6">
                                                                <a class="text" style="font-size:20px">Deskripsi produk</a>
                                                                </div>
                                                                <div class="col-4 col-sm-6">
                                                                <a class="text" style="font-size:20px"><?php echo $val->deskripsi_produk; ?></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /Modal Lihat Detail -->
                                      


                                        public function edit()
    {
        $id_produk = $this->input->post('id_produk');
        $id_kategori = $this->input->post('id_kategori');
        $nama_produk = $this->input->post('nama_produk');
        $harga_produk = $this->input->post('harga_produk');
        $stok = $this->input->post('stok');
        $berat_produk = $this->input->post('berat_produk');
        $warna_produk = $this->input->post('warna_produk');
        $ukuran_produk = $this->input->post('ukuran_produk');
        // $foto_produk = $this->input->post('foto_produk');
        $deskripsi_produk = $this->input->post('deskripsi_produk');

        $data_produk = array(
            'nama_produk' => $nama_produk,
            'id_kategori' => $id_kategori,
            'harga_produk' => $harga_produk,
            'stok' => $stok,
            'berat_produk' => $berat_produk,
            'warna_produk' => $warna_produk,
            'ukuran_produk' => $ukuran_produk,
            'deskripsi_produk' => $deskripsi_produk
        );

        $config['upload_path'] = '.\assets\foto_produk';
        $config['allowed_types'] = 'jpg|png|jpeg|PNG';
        $this->load->library('upload', $config);
        if ($this->upload->do_upload('foto_produk')) {
            $data_file = $this->upload->data();
            $data_foto = array(
                'id_produk' => $id_produk,
                'foto_produk' => $data_file['file_name']
            );
        }
        //Buat hapus foto lama di folder foto_produk (blm selesai)
        //unlink("assets/foto_produk".$data_file['file_name']);

        $this->Madmin->update_entry('id_produk', $id_produk, $data_produk, $data_foto);
        redirect('produk');
    }


    //punya anan
    public function edit_produk($id)
      {
        $id = $this->input->post('idProduk');
        $foto = $this->input->post('foto');
        $idKategori = $this->input->post('idKategori');
        $namaProduk = $this->input->post('namaProduk');
        $stok = $this->input->post('stok');
        $harga = $this->input->post('harga');
        $deskripsi_produk = $this->input->post('deskripsi_produk');
        $config['upload_path'] = './upload/';
        $config['allowed_types'] = 'jpg|png|jpeg';
        $this->load->library('upload', $config);

        if ($this->upload->do_upload('foto')) {
          $data_file = $this->upload->data();
          $dataUpdate = array(
            'idKategori' => $idKategori,
            'foto' => $data_file['file_name'],
            'namaProduk' => $namaProduk,
            'stok' => $stok,
            'harga' => $harga,
            'deskripsi_produk' => $deskripsi_produk
          );
          $this->Madmin->update('tbl_produk', $dataUpdate, 'idProduk', $id);
          redirect(base_url("admin/produk" .$idProduk));
        } else {
          redirect("admin/produk , $error");
        }
      }

      Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis sunt, quam commodi praesentium eligendi mollitia dignissimos nostrum fuga minus! Asperiores earum ratione illum ad pariatur ut rem odit vel dolorem.



      <input type="hidden" name="idProduk" value="<?php echo $val->idProduk; ?>">


      <!-- <?php if (empty($this->session->userdata('User'))) { ?> -->
        <li class="nav-item">
                <a type="button" data-toggle="modal" data-target="#loginform" class="btn btn-primary" >LOGIN</a>
              </li>
              <!-- <?php } else {?> -->


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
              <!-- <?php } ?> -->











              <nav class="navbar navbar-inverse  navbar-fixed-top"  role="navigation" >
                               
                 <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
             
            </div>
            <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li class="active"><a   href="index.html"><span class="glyphicon glyphicon-home" aria-hidden="true"></span> Home</a></li>
                    <li><a href="aboutus.html">
                        <span class="glyphicon glyphicon-info-sign" aria-hidden="true"></span> About</a></li>
                    <li class="dropdown">
                        <a href="index.html" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> 
                      <span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> Menu <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="contactus.html#">Main Courses</a></li>
                            <li><a href="contactus.html#">Bootstrap</a></li>
                            <li><a href="contactus.html#">Asp</a></li>
                            <li><a href="contactus.html#">SQl</a></li>
                            <li role="separator" class="divider"></li>
                            <li class="dropdown-header">PHP</li>
                            <li><a href="contactus.html#">MySQl</a></li>
                           
                        </ul>
                    </li>
                    <li><a href="#"><span class="fa fa-envelope-o"></span> Contact</a></li>
                    
                    
    
                </ul>
               <ul class="nav navbar-nav navbar-right">
                   <li><a data-toggle="modal" data-target="#loginModal"><span class="glyphicon glyphicon-log-in"></span> login</a></li>
                </ul>
                                              
       
            </div>
        </div>
   </nav>
    
    <div id="loginModal" class="modal fade" role="dialog">
        <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"> &times;</button>
                <h4>Login</h4>
            </div>
            <div class="modal-body">
                   <form class="form-inline">
                   <div class="form-group">
                       <label class="sr-only" for="email">Email</label><input type="text" class="form-control input-sm" placeholder="Email" id="email" name="email">
                       </div>
                        <div class="form-group">  
                          
                           <label class="sr-only" for="password">Password</label>
                                     <input type="password" class="form-control input-sm" placeholder="Password" id="password" name="password"></div>
                       <div class="checkbox">
                       <label>
                       <input type="checkbox"> Remember me
                       </label>
                         </div>
                    
                      
                        
                       <button type="submit" class="btn btn-info btn-xs">Sign in</button>
                       <button type="button" class="btn btn-default btn-xs" data-dismiss="modal">Cancel</button> 
                    
                   
                     
               
                    </form>
            </div>
<!--
            <div class="modal-footer">
                <div style="padding:10px"></div>
            </div>
-->
        </div>
        </div>
    </div>