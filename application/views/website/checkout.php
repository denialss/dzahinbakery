    <!-- Cart Start -->
    <div class="container-fluid pt-5">
        <div class="row px-xl-5 mt-4">
            <div class="col-lg-8 table-responsive mb-5 overflow-hidden">
                <div class="card border-secondary mb-5">
                        <div class="card-header bg-secondary border-0">
                            <h6 class="font-weight-semi-bold m-0 " style="font-size: 20px;">Alamat Pengiriman</h6>
                        </div>
                        <div class="card-body">
                            <div class=" m-2 align-middle">
                                <div class="row">
                                    <div class="col-md-6 form-group mb-3">
                                        <label>Nama Penerima</label>
                                        <input name="name" class="form-control" type="text" value="<?php echo $profil->name; ?>">
                                    </div>
                                    <div class="col-md-6 form-group mb-3">
                                        <label>Telepon</label>
                                        <input name="phone" class="form-control" type="text" value="<?php echo $profil->phone; ?>">
                                    </div>
                                    <div class="col-md-12 form-group mb-3">
                                        <label>Alamat</label>
                                        <textarea rows="3" class="form-control" type="text" value="<?php echo $profil->address; ?>"></textarea>
                                    </div>
                                    <div class="col-md-6 form-group mb-3">
                                        <label>Provinsi</label>
                                        <select class="form-control" id="provinsi">
                                            <option value=""> Pilih Provinsi </option>
                                        </select>
                                    </div>
                                    <div class="col-md-6 form-group mb-3">
                                        <label>Kota/Kabupaten</label>
                                        <select class="form-control" id="kota" disabled>
                                            <option value=""> Pilih Kota </option>
                                        </select>
                                    </div>
                                </div>
                                <!-- <h6 class="font-weight-medium">Nama Penerima :<?php echo $profil->name; ?></h6>
                                <h6 class="font-weight-medium">Nomor Telepon :<?php echo $profil->phone; ?></h6>
                                <h6 class="font-weight-medium">Alamat Penerima :<?php echo $profil->address; ?></h6> -->
                                <!-- <h6 class="font-weight-medium">Ambil di toko
                                    <a href="#"  data-toggle="modal" data-target="#pengiriman">
                                        <span class="position-absolute translate-middle p-0 bg-white rounded-circle fa fa-info-circle"></span>
                                    </a>
                                </h6> -->
                            </div>
                        </div>
                        <div class="card-header bg-secondary border-0">
                            <h6 class="font-weight-semi-bold m-0 " style="font-size: 20px;">Jasa Pengiriman</h6>
                        </div>
                        <div class="card-body">
                            <div class=" m-2 align-middle">
                                <div class="row">
                                    <div class="col-md-6 form-group mb-3">
                                        <label>Jasa Pengiriman</label>
                                        <select class="form-control" id="kurir" disabled>
                                            <option value=""> Pilih Kurir </option>
                                            <option value="jne">JNE</option>
                                            <option value="tiki">TIKI</option>
                                            <option value="pos">POS Indonesia</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6 form-group mb-3">
                                        <label>Paket Ekspedisi</label>
                                        <select id="paket" class="form-control" disabled>
                                            <option value=""> Pilih Paket </option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-header bg-secondary border-0">
                            <h6 class="font-weight-semi-bold m-0 " style="font-size: 20px;">Metode Pembayaran</h6>
                        </div>
                        <div class="card-body">
                            <div class="d-flex pt-1 justify-content-around">
                                <a href="" data-toggle="modal" data-target="#bca"><img class="px-0" src="<?php echo base_url('assets/user/images/bca.png');?>" alt="" width="100px"></a>
                                <a href="" data-toggle="modal" data-target="#dana"><img class="px-0" src="<?php echo base_url('assets/user/images/dana.png');?>" alt="" width="120px"></a>
                                <a href="" data-toggle="modal" data-target=""><img class="px-0" src="<?php echo base_url('assets/user/images/qris.png');?>" alt="" width="130px"></a>
                                 <a href="" data-toggle="modal" data-target="#gopay"><img class="px-0" src="<?php echo base_url('assets/user/images/gopay.png');?>" alt="" width="130px"></a>
                            </div><hr>
                            <div>
                                <label for="formFile" class="form-label">Upload Bukti Pembayaran</label>
                                    <input class="form-control" type="file" id="formFile" required='required'>
                            </div><br>
                            <div class="d-flex pt-1 justify-content-end">
                            <a class="btn btn-block btn-primary py-3 text-light" href="<?php echo site_url('home/produk');?>">Checkout</a>
                            </div>
                        </div>
                </div>
            </div>
            <div class="col-lg-4 table-responsive mb-5 overflow-hidden position-fixed end-0 top-0 mt-5 py-4 mr-4">
                <div class="card border-secondary mb-5">
                        <div class="card-header bg-secondary border-0">
                            <h6 class="font-weight-semi-bold m-0 " style="font-size: 20px;">Keranjang Anda</h6>
                        </div>
                        <div class="card-body">
                            <?php if($this->cart->total_items() > 0){ foreach($cartItems as $item){ ?>
                            <li class="list-group-item d-flex justify-content-between lh-condensed">
                                <div>
                                    <h6 class="my-0"><?php echo $item["name"]; ?></h6>
                                    <small class="text-muted">Rp. <?php echo $this->cart->format_number($item['price']*1000)?> X <?php echo $item["qty"]; ?></small>
                                </div>
                                <span class="text-muted">Rp. <?php echo $this->cart->format_number($item['subtotal']*1000);?></span>
                            </li>
                                        <?php } }else{ ?>
                            <li class="list-group-item d-flex justify-content-between lh-condensed">
                                <p>No items in your cart...</p>
                            </li>
                            <?php } ?><br>
                            <div class="col-12 d-flex justify-content-between">
                                <span>Subtotal</span>
                                <strong>Rp. <?php echo $this->cart->format_number($this->cart->total()*1000);?></strong>
                            </div>
                            <div class="col-12 d-flex justify-content-between">
                                <span>Biaya Pengiriman</span>
                                <strong>Rp. 20,000.00</strong>
                            </div>
                            <hr>
                            <div class="col-12 d-flex justify-content-between">
                                <span>Total</span>
                                <strong>Rp. 60,000.00</strong>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Cart End -->

    <!-- Modal Info Pengiriman -->
    <div class="modal" id="pengiriman" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Informasi Pengiriman</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Mohon maaf, saat ini kami hanya menerima pengiriman ambil di toko.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
            </div>
        </div>
    </div>
    <!-- /Modal Info Pengiriman -->

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
                    <h6 style="font-size: 20px;">Nomor Rekening : <b>6975346777</b> a.n Ananto Romadoni D</h6><br>
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
                    <a class="btn btn-primary text-light" href="">Lanjutkan</a>
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
                <h6 style="font-size: 20px;">Nomor DANA : <b>081802236490</b> a.n Hafid Hanifan</h6><br>
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
                    <a class="btn btn-primary text-light" href="">Lanjutkan</a>
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
                <h6 style="font-size: 20px;">Nomor GOPAY : <b>081802236490</b> a.n Hafid Hanifan</h6><br>
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
                    <a class="btn btn-primary text-light" href="">Lanjutkan</a>
                </div>
            </div>
        </div>
    </div>
    <!-- /GOPAY -->