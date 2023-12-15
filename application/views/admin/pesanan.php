<div class="right_col" role="main">
    <div class="row mt-5">
        <div class="col-md-12 col-sm-12">
            <div class="dashboard_graph">
                <div class="row justify-content-center">
                    <div class="col-md-12">
                        <div class="row justify-content-center">
                            <div class="col-md-12">
                                <div class="table-responsive custom-table-responsive">
                                <div class="col-lg-12 table-responsive mb-5 overflow-hidden">
                                    <h6 class="text-center" style="font-size: 20px;"><b>INFORMASI PESANAN</b></h6><br>
                                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                                <li class="nav-item">
                                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true"><b>MENUNGGU KONFIRMASI</b></a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false"><b>PESANAN DIPROSES</b></a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" id="kirim-tab" data-toggle="tab" href="#kirim" role="tab" aria-controls="kirim" aria-selected="false"><b>PESANAN DIKIRIM</b></a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false"><b>PESANAN SELESAI</b></a>
                                                </li>
                                            </ul>
                                            <div class="tab-content" id="myTabContent">
                                                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                                        <table class="table custom-table text-center">
                                                            <thead>
                                                            <tr>
                                                                <th scope="col" class="align-middle">No Pesanan</th>
                                                                <th scope="col" class="align-middle">Tanggal</th>
                                                                <th scope="col" class="align-middle">Nama Penerima</th>
                                                                <th scope="col" class="align-middle">Alamat</th>
                                                                <th scope="col" class="align-middle">Ekspedisi</th>
                                                                <th scope="col" class="align-middle">Total Bayar</th>
                                                                <th scope="col" class="align-middle">Action</th>
                                                            </tr>
                                                            </thead>
                                                            <tbody>
                                                            <?php foreach ($pesanan as $val) { ?>
                                                                <tr scope="row">
                                                                        <td class="align-middle"> <button type="text"  class="btn btn-light" title="Lihat Detail Pesanan"><a href="#" data-toggle="modal"  data-target="#lihatpesanan">#<?php echo $val->noPesanan; ?></a></button>
                                                                        </td>
                                                                        <td class="align-middle"><?php echo $val->tglPesanan; ?></td>
                                                                        <td class="align-middle"><?php echo $val->namaPenerima; ?></td>
                                                                        <td class="align-middle"><?php echo $val->alamat; ?></td>
                                                                        <td class="align-middle"><?php echo $val->ekspedisi; ?><br>
                                                                        Paket : <?= $val->paket ?><br>
                                                                        Ongkir : <?= number_format($val->ongkir, 0) ?></td>
                                                                        <td class="align-middle" style="width: 6rem;">Rp. <?php echo number_format($val->total_bayar) ; ?>
                                                                            <?php if ($val->statusPembayaran == 0) { ?>
                                                                                <span class="badge align-middle p-1 badge-info">Proses Verifikasi</span>
                                                                            <?php } else { ?>
                                                                                <span class="badge align-middle p-1 badge-success">Sudah Bayar</span>
                                                                            <?php } ?>
                                                                        </td>
                                                                        <td class="align-middle">
                                                                            <div class="btn-group">
                                                                            <button type="button" class="btn btn-info" data-toggle="modal" data-target="#buktipembayaran<?php echo $val->idTransaksi; ?>" title="Lihat Bukti Pembayaran">
                                                                                <i class="bi bi-cash"></i>
                                                                            </button>
                                                                            <a type="button" class="btn btn-success" title="Konfirmasi Pembayaran" href="<?= site_url('admin/konfirmasi_pembayaran/' . $val->idTransaksi) ?>"><i class="bi bi-clipboard2-check-fill"></i></a>
                                                                            </div>
                                                                        </td>
                                                                </tr>
                                                                <tr class="spacer"><td colspan="100"></td></tr>
                                                                <!-- Modal -->
                                                                    <div class="modal fade" id="buktipembayaran<?php echo $val->idTransaksi; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                    <div class="modal-dialog">
                                                                        <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h5 class="modal-title" id="exampleModalLabel">Bukti Pembayaran</h5>
                                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                            <span aria-hidden="true">&times;</span>
                                                                            </button>
                                                                        </div>
                                                                        <div class="modal-body">
                                                                            <img src="<?php echo base_url()?>upload/bukti_pembayaran/<?=$val->buktiPembayaran?>" alt="Avatar" class="image img-fluid">
                                                                            <label for="recipient-name" class="col-form-label label-align-left" style="font-size:15px;">Atas Nama :</label>
                                                                            <div class="custom-file">
                                                                                <input type="text" class="form-control" value="<?php echo $val->atasNama; ?>" disabled>
                                                                            </div>
                                                                        </div>
                                                                        <div class="modal-footer">
                                                                        </div>
                                                                        </div>
                                                                    </div>
                                                                    </div>
                                                                <?php } ?>
                                                            </tbody>
                                                        </table>
                                                </div>
                                                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab"><br>
                                                <table class="table custom-table text-center">
                                                            <thead>
                                                            <tr>
                                                            <th scope="col" class="align-middle">id Pesanan</th>
                                                                <th scope="col" class="align-middle">Tanggal</th>
                                                                <th scope="col" class="align-middle">Nama Penerima</th>
                                                                <th scope="col" class="align-middle">Alamat</th>
                                                                <th scope="col" class="align-middle">Ekspedisi</th>
                                                                <th scope="col" class="align-middle">Total Bayar</th>
                                                                <th scope="col" class="align-middle">Action</th>
                                                            </tr>
                                                            </thead>
                                                            <tbody>
                                                            <?php foreach ($pesanan_diproses as $val) { ?>
                                                                <tr scope="row">
                                                                        <td class="align-middle"> <button type="text"  class="btn btn-light" title="Lihat Detail Pesanan"><a href="#" data-toggle="modal"  data-target="#lihatpesanan">#<?php echo $val->noPesanan; ?></a></button>
                                                                        </td>
                                                                        <td class="align-middle"><?php echo $val->tglPesanan; ?></td>
                                                                        <td class="align-middle"><?php echo $val->namaPenerima; ?></td>
                                                                        <td class="align-middle"><?php echo $val->alamat; ?></td>
                                                                        <td class="align-middle"><?php echo $val->ekspedisi; ?><br>
                                                                        Paket : <?= $val->paket ?><br>
                                                                        Ongkir : <?= number_format($val->ongkir, 0) ?></td>
                                                                        <td class="align-middle" style="width: 6rem;">Rp. <?php echo number_format($val->total_bayar) ; ?>
                                                                        <span class="badge align-middle p-1 badge-info">Pesanan diproses</span>
                                                                        </td>
                                                                        <td class="align-middle">
                                                                            <div class="btn-group">
                                                                            <button type="button" class="btn btn-info" data-toggle="modal" data-target="#kirim<?php echo $val->idTransaksi; ?>" title="Kirim Pesanan">
                                                                                <i class="bi bi-truck"></i>
                                                                            </button>
                                                                            </div>
                                                                        </td>
                                                                </tr>
                                                                <tr class="spacer"><td colspan="100"></td></tr>
                                                                <?php } ?>
                                                            </tbody>
                                                        </table>
                                                </div>
                                                <div class="tab-pane fade" id="kirim" role="tabpanel" aria-labelledby="kirim-tab"><br>
                                                        <table class="table custom-table text-center">
                                                            <thead>
                                                            <tr>
                                                            <th scope="col" class="align-middle">id Pesanan</th>
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
                                                                        <td class="align-middle"> <button type="text"  class="btn btn-light" title="Lihat Detail Pesanan"><a href="#" data-toggle="modal"  data-target="#lihatpesanan">#<?php echo $val->noPesanan; ?></a></button>
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
                                                                        <td class="align-middle"><?php echo $val->noResi; ?></td>
                                                                </tr>
                                                                <tr class="spacer"><td colspan="100"></td></tr>
                                                                <?php } ?>
                                                            </tbody>
                                                        </table>
                                                </div>
                                                <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab"><br>
                                                <table class="table custom-table text-center">
                                                            <thead>
                                                            <tr>
                                                            <th scope="col" class="align-middle">id Pesanan</th>
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
                                                                        <td class="align-middle"> <button type="text"  class="btn btn-light" title="Lihat Detail Pesanan"><a href="#" data-toggle="modal"  data-target="#lihatpesanan">#<?php echo $val->noPesanan; ?></a></button>
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
                                                                </tr>
                                                                <tr class="spacer"><td colspan="100"></td></tr>
                                                                <?php } ?>
                                                            <tr class="spacer"><td colspan="100"></td></tr>
                                                            </tbody>
                                                        </table>
                                                </div>
                                            </div>
                                    </div>
                                </div>
                            </div>

                            <?php foreach ($pesanan_diproses as $val) { ?>
                                <div class="modal fade" id="kirim<?= $val->idTransaksi ?>">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title"><?= $val->noPesanan ?></h4>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">

                                                <?php echo form_open('admin/kirim_pesanan/' . $val->idTransaksi) ?>
                                                <table class="table">
                                                    <tr>
                                                        <th>Ekspedisi</th>
                                                        <th>:</th>
                                                        <th><?= $val->ekspedisi ?></th>
                                                    </tr>
                                                    <tr>
                                                        <th>Paket</th>
                                                        <th>:</th>
                                                        <th><?= $val->paket ?></th>
                                                    </tr>
                                                    <tr>
                                                        <th>Paket</th>
                                                        <th>:</th>
                                                        <th>Rp.<?= number_format($val->ongkir, 0) ?></th>
                                                    </tr>
                                                    <tr>
                                                        <th>No Resi</th>
                                                        <th>:</th>
                                                        <th><input name="noResi" class="form-control" placeholder="No Resi" required></th>
                                                    </tr>
                                                </table>

                                            </div>
                                            <div class="modal-footer justify-content-end">
                                                <button type="submit" class="btn btn-primary">Kirim</button>
                                            </div>
                                            <?php echo form_close() ?>
                                        </div>
                                        <!-- /.modal-content -->
                                    </div>
                                    <!-- /.modal-dialog -->
                                </div>
                                <!-- /.modal -->
                            <?php } ?>

                           

                                      

                        <!-- taruh disini semua -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>