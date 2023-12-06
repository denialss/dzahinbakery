<style>
.zoom {
  transition: transform .2s; /* Animation */
}

.zoom:hover {
  transform: scale(1.2); /* (150% zoom - Note: if the zoom is too large, it will go outside of the viewport) */
  position: absolute;
  display: block;
  margin-top: -50px;
  width: 15%;
}
</style>
    <!-- Cart Start -->
    <div class="container-fluid pt-5">
        <div class="row px-xl-5 mt-5">
            <?php if (empty($this->cart->contents())) { ?>
                <div class="col-lg-12 table-responsive mb-5 overflow-hidden">
                    <table class="table table-bordered text-center justify-content-center mb-0">
                        <tbody>
                            <img class="px-3 mx-auto d-block" src="<?php echo base_url('assets/user/images/empty_cart.jpg');?>" alt="" width="500px"><br>
                            <h6 class="font-weight m-0 text-center" style="font-size: 20px;">Oops! Anda belum memasukkan produk ke keranjang.</h6>
                        </tbody>
                    </table>
                </div>
            <?php } else {?>
            <div class="col-lg-8 table-responsive mb-5 overflow-hidden">
                <table class="table table-bordered text-center mb-0">

                    <thead class="bg-secondary text-dark">
                        <tr>
                            <th>Produk</th>
                            <th>Harga</th>
                            <th>Jumlah</th>
                            <th>Total</th>
                            <th>Hapus</th>
                        </tr>
                    </thead>
                    <tbody class="align-middle">
                    <?php $i = 1;?>
                    <?php foreach ($cartItems as $item) { ?>
                        <tr>
                        <input name="rowid" type="hidden" class="form-control form-control-sm bg-secondary text-center" value="<?php echo $item['rowid']; ?>">
                            <td align="left" class="align-middle"><img class="zoom" src="<?php echo base_url()?>upload/<?=$item['image']?>" alt="" width=30px>
                            <?php echo  $item['name']; ?></td>
                            <td class="align-middle"><?php echo $item['price']*1000; ?></td>
                            <td class="align-middle">
                                <div class="input-group quantity mx-auto" style="width: 100px;">
                                    <div class="input-group-btn">
                                        <button class="btn btn-sm btn-primary btn-minus">
                                            <i class="fa fa-minus"></i>
                                        </button>
                                    </div>
                                    <input name="[qty]" type="text" class="form-control form-control-sm bg-secondary text-center"
                                        value="<?php echo $item['qty']; ?>">
                                    <div class="input-group-btn">
                                        <button class="btn btn-sm btn-primary btn-plus">
                                            <i class="fa fa-plus"></i>
                                        </button>
                                    </div>
                                </div>
                            </td>
                            <td class="align-middle"><?php echo $item["price"] * $item["qty"] * 1000; ?></td>
                            <td class="align-middle">
                                <a href="<?php echo site_url('home/delete_cart/' . $item['rowid']);?>"><button class="btn btn-sm btn-primary"><i class="fa fa-times"></i></button></a>
                            </td>
                        </tr>
                        <?php $i++;?>
                        <?php } ?>
                    </tbody>
                </table>
                <!-- <div class="row justify-content-end">
                    <div class="col-lg-3 table-responsive mb-5">
                        <a href="<?php echo site_url('home/update_cart'. $item['rowid']);?>"><button class="btn btn-block btn-primary my-2 py-2">Update Cart</button></a>
                    </div>
                </div> -->
            </div>
            <div class="col-lg-4 table-responsive mb-5" >
                <div class="card border-secondary mb-5">
                    <div class="card-header bg-secondary border-0">
                        <h6 class="font-weight-semi-bold m-0 " style="font-size: 20px;">Pengiriman</h6>
                    </div>
                    <div class="card-body">
                        <div class="d-flex justify-content-between mb-0 pt-1">
                            <h6 class="font-weight-medium">Alamat Pengiriman :</h6>
                            <h6 class="font-weight-medium"><a href="#" data-toggle="tooltip" data-placement="top" title="Ganti Alamat"><?php echo $profil->address; ?></a></h6>
                        </div>
                        <div class="d-flex justify-content-between mb-0 pt-1 align-middle">
                            <h6 class="font-weight-medium">Jasa Pengiriman :</h6>
                            <h6 class="font-weight-medium">Ambil di toko</h6>
                        </div>
                    </div>
                    <div class="card-header bg-secondary border-0">
                        <h6 class="font-weight-semi-bold m-0 " style="font-size: 20px;">Metode Pembayaran</h6>
                    </div>
                    <div class="card-body">
                        <div class="d-flex justify-content-left pt-1">
                            <a href="" data-toggle="modal" data-target="#bca"><img class="px-3" src="<?php echo base_url('assets/user/images/bca.png');?>" alt="" width="100px"></a>
                            <a href="" data-toggle="modal" data-target="#dana"><img class="px-3" src="<?php echo base_url('assets/user/images/dana.png');?>" alt="" width="120px"></a>
                            <a href="" data-toggle="modal" data-target="#gopay"><img class="px-3" src="<?php echo base_url('assets/user/images/gopay.png');?>" alt="" width="120px"></a>
                        </div>
                    </div>
                    <div class="card-header bg-secondary border-0">
                        <h6 class="font-weight-semi-bold m-1" style="font-size: 20px;">Ringkasan Keranjang</h6>
                    </div>
                    <div class="card-body">
                        <div class="d-flex justify-content-between mb-3 pt-1">
                            <h6 class="font-weight-medium">Subtotal</h6>
                            <h6 class="font-weight-medium">Rp. <?php echo $this->cart->format_number($this->cart->total()*1000);?></h6>
                        </div>
                        <div class="d-flex justify-content-between">
                            <h6 class="font-weight-medium">Biaya pengiriman</h6>
                            <h6 class="font-weight-medium">free</h6>
                        </div>
                    </div>
                    <div class="card-footer border-secondary bg-transparent">
                        <div class="d-flex justify-content-between mt-2">
                            <h6 class="font-weight-bold" style="font-size: 20px;">Total</h6>
                            <h6 class="font-weight-bold" style="font-size: 20px;">Rp. <?php echo $this->cart->format_number($this->cart->total()*1000);?></h6>
                        </div>
                        <button class="btn btn-block btn-primary my-3 py-3"><a href="">Proceed To Checkout</a></button>
                    </div>
                </div>
            </div>
            <?php }?>
        </div>
    </div>
    <!-- Cart End -->

    <!-- BCA -->
    <div class="modal fade" id="bca" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h6 class="modal-title" id="exampleModalLongTitle" style="font-size: 20px;">Payment Method Transfer BCA</h6>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <h6 style="font-size: 20px;">Nomor Rekening : <b>XXXX887631</b> a.n Dzahin</h6><br>
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true"><b>ATM BCA</b></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false"><b>M-BCA</b></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false"><b>Klik BCA</b></a>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <br>
                            <h6>Melalui ATM</h6><br>
                            <h6>1. Silahkan masuk ke ATM BCA milik Anda.</h6>
                            <h6>2. Pada menu utama, pilih menu ”<b> Transaksi lainnya </b>“.</h6>
                            <h6>3. Pilih menu “Transfer” dan kemudian pilih “<b>Akun BCA</b>“.</h6>
                            <h6>4. Masukkan nomor rekening BCA & klik “<b>Lanjutkan</b>“.</h6>
                            <h6>5. Masukkan nominal pembayaran. Jika nominal yang dimasukkan tidak sama dengan jumlah yang ditagih, transaksi akan ditolak.</h6>
                            <h6>6. Periksa kembali rincian pembayaran kamu, lalu pilih Ya</h6>
                        </div>
                        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab"><br>
                            <h6>Melalui M-BCA</h6><br>
                            <h6>1. Buka aplikasi mobile banking BCA dan silahkan login.</h6>
                            <h6>2. Pilih menu Transfer.</h6>
                            <h6>3. Pilih menu “Transfer” dan kemudian pilih “<b>Akun BCA</b>“.</h6>
                            <h6>4. Masukkan nomor rekening BCA & klik “<b>Lanjutkan</b>“.</h6>
                            <h6>5. Masukkan nominal pembayaran. Jika nominal yang dimasukkan tidak sama dengan jumlah yang ditagih, transaksi akan ditolak.</h6>
                            <h6>6. Periksa kembali rincian pembayaran kamu, lalu pilih Ya</h6>
                        </div>
                        <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab"><br>
                            <h6>Melalui Klik BCA</h6><br>
                            <h6>1. Klik transfer.</h6>
                            <h6>2. Masukkan nomor rekening BCA & klik “<b>Lanjutkan</b>“.</h6>
                            <h6>3. Masukkan nominal pembayaran. Jika nominal yang dimasukkan tidak sama dengan jumlah yang ditagih, transaksi akan ditolak.</h6>
                            <h6>4. Periksa kembali rincian pembayaran kamu, lalu pilih Ya</h6>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-primary">Lanjutkan</button>
                </div>
            </div>
        </div>
    </div>
    <!-- /BCA -->

    <!-- DANA -->
    <div class="modal fade" id="dana" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h6 class="modal-title" id="exampleModalLongTitle" style="font-size: 20px;">Payment Method Transfer DANA</h6>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                <h6 style="font-size: 20px;">Nomor DANA : <b>XXXXXXXX9887</b> a.n Dzahin</h6><br>
                    <br>
                        <h6>Melalui Aplikasi DANA</h6><br>
                        <h6>1. Buka aplikasi DANA</h6>
                        <h6>2. Tap 'Kirim ke Teman'</h6>
                        <h6>3. Masukkan nomor tujuan</h6>
                        <h6>4. Masukkan nominal yang akan dikirimkan</h6>
                        <h6>5. Pilih metode pembayaran menggunakan saldo DANA</h6>
                        <h6>6. Pastikan nomor dan jumlah transfer sudah sesuai</h6>
                        <h6>7. Tap 'Bayar'</h6>
                        <h6>8. Masukkan PIN DANA</h6>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-primary">Lanjutkan</button>
                </div>
            </div>
        </div>
    </div>
    <!-- /DANA -->

    <!-- GOPAY -->
    <div class="modal fade" id="gopay" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h6 class="modal-title" id="exampleModalLongTitle" style="font-size: 20px;">Payment Method Transfer GOPAY</h6>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                <h6 style="font-size: 20px;">Nomor GOPAY : <b>XXXXXXXX9887</b> a.n Dzahin</h6><br>
                    <br>
                        <h6>Melalui Aplikasi GOJEK</h6><br>
                        <h6>1. Buka aplikasi Gojek.</h6>
                        <h6>2. Klik menu GoPay, lalu klik Pay.</h6>
                        <h6>3. Masukkan atau pilih nama yang akan menerima uang di Halaman Pay and Send.</h6>
                        <h6>4. Masukkan nominal yang akan dikirimkan.</h6>
                        <h6>5. Tentukan jumlah yang akan dikirim.</h6>
                        <h6>6. Klik Confirm.</h6>
                        <h6>7. Tekan Confirm & Pay untuk melanjutkan.</h6>
                        <h6>8. Masukkan PIN GoPay kamu.</h6>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-primary">Lanjutkan</button>
                </div>
            </div>
        </div>
    </div>
    <!-- /GOPAY -->