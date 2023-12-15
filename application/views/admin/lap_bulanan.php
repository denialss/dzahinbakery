<div class="right_col" role="main">
    <div class="row mt-5">
        <div class="col-md-12 col-sm-12">
            <div class="dashboard_graph">
                <div class="row justify-content-center">
                    <div class="col-md-12">
                        <div class="row justify-content-center">

                                    <div class="col-12">
                                        <!-- Main content -->
                                        <div id="print_bulanan" class="invoice p-3 mb-3">
                                            <!-- title row -->
                                            <div class="row">
                                                <div class="col-12">
                                                    <h4>
                                                        <i class="fas fa-shopping-cart"></i> <?= $title ?>
                                                        <small class="float-right">Bulan: <?= $bulan ?> Tahun: <?= $tahun ?></small>
                                                    </h4>
                                                </div>
                                                <!-- /.col -->
                                            </div>


                                            <!-- Table row -->
                                            <div class="row">
                                                <div class="col-12 table-responsive">
                                                    <table class="table table-striped">
                                                        <thead>
                                                            <tr>
                                                                <th>#</th>
                                                                <th>No Order</th>
                                                                <th>Tanggal</th>
                                                                <th>Total</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <?php $no = 1;
                                                            $subtotal = 0;
                                                            foreach ($laporan as $key => $value) {
                                                                $subtotal = $subtotal + $value->total_bayar;
                                                            ?>
                                                                <tr>
                                                                    <td><?= $no++ ?></td>
                                                                    <td><?= $value->noPesanan ?></td>
                                                                    <td><?= $value->tglPesanan ?></td>
                                                                    <td>Rp. <?= number_format($value->total_bayar, 0) ?></td>
                                                                </tr>
                                                            <?php } ?>

                                                        </tbody>
                                                    </table>
                                                    <h3> Total Penjualan : Rp. <?= number_format($subtotal, 0) ?></h3>
                                                </div>
                                                
                                                <!-- /.col -->
                                            </div>
                                            <!-- /.row -->
                                        </div>
                                        <button class="btn btn-success float-right" onclick="printContent('print_bulanan')"><i class="bi bi-print"></i> Print</button>

                                        <!-- /.invoice -->
                                    </div><!-- /.col -->
                                    </div><!-- /.row -->

                                    <script>
                                        function printContent(el)/*el di sini sebagai perwakilan dari id-id di bawah */{
                                            var restorepage = document.body.innerHTML;
                                            var printcontent = document.getElementById(el).innerHTML;
                                            document.body.innerHTML = printcontent;
                                            window.print();/*fungsi untuk mencetak*/
                                            document.body.innerHTML = restorepage;
                                        }
                                    </script>

                        <!-- taruh disini semua -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>