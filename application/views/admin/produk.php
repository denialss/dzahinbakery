<div class="right_col" role="main">
    <div class="row mt-5">
        <div class="col-md-12 col-sm-12">
            <div class="dashboard_graph">
                <div class="row justify-content-center">
                    <div class="col-md-12">
                        <nav aria-label=" breadcrumb">
                            <ol class="breadcrumb justify-content-center">
                                <a class="breadcrumb-item" aria-current="page" style="font-size:20px;"><b>DAFTAR PRODUK</b></a>
                            </ol>
                        </nav>
                    </div>
                    <div class="col-md-12">
                        <div class="row justify-content-center">
                            <div class="col-md-12">
                                <div class="table-responsive custom-table-responsive">
                                    <table class="table custom-table">
                                        <thead>
                                        <button type="button" class="btn btn-primary" style="border-radius: 10px;" data-toggle="tooltip" data-placement="right" title="Tambah Produk">
                                            <a class="btn-primary" href="<?php echo site_url('adminpanel/produk/save');?>" data-toggle="modal"  data-target="#tambahproduk" ><i class="fa fa-plus"></i></a></button>
                                        <tr>
                                            <th scope="col" class="align-text-top">
                                            <label class="control control--checkbox">
                                                <input type="checkbox"  class="js-check-all"/>
                                                <div class="control__indicator"></div>
                                            </label>
                                            </th>
                                            
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
                                            <th scope="row" class="align-middle">
                                            <label class="control control--checkbox">
                                                <input type="checkbox"/>
                                                <div class="control__indicator"></div>
                                            </label>
                                            </th>
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
                                            <td class="align-middle">Rp.<?php echo $val->harga; ?></td>
                                            <td class="align-middle">
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-success" data-toggle="tooltip" data-placement="top" title="Lihat Detail Produk">
                                                        <a  data-toggle="modal"  data-target="#detailproduk<?php echo $val->idProduk ?>" ><i class="fa fa-eye"></i></a></button>
                                                    <button type="button" class="btn btn-warning" data-toggle="tooltip" data-placement="top" title="Edit Produk">
                                                        <a class="btn-warning" href="#" data-toggle="modal"  data-target="#editproduk<?php echo $val->idProduk ?>" ><i class="fa fa-edit"></i></a></button>
                                                    <button type="button" class="btn btn-danger" data-toggle="tooltip" data-placement="top" title="Delete Produk">
                                                        <a class="btn-danger" href="<?php echo site_url('admin/delete_produk/' . $val->idProduk); ?>" onclick="return confirm('Yakin Akan Hapus Data Ini?')"><i class="fa fa-trash"></i></a></button>
                                                </div>

                                            </td>
                                        </tr>
                                        <tr class="spacer"><td colspan="100"></td></tr>
                                        
                                         <!-- Modal Lihat Detail -->
                                         <div class="modal fade" id="detailproduk<?php echo $val->idProduk ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
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
                                                            <form method="post" name="editproduk" action="<?php echo site_url('admin/edit_produk'. $val->idProduk);?>">
                                                                <div class="form-group">
                                                                <input type="hidden" name="idProduk" value="<?php echo $val->idProduk; ?>">
                                                                <label for="recipient-name" class="col-form-label label-align-left" style="font-size:15px;">Masukkan Foto : </label>
                                                                    <div class="custom-file">
                                                                    <input type="file" name="foto" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01" value="" required="required">
                                                                        <label class="custom-file-label" for="inputGroupFile01"></label>
                                                                    </div>
                                                                </div>

                                                                <div class="form-group">
                                                                    <label for="recipient-name" class="col-form-label label-align-left" style="font-size:15px;">Kategori :</label>
                                                                        <select class="custom-select" id="inputGroupSelect02" name="idKategori" required="required">
                                                                            <option  value=""><?php echo $val->namaKategori; ?></option>
                                                                            <?php foreach ($kategori as $var) { ?>
                                                                                <option name="idKategori" value="<?php echo $var->idKategori; ?>"><?php echo $var->namaKategori; ?></option>
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
                                                                    <input type="text" name="stok" class="form-control" value="<?php echo $val->stok; ?>" id="recipient-name">
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                <label for="recipient-name" class="col-form-label label-align-left" style="font-size:15px;">Harga :</label>
                                                                    <div class="custom-file">
                                                                    <input type="text" name="harga" class="form-control" value="<?php echo $val->harga; ?>" id="recipient-name">
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
                                            <div class="custom-file">
                                            <input type="file" name="foto" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01" required="required">
                                                <label class="custom-file-label" for="inputGroupFile01">-- Pilih Foto --</label>
                                            </div>
                                        </div>
                                    <div class="form-group">
                                        <label for="recipient-name" class="col-form-label label-align-left" style="font-size:15px;">Kategori :</label>
                                            <select class="custom-select" id="inputGroupSelect02" name="idKategori" required="required">
                                            <option value="">-- Pilih kategori --</option>
                                            <?php foreach ($kategori as $val) { ?>
                                                <option value="<?php echo $val->idKategori; ?>"><?php echo $val->namaKategori; ?></option>
                                            <?php } ?>
                                            </select>
                                    </div>
                                    <div class="form-group">
                                    <label for="recipient-name" class="col-form-label label-align-left" style="font-size:15px;">Nama Produk :</label>
                                        <div class="custom-file">
                                        <input type="text" name="namaProduk" class="form-control" id="recipient-name">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                    <label for="recipient-name" class="col-form-label label-align-left" style="font-size:15px;">Stok Tersedia :</label>
                                        <div class="custom-file">
                                        <input type="text" name="stok" class="form-control" id="recipient-name">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                    <label for="recipient-name" class="col-form-label label-align-left" style="font-size:15px;">Harga :</label>
                                        <div class="custom-file">
                                        <input type="text" name="harga" class="form-control" id="recipient-name">
                                        </div>
                                    </div>
                                        <div class="form-group">
                                        <label for="message-text" class="col-form-label label-align-left" style="font-size:15px;">Deskripsi Produk :</label>
                                        <textarea name="deskripsi_produk" class="form-control" id="message-text"></textarea>
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
