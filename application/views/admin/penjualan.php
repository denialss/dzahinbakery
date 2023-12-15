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
                                      <nav class="text-center mb-5" aria-label=" breadcrumb">
                                        <h3 class="breadcrumb-item" aria-current="page" style="font-size:20px;"><b>LAPORAN PENJUALAN</b></a>
                                      </nav>
                                      </thead>
                                      <tbody>
                                      <div class="col-md-6">
                                        <div class="card card-primary">
                                            <div class="card-header">
                                                <h3 class="card-title">Laporan Bulanan</h3>
                                                <!-- /.card-tools -->
                                            </div>
                                            <!-- /.card-header -->
                                            <div class="card-body">
                                                <?php echo form_open('admin/lap_bulanan') ?>
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label>Bulan</label>
                                                            <select name="bulan" class="form-control">
                                                                <?php
                                                                $mulai = 1;
                                                                for ($i = $mulai; $i < $mulai + 12; $i++) {
                                                                    echo '<option value="' . $i . '">' . $i . '</option>';
                                                                }
                                                                ?>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label>Tahun</label>
                                                            <select name="tahun" class="form-control">
                                                                <?php
                                                                $mulai = date('Y');
                                                                for ($i = $mulai; $i < $mulai + 7; $i++) {
                                                                    echo '<option value="' . $i . '">' . $i . '</option>';
                                                                }
                                                                ?>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12">
                                                        <div class="form-group">
                                                            <button type="submit" class="btn btn-success btn-block"><i class="fa fa-print"></i> Cetak Laporan</button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <?php echo form_close() ?>
                                            </div>
                                            <!-- /.card-body -->
                                        </div>
                                        <!-- /.card -->
                                    </div>

                                    <div class="col-md-6">
                                        <div class="card card-primary">
                                            <div class="card-header">
                                                <h3 class="card-title">Laporan Tahunan</h3>
                                                <!-- /.card-tools -->
                                            </div>
                                            <!-- /.card-header -->
                                            <div class="card-body">
                                                <?php echo form_open('admin/lap_tahunan') ?>
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <div class="form-group">
                                                            <label>Tahun</label>
                                                            <select name="tahun" class="form-control">
                                                                <?php
                                                                $mulai = date('Y');
                                                                for ($i = $mulai; $i < $mulai + 7; $i++) {
                                                                    echo '<option value="' . $i . '">' . $i . '</option>';
                                                                }
                                                                ?>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12">
                                                        <div class="form-group">
                                                            <button type="submit" class="btn btn-success btn-block"><i class="fa fa-print"></i> Cetak Laporan</button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <?php echo form_close() ?>
                                            </div>
                                            <!-- /.card-body -->
                                        </div>
                                        <!-- /.card -->
                                    </div>
                                      </tbody>
                                  </table>
                                </div>
                            </div>

                                      

                        <!-- taruh disini semua -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>