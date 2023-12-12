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
                                        <a class="breadcrumb-item" aria-current="page" style="font-size:20px;"><b>DAFTAR KATEGORI</b></a>
                                      </nav>
                                      <tr>
                                        <a type="button" class="btn btn-primary text-light" style="border-radius: 10px;" title="Tambah Produk" data-toggle="modal"  data-target="#tambahkategori" >
                                          <i class="bi bi-plus-lg"></i>
                                        </a>
                                        <th scope="col" class="align-middle">id Kategori</th>
                                        <th scope="col" class="align-middle">Nama Kategori</th>
                                        <th scope="col" class="align-middle">Aksi</th>
                                      </tr>
                                      </thead>
                                      <tbody>
                                      <tr scope="row">
                                          <?php foreach ($kategori as $val) { ?>
                                          <td class="align-middle">
                                          <?php echo $val->idKategori; ?>
                                          </td>
                                          <td class="align-middle">
                                          <?php echo $val->namaKategori; ?>
                                          </td>
                                          <td class="align-middle">
                                            <div class="btn-group">
                                              <button  type="button" class="btn btn-success text-light" title="Lihat Detail Produk" data-toggle="modal"  data-target="#daftarproduk<?php echo $val->idKategori ?>" disabled>
                                                <i class="bi bi-eye-fill"></i>
                                              </button>
                                              <a type="button" class="btn btn-warning text-light" title="Edit Produk" data-toggle="modal"  data-target="#editkategori<?php echo $val->idKategori ?>">
                                                <i class="bi bi-pencil-square"></i>
                                              </a>
                                              <a type="button" class="btn btn-danger" title="Delete Produk" class="btn-danger" href="<?php echo site_url('admin/delete_kategori/' . $val->idKategori); ?>" onclick="return confirm('Yakin Akan Hapus Data Ini?')">
                                                <i class="bi bi-trash"></i>
                                              </a>
                                            </div>
                                          </td>
                                      </tr>
                                      <tr class="spacer"><td colspan="100"></td></tr>
                                      <?php } ?>
                                      </tbody>
                                  </table>
                                </div>
                            </div>

                            <!-- Modal Tambah Kategori -->
                            <div class="modal fade" id="tambahkategori" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <h5 class="modal-title" id="exampleModalLabel">Masukkan Kategori</h5>
                                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                      </button>
                                    </div>
                                    <div class="modal-body">
                                      <form method="post" name="tambahkategori" action="<?php echo site_url('admin/add_kategori'); ?>">
                                        <div class="form-group">
                                          <label for="inputEmail3" class="col-form-label text-">Nama Kategori :</label>
                                          <input type="text" name="namakategori" class="form-control" id="inputEmail3" require="required">
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
                              <!-- /Modal Tambah Kategori -->

                              
                              <!-- Modal Edit Kategori -->
                              <?php foreach ($kategori as $val) { ?>
                                <div class="modal fade" id="editkategori<?php echo $val->idKategori ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                  <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Ubah Kategori</h5>
                                      </div>
                                      <div class="modal-body">
                                        <form method="post" name="editkategori" action="<?php echo site_url('admin/edit_kategori'); ?>">
                                          <div class="form-group">
                                            <input type="hidden" name="idkategori" value="<?php echo $val->idKategori; ?>">
                                            <label for="inputEmail3" class="col-form-label">Nama Kategori :</label>
                                            <input type="text" name="namakategori" class="form-control" value="<?php echo $val->namaKategori?>" id="inputEmail3" require="required">
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
                              <!-- /Modal Edit Kategori -->

                              <!-- Modal Daftar Produk -->
                              <!-- BELUM BISA TAMPIL PRODUK PER KATEGORI -->
                              <?php foreach ($kategori as $val) { ?>
                                <div class="modal fade" id="daftarproduk<?php echo $val->idKategori ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                  <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Daftar Produk <?php echo $val->namaKategori?></h5>
                                      </div>
                                      <div class="modal-body">
                                        <table class="table text-left">
                                            <thead>
                                            <tr>
                                              <th scope="col">Foto</th>
                                              <th scope="col">Nama Produk</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <?php foreach ($produk as $var) { ?>
                                              <tr>
                                                <td><img src="<?=base_url()?>upload/<?=$var->foto?>" style="max-width: 80px;" alt=""></td>
                                                <td><?php echo $var->namaKategori?></td>
                                              </tr>
                                              <?php } ?>
                                            </tbody>
                                        </table>
                                      </div>
                                      <div class="modal-footer">
                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
                                        <button type="submit" class="btn btn-success">Simpan</button>
                                      </div>
                                    </div>        
                                  </div>
                                </div>
                                <?php } ?>
                              <!-- /Modal Daftar Produk -->

                                      

                        <!-- taruh disini semua -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>