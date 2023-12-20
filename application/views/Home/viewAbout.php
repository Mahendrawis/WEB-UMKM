<?php require 'template/homeHeader.php' ?>
  <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>  
  <style type="text/css">
  @keyframes moveBackground {
      0% {
        background-position: 0% 50%;
      }
      100% {
        background-position: 100% 50%;
      }
    }

    /* Section dengan background bergerak */
    #scroll-target {
      padding: 100px 0;
       background: linear-gradient(90deg, #4A00E0, #8E2DE2, #FF4F8E, #C0CD0E);
      background-size: 300% 300%;
      animation: moveBackground 15s ease infinite;
      color: white;
    }

    /* Card styling */
    .card-container {
      padding: 20px;
      border-radius: 15px;
      background-color: #fff;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      margin-bottom: 20px;
      transition: box-shadow 0.3s ease, transform 0.3s ease;
      cursor: pointer;
    }

     .card-container:hover {
      box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
      transform: scale(1.05); /* Scale up by 5% on hover */
    }

    /* Style untuk text di dalam card */
    .card-text {
      font-size: 1.5rem;
      color: #A9B800;
    }

  .custom-btn {
      background-color: #C0CD0E;
      border-color: #C0CD0E;
      color: #fff;
      padding: 10px 20px;
      font-size: 16px;
      font-family: "Dosis", sans-serif;
      border-radius: 5px;
      transition: background-color 0.3s ease-in-out, font-family 0.3s ease-in-out;
    }

  .custom-btn:hover {
    background-color: #A9B800; /* Adjust the color for the hover effect */
    font-family: "Dosis", sans-serif;
    color: #728815;
   } 

    /* CSS untuk tata letak responsif */
    .responsive-image {
        max-width: 100%;
        height: auto;
    }

    @media (max-width: 767px) {
        /* Perubahan untuk layar berukuran kecil (Mobile) */
        .image-container {
            text-align: center;
        }

        .image-container img {
            margin-bottom: 20%;
        }
    }

    .image-container {
      position: relative;

    }

    .image-container img {
      max-width: 100%; /* Membuat gambar responsif */
      height: auto;
    }

    .section-two {
      position: relative;
      overflow: hidden;
    }

    .section-two img {
      max-width: 100%; /* Membuat gambar responsif */
      height: auto;
    }

    .social-icon {
      align-items: center;
      text-decoration: none;
    }

    .social-icon p {
      margin: 0;
      font-size: 13.5px;
      color: #A9B800;
      transition: color 0.3s ease-in-out;
    }

    .social-icon:hover p {
      color: #ff0000; /* Ganti dengan warna yang diinginkan saat hover */
    }

}
  </style>
  <!-- Header-->
<header class="py-5 bg-image" style="background-image: url('<?= base_url('assets/images/banner/bg.png'); ?>'); background-size: cover;">
    <div class="container px-5">
        <div class="row align-items-center"> <!-- Menghapus kelas "justify-content-start" karena tidak perlu dalam konteks ini -->
            <div class="col-lg-8 col-xxl-6">
                <div class="my-5">
                    <div class="mb-4"> <!-- Menghapus kelas "d-flex" karena tidak diperlukan -->
                        <div class="text-start text-white">
                            <h1 class="fw-bolder mb-1" style="font-family: 'uni sans';">About Durian Kocok Sidoarjo</h1>
                            <p class="lead fw-normal mb-4" style="font-family: 'montserrat';">Welcome to Durian Kocok Sidoarjo, where freshness meets flavor! We are dedicated to simplifying the experience of enjoying extraordinary iced tea, bubblegum ice, and shaken durian. Our mission is to deliver the highest quality in every sip.</p>
                            <a class="btn custom-btn btn-lg" href="#scroll-target">Read Our Story</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>


<section class="py-5 bg-light" id="scroll-target">
    <div class="container px-5">
      <div class="row gx-5 align-items-center position-relative">
        <div class="col-lg-6 mb-4 image-container" id="animatedImage">
          <img class="image rounded position-relative responsive-image" src="<?= base_url('assets/images/hero/owner.png');?>" alt="Founder Image" style="bottom: -89px; left: 10px;">
        </div>
          <div class="col-lg-6">
            <div class="text-center">
                <h1 class="fw-bold" style="margin-bottom: -4%; font-family: 'Uni Sans'; font-size: 3rem;">ABOUT FOUNDER</h1>
                <p class="fw-bold mb-4" style="font-family: 'dosis',sans-serif; font-size: 3rem;">DURIAN KOCOK</p>
            </div>
            <div class="card-container">
              <h2 class="fw-bolder card-text" style="font-family: 'dosis', sans-serif;">Our founding</h2>
              <h5 class="card-text" style="font-family: 'uni sans'; font-weight: 900;">Andri Anko Wijaya</h5>
              <p class="lead fw-normal fs-6 text-muted card-text" style="font-family: 'Montserrat';">Allow me to introduce myself, I'm Andri, a Surabaya native and the proud owner of Durian Kocok. My passion revolves around bringing freshness and unique flavors through our exceptional iced tea, bubblegum ice, and shaken durian. Join us on this flavorful journey!</p>
            </div>
            <div class="card-container">
              <h2 class="fw-bolder card-text" style="font-family: 'dosis', sans-serif;">Visi & Mission</h2>
              <p class="lead fw-normal fs-6 text-muted card-text" style="font-family: 'Montserrat';">To be the epitome of refreshment and innovation, crafting delightful experiences that transcend taste buds, Provide unparalleled quality in every sip, ensuring our customers relish the essence of our unique offerings, Offer top-notch quality in every sip.</p>
            </div>
            <div class="container px-0">
              <div class="row">
                <div class="col-md-4">
                  <div class="card-container">
                    <div class="social-icons text-center">
                      <a href="#" class="social-icon"><p class="lead fw-bold card-text"><i class="fab fa-facebook"></i> DurianKocok</p></a>
                    </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="card-container">
                    <div class="social-icons text-center">
                      <a href="#" class="social-icon"><p class="lead fw-bold card-text"><i class="fab fa-twitter"></i> DurianKocok</p></a>
                    </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="card-container">
                    <div class="social-icons text-center">
                      <a href="#" class="social-icon"><p class="lead fw-bold card-text"><i class="fab fa-instagram"></i> DurianKocok</p></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="container px-0">
              <button class="btn custom-btn" style="width:100%;">Search Product</button>
            </div>
          </div>
      </div>
    </div>
  </section>

<!-- About section two-->
<section class="py-5">
    <div class="container px-5 my-5">
        <div class="swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="row gx-5 align-items-center">
                        <div class="col-lg-6 order-first order-lg-last mb-4 mb-lg-0 image-container">
                            <img class="image responsive-image" src="<?= base_url ('assets/images/promo/promo 2.png');?>" alt="Growth Image 1">
                        </div>
                        <div class="col-lg-6">
                            <h2 class="fw-bolder" style="font-family: 'uni sans'; color: #A9B800;">Growth &amp; beyond</h2>
                            <p class="lead fw-normal fs-6 text-muted mb-0" style="font-family: 'Montserrat';">The spirit of Durian Kocok Sidoarjo is fueled by the love and support of my special needs child, showcasing that every individual holds great potential in fostering SMEs. This uniqueness and inclusivity define our business journey.</p>
                        </div>
                    </div>
                </div>
                <!-- Tambahkan slide lainnya sesuai kebutuhan -->
                <div class="swiper-slide">
                    <div class="row gx-5 align-items-center">
                        <div class="col-lg-6 order-first order-lg-last mb-4 mb-lg-0 image-container">
                            <img class="image responsive-image" src="<?= base_url ('assets/images/promo/promo 3.png');?>" alt="Growth Image 2" style="max-width: 100%;">
                        </div>
                        <div class="col-lg-6">
                            <h2 class="fw-bolder" style="font-family: 'uni sans'; color: #A9B800; ">Story &amp; Bussines</h2>
                            <p class="lead fw-normal fs-6 text-muted mb-0" style="font-family: 'Montserrat';">Amidst the challenges of COVID-19, Durian Kocok emerged as a response to economic uncertainties. Motivated by the founder's special-needs child, it became a symbol of hope, resilience, and inclusivity in difficult times.</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>


    <!-- Team members section with Bootstrap Carousel -->
    <section class="py-5 bg-light">
        <div class="container px-5 my-1">
            <div class="text-center">
                <h2 class="fw-bolder" style="font-family: 'uni sans'; color: #A9B800;">Our Team Support Website</h2>
                <p class="lead fw-normal text-muted mb-5" style="font-family: 'Montserrat';">Website UMKM buatan UPN Veteran Jawa Timur</p>
            </div>

              <!-- Bootstrap Carousel -->
              <div class="slide-container swiper">
              <div class="slide-content">
                  <div class="card-wrapper py-2 swiper-wrapper">
                      <div class="card swiper-slide">
                          <div class="image-content">
                              <span class="overlay"></span>

                              <div class="card-image">
                                  <img src="<?= base_url('assets/images/hero/zaim(1).jpg');?>" alt="" class="card-img">
                              </div>
                          </div>

                          <div class="card-content">
                              <h2 class="name fw-bold" style="font-family: 'uni sans'; color: #A9B800;">Syarifuz Zaim</h2>
                              <p class="description" style="font-family: 'Montserrat';">Halo saya zaim. Saya adalah project manager dalam pengembangan website untuk UMKM bersama UPN Veteran Jawa Timur.</p>

                              <button class="button">View More</button>
                          </div>
                      </div>
                      <div class="card swiper-slide">
                          <div class="image-content">
                              <span class="overlay"></span>

                              <div class="card-image">
                                  <img src="<?= base_url('assets/images/hero/imam.jpeg'); ?>" alt="" class="card-img">
                              </div>
                          </div>

                          <div class="card-content">
                              <h2 class="name fw-bold" style="font-family: 'uni sans'; color: #A9B800;">Imam Maskuri</h2>
                              <p class="description" style="font-family: 'Montserrat';">Halo saya imam. Saya adalah back end developer serta sistem analis dalam pengembangan website untuk UMKM bersama UPN Veteran Jawa Timur.</p>

                              <button class="button" style="font-family: 'Montserrat';">View More</button>
                          </div>
                      </div>
                      <div class="card swiper-slide">
                          <div class="image-content">
                              <span class="overlay"></span>

                              <div class="card-image">
                                  <img src="<?= base_url('assets/images/hero/mia.jpeg');?>" alt="" class="card-img">
                              </div>
                          </div>

                          <div class="card-content">
                              <h2 class="name fw-bold" style="font-family: 'uni sans'; color: #A9B800; ">Mia Dwi Umiati</h2>
                              <p class="description" style="font-family: 'Montserrat';">Halo saya mia. Saya adalah testing and maintenance dalam pengembangan website untuk UMKM bersama UPN Veteran Jawa Timur</p>

                              <button class="button" style="font-family: 'Montserrat';">View More</button>
                          </div>
                      </div>
                      <div class="card swiper-slide">
                          <div class="image-content">
                              <span class="overlay"></span>

                              <div class="card-image">
                                  <img src="<?= base_url('assets/images/hero/novi.jpeg');?>" alt="" class="card-img">
                              </div>
                          </div>

                          <div class="card-content">
                              <h2 class="name fw-bold" style="font-family: 'uni sans'; color: #A9B800;">Novi Dwi Astuti</h2>
                              <p class="description" style="font-family: 'Montserrat';">Halo saya Novi. Saya adalah desainer serta sistem analis dalam pengembangan website untuk UMKM bersama UPN Veteran Jawa Timur</p>

                              <button class="button" style="font-family: 'Montserrat';">View More</button>
                          </div>
                      </div>
                      <div class="card swiper-slide">
                          <div class="image-content">
                              <span class="overlay"></span>

                              <div class="card-image">
                                  <img src="<?= base_url('assets/images/hero/mahen.jpeg');?>" alt="" class="card-img">
                              </div>
                          </div>

                          <div class="card-content">
                              <h2 class="name fw-bold" style="font-family: 'uni sans'; color: #A9B800;">Mahendra Wisnu. W.</h2>
                              <p class="description" style="font-family: 'Montserrat';">Halo saya Mahendra. Saya adalah front end developer dalam pengembangan website untuk UMKM bersama UPN Veteran Jawa Timur</p>

                              <button class="button" style="font-family: 'Montserrat';">View More</button>
                          </div>
                      </div>
                      
                  </div>
              </div>
          </div>        
            </div>
        </div>
    </section>

<?php require 'template/homeFooter.php' ?>
<!-- partial -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.3.5/js/swiper.min.js'></script>
<script src="swiper-bundle.min.js"></script>
<script src="<?= base_url('assets/script.js');?>"></script>
<script src="https://unpkg.com/gsap@3.9.0/dist/gsap.min.js"></script>
<script>
    var swiper = new Swiper('.swiper-container', {
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        autoplay: {
            delay: 5000, // Waktu jeda antara slide (dalam milidetik), contoh: 5000ms = 5 detik
            disableOnInteraction: false, // Tetapkan ke false agar autoplay tidak dihentikan saat interaksi pengguna (klik, geser, dll.)
        },
    });

    // Animasi menggunakan GSAP
    gsap.to("#animatedImage", { duration: 1, y: -50, scale: 1.1, ease: "power2.out" });

    window.addEventListener('scroll', function() {
      const navbar = document.querySelector('.navbar');
      if (window.scrollY > 50) {
        navbar.classList.add('scrolled');
      } else {
        navbar.classList.remove('scrolled');
      }
    });

        // Use JavaScript to handle sliding behavior
    var teamCarousel = new bootstrap.Carousel(document.getElementById('teamCarousel'), {
            interval: false, // Disable automatic sliding
        });

        // Handle sliding to the next set of cards
        document.getElementById('teamCarouselNext').addEventListener('click', function () {
            teamCarousel.next();
        });

        // Handle sliding to the previous set of cards
        document.getElementById('teamCarouselPrev').addEventListener('click', function () {
            teamCarousel.prev();
        });
</script>
