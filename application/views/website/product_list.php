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
                    <a><?php echo $val->namaProduk; ?></a>
                </h3>
                <p><?php echo $val->namaKategori; ?></p>
                <p>Rp. <?php echo number_format($val->harga, 0); ?></p>
                <a href="<?php echo site_url('home/detail_produk/' . $val->idProduk);?>" class="btn btn-primary">Detail Produk</a>
                <a href="<?php echo site_url('home/add_cart/'. $val->idProduk);?>" class="btn btn-primary"><i class="bi bi-bag-plus-fill mr-1"></i> Add to Cart</a>
            </div>
        </div>
    </div>
<?php } ?>
