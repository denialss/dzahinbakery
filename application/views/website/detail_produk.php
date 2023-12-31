<!-- Shop Detail Start -->
<div class="container-fluid py-5">
        <div class="row px-xl-5 mt-5">
            <div class="col-lg-5 pb-5">
                <div id="product-carousel" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner border">
                        <div class="carousel-item active">
                            <img class="w-100 h-100" src="<?php echo base_url()?>upload/<?=$produk->foto?>" alt="Image">
                        </div>
                        <!-- <div class="carousel-item">
                            <img class="w-100 h-100" src="<?php echo base_url('assets/user/images/slider-blueberry1.jpg');?>" alt="Image">
                        </div>
                        <div class="carousel-item">
                            <img class="w-100 h-100" src="<?php echo base_url('assets/user/images/slider-donat2.jpg');?>" alt="Image">
                        </div> -->

                    </div>
                    <a class="carousel-control-prev" href="#product-carousel" data-slide="prev">
                        <i class="fa fa-2x fa-angle-left text-dark"></i>
                    </a>
                    <a class="carousel-control-next" href="#product-carousel" data-slide="next">
                        <i class="fa fa-2x fa-angle-right text-dark"></i>
                    </a>
                </div>
            </div>

            <div class="col-lg-7 pb-5">
                <h3 class="font-weight-semi-bold"><?php echo $produk->namaProduk; ?></h3>
                <h3 class="font-weight-semi-bold"><?php echo $produk->namaKategori; ?></h3>
                <h3 class="font-weight-semi-bold mb-4">Rp. <?php echo number_format($produk->harga, 0); ?></h3>
                <p class="mb-4"><?php echo $produk->deskripsi_produk; ?></p>


                <div class="d-flex align-items-center mb-4 pt-2">
                    <a class="btn btn-primary px-3" href="<?php echo site_url('home/add_cart/'. $produk->idProduk);?>"><i class="bi bi-bag-plus-fill mr-1"></i> Add To Cart</a>
                </div>
            </div>
        </div>
</div>
    <!-- Shop Detail End -->
