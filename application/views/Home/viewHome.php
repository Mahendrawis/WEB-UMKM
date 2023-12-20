<?php require 'template/homeheader.php' ?>

<style>
        .gradient-container {
            margin: 0;
            padding: 0;
            background: linear-gradient(90deg, rgba(198, 210, 51, 0.8), rgba(130, 78, 190, 0.8));
            background-size: 200% 200%;
            animation: gradientAnimation 5s linear infinite;
            transition: background 0.5s ease-in-out;
        }

        @keyframes gradientAnimation {
            0% {
                background-position: 0% 50%;
            }

            50% {
                background-position: 100% 50%;
            }

            100% {
                background-position: 0% 50%;
            }
        }

        .swiper-container {
            padding: 20px;
        }

        .card {
            background: white;
            border-radius: 10px;
            transition: transform 0.3s;
        }

        .card:hover {
            transform: scale(1.05);
        }

        .icon {
            font-size: 1.5rem;
        }

        .c-details {
            display: flex;
            flex-direction: column;
        }


        .mt-5 {
            margin-top: 5px;
        }

        .mt-3 {
            margin-top: 3px;
        }

        .rating {
            color: #f39c12;
        }
       
    </style>

<div class="wrapper">

  <div class="content">
    <div class="bg-shape">
      <img src="<?= base_url('assets/images/banner/durian kocokz.png');?>" alt="">
    </div>

    
    <div class="product-img">

            <div class="product-img__item" id="img1">
        <img src="<?= base_url('assets/images/products/item-4.png');?>" alt="star wars" class="product-img__img">
      </div>

      <div class="product-img__item" id="img2">
        <img src="<?= base_url('assets/images/products/item-2.png');?>" alt="star wars" class="product-img__img">
      </div>

      <div class="product-img__item" id="img3">
        <img src="<?= base_url('assets/images/products/item-1.png');?>" alt="star wars" class="product-img__img">
      </div>

      <div class="product-img__item" id="img4">
        <img src="<?= base_url('assets/images/products/item-3.png');?>" alt="star wars" class="product-img__img">
      </div>



    </div>



       <div class="product-slider">
      <button class="prev disabled">
        <span class="icon">
          <svg class="icon icon-arrow-right"><use xlink:href="#icon-arrow-left"></use></svg>
        </span>
      </button>
      <button class="next">
        <span class="icon">
          <svg class="icon icon-arrow-right"><use xlink:href="#icon-arrow-right"></use></svg>
        </span>
      </button>

      <div class="product-slider__wrp swiper-wrapper">
        <div class="product-slider__item swiper-slide" data-target="img4">
          <div class="product-slider__card">
            <img src="https://img.freepik.com/premium-photo/green-durian-wooden-board-thai-fruit-space-text-generative-ai_62294-125.jpg?uid=R27853299&ga=GA1.1.363708491.1697489953&semt=ais_ai_generated" alt="star wars" class="product-slider__cover">
            <div class="product-slider__content">
              <h1 class="product-slider__title">
                ES DURIAN <br>
                KOCOK SEGER
              </h1>
              <span class="product-slider__price">Rp 10.000,<sup>00</sup></span>
              <div class="product-ctr">
                <div class="product-labels">
                  <div class="product-labels__title">Size</div>

                  <div class="product-labels__group">
                    <label class="product-labels__item">
                      <input type="radio" class="product-labels__checkbox" name="type5" >
                      <span class="product-labels__txt">S</span>
                    </label>

                    <label class="product-labels__item">
                      <input type="radio" class="product-labels__checkbox" name="type5" checked>
                      <span class="product-labels__txt">M</span>
                    </label>

                    <label class="product-labels__item">
                      <input type="radio" class="product-labels__checkbox" name="type5" >
                      <span class="product-labels__txt">L</span>
                    </label>

                    <label class="product-labels__item">
                      <input type="radio" class="product-labels__checkbox" name="type5" >
                      <span class="product-labels__txt">XL</span>
                    </label>

                  </div>

                </div>

                <span class="hr-vertical"></span>

                <div class="product-inf">
                  <div class="product-inf__percent">
                    <div class="product-inf__percent-circle">
                      <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="0 0 100 100">
                        <defs>
                          <linearGradient id="gradient" x1="0%" y1="0%" x2="0%" y2="100%">
                            <stop offset="0%" stop-color="#0c1e2c" stop-opacity="0" />
                            <stop offset="100%" stop-color="#cb2240" stop-opacity="1" />
                          </linearGradient>
                        </defs>
                        <circle cx="50" cy="50" r="47" stroke-dasharray="240, 300" stroke="#cb2240" stroke-width="4" fill="none"/>
                      </svg>
                    </div>
                    <div class="product-inf__percent-txt">
                      80%
                    </div>
                  </div>

                  <span class="product-inf__title">TASTE RATE</span>
                </div>

              </div>

              <div class="product-slider__bottom">
                <a href="<?= base_url("product"); ?>" class="product-slider__cart">
                  ADD TO CART
                </a>

                <button class="product-slider__fav js-fav"><span class="heart"></span> ADD TO WISHLIST</button>
              </div>
            </div>
          </div>
        </div>
        <div class="product-slider__item swiper-slide" data-target="img1">
          <div class="product-slider__card">
            <img src="https://img.freepik.com/free-photo/vibrant-colors-confetti-balloons-party-fun-generated-by-ai_188544-25250.jpg?t=st=1702115661~exp=1702119261~hmac=253e5cb2224c69e56aaa505de90e6944a6254131e841a4f5510623c1a3b2d189&w=826" alt="star wars" class="product-slider__cover">
            <div class="product-slider__content">
              <h1 class="product-slider__title">
                ES PERMEN KARET <br> BUBBLEGUM
              </h1>
              <span class="product-slider__price">Rp 5.000,<sup>00</sup></span>
              <div class="product-ctr">
                <div class="product-labels">
                  <div class="product-labels__title">SIZE</div>

                  <div class="product-labels__group">
                    <label class="product-labels__item">
                      <input type="radio" class="product-labels__checkbox" name="type1" checked>
                      <span class="product-labels__txt">MEDIUM</span>
                    </label>

                    <label class="product-labels__item">
                      <input type="radio" class="product-labels__checkbox" name="type1">
                      <span class="product-labels__txt">LARGE</span>
                    </label>
                  </div>
                </div>

                <span class="hr-vertical"></span>

                <div class="product-inf">
                  <div class="product-inf__percent">
                    <div class="product-inf__percent-circle">
                      <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="0 0 100 100">
                        <defs>
                          <linearGradient id="gradient" x1="0%" y1="0%" x2="0%" y2="100%">
                            <stop offset="0%" stop-color="#0c1e2c" stop-opacity="0" />
                            <stop offset="100%" stop-color="#cb2240" stop-opacity="1" />
                          </linearGradient>
                        </defs>
                        <circle cx="50" cy="50" r="47" stroke-dasharray="225, 300" stroke="#cb2240" stroke-width="4" fill="none"/>
                      </svg>
                    </div>
                    <div class="product-inf__percent-txt">
                      75%
                    </div>
                  </div>

                  <span class="product-inf__title">TASTE RATE</span>
                </div>

              </div>

              <div class="product-slider__bottom">
                <a href="<?= base_url("product"); ?>" class="product-slider__cart">
                  ADD TO CART
                </a>

                <button class="product-slider__fav js-fav"><span class="heart"></span> ADD TO WISHLIST</button>
              </div>
            </div>
          </div>
        </div>

        <div class="product-slider__item swiper-slide" data-target="img2">
          <div class="product-slider__card">
            <img src="https://img.freepik.com/free-vector/three-dimensional-spheres-background_23-2148879894.jpg?t=st=1702115435~exp=1702116035~hmac=bf2ab6cf972e75be66c97b7f290787a8060d7406fec0b8b146a36c6418cfa7a5" alt="star wars" class="product-slider__cover">
            <div class="product-slider__content">
              <h1 class="product-slider__title">
                ES PERMEN KARET <br> PINKCOLOR
              </h1>
              <span class="product-slider__price">Rp 5.000,<sup>00</sup></span>
              <div class="product-ctr">
                <div class="product-labels">
                  
                <div class="product-labels__title">SIZE</div>

                  <div class="product-labels__group">
                    <label class="product-labels__item">
                      <input type="radio" class="product-labels__checkbox" name="type1" checked>
                      <span class="product-labels__txt">MEDIUM</span>
                    </label>

                    <label class="product-labels__item">
                      <input type="radio" class="product-labels__checkbox" name="type1">
                      <span class="product-labels__txt">LARGE</span>
                    </label>
                  </div>
                </div>


                <span class="hr-vertical"></span>

                <div class="product-inf">
                  <div class="product-inf__percent">
                    <div class="product-inf__percent-circle">
                      <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="0 0 100 100">
                        <defs>
                          <linearGradient id="gradient" x1="0%" y1="0%" x2="0%" y2="100%">
                            <stop offset="0%" stop-color="#0c1e2c" stop-opacity="0" />
                            <stop offset="100%" stop-color="#cb2240" stop-opacity="1" />
                          </linearGradient>
                        </defs>
                        <circle cx="50" cy="50" r="47" stroke-dasharray="240, 300" stroke="#cb2240" stroke-width="4" fill="none"/>
                      </svg>
                    </div>
                    <div class="product-inf__percent-txt">
                      80%
                    </div>
                  </div>

                  <span class="product-inf__title">TASTE RATE</span>
                </div>

              </div>

              <div class="product-slider__bottom">
                <a href="<?= base_url("product"); ?>" class="product-slider__cart">
                  ADD TO CART
                </a>

                <button class="product-slider__fav js-fav"><span class="heart"></span> ADD TO WISHLIST</button>
              </div>
            </div>
          </div>
        </div>

        <div class="product-slider__item swiper-slide" data-target="img3">
          <div class="product-slider__card">
            <img src="https://img.freepik.com/free-photo/freshness-growth-nature-macro-beauty-generated-by-ai_188544-21747.jpg?uid=R27853299&ga=GA1.1.363708491.1697489953&semt=ais_ai_generated" alt="star wars" class="product-slider__cover">
            <div class="product-slider__content">
              <h1 class="product-slider__title">
                ES TEH <br>
                SEGER BERSAMA
              </h1>
              <span class="product-slider__price">Rp 5.000,<sup>00</sup></span>
              <div class="product-ctr">
                <div class="product-labels">
                  <div class="product-labels__title">SIZE</div>

                  <div class="product-labels__group">
                    <label class="product-labels__item">
                      <input type="radio" class="product-labels__checkbox" name="type1" checked>
                      <span class="product-labels__txt">MEDIUM</span>
                    </label>

                    <label class="product-labels__item">
                      <input type="radio" class="product-labels__checkbox" name="type1">
                      <span class="product-labels__txt">LARGE</span>
                    </label>
                  </div>
                </div>

                <span class="hr-vertical"></span>

                <div class="product-inf">
                  <div class="product-inf__percent">
                    <div class="product-inf__percent-circle">
                      <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="0 0 100 100">
                        <defs>
                          <linearGradient id="gradient" x1="0%" y1="0%" x2="0%" y2="100%">
                            <stop offset="0%" stop-color="#0c1e2c" stop-opacity="0" />
                            <stop offset="100%" stop-color="#cb2240" stop-opacity="1" />
                          </linearGradient>
                        </defs>
                        <circle cx="50" cy="50" r="47" stroke-dasharray="240, 300" stroke="#cb2240" stroke-width="4" fill="none"/>
                      </svg>
                    </div>
                    <div class="product-inf__percent-txt">
                      80%
                    </div>
                  </div>

                  <span class="product-inf__title">TASTE RATE</span>
                </div>

              </div>

              <div class="product-slider__bottom">
                <a href="<?= base_url("product"); ?>" class="product-slider__cart">
                  ADD TO CART
                </a>

                <button class="product-slider__fav js-fav"><span class="heart"></span> ADD TO WISHLIST</button>
              </div>
            </div>
          </div>
        </div>

        

      </div>
    </div>

  </div>
</div>
<svg class="hidden" hidden>
  <symbol id="icon-arrow-left" viewBox="0 0 32 32">
    <path d="M0.704 17.696l9.856 9.856c0.896 0.896 2.432 0.896 3.328 0s0.896-2.432 0-3.328l-5.792-5.856h21.568c1.312 0 2.368-1.056 2.368-2.368s-1.056-2.368-2.368-2.368h-21.568l5.824-5.824c0.896-0.896 0.896-2.432 0-3.328-0.48-0.48-1.088-0.704-1.696-0.704s-1.216 0.224-1.696 0.704l-9.824 9.824c-0.448 0.448-0.704 1.056-0.704 1.696s0.224 1.248 0.704 1.696z"></path>
  </symbol>
  <symbol id="icon-arrow-right" viewBox="0 0 32 32">
    <path d="M31.296 14.336l-9.888-9.888c-0.896-0.896-2.432-0.896-3.328 0s-0.896 2.432 0 3.328l5.824 5.856h-21.536c-1.312 0-2.368 1.056-2.368 2.368s1.056 2.368 2.368 2.368h21.568l-5.856 5.824c-0.896 0.896-0.896 2.432 0 3.328 0.48 0.48 1.088 0.704 1.696 0.704s1.216-0.224 1.696-0.704l9.824-9.824c0.448-0.448 0.704-1.056 0.704-1.696s-0.224-1.248-0.704-1.664z"></path>
  </symbol>
</svg>

<!--- conten -->

 <div class="gradient-container">
        <div class="swiper-container py-3">
            <div class="swiper-wrapper">
                <!-- First Card -->
                <div class="swiper-slide">
                    <div class="container mt-5">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="card p-3 mb-2">
                                    <div class="d-flex justify-content-between">
                                        <div class="d-flex flex-row align-items-center">
                                            <div class="icon"> <i class="fas fa-user me-3"></i> </div>
                                            <div class="ms-2 c-details">
                                                <h6 class="judul mb-0">Shilpy</h6> <span>1 days ago</span>
                                            </div>
                                        </div>
                                        <div class="badge"> <span>Design</span> </div>
                                    </div>
                                    <div class="mt-5">
                                        <h3 class="heading">Kemasannya cumil </h3>
                                        <div class="mt-5">
                                            <div class="rating">
                                                <!-- Ganti angka (misalnya 4) sesuai dengan rating yang diinginkan -->
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="far fa-star"></i>
                                            </div>
                                            <div class="mt-3"> <span class="text1">32 Applied <span class="text2">of 50 capacity</span></span> </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="card p-3 mb-2">
                                    <div class="d-flex justify-content-between">
                                        <div class="d-flex flex-row align-items-center">
                                            <div class="icon"> <i class="fas fa-user me-3"></i> </div>
                                            <div class="ms-2 c-details">
                                                <h6 class="judul  mb-0">Septian</h6> <span>4 days ago</span>
                                            </div>
                                        </div>
                                        <div class="badge"> <span>Product</span> </div>
                                    </div>
                                    <div class="mt-5">
                                        <h3 class="heading">Rasanya sabi!</h3>
                                        <div class="mt-5">
                                            <div class="rating">
                                                <!-- Ganti angka (misalnya 4) sesuai dengan rating yang diinginkan -->
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="far fa-star"></i>
                                            </div>
                                            <div class="mt-3"> <span class="text1">42 Applied <span class="text2">of 70 capacity</span></span> </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Third Card -->
                            <div class="col-md-4">
                                <div class="card p-3 mb-2">
                                    <div class="d-flex justify-content-between">
                                        <div class="d-flex flex-row align-items-center">
                                            <div class="icon"><i class="fas fa-user me-3"></i> </div>
                                            <div class="ms-2 c-details">
                                                <h6 class="judul mb-0">Alvin</h6> <span>2 days ago</span>
                                            </div>
                                        </div>
                                        <div class="badge"> <span>Client</span> </div>
                                    </div>
                                    <div class="mt-5">
                                        <h3 class="heading">Es tehnya luar biasa</h3>
                                        <div class="mt-5">
                                            <div class="rating">
                                                <!-- Ganti angka (misalnya 4) sesuai dengan rating yang diinginkan -->
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="far fa-star"></i>
                                            </div>
                                            <div class="mt-3"> <span class="text1">52 Applied <span class="text2">of 100 capacity</span></span> </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Add additional slides as needed -->
            </div>
        </div>
    </div>
<!-- partial -->
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.3.5/js/swiper.min.js'></script><script  src="<?= base_url ('assets/script.js'); ?>"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

<script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    <script src="<?= base_url ('assets/tiny-slider.js'); ?>"></script>
    <script src="<?= base_url ('assets/glightbox.min.js'); ?>"></script>
    <script src="<?= base_url ('assets/main.js'); ?>"></script>
    <script type="text/javascript">
        //========= Hero Slider 
        tns({
            container: '.hero-slider',
            slideBy: 'page',
            autoplay: true,
            autoplayButtonOutput: false,
            mouseDrag: true,
            gutter: 0,
            items: 1,
            nav: false,
            controls: true,
            controlsText: ['<i class="lni lni-chevron-left"></i>', '<i class="lni lni-chevron-right"></i>'],
        });
</script>
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
<script>
     document.addEventListener('DOMContentLoaded', function () {
        var mySwiper = new Swiper('.swiper-container', {
            // Optional parameters
            direction: 'horizontal',
            loop: true,
            slidesPerView: 1,
            spaceBetween: 20,
            autoplay: {
                delay: 3000, // Autoplay interval in milliseconds (3000 ms = 3 seconds)
                disableOnInteraction: false,
            },
            // If you have pagination
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            // If you have navigation arrows
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
        });
    });
</script>

</body>
</html>