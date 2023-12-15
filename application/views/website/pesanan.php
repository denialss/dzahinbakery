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
                                                <td class="align-middle"><a href="<?php echo site_url('home/detail_pesanan/'. $val->idTransaksi);?>" class="btn btn-primary">#<?php echo $val->noPesanan; ?></a>
                                                </td>
                                                <td class="align-middle"><?php echo $val->tglPesanan; ?></td>
                                                <td class="align-middle"><?php echo $val->namaPenerima; ?></td>
                                                <td class="align-middle"><?php echo $val->alamat; ?></td>
                                                <td class="align-middle"><?php echo $val->ekspedisi; ?><br>
                                                Paket : <?= $val->paket ?><br>
										        Ongkir : <?= number_format($val->ongkir, 0) ?>
                                                </td>
                                                <td class="align-middle" style="width: 6rem;">Rp. <?php echo number_format($val->total_bayar) ; ?>
                                                <?php if ($val->statusPembayaran == 0) { ?>
                                                    <span class="badge align-middle p-1 badge-info">Menunggu Verifikasi</span>
                                                <?php } else { ?>
                                                    <span class="badge align-middle p-1 badge-success">Sudah Bayar</span>
                                                <?php } ?>
                                        </tr>
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
                                      <?php foreach ($pesanan_diproses as $val) { ?>
                                        <tr scope="row">
                                                <td class="align-middle"><a href="<?php echo site_url('home/detail_pesanan/'. $val->idTransaksi);?>" class="btn btn-primary">#<?php echo $val->noPesanan; ?></a>
                                                </td>
                                                <td class="align-middle"><?php echo $val->tglPesanan; ?></td>
                                                <td class="align-middle"><?php echo $val->namaPenerima; ?></td>
                                                <td class="align-middle"><?php echo $val->alamat; ?></td>
                                                <td class="align-middle"><?php echo $val->ekspedisi; ?><br>
                                                Paket : <?= $val->paket ?><br>
										        Ongkir : <?= number_format($val->ongkir, 0) ?>
                                                </td>
                                                <td class="align-middle" style="width: 6rem;">Rp. <?php echo number_format($val->total_bayar) ; ?>
                                                <span class="badge align-middle p-1 badge-info">Pesanan diproses</span>

                                        </tr>
                                        <?php } ?>
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
                                            <th scope="col" class="align-middle">No Resi</th>
                                      </tr>
                                      </thead>
                                      <tbody>
                                      <?php foreach ($pesanan_dikirim as $val) { ?>
                                            <tr scope="row">
                                                <td class="align-middle"><a href="<?php echo site_url('home/detail_pesanan/'. $val->idTransaksi);?>" class="btn btn-primary">#<?php echo $val->noPesanan; ?></a>
                                                </td>
                                                <td class="align-middle"><?php echo $val->tglPesanan; ?></td>
                                                <td class="align-middle"><?php echo $val->namaPenerima; ?></td>
                                                <td class="align-middle"><?php echo $val->alamat; ?></td>
                                                <td class="align-middle"><?php echo $val->ekspedisi; ?><br>
                                                Paket : <?= $val->paket ?><br>
                                                Ongkir : <?= number_format($val->ongkir, 0) ?></td>
                                                <td class="align-middle" style="width: 6rem;">Rp. <?php echo number_format($val->total_bayar) ; ?>
                                                <span class="badge align-middle p-1 badge-success">Pesanan dikirim</span>
                                                </td>
                                                <td class="align-middle"><?php echo $val->noResi; ?><br>
											<button data-toggle="modal" data-target="#diterima<?= $val->idTransaksi ?>" class="btn btn-primary btn-xs btn-flat">Diterima</button>
                                            </td>
                                            </tr>
                                            <tr class="spacer"><td colspan="100"></td></tr>
                                                                <?php } ?>
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
                                        <?php foreach ($pesanan_selesai as $val) { ?>
                                            <tr scope="row">
                                                <td class="align-middle"><a href="<?php echo site_url('home/detail_pesanan/'. $val->idTransaksi);?>" class="btn btn-primary">#<?php echo $val->noPesanan; ?></a>
                                                </td>
                                                <td class="align-middle"><?php echo $val->tglPesanan; ?></td>
                                                <td class="align-middle"><?php echo $val->namaPenerima; ?></td>
                                                <td class="align-middle"><?php echo $val->alamat; ?></td>
                                                <td class="align-middle"><?php echo $val->ekspedisi; ?><br>
                                                Paket : <?= $val->paket ?><br>
                                                Ongkir : <?= number_format($val->ongkir, 0) ?></td>
                                                <td class="align-middle" style="width: 6rem;">Rp. <?php echo number_format($val->total_bayar) ; ?>
                                                <span class="badge align-middle p-1 badge-success">Pesanan diterima</span>
                                                </td>
                                                <td class="align-middle"><?php echo $val->noResi; ?></td>
                                            </tr>
                                            <tr class="spacer"><td colspan="100"></td></tr>
                                        <?php } ?>
                                      </tbody>
                            </table>
                        </div>
                        <!-- Pesanan Selesai -->


                        <?php foreach ($pesanan_dikirim as $val) { ?>
                            <div class="modal fade" id="diterima<?= $val->idTransaksi ?>">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title">Pesanan Diterima</h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            Apakah Anda Yakin Pesanan Sudah Terima Produk?
                                        </div>
                                        <div class="modal-footer justify-content-between">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Tidak</button>
                                            <a href="<?= site_url('home/diterima/' . $val->idTransaksi) ?>" class="btn btn-primary">Ya</a>
                                        </div>
                                    </div>
                                    <!-- /.modal-content -->
                                </div>
                                <!-- /.modal-dialog -->
                            </div>
                            <!-- /.modal -->
                        <?php } ?>
                        

                    </div>
            </div>
        </div>
</div>

                            