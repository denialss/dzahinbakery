    <!-- Content Start -->
    <section class="subscribe">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-lg-8">
                    <div class="subscribe-content padding-large">
                        <div class="subscribe-header">
                            <h2 class="display-6 text-center">Kenikmatan pada setiap gigitan</h2>
                            <p class="text-center">Rasakan sentuhan inovatif dalam setiap rasa dan tekstur roti kami.
                                Dari varian klasik hingga kreasi unik kami, kami terus berinovasi untuk memberikan
                                pengalaman roti yang tak terlupakan. Temukan kelezatan baru yang menggoda dan jatuh
                                cinta pada cita rasa kami yang unik.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section id="latest-blog">
        <div class="container-fluid">
            <div class="row g-3 post-grid">
            <?php foreach ($detailProduk as $val) { ?>
                <div class="col-lg-4 col-md-6 col-sm-12 mb-5">
                    <div class="card-item">
                        <div class="card border-0 bg-transparent">
                            <div class="card-image">
                                <img src="<?php echo base_url()?>upload/<?=$val->foto?>" alt="" class="post-image img-fluid">
                            </div>
                        </div>
                        <div class="card-body p-0 mt-4">
                            <h3 class="card-title text-uppercase">
                                <a href="detail_produk.html"><?php echo $val->namaProduk; ?></a>
                            </h3>
                            <p>Rp.<?php echo $val->harga; ?></p>
                            <a href="<?php echo site_url('Produk/detail_produk/' . $val->idProduk);?>" class="btn btn-primary">Detail Produk</a>
                            <a href="<?php echo site_url('Produk/Cart/'. $val->idProduk);?>" class="btn btn-primary">Add to Cart</a>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </section>
    <!-- Contet End -->