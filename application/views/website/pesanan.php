<div class="container-fluid pt-5">
        <div class="row px-xl-5 mt-4 justify-content-center">
            <div class="col-lg-10 table-responsive mb-5 overflow-hidden">
            <h6 style="font-size: 20px;">Informasi Pesanan</h6><br>
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true"><b>Menunggu Konfirmasi</b></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false"><b>Pesanan Diproses</b></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="kirim-tab" data-toggle="tab" href="#kirim" role="tab" aria-controls="kirim" aria-selected="false"><b>Pesanan Dikirim</b></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false"><b>Pesanan Selesai</b></a>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <!-- Menunggu Verifikasi -->
                        <div class="tab-pane fade show active mt-4" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <table class="table custom-table text-center">
                                    <thead>
                                        <tr>
                                            <th scope="col" class="align-middle">No Pesanan</th>
                                            <th scope="col" class="align-middle">Tanggal</th>
                                            <th scope="col" class="align-middle">Nama Penerima</th>
                                            <th scope="col" class="align-middle">Alamat</th>
                                            <th scope="col" class="align-middle">Ekspedisi</th>
                                            <th scope="col" class="align-middle">Total Bayar</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php foreach ($pesanan as $val) { ?>
                                        <tr scope="row">
                                                <td class="align-middle"> <button type="text"  class="btn btn-light" data-toggle="tooltip" data-placement="top" title="Lihat Detail Pesanan"><a href="#" data-toggle="modal"  data-target="#lihatpesanan">#<?php echo $val->noPesanan; ?></a></button>
                                                </td>
                                                <td class="align-middle"><?php echo $val->tglPesanan; ?></td>
                                                <td class="align-middle"><?php echo $val->namaPenerima; ?></td>
                                                <td class="align-middle"><?php echo $val->alamat; ?></td>
                                                <td class="align-middle"><?php echo $val->ekspedisi; ?></td>
                                                <td class="align-middle" style="width: 6rem;">Rp. <?php echo number_format($val->total_bayar) ; ?><span class="badge badge-info align-middle p-1" title="Menunggu Konfirmasi dari Admin Maks.1X24 JAM">Proses Verifikasi</span></td>
                                        </tr>

                                        <!-- Modal Detail Pesanan -->
                                        <div class="modal fade" id="lihatpesanan" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-lg" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                <h6 style="font-size:20px;"class="modal-title" id="exampleModalLabel">Detail Pesanan #<?php echo $val->noPesanan; ?></h6>
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
                                        <!-- /Modal Detail Pesanan -->
                                        <?php } ?>
                                    </tbody>
                                </table>
                        </div>
                        <!-- Menunggu Verifikasi -->

                        <!-- Pesanan Diproses -->
                        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab"><br>
                            <table class="table custom-table text-center">
                                      <thead>
                                      <tr>
                                      <th scope="col" class="align-middle">No Pesanan</th>
                                            <th scope="col" class="align-middle">Tanggal</th>
                                            <th scope="col" class="align-middle">Nama Penerima</th>
                                            <th scope="col" class="align-middle">Alamat</th>
                                            <th scope="col" class="align-middle">Ekspedisi</th>
                                            <th scope="col" class="align-middle">Total Bayar</th>
                                      </tr>
                                      </thead>
                                      <tbody>
                                      <!-- <tr scope="row">
                                            <td class="align-middle"> <button type="text"  class="btn btn-light" data-toggle="tooltip" data-placement="top" title="Lihat Detail Pesanan"><a href="#" data-toggle="modal"  data-target="#lihatpesanan">#123</a></button>
                                            </td>
                                            <td class="align-middle"></td>
                                            <td class="align-middle"></td>
                                            <td class="align-middle"></td>
                                            <td class="align-middle"></td>
                                            <td class="align-middle"></td>
                                                <td class="align-middle">
                                                <a type="button" class="btn btn-success" title="Bayar Sekarang!" href="">
                                                    <i class="bi bi-cash"></i>
                                                </a>
                                                </td>

                                      </tr>
                                      <tr class="spacer"><td colspan="100"></td></tr> -->
                                      </tbody>
                            </table>
                        </div>
                        <!-- Pesanan Diproses -->

                        <!-- Pesanan Dikirim -->
                        <div class="tab-pane fade" id="kirim" role="tabpanel" aria-labelledby="kirim-tab"><br>
                        <table class="table custom-table text-center">
                                      <thead>
                                      <tr>
                                      <th scope="col" class="align-middle">No Pesanan</th>
                                            <th scope="col" class="align-middle">Tanggal</th>
                                            <th scope="col" class="align-middle">Nama Penerima</th>
                                            <th scope="col" class="align-middle">Alamat</th>
                                            <th scope="col" class="align-middle">Ekspedisi</th>
                                            <th scope="col" class="align-middle">Total Bayar</th>
                                      </tr>
                                      </thead>
                                      <tbody>
                                      <!-- <tr scope="row">
                                            <td class="align-middle"> <button type="text"  class="btn btn-light" data-toggle="tooltip" data-placement="top" title="Lihat Detail Pesanan"><a href="#" data-toggle="modal"  data-target="#lihatpesanan">#123</a></button>
                                            </td>
                                            <td class="align-middle"> HUHAH</td>
                                            <td class="align-middle">awd</td>
                                            <td class="align-middle">tes</td>
                                            <td class="align-middle">tes2</td>
                                            <td class="align-middle">tes2</td>
                                      </tr>
                                      <tr class="spacer"><td colspan="100"></td></tr> -->
                                      </tbody>
                                  </table>
                        </div>
                        <!-- Pesanan Dikirim -->

                        <!-- Pesanan Selesai -->
                        <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab"><br>
                            <table class="table custom-table text-center">
                                      <thead>
                                      <tr>
                                      <th scope="col" class="align-middle">No Pesanan</th>
                                            <th scope="col" class="align-middle">Tanggal</th>
                                            <th scope="col" class="align-middle">Nama Penerima</th>
                                            <th scope="col" class="align-middle">Alamat</th>
                                            <th scope="col" class="align-middle">Ekspedisi</th>
                                            <th scope="col" class="align-middle">Total Bayar</th>
                                      </tr>
                                      </thead>
                                      <tbody>
                                      <!-- <tr scope="row">
                                            <td class="align-middle"> <button type="text"  class="btn btn-light" data-toggle="tooltip" data-placement="top" title="Lihat Detail Pesanan"><a href="#" data-toggle="modal"  data-target="#lihatpesanan">#123</a></button>
                                            </td>
                                            <td class="align-middle"> HUHAH</td>
                                            <td class="align-middle">awd</td>
                                            <td class="align-middle">tes</td>
                                            <td class="align-middle">tes2</td>
                                            <td class="align-middle">tes2<span class="badge badge-warning">Belum Bayar</span></td>
                                                <td class="align-middle">
                                                <a type="button" class="btn btn-success" title="Bayar Sekarang!" href="">
                                                    <i class="bi bi-cash"></i>
                                                </a>
                                                </td>

                                      </tr>
                                      <tr class="spacer"><td colspan="100"></td></tr> -->
                                      </tbody>
                            </table>
                        </div>
                        <!-- Pesanan Selesai -->
                        

                    </div>
            </div>
        </div>
</div>

                            