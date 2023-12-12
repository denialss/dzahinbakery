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
                                      <nav class="text-center" aria-label=" breadcrumb">
                                        <a class="breadcrumb-item" aria-current="page" style="font-size:20px;"><b>DATA TOKO</b></a>
                                      </nav>
                                      </thead>
                                      <tbody><br>
                                        <div class="card-body">
                                            <form action="<?php echo site_url('admin/settings_action'); ?>" method="post">
                                                <div class="row">
                                                    <input type="hidden" name="idToko" value="<?php echo $settings->idToko; ?>">
                                                    <div class="col-md-6 form-group mb-3">
                                                        <label>Nama Toko</label>
                                                        <input name="namaToko" class="form-control" type="text" value="<?php echo $settings->namaToko; ?>">
                                                    </div>
                                                    <div class="col-md-6 form-group mb-3">
                                                        <label>Telepon</label>
                                                        <input name="telepon" class="form-control" type="text" value="<?php echo $settings->telepon; ?>">
                                                    </div>
                                                    <div class="col-md-6 mb-3">
                                                        <div class="form-group">
                                                            <label>Provinsi</label>
                                                                <select class="form-control" name="provinsi"></select> 
                                                        </div>
                                                        
                                                    </div>
                                                    <div class="col-md-6 form-group mb-3">
                                                        <div class="form-group">
                                                        <label>Kota/Kabupaten</label>
                                                            <select class="form-control" name="kota">
                                                                <option value="<?php echo $settings->lokasi; ?> "><?php echo $settings->lokasi; ?></option>
                                                            </select> 
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12 form-group mb-3">
                                                        <label>Alamat Toko</label>
                                                        <input name="alamat" class="form-control" type="text" value="<?php echo $settings->alamat; ?>">
                                                    </div>
                                                    <div class="col-md-12 form-group mb-3 d-flex flex-row-reverse">
                                                    <button type="submit" class="btn btn-success">Simpan</button>
                                                    </div>
                                                </div>
                                            </form>
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