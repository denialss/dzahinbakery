  <!-- Home Content Start -->
  <section id="billboard" class="overflow-hidden">
    <div class="swiper main-swiper">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <div class="container-fluid">
            <div class="row mt-4">
              <div class="col-md-12">
                <div class="banner-item"
                  style="background-image: url(assets/img/test.jpg); background-repeat: no-repeat; background-position: right; height: 682px;">
                  <div class="banner-content padding-large">
                    <h1 class="display-1 text-uppercase text-dark pb-2">Dzahin Bakery</h1>
                    <p class="">Dapatkan sensasi kelezatan sejati dengan setiap gigitan roti kami. Dibuat dengan
                      bahan-bahan berkualitas, setiap roti adalah perpaduan sempurna antara rasa dan tekstur. Mari
                      jelajahi dunia rasa yang tak terlupakan dan nikmati pengalaman menikmati roti terbaik bersama
                      kami.
                      <p />
                      <a href="<?php echo site_url('Produk');?>" class="btn btn-medium btn-arrow position-relative mt-5">
                        <span class="text-uppercase">Produk</span>
                        <svg class="arrow-right position-absolute" width="18" height="20">
                          <use xlink:href="#arrow-right"></use>
                        </svg>
                      </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
    <div class="swiper-pagination position-absolute"></div>
  </section>

  <section id="featured-products" class="product-store position-relative padding-large">
    <div class="container-fluid">
      <div class="row">
        <div class="display-header pb-3 d-flex justify-content-between flex-wrap col-md-12">
          <h2 class="display-2 text-dark text-uppercase">Produk Terbaru</h2>
          <a href="<?php echo site_url('Produk');?>" class="btn btn-medium btn-arrow btn-normal position-relative">
            <span class="text-uppercase">Lihat Semua</span>
            <svg class="arrow-right position-absolute" width="18" height="20">
              <use xlink:href="#arrow-right"></use>
            </svg>
          </a>
        </div>
      </div>
      <div class="row">
        <div id="featured-swiper" class="product-swiper col-md-12">
          <div class="swiper">
            <div class="swiper-wrapper">
            <?php foreach ($detailProduk as $val) { ?>
              <div class="swiper-slide">
                <div class="product-card image-zoom-effect link-effect d-flex flex-wrap">
                  <div class="image-holder">
                    <a href="<?php echo site_url('Produk/detail_produk/' . $val->idProduk);?>"><img src="<?php echo base_url()?>upload/<?=$val->foto?>" alt="product-item" class="product-image img-fluid"></a>
                  </div>
                  <div class="cart-concern">
                    <h3 class="card-title text-uppercase pt-3 text-primary">
                      <a href="<?php echo site_url('Produk/detail_produk/' . $val->idProduk);?>" class="text-primary"><?php echo $val->namaProduk; ?></a>
                    </h3>
                    <div class="cart-info">
                      <a class="pseudo-text-effect" href="<?php echo site_url('Produk/add_cart/'. $val->idProduk);?>" data-after="ADD TO CART"><span>Rp. <?php echo $val->harga; ?></span></a>
                    </div>
                  </div>
                </div>
              </div>
              <?php } ?>
            </div>
          </div>
          <div class="swiper-pagination text-center mt-5"></div>
        </div>
      </div>
    </div>
  </section>

  <section id="testimonials" class="position-relative">
    <div class="container">
      <div class="row">
        <div class="review-content position-relative">
          <div class="swiper testimonial-swiper">
            <div class="quotation text-center">
              <svg class="quote">
                <use xlink:href="#quote" />
              </svg>
            </div>
            <div class="swiper-wrapper">
              <div class="swiper-slide text-center d-flex justify-content-center">
                <div class="review-item col-md-10">
                  <i class="icon icon-review"></i>
                  <blockquote class="fs-4">“Roti bukan sekadar makanan, tetapi seni yang diciptakan dengan hati,
                    memuaskan rasa dan menyentuh jiwa.”</blockquote>
                  <div class="author-detail">
                    <div class="name text-primary text-uppercase pt-2">Septiana Laili</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="swiper-pagination text-center position-absolute"></div>
  </section>

  <section id="company-services" class="padding-large">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-3 col-md-6 pb-3">
          <div class="icon-box d-flex align-items-center">
            <div class="icon-box-icon pt-3 pe-3 pb-3 ps-3">
              <svg class="shipping-fast">
                <use xlink:href="#shipping-fast" />
              </svg>
            </div>
            <div class="icon-box-content ps-3">
              <h3 class="card-title text-uppercase text-dark">Pengiriman Cepat</h3>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 pb-3">
          <div class="icon-box d-flex align-items-center">
            <div class="icon-box-icon pt-3 pe-3 pb-3 ps-3">
              <svg class="shopping-cart">
                <use xlink:href="#shopping-cart" />
              </svg>
            </div>
            <div class="icon-box-content ps-3">
              <h3 class="card-title text-uppercase text-dark">Ambil di Toko / Antar</h3>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 pb-3">
          <div class="icon-box d-flex align-items-center">
            <div class="icon-box-icon pt-3 pe-3 pb-3 ps-3">
              <svg class="gift">
                <use xlink:href="#gift" />
              </svg>
            </div>
            <div class="icon-box-content ps-3">
              <h3 class="card-title text-uppercase text-dark">Pesanan Spesial</h3>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 pb-3">
          <div class="icon-box d-flex align-items-center">
            <div class="icon-box-icon pt-3 pe-3 pb-3 ps-3">
              <svg class="return">
                <use xlink:href="#return" />
              </svg>
            </div>
            <div class="icon-box-content ps-3">
              <h3 class="card-title text-uppercase text-dark">Return & refund policy</h3>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Home Content End -->

