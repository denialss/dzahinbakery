<div class="right_col" role="main">
    <div class="row mt-5">
        <div class="col-md-12 col-sm-12">
            <div class="dashboard_graph">
                <div class="row justify-content-center">
                    <div class="col-md-12">
                        <nav aria-label=" breadcrumb">
                            <ol class="breadcrumb justify-content-center">
                                <a class="breadcrumb-item" aria-current="page" style="font-size:20px;"><b>DAFTAR PEMESANAN</b></a>
                            </ol>
                        </nav>
                    </div>
                    <div class="col-md-12">
                        <div class="row justify-content-center">
                            <div class="col-md-12">
                                <div class="table-responsive custom-table-responsive">
                                  <table class="table custom-table">
                                      <thead>
                                      <tr>
                                          <th scope="col" class="align-text-top">
                                          <label class="control control--checkbox">
                                              <input type="checkbox"  class="js-check-all"/>
                                              <div class="control__indicator"></div>
                                          </label>
                                          </th>
                                          <th scope="col" class="align-middle">id Pesanan</th>
                                          <th scope="col" class="align-middle">Tanggal Pemesanan</th>
                                          <th scope="col" class="align-middle">Status Pembayaran</th>
                                          <th scope="col" class="align-middle">Status Pesanan</th>
                                          <th scope="col" class="align-middle">Input Resi</th>
                                      </tr>
                                      </thead>
                                      <tbody>
                                      <tr scope="row">
                                          <th scope="row" class="align-middle">
                                          <label class="control control--checkbox">
                                            <input type="checkbox"/>
                                            <div class="control__indicator"></div>
                                          </label>
                                          </th>
                                          <td class="align-middle"> <button type="text"  class="btn btn-light" data-toggle="tooltip" data-placement="top" title="Lihat Detail Pesanan"><a href="#" data-toggle="modal"  data-target="#lihatpesanan">#123</a></button>
                                          </td>
                                          <td class="align-middle"> HUHAH</td>
                                          <td class="align-middle">awd</td>
                                          <td class="align-middle">tes</td>
                                          <td class="align-middle">tes2</td>
                                      </tr>
                                      <tr class="spacer"><td colspan="100"></td></tr>
                                      </tbody>
                                  </table>
                                </div>
                            </div>
                        </div>

                        <!-- Lihat Pesanan -->
                        <div class="modal fade bd-example-modal-lg" id="lihatpesanan" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLongTitle">Detail Pesanan</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <br>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-sm-4 invoice-col">
                                        Penerima :
                                                <address>
                                                <strong>John Doe</strong>
                                                    <br>795 Freedom Ave, Suite 600
                                                    <br>New York, CA 94107
                                                    <br>Phone: 1 (804) 123-9876
                                                    <br>Email: jon@ironadmin.com
                                                </address>
                                        </div>
                                        <div class="col">
                                        <strong>ID PESANAN : #123</strong>
                                        </div>
                                    </div>
                                </div>
                                <table class="table">
                                    <thead>
                                        <tr>
                                        <th scope="col">Qty</th>
                                        <th scope="col">Nama Produk</th>
                                        <th scope="col">Subtotal</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                        <th scope="row">30</th>
                                        <td>Kue Bulan</td>
                                        <td>30.000</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <hr>

                                <!-- subtotal -->
                                <div class="col-md-4">
                                    <div class="table-responsive">
                                        <table class="table">
                                        <tbody>
                                            <tr>
                                            <th style="width:50%">Subtotal:</th>
                                            <td>$250.30</td>
                                            </tr>
                                            <tr>
                                            <th>Tax (9.3%)</th>
                                            <td>$10.34</td>
                                            </tr>
                                            <tr>
                                            <th>Shipping:</th>
                                            <td>$5.80</td>
                                            </tr>
                                            <tr>
                                            <th>Total:</th>
                                            <td>$265.24</td>
                                            </tr>
                                        </tbody>
                                        </table>
                                    </div>
                                </div>
                                <!-- /subtotal -->

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">Save changes</button>
                            </div>
                            </div>
                        </div>
                        </div>
                        <!-- /Lihat Pesanan -->       

                        <!-- taruh disini semua -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>