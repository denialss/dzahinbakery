    <!-- Cart Start -->
    <div class="container-fluid pt-5">
        <div class="row px-xl-5 mt-4">
            <div class="col-lg-4 table-responsive mb-5 overflow-hidden position-fixed end-0 top-0 mt-5 py-4 mr-4">
                    <div class="card border-secondary mb-5">
                            <div class="card-header bg-secondary border-0">
                                <h6 class="font-weight-semi-bold m-0 " style="font-size: 20px;">Keranjang Anda</h6>
                            </div>
                            <div class="card-body">
                                <?php if($this->cart->total_items() > 0){ 
                                    $tot_berat = 0;

                                    foreach($cartItems as $item){ 
                                        $berat = $item['qty'] * $item['berat'];
                                        $tot_berat = $tot_berat + $berat;
                                    ?>
                                <li class="list-group-item d-flex justify-content-between lh-condensed">
                                    <div>
                                        <h6 class="my-0"><?php echo $item["name"]; ?></h6>
                                        <small class="text-muted">Rp. <?php echo $this->cart->format_number($item['price']);?> X <?php echo $item["qty"]; ?> (<?php echo $item["berat"]; ?> gram)</small>
                                    </div>
                                    <span class="text-muted">Rp. <?php echo $this->cart->format_number($item['subtotal']);?></span>
                                </li>
                                
                                            <?php } }else{ ?>
                                <li class="list-group-item d-flex justify-content-between lh-condensed">
                                    <p>No items in your cart...</p>
                                </li>
                                <?php } ?>
                                <br>
                                    <div class="col-12 d-flex justify-content-between">
                                        <span>Subtotal</span>
                                        <strong>Rp. <?php echo $this->cart->format_number($this->cart->total());?></strong>
                                    </div>
                                    <div class="col-12 d-flex justify-content-between">
                                        <span>Total Berat</span>
                                        <span><?php echo $tot_berat; ?> gram</span>
                                    </div>
                                    <div class="col-12 d-flex justify-content-between">
                                        <span>Biaya Pengiriman</span>
                                        <strong id="ongkir"></strong>
                                    </div>
                                    <hr>
                                    <div class="col-12 d-flex justify-content-between">
                                        <span>Total</span>
                                        <strong id="total_bayar"></strong>
                                    </div>
                            </div>
                            
                    </div>
            </div>
            <div class="col-lg-8 table-responsive mb-5 overflow-hidden">
                <div class="card border-secondary mb-5">

                        <?php
                        echo form_open_multipart('home/checkout_action');
                        $noPesanan = date('Ymd') . strtoupper(random_string('alnum', 8));
                        ?>
                        <div class="card-header bg-secondary border-0">
                            <h6 class="font-weight-semi-bold m-0 " style="font-size: 20px;">Alamat Pengiriman</h6>
                        </div>
                        <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6 form-group mb-3">
                                        <label>Nama Penerima</label>
                                        <input name="namaPenerima" class="form-control" type="text" value="<?php echo $profil->name; ?>" required='required'>
                                    </div>
                                    <div class="col-md-6 form-group mb-3">
                                        <label>Telepon</label>
                                        <input name="noPenerima" class="form-control" type="text" value="<?php echo $profil->phone; ?>" required='required'>
                                    </div>
                                    <div class="col-md-12 form-group mb-3">
                                        <label for="alamatuhuy">Alamat</label>
                                        <textarea name="alamat" rows="3" class="form-control" id="alamatuhuy" type="text" value="<?php echo $profil->address; ?>" required='required'></textarea>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <div class="form-group">
                                            <label>Provinsi</label>
                                                <select class="form-control" name="provinsi" required='required'></select> 
                                        </div>
                                        
                                    </div>
                                    <div class="col-md-6 form-group mb-3">
                                        <div class="form-group">
                                        <label>Kota/Kabupaten</label>
                                            <select class="form-control" name="kota" required='required'></select> 
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <div class="card-header bg-secondary border-0">
                            <h6 class="font-weight-semi-bold m-0 " style="font-size: 20px;">Jasa Pengiriman</h6>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6 form-group mb-3">
                                    <label>Jasa Pengiriman</label>
                                        <select class="form-control" name="ekspedisi" required='required'></select>
                                </div>
                                <div class="col-md-6 form-group mb-3">
                                    <label>Paket Ekspedisi</label>
                                        <select name="paket" class="form-control" required='required'>
                                            <option value=""></option>
                                        </select>
                                </div>
                            </div>
                        </div>
                        <div class="card-header bg-secondary border-0">
                            <h6 class="font-weight-semi-bold m-0 " style="font-size: 20px;">Metode Pembayaran</h6>
                        </div>
                        <div class="card-body">
                            <div class="d-flex justify-content-around pt-1">
                                <a href="" data-toggle="modal" data-target="#bca"><img class="px-0" src="<?php echo base_url('assets/user/images/bca.png');?>" alt="" width="100px"></a>
                                <a href="" data-toggle="modal" data-target="#dana"><img class="px-0" src="<?php echo base_url('assets/user/images/dana.png');?>" alt="" width="120px"></a>
                                <a href="" data-toggle="modal" data-target="#qris"><img class="px-0" src="<?php echo base_url('assets/user/images/qris.png');?>" alt="" width="130px"></a>
                                <a href="" data-toggle="modal" data-target="#gopay"><img class="px-0" src="<?php echo base_url('assets/user/images/gopay.png');?>" alt="" width="120px"></a>
                            </div><br>
                            <div>
                                <label for="formFile" class="form-label">Upload Bukti Pembayaran</label>
                                    <input name="buktiPembayaran" class="form-control" type="file" id="formFile" required='required'>
                                    <br>
                                    <label>Atas Nama :</label>
                                        <input name="atasNama" class="form-control" type="text" value="<?php echo $profil->name; ?>" required='required'>
                            </div>
                            <br>
                            <!-- Simpan Transaksi -->
                            <input name="noPesanan" value="<?= $noPesanan ?>" hidden>
                            <input name="estimasi" hidden>
                            <input name="ongkir" hidden>
                            <input name="berat" value="<?= $tot_berat ?>" hidden>
                            <input name="subtotal" value="<?= $this->cart->total() ?>" hidden>
                            <input name="total_bayar" hidden>
                            <!-- end Simpan Transaksi -->
                            <!-- Simpan Rinci Transaksi -->
                            <?php
                            $i = 1;
                            foreach ($this->cart->contents() as $item) {
                                echo form_hidden('qty' . $i++, $item['qty']);
                                echo form_hidden('name', $item['name']);
                            }

                            ?>
                            <!-- end Simpan Rinci Transaksi -->
                            <button type="submit" class="btn btn-block btn-primary my-3 py-3 text-light">Checkout</button>

                        </div>
                        <?php echo form_close() ?>
                </div>
            </div>

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
            </div>
        </div>
    </div>
    <!-- /GOPAY -->

        <!-- QRIS -->
        <div class="modal fade" id="qris" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h6 class="modal-title" id="exampleModalLongTitle" style="font-size: 20px;">Payment Method Qris</h6>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                <h6 style="font-size: 20px;">Mohon maaf, saat ini pembayaran menggunakan qris belum tersedia.</h6>
                </div>
            </div>
        </div>
    </div>
    <!-- /QRIS -->

    <script>
        $(document).ready(function() {
          
          // Masukkan data provinsi
            $.ajax({
                type: "POST",
                url: "<?= base_url('rajaongkir/provinsi') ?>",
                success: function(hasil_provinsi){
                    // console.log(hasil_provinsi);
                    $("select[name=provinsi]").html(hasil_provinsi);
                }
            });

          // Masukkan data kota
            $("select[name=provinsi]").on("change", function(){
              var id_provinsi_terpilih = $("option:selected",this).attr("id_provinsi");
              $.ajax({
                type: "POST",
                url: "<?= base_url('rajaongkir/kota') ?>",
                data : 'id_provinsi=' + id_provinsi_terpilih,
                success: function(hasil_kota){
                  $("select[name=kota]").html(hasil_kota);
                }
              });
            });

            // Masukkan data Ekspedisi
            $("select[name=kota]").on("change", function(){
              $.ajax({
                type: "POST",
                url: "<?= base_url('rajaongkir/ekspedisi') ?>",
                success: function(hasil_ekspedisi){
                  $("select[name=ekspedisi]").html(hasil_ekspedisi);
                }
              });
            });

            // Mendapatkan data Paket
            $("select[name=ekspedisi]").on("change", function(){
              // Mendapatkan ekspedisi terpilih
              var ekspedisi_terpilih = $("select[name=ekspedisi]").val()
              // Mendapatkan id kota tujuan terpilih
              var id_kota_tujuan_terpilih = $("option:selected", "select[name=kota]").attr('id_kota');
              // Mendapatkan data berat produk
              var berat = <?php echo $tot_berat?>;

              $.ajax({
                type: "POST",
                url: "<?= base_url('rajaongkir/paket') ?>",
                data: 'ekspedisi=' + ekspedisi_terpilih + '&id_kota=' + id_kota_tujuan_terpilih + '&berat=' + berat,
                success: function(hasil_paket){
                //console.log(hasil_paket);
                  $("select[name=paket]").html(hasil_paket);
                }
              });
            });

            $("select[name=paket]").on("change", function() {
              //menampilkan ongkir
              var dataongkir = $("option:selected", this).attr('ongkir');
              var reverse = dataongkir.toString().split('').reverse().join(''),
                ribuan_ongkir = reverse.match(/\d{1,3}/g);
              ribuan_ongkir = ribuan_ongkir.join(',').split('').reverse().join('');

              $("#ongkir").html("Rp. " + ribuan_ongkir)
              //menghitung totol Bayar
              var data_total_bayar = parseInt(dataongkir) + parseInt(<?= $this->cart->total() ?>);
              var reverse2 = data_total_bayar.toString().split('').reverse().join(''),
                ribuan_total_bayar = reverse2.match(/\d{1,3}/g);
              ribuan_total_bayar = ribuan_total_bayar.join(',').split('').reverse().join('');
              $("#total_bayar").html("Rp. " + ribuan_total_bayar);

              //estimasi dan ongkir
              var estimasi = $("option:selected", this).attr('estimasi');
              $("input[name=estimasi]").val(estimasi);
              $("input[name=ongkir]").val(dataongkir);
              $("input[name=total_bayar]").val(data_total_bayar);
            });

        });
   </script>
