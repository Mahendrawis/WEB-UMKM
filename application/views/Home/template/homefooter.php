<!-- Footer -->
<footer class="text-center text-lg-start bg-light text-muted">
  <!-- Section: Social media -->
  <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
    <!-- Left -->
    <div class="me-5 d-none d-lg-block">
      <span>Get connected with us on social networks:</span>
    </div>
    <!-- Left -->

    <!-- Right -->
    <div>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-facebook-f"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-twitter"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-google"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-instagram"></i>
      </a>
    </div>
    <!-- Right -->
  </section>
  <!-- Section: Social media -->

  <!-- Section: Links  -->
  <section class="">
    <div class="container text-center text-md-start mt-5">
      <!-- Grid row -->
      <div class="row mt-3">
        <!-- Grid column -->
        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
          <!-- Content -->
          <h6 class="text-uppercase fw-bold mb-4">
            <i class="fas fa-gem me-3"></i>Durian Kocok Khas Sidoarjo
          </h6>
          <p>
            Minuman segar dan murah hadir untuk merakyat
            serta membagi kebahagian untuk customer.
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            Products
          </h6>
          <p>
            <a href="<?= base_url("product"); ?>" class="text-reset">Es Durian Kock</a>
          </p>
          <p>
            <a href="<?= base_url("product"); ?>" class="text-reset">Permen Karet BG</a>
          </p>
          <p>
            <a href="<?= base_url("product"); ?>" class="text-reset">Permen Karet Pink</a>
          </p>
          <p>
            <a href="<?= base_url("product"); ?>" class="text-reset">Es Teh Segar</a>
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            Useful links
          </h6>
          <p>
            <a href="<?= base_url("home"); ?>" class="text-reset">Home</a>
          </p>
          <p>
            <a href="<?= base_url("product"); ?>" class="text-reset">Product </a>
          </p>
          <p>
            <a href="<?= base_url("contact"); ?>" class="text-reset">Orders</a>
          </p>
          <p>
            <a href="<?= base_url("contact"); ?>" class="text-reset">Contact</a>
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">Contact</h6>
          <p><i class="fas fa-home me-3"></i> <?= $contact->alamatLengkap; ?></p>
          <p>
            <i class="fas fa-envelope me-3"></i>
            AndriankWJ@gmail.com
          </p>
          <p><i class="fas fa-phone me-3"></i> <?= $contact->nomorTelepon; ?></p>
        </div>
        <!-- Grid column -->
      </div>
      <!-- Grid row -->
    </div>
  </section>
  <!-- Section: Links  -->

  <!-- Copyright -->
  <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
    © 2021 Copyright:
    <a class="text-reset fw-bold" href="https://mdbootstrap.com/">MAHENDRAWIS</a>
  </div>
  <!-- Copyright -->
</footer>
<!-- Footer -->
</body>
<!-- partial -->
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
