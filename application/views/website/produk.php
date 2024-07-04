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

    <!-- Filter section -->
<div class="container">
    <h2 class="mb-4">Filter Produk</h2>
    <div class="row mb-3">
        <div class="col-md-3">
            <button class="btn btn-primary btn-block filter-btn" data-filter="all">All Products</button>
        </div>
        <div class="col-md-3">
            <button class="btn btn-outline-primary btn-block filter-btn" data-filter="kue-basah">Kue Basah</button>
        </div>
        <div class="col-md-3">
            <button class="btn btn-outline-primary btn-block filter-btn" data-filter="kue-kering">Kue Kering</button>
        </div>
        <div class="col-md-3">
            <label for="price-range">Price Range:</label>
            <input type="range" class="custom-range" id="price-range" min="10000" max="30000" step="5000" value="30000">
            <span id="price-value">30000</span> rupiah
        </div>
    </div>
</div>

<!-- Produk list section -->
<section class="container" id="latest-blog">
    <div class="container-fluid">
        <div class="row g-3 post-grid" id="product-list">
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
        </div>
    </div>
</section>

<!-- AJAX script to handle filtering -->
<script>
$(document).ready(function() {
    // Event listener untuk tombol filter
    $('.filter-btn').on('click', function() {
        $('.filter-btn').removeClass('btn-primary').addClass('btn-outline-primary');
        $(this).removeClass('btn-outline-primary').addClass('btn-primary'); // Ganti tombol yang aktif
        var category = $(this).data('filter');
        var price_range = $('#price-range').val();
        filterProducts(category, price_range);
    });

    // Event listener untuk slider harga
    $('#price-range').on('input', function() {
        $('#price-value').text($(this).val());
        var category = $('.filter-btn.btn-primary').data('filter') || 'all';
        filterProducts(category, $(this).val());
    });

    // Fungsi untuk memanggil filter produk dengan AJAX
    function filterProducts(category, price_range) {
        console.log('Filter category:', category);
        console.log('Filter price range:', price_range);

        var url;
		if (category === 'all') {
            url = '<?php echo site_url('home/filter_all_produk'); ?>';
		} else if (category === 'kue-basah') {
            url = '<?php echo site_url('home/filter_kue_basah'); ?>';
        } else if (category === 'kue-kering') {
            url = '<?php echo site_url('home/filter_kue_kering'); ?>';
        }

        $.ajax({
            url: url,
            type: 'POST',
            data: { price_range: price_range },
            success: function(response) {
                console.log('Response:', response); // Log response untuk melihat hasilnya
                $('#product-list').html(response);
            },
            error: function(xhr, status, error) {
                console.error('AJAX Error:', status, error); // Log error jika AJAX gagal
            }
        });
    }
});

</script>


