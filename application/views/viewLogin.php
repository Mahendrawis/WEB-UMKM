<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Login</title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url('assets/images/favicon.svg'); ?>" />

    <!-- ========================= CSS here ========================= -->
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js">

    <link rel="stylesheet" href="<?php echo base_url('assets/admin/css/chart.css'); ?>" />
</head>

<body>
    <div class="container-fluid">
    <div class="row no-gutter">
        <!-- The image half -->
        <div class="col-md-6 d-none d-md-flex bg-image"></div>


        <!-- The content half -->
        <div class="col-md-6 bg-light">
            <div class="login d-flex align-items-center py-5">

                <!-- Demo content-->
                <div class="container">
                    <div class="row">
                        <div class="col-lg-10 col-xl-7 mx-auto">
                            <h3 class="display-4">Login Page</h3>
                            <p class="text-muted mb-4">Login a account Durian Kocok</p>
                            <form action="<?php echo site_url('LoginDURCOK/loginVerification')?>" method="post">
                                <div class="form-group mb-3">
                                    <input name="username" id="username" placeholder="Username" required type="text" autofocus="" class="form-control rounded-pill border-0 shadow-sm px-4">
                                </div>
                                <div class="form-group mb-3">
                                    <input type="password" name="password" id="password" placeholder="Password" required required="" class="form-control rounded-pill border-0 shadow-sm px-4 text-primary">
                                </div>
                                <div class="custom-control custom-checkbox mb-3">
                                    <input id="customCheck1" type="checkbox" checked class="custom-control-input">
                                    <label for="customCheck1" class="custom-control-label">Remember password</label>
                                </div>
                                <button type="submit" name="Login" value="Login" class="btn btn-primary btn-block text-uppercase mb-2 rounded-pill shadow-sm">Sign in</button>
                                <?php
                                // Periksa apakah ada flashdata error yang telah diatur
                                if ($this->session->flashdata('error')) {
                                    echo '<div class="error-message">' . $this->session->flashdata('error') . '</div>';
                                }
                                ?>
                            </form>
                        </div>
                    </div>
                </div><!-- End -->

            </div>
        </div><!-- End -->

    </div>
</div>

    <script src="<?php echo base_url ('assets/bootstrap.min.js')?>"></script>
    <script src="<?php echo base_url ('assets/tiny-slider.js')?>"></script>
    <script src="<?php echo base_url ('assets/glightbox.min.js')?>"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="<?php echo base_url ('assets/main.js') ?>"></script>
</body>

</html>
