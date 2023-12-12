<!-- data CART -->

<style>
.zoom {
  transition: transform .2s; /* Animation */
}

.zoom:hover {
  transform: scale(1.2); /* (150% zoom - Note: if the zoom is too large, it will go outside of the viewport) */
  position: sticky;
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
                <table class="table table-bordered text-center mb-5">

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
                            <td class="align-middle"> <?php echo number_format($item['price'], 0); ?></td>
                            <td class="align-middle">
                                <div class="input-group quantity mx-auto" style="width: 100px;">
                                    <div class="input-group-btn">
                                        <button class="btn btn-sm btn-primary btn-minus">
                                            <i class="fa fa-minus"></i>
                                        </button>
                                    </div>
                                    <input name="qty" type="text" class="form-control form-control-sm bg-secondary text-center"
                                        value="<?php echo $item['qty']; ?>">
                                    <div class="input-group-btn">
                                        <button class="btn btn-sm btn-primary btn-plus">
                                            <i class="fa fa-plus"></i>
                                        </button>
                                    </div>
                                </div>
                            </td>
                            <td class="align-middle"> <?php echo number_format($item['price']* $item["qty"] , 0); ?></td>
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
            <div class="col-lg-4 table-responsive mb-5 position-fixed end-0 top-0 mt-5 py-5 mr-4" >
                <div class="card border-secondary mb-5">
                    <div class="card-header bg-secondary border-0">
                        <h6 class="font-weight-semi-bold m-1" style="font-size: 20px;">Ringkasan Keranjang</h6>
                    </div>
                    <div class="card-body">
                        <div class="d-flex justify-content-between mb-3 pt-1">
                            <h6 class="font-weight-medium">Subtotal</h6>
                            <h6 class="font-weight-medium">Rp. <?php echo $this->cart->format_number($this->cart->total());?></h6>
                        </div>
                        <div class="d-flex justify-content-between">
                            <h6 class="font-weight-medium">Biaya pengiriman</h6>
                            <h6 class="font-weight-medium">?</h6>
                        </div>
                    </div>
                    <div class="card-footer border-secondary bg-transparent">
                        <div class="d-flex justify-content-between mt-2">
                            <h6 class="font-weight-bold" style="font-size: 20px;">Total</h6>
                            <h6 class="font-weight-bold" style="font-size: 20px;">Rp. <?php echo $this->cart->format_number($this->cart->total());?></h6>
                        </div>
                        <a type="submit" class="btn btn-block btn-primary my-3 py-3 text-light" href="<?php echo site_url('home/checkout');?>">Checkout</a>
                    </div>
                </div>
            </div>
            <?php }?>
        </div>
    </div>
    <!-- Cart End -->