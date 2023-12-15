<div class="container-fluid pt-5">
        <div class="row px-xl-5 mt-4 justify-content-center">
            <div class="col-lg-10 table-responsive mb-5 overflow-hidden">
                <div class="card">
                    <h6 style="font-size:20px;"class="card-header bg-secondary text-center">Informasi Pesanan</h6>
                    <div class="card-body">
                        <table class="table-secondary table-bordered border-primary col-lg-12">
                            <tr>
                                <th width="200px">No Order</th>
                                <th>:</th>
                                <th><?= $pesanan->noPesanan ?></th>
                            </tr>
                            <tr>
                                <th>Nama</th>
                                <th>:</th>
                                <th><?= $pesanan->namaPenerima ?></th>
                            </tr>
                            <tr>
                                <th>Alamat</th>
                                <th>:</th>
                                <th><?= $pesanan->alamat ?></th>
                            </tr>
                            <tr>
                                <th>No Telpon</th>
                                <th>:</th>
                                <th><?= $pesanan->noPenerima ?></th>
                            </tr>
                            <tr>
                                <th>Total Bayar</th>
                                <th>:</th>
                                <th>Rp. <?= number_format($pesanan->total_bayar, 0) ?></th>
                            </tr>

                            <tr>
                                <th>Status Pesanan</th>
                                <th>:</th>
                                <th><?php
                                    if ($pesanan->statusPembayaran == 0) {
                                        echo '<b>Menunggu Verifkasi Admin</b>';
                                    } elseif ($pesanan->statusPembayaran == 1) {
                                        echo '<b>Pesanan Diproses</b>';
                                    } elseif ($pesanan->statusPembayaran == 2) {
                                        echo '<b>Pesanan Dikirim</b>';
                                    } else {
                                        echo '<b>Pesanan Diterima</b';
                                    }
                                    ?></th>
                            </tr>

                        </table>
                    </div>
                </div>
                <div class="card">
                    <h6 style="font-size:20px;"class="card-header bg-secondary text-center">Produk yang dibeli</h6>
                    <div class="card-body">
                        <table class="table-secondary table-bordered col-lg-12">
                            <tr>
                                <th>No</th>
                                <th>Nama Barang</th>
                                <th>Harga</th>
                                <th>Qty</th>
                                <th>Total Harga</th>
                            </tr>
                            <?php $no = 1;
                            foreach ($produk as $key => $value) { ?>
                                <tr>
                                    <td><?= $no++ ?></td>
                                    <td><?= $value->namaProduk ?></td>
                                    <td><?= $value->harga ?></td>
                                    <td><?= $value->qty ?></td>
                                    <td><?php
                                        $total_harga = $value->harga * $value->qty;
                                        echo $total_harga;
                                        ?></td>
                                </tr>
                            <?php } ?>
                        </table>
                    </div>
                </div>
            

            </div>
        </div>
</div>

                            