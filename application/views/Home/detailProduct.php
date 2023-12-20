<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title; ?></title>
<meta name="viewport"
      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0/css/bootstrap.min.css'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.3.5/css/swiper.min.css'>
  <link rel="stylesheet" href="<?php echo base_url('assets/style.css'); ?>">
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.2/css/all.css'>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iUNnJT1ot9z+5r5pZl/6enLQbr5FfEYUAfxl1fojTU6CWdIx1SZs2O/1M" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-Y3ovpxjW1aPo0DfZi2A6b9VJFCBzQ8Vc8l8EJFf3rfFibbAfaWB9GZDdRGadGFZw" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-e3aT5qKtMqN1dVm+ju7DbV44O/D5G9D6Z5x9wJwGz4M2gA/gK1hAblI5cgvpS2Al" crossorigin="anonymous"></script>
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>  
    
</head>
  <!-- Start Item Details -->
    <section class="py-5 item-details section">
        <div class="container">
            <div class="top-area">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-12 col-12">
                        <div class="product-images">
                            <main id="gallery">
                                <div class="main-img">
                                    <img src="<?= base_url('assets/img/product/'.$produk->gambarProduct); ?>" alt="<?= $produk->gambarProduct; ?>" id="current" alt="#" >
                                </div>
                            </main>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-12">
                        <div class="product-info">
                            <h6 class="category"><a href="<?= base_url("home"); ?>">Dashboard</a> / <a href="<?= base_url("product"); ?>">Product</a> / Detail Product</h6>
                            <h2 class="title"><?= $produk->namaProduct; ?></h2>
                            <p class="category"> Drink :<a href="javascript:void(0)">Fresh Drink</a></p>
                            <h3 class="price"><?php if ($produk->diskonProduct > 0): ?>
                                                        <strike><?= $produk->hargaProduct; ?></strike>
                                                        <?= $produk->hargaProduct - ($produk->hargaProduct * $produk->diskonProduct / 100); ?>
                                                   
                                                <?php else: ?>
                                                    <td><?= $produk->hargaProduct; ?>
                                                <?php endif; ?></h3>
                            <p class="info-text" ><?= $produk->deskripsiProduct; ?></p>
                            <div class="bottom-content">
                                <div class="row align-items-end">
                                    <div class="col-lg-4 col-md-4 col-12">
                                        <div class="wish-button">
                                            <a class="btn" href="https://wa.me/628513046877?text=Saya%20tertarik%20dengan%20<?= $produk->namaProduct; ?>%20yang%20Anda%20jual%20diwebsite"><i class="lni lni-reload"></i> Buy Now</a>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-12">
                                        <div class="wish-button">
                                            <a class="btn" href="<?= base_url("product");?>"><i class="lni lni-back"></i> Back to product</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Item Details -->
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.3.5/js/swiper.min.js'></script>
<script  src="<?php echo base_url('assets/script.js'); ?>"></script>
<script>
    window.addEventListener('scroll', function() {
      const navbar = document.querySelector('.navbar');
      if (window.scrollY > 50) {
        navbar.classList.add('scrolled');
      } else {
        navbar.classList.remove('scrolled');
      }
    });
</script>
</html>
