<div class="right_col" role="main">
    <div class="row mt-5">
        <div class="col-md-12 col-sm-12">
            <div class="dashboard_graph">
                <div class="row justify-content-center">
                    <div class="col-md-12">
                        <div class="row justify-content-center">
                            <div class="col-md-12">
                                <div class="table-responsive custom-table-responsive">
                                    <table class="table custom-table text-center">
                                        <thead>
                                            <nav class="text-center" aria-label=" breadcrumb">
                                                    <a class="breadcrumb-item" aria-current="page" style="font-size:20px;"><b>DAFTAR PRODUK</b></a>
                                            </nav>
                                            <tr>
                                                <a type="button" class="btn btn-primary text-light" style="border-radius: 10px;" title="Tambah Produk" data-toggle="modal"  data-target="#tambahproduk" >
                                                    <i class="bi bi-plus-lg"></i>
                                                </a>
                                                
                                                
                                                <th scope="col" class="align-middle">id Produk</th>
                                                <th scope="col" class="align-middle">Kategori</th>
                                                <th scope="col" class="align-middle">Foto Produk</th>
                                                <th scope="col" class="align-middle">Nama Produk</th>
                                                <th scope="col" class="align-middle">Stok</th>
                                                <th scope="col" class="align-middle">Harga</th>
                                                <th scope="col" class="align-middle">Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr scope="row">
                                            <?php foreach ($produk as $val) { ?>
                                                <td class="align-middle">
                                                <?php echo $val->idProduk; ?>
                                                </td>
                                                <td class="align-middle">
                                                <?php echo $val->namaKategori; ?>
                                                </td>
                                                <td class="align-middle"><img src="<?=base_url()?>upload/<?=$val->foto?>" style="max-width: 80px;" alt=""></td>
                                                <td class="align-middle">
                                                <?php echo $val->namaProduk; ?>
                                                </td>
                                                <td class="align-middle"><?php echo $val->stok; ?></td>
                                                <td class="align-middle">Rp. <?php echo number_format($val->harga, 0); ?></td>
                                                <td class="align-middle">
                                                    <div class="btn-group">
                                                            <a  type="button" class="btn btn-success text-light" title="Lihat Detail Produk" data-toggle="modal"  data-target="#detailproduk<?php echo $val->idProduk ?>">
                                                                <i class="bi bi-eye-fill"></i>
                                                            </a>
                                                            <a type="button" class="btn btn-warning text-light" title="Edit Produk" data-toggle="modal"  data-target="#editproduk<?php echo $val->idProduk ?>">
                                                                <i class="bi bi-pencil-square"></i>
                                                            </a>
                                                            <a type="button" class="btn btn-danger" title="Delete Produk" class="btn-danger" href="<?php echo site_url('admin/delete_produk/' . $val->idProduk); ?>" onclick="return confirm('Yakin Akan Hapus Data Ini?')">
                                                                <i class="bi bi-trash"></i>
                                                            </a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="spacer"><td colspan="100"></td></tr>
                                        
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
                                                        <div class="row">
                                                            <div class="col-8 col-sm-6 align-middle">
                                                                <img src="<?php echo base_url()?>upload/<?=$val->foto?>" alt="Avatar" class="image img-fluid">
                                                            </div>
                                                            <div class="col-4 col-sm-6">
                                                                <div class="form-group">
                                                                    <label for="recipient-name" class="col-form-label label-align-left" style="font-size:15px;">Nama Produk :</label>
                                                                        <div class="custom-file">
                                                                            <input type="text" class="form-control" value="<?php echo $val->namaProduk; ?>" id="recipient-name" disabled>
                                                                        </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="recipient-name" class="col-form-label label-align-left" style="font-size:15px;">Kategori :</label>
                                                                        <div class="custom-file">
                                                                            <input type="text" class="form-control" value="<?php echo $val->namaKategori; ?>" id="recipient-name" disabled>
                                                                        </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="recipient-name" class="col-form-label label-align-left" style="font-size:15px;">Stok Tersedia :</label>
                                                                        <div class="custom-file">
                                                                            <input type="text" class="form-control" value="<?php echo $val->stok; ?>" id="recipient-name" disabled>
                                                                        </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="recipient-name" class="col-form-label label-align-left" style="font-size:15px;">Berat (Gr) :</label>
                                                                        <div class="custom-file">
                                                                            <input type="text" class="form-control" value="<?php echo $val->berat; ?>" id="recipient-name" disabled>
                                                                        </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="recipient-name" class="col-form-label label-align-left" style="font-size:15px;">Deskripsi Produk :</label>
                                                                        <div class="custom-file">
                                                                        <textarea class="form-control" id="message-text" required="required" rows="4" disabled><?php echo $val->deskripsi_produk; ?></textarea>
                                                                        </div>
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
                                        <?php } ?>

                                            <!-- Modal Edit Produk-->
                                            <?php foreach ($produk as $val) { ?>
                                            <div class="modal fade" id="editproduk<?php echo $val->idProduk ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content text-left">
                                                        <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Edit Produk</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <form method="post" name="editproduk" action="<?php echo site_url('admin/edit_produk');?>" enctype="multipart/form-data">
                                                                <div class="form-group">
                                                                    <input type="hidden" name="idProduk" value="<?php echo $val->idProduk; ?>">
                                                                    <label for="recipient-name" class="col-form-label label-align-left" style="font-size:15px;">Masukkan Foto Baru :</label>
                                                                    <div class="form-group">
                                                                        <input type="file" class="form-control" name="foto" required='required'>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="recipient-name" class="col-form-label label-align-left" style="font-size:15px;">Kategori :</label>
                                                                        <select class="custom-select" id="inputGroupSelect02" name="idKategori" required='required'>
                                                                            <option value="<?php echo $val->idKategori; ?>"><?php echo $val->namaKategori; ?></option>
                                                                            <?php foreach ($kategori as $var) { ?>
                                                                                <option value="<?php echo $var->idKategori; ?>"><?php echo $var->namaKategori; ?></option>
                                                                            <?php } ?>
                                                                        </select>
                                                                </div>
                                                                
                                                                <div class="form-group">
                                                                <label for="recipient-name" class="col-form-label label-align-left" style="font-size:15px;">Nama Produk :</label>
                                                                    <div class="custom-file">
                                                                    <input type="text" name="namaProduk" class="form-control" value="<?php echo $val->namaProduk; ?>" id="recipient-name">
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                <label for="recipient-name" class="col-form-label label-align-left" style="font-size:15px;">Stok Tersedia :</label>
                                                                    <div class="custom-file">
                                                                    <input type="number" name="stok" class="form-control" value="<?php echo $val->stok; ?>" id="recipient-name">
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                <label for="recipient-name" class="col-form-label label-align-left" style="font-size:15px;">Berat (Gr) :</label>
                                                                    <div class="custom-file">
                                                                    <input type="number" name="berat" class="form-control" value="<?php echo $val->berat; ?>" id="recipient-name">
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                <label for="recipient-name" class="col-form-label label-align-left" style="font-size:15px;">Harga :</label>
                                                                    <div class="custom-file">
                                                                    <input type="number" name="harga" class="form-control" value="<?php echo $val->harga; ?>" id="recipient-name">
                                                                    </div>
                                                                </div>
                                                                    <div class="form-group">
                                                                    <label for="message-text" class="col-form-label label-align-left" style="font-size:15px;">Deskripsi Produk :</label>
                                                                    <textarea name="deskripsi_produk" class="form-control" id="message-text"><?php echo $val->deskripsi_produk; ?></textarea>
                                                                </div>
                                                        </div>
                                                                <div class="modal-footer">
                                                                <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
                                                                <button type="submit" class="btn btn-success">Simpan</button>
                                                                </div>
                                                            </form>
                                                    </div>
                                                </div>
                                            </div>
                                            <?php } ?>
                                            <!-- /Modal Edit Produk-->
                                        
                                        
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                    

                        <!-- Modal Tambah Produk-->
                            <div class="modal fade" id="tambahproduk" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Tambah Produk</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form method="post" name="tambahproduk" enctype="multipart/form-data" action="<?php echo site_url('admin/add_produk');?>">
                                            <div class="form-group">
                                                <label for="recipient-name" class="col-form-label label-align-left" style="font-size:15px;">Masukkan Foto :</label>
                                                <div class="row justify-content-center">
                                                    <div class="form-group">
                                                        <img src="<?php echo base_url('assets/img/no-image.png');?>" id="gambar_load" width="100px">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <input class="form-control" name="foto" id="preview_gambar" type="file" required='required'>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="recipient-name" class="col-form-label label-align-left" style="font-size:15px;">Kategori :</label>
                                                    <select class="custom-select" id="inputGroupSelect02" name="idKategori" required='required'>
                                                        <option>-- Pilih kategori --</option>
                                                        <?php foreach ($kategori as $val) { ?>
                                                            <option value="<?php echo $val->idKategori; ?>"><?php echo $val->namaKategori; ?></option>
                                                        <?php } ?>
                                                    </select>
                                            </div>
                                            <div class="form-group">
                                            <label for="recipient-name" class="col-form-label label-align-left" style="font-size:15px;">Nama Produk :</label>
                                                <div class="custom-file">
                                                    <input type="text" name="namaProduk" class="form-control" id="recipient-name" required='required'>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                            <label for="recipient-name" class="col-form-label label-align-left" style="font-size:15px;">Stok Tersedia :</label>
                                                <div class="custom-file">
                                                    <input type="number" name="stok" class="form-control" id="recipient-name" required='required'>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="recipient-name" class="col-form-label label-align-left" style="font-size:15px;">Berat (Gr) :</label>
                                                <div class="custom-file">
                                                    <input type="number" name="berat" min="0" class="form-control" id="recipient-name" required='required'>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                            <label for="recipient-name" class="col-form-label label-align-left" style="font-size:15px;">Harga :</label>
                                                <div class="custom-file">
                                                    <input type="number" name="harga" class="form-control" id="recipient-name" required='required'>
                                                </div>
                                            </div>
                                                <div class="form-group">
                                                    <label for="message-text" class="col-form-label label-align-left" style="font-size:15px;">Deskripsi Produk :</label>
                                                    <textarea name="deskripsi_produk" class="form-control" id="message-text" required='required'></textarea>
                                                </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
                                        <button type="submit" value="upload" class="btn btn-success">Simpan</button>
                                    </div>
                                        </form>
                                </div>
                                </div>
                            </div>
                        <!-- /Modal Tambah Produk-->

                                

                                
                            
                                <!-- /Modal Lihat Detail-->
                        

                        <!-- taruh disini semua -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

    <!-- Preview Gambar -->
    <script>
      function bacaGambar(input){
        if (input.files && input.files[0]) {
          var reader = new FileReader();
          reader.onload = function(e) {
            $('#gambar_load') .attr('src', e.target.result);
          }
          reader.readAsDataURL(input.files[0]);
        }
      }

      $("#preview_gambar").change(function(){
        bacaGambar(this);
      });
    </script>
     <!-- /Preview Gambar -->