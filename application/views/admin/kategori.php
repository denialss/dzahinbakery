<div class="right_col" role="main">
    <div class="row mt-5">
        <div class="col-md-12 col-sm-12">
            <div class="dashboard_graph">
                <div class="row justify-content-center">
                    <div class="col-md-12">
                        <nav aria-label=" breadcrumb">
                            <ol class="breadcrumb justify-content-center">
                                <a class="breadcrumb-item" aria-current="page" style="font-size:20px;"><b>DAFTAR KATEGORI</b></a>
                            </ol>
                        </nav>
                    </div>
                    <div class="col-md-12">
                        <div class="row justify-content-center">
                            <div class="col-md-12">
                                <div class="table-responsive custom-table-responsive">
                                  <table class="table custom-table">
                                      <thead>
                                      <button type="button" class="btn btn-primary" style="border-radius: 10px;" data-toggle="tooltip" data-placement="right" title="Tambah Kategori">
                                          <a class="btn-primary" href="#" data-toggle="modal"  data-target="#tambahkategori" ><i class="fa fa-plus"></i></a></button>
                                      <tr>
                                          <th scope="col" class="align-text-top">
                                          <label class="control control--checkbox">
                                              <input type="checkbox"  class="js-check-all"/>
                                              <div class="control__indicator"></div>
                                          </label>
                                          </th>
                                          <th scope="col" class="align-middle">id Kategori</th>
                                          <th scope="col" class="align-middle">Nama Kategori</th>
                                          <th scope="col" class="align-middle">Aksi</th>
                                      </tr>
                                      </thead>
                                      <tbody>
                                      <tr scope="row">
                                          <?php foreach ($kategori as $val) { ?>
                                          <th scope="row" class="align-middle">
                                          <label class="control control--checkbox">
                                              <input type="checkbox"/>
                                              <div class="control__indicator"></div>
                                          </label>
                                          </th>
                                          <td class="align-middle">
                                          <?php echo $val->idKategori; ?>
                                          </td>
                                          <td class="align-middle">
                                          <?php echo $val->namaKategori; ?>
                                          </td>
                                          <td class="align-middle">
                                              <div class="btn-group">
                                                  <button type="button" class="btn btn-success" data-toggle="tooltip" data-placement="top" title="Lihat Daftar Produk" disabled>
                                                      <a class="disabled-link" data-toggle="modal"  data-target="#detailproduk" ><i class="fa fa-eye"></i></a></button>
                                                  <button type="button" class="btn btn-warning" data-toggle="tooltip" data-placement="top" title="Edit Kategori">
                                                      <a class="btn-warning" href="#" data-toggle="modal"  data-target="#editkategori<?php echo $val->idKategori ?>" ><i class="fa fa-edit"></i></a></button>
                                                  <button type="button" class="btn btn-danger" data-toggle="tooltip" data-placement="top" title="Delete Kategori">
                                                      <a class="btn-danger" href="<?php echo site_url('adminpanel/kategori/delete/' . $val->idKategori); ?>" onclick="return confirm('Yakin Akan Hapus Data Ini?')"><i class="fa fa-trash"></i></a></button>
                                              </div>
                                              <!-- Modal Edit Kategori -->
                                                <div class="modal fade" id="editkategori<?php echo $val->idKategori ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                  <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                      <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Ubah Kategori</h5>
                                                      </div>
                                                      <div class="modal-body">
                                                        <form method="post" name="editkategori" action="<?php echo site_url('adminpanel/kategori/edit'); ?>">
                                                          <div class="form-group">
                                                            <label for="inputEmail3" class="col-form-label">Nama Kategori</label>
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
                                              <!-- /Modal Edit Kategori -->
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
                                      <h5 class="modal-title" id="exampleModalLabel">Masukkan Kategori Baru</h5>
                                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                      </button>
                                    </div>
                                    <div class="modal-body">
                                      <form method="post" name="tambahkategori" action="<?php echo site_url('adminpanel/kategori/add'); ?>">
                                        <div class="form-group">
                                          <label for="inputEmail3" class="col-form-label text-">Nama Kategori</label>
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

                                      

                        <!-- taruh disini semua -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>