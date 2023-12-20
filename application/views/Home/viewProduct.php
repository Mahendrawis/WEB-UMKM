<?php require 'template/homeHeader.php' ?>
<style type="text/css">
.card-hover:hover {
    transform: scale(1.05);
    transition: transform 0.3s ease;
}
</style>
<header class="atas py-5" >
    <div class="container px-5">
        <div class="row gx-5 align-items-center justify-content-center">
            <div class="col-lg-8 col-xl-7 col-xxl-6">
                <div class="my-5 text-center text-xl-start">
                    <h1 class="display-5 fw-bolder text-white mb-2">Durian Kocok Khas Sidoarjo</h1>
                    <p class="lead fw-normal mb-4" style="color: white;"><small>Indulge in unique flavors with Durian Kocok! Elevate your taste with our signature iced tea, bubblegum ice, and shaken durian. A celebration in every sip!</small></p>
                    <div class="d-grid gap-3 d-sm-flex justify-content-sm-center justify-content-xl-start">
                        <a class="btn btn-primary btn-lg px-4 me-sm-3" href="<?= base_url('product');?>"><small>Get Started</small></a>
                        <a class="btn btn-outline-light btn-lg px-4" href="#!"><small>Learn More</small></a>
                    </div>
                </div>
            </div>
            <div class="col-xl-5 col-xxl-6 d-none d-xl-block text-center"><img class="img-fluid rounded-3 my-5" src="<?= base_url('assets/images/header/banner/banner1.png'); ?>" alt="..." /></div>
        </div>
    </div>
</header>
<section class="py-5">
    <div class="container px-5">
        <h1 class="judul fw-bolder fs-5 mb-4">Discount News</h1>
        <div class="card border-0 shadow rounded-3 overflow-hidden">
            <div class="card-body p-0">
                <div class="row gx-0">
                    <div class="col-lg-6 col-xl-5 py-lg-5">
                        <div class="p-4 p-md-5">
                            <div class="badge bg-primary bg-gradient rounded-pill mb-2">News</div>
                            <div class="h2 fw-bolder">Dapatkan 1 Buah Durian</div>
                            <p>Gratis 1 buah durian, apabila telah membeli product durian kocok sebanyak 10 kali dengan menggunakan voucher promo.</p>
                            <a class="stretched-link text-decoration-none" href="#!">
                                Read more
                                <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-7 d-flex align-items-center">
                        <div class="bg-featured-blog"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

            <section class="py-1">
              <div class="container px-5">
                  <center><h1 class="judul1 fw-bolder fs-5 mb-2">O U R P R O D U C T</h1><h1 class="judul1 fw-bolder fs-1 mb-5" style="margin-top: -1%;">DURIAN KOCOK</h1></center>
              </div>
            </section>
<div class="container d-flex justify-content-center mt-90 mb-5">
<div class="row">
        <?php foreach ($getAllProduct as $product): ?>
            <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                <div class="card shadow card-hover">
                    <img src="<?= base_url('assets/img/product/'.$product->gambarProduct); ?>" class="card-img-top" alt="<?= $product->gambarProduct; ?>">
                    <div class="card-body">
                        <h5 class="card-title"><?= $product->namaProduct; ?></h5>
                        <hr>
                        <p class="card-text">Price Rp.
                            <?php if ($product->diskonProduct > 0): ?>
                                <span class="text-muted"><strike><?= $product->hargaProduct; ?></strike></span>
                                <strong><?= $product->hargaProduct - ($product->hargaProduct * $product->diskonProduct / 100); ?></strong>
                            <?php else: ?>
                                <strong><?= $product->hargaProduct; ?></strong>
                            <?php endif; ?>
                        </p>
                        <div class="text-center">
                            <a href="<?= base_url('HomeDURCOK/detailProduct/'.$product->idProduct); ?>" class="btn fw-3 btn-primary">
                                <i class="fa fa-shopping-cart"></i> Check Item
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>
<?php require 'template/homeFooter.php' ?>
