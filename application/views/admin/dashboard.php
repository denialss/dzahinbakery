<!-- page content -->
<div class="right_col" role="main">

          <div class="row mt-4">
            <div class="col-md-12 col-sm-12 ">
              <div class="dashboard_graph">

                <div class="row mt-1">
                  <div class="col-12 text-center">
                    <div class="tile_count">
                      <div class="col-lg-3 col-sm-4  tile_stats_count">
                        <h5><i class="bi bi-person-fill"></i> Total User</h5>
                        <div class="count"><?php echo $user; ?></div>
                      </div>
                      <div class="col-lg-3 col-sm-4  tile_stats_count">
                        <h5 class="count_top"><i class="bi bi-box-seam-fill"></i> Total Produk</h5>
                        <div class="count"><?php echo $produk; ?></div>
                      </div>
                      <div class="col-lg-3 col-sm-4  tile_stats_count">
                        <h5 class="count_top"><i class="bi bi-basket3-fill"></i> Total Stok</h5>
                        <div class="count"><?php echo $stok; ?></div>
                      </div>
                      <div class="col-lg-3 col-sm-4  tile_stats_count">
                        <h5 class="count_top"><i class="bi bi-clipboard-check-fill"></i> Total Pesanan</h5>
                        <div class="count"><?php echo $pesanan; ?></div>
                      </div>
                    </div>
                  </div>
                </div>
                  
                <div class="row x_title">
                  <div class="col-md-6">
                    <h3>Grafik Penjualan</h3>
                  </div>
                </div>

                <div class="col-md-9 col-sm-9 ">
                  <div id="chart_plot_01" class="demo-placeholder"></div>
                </div>
                <div class="col-md-3 col-sm-3  bg-white">
                  <div class="x_title">
                    <h2>Produk Terlaris</h2>
                    <div class="clearfix"></div>
                  </div>

                  <div class="col-md-12 col-sm-12 ">
                    <div>
                      <p>Roti Bun</p>
                      <div class="">
                        <div class="progress progress_sm" style="width: 76%;">
                          <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="80"></div>
                        </div>
                      </div>
                    </div>
                    <div>
                      <p>Donat</p>
                      <div class="">
                        <div class="progress progress_sm" style="width: 76%;">
                          <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="60"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="clearfix"></div>
              </div>
            </div>

          </div>
          <br />

          <div class="row">

          </div>
        </div>
        <!-- /page content -->