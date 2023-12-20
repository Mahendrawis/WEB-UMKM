<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?= $title ?></title>

    <!-- Custom fonts for this template-->
    <link href="<?= base_url('assets/admin/admin/vendor/fontawesome-free/css/all.min.css'); ?>" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?= base_url('assets/admin/admin/css/admin.min.css');?>" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>


</head>

<body id="page-top">
    <?php $level = $this->session->userdata('logged_in')['level']; ?>
    <?php $userLogin = $this->session->userdata('logged_in')['username']; ?>

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Admin</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('dashboard')?>">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Main Menu
            </div>
            <!-- Nav Item - Utilities Collapse Menu -->
          

            <!-- Nav Item - Charts -->
              <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('Admin'); ?>">
                    <i class="fas fa-fw fa-user"></i>
                    <span>Account</span></a>
            </li>
          
              <li class="nav-item active">
                <a class="nav-link" href="<?php echo base_url('productAdmin');?>">
                    <i class="fas fa-fw fa-clipboard-list"></i>
                    <span>Product</span></a>
            </li>


            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('pesanan'); ?>">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Order</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('contactAdmin'); ?>">
                    <i class="fas fa-fw fa-comments"></i>
                    <span>Contact</span></a>
            </li>    
            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('logout'); ?>"><i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i><span>Logout</span></a>
            </li> 

            
        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>
                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>
                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                                <?php if($level == 'superadmin') :  ?>
                                <a class="nav-link dropdown-toggle" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="<?php echo base_url('Admin'); ?>">Admin</a>
                                <?php endif; ?>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <div class="dropdown-divider"></div>
                                 <a class="dropdown-item" href="<?php echo base_url('logout'); ?>"><i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>Logout</a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->



                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">DataTables Customer</h6>
                        </div>
                        <div class="card-body">
                              
                       
                        <!-- Tampilkan error message -->
                        <div class="card-body">
                            <div class="row justify-content-between">
                                <div class="col-2">
                                    <a href="<?= base_url('addProduct'); ?>" class="btn btn-primary btn-block">Tambah Data</a>
                                </div>
                                <div class="col-4">
                                    <input type="text" class="form-control" placeholder="Cari Produk..." id="cariProduk">
                                </div>
                            </div>

                            <!-- Tampilkan error message -->
                            <p class="text-danger"><?= $this->session->flashdata('error'); ?></p>

                            <!-- Tampilkan success message -->
                            <p class="text-success"><?= $this->session->flashdata('success'); ?></p>


                        <!-- if product 0 -->
                        <?php if (count($allProduct) == 0): ?>
                            <p>Belum ada produk</p>
                        <?php else: ?>

                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>NO</th>
                                            <th>NAMA PRODUCT</th>
                                            <th>HARGA PRODUCT</th>
                                            <th>DISKON PRODUCT</th>
                                            <th>DESKRIPSI PRODUCT</th>
                                            <th>GAMBAR PRODUCT</th>
                                            <th>AKSI</th>
                                            <th>Admin</th>
                                        </tr>
                                    </thead>
                                    <tbody id="produk">
                                        <?php $no = 1; ?>
                                        <?php foreach ($allProduct as $product): ?>
                                            <tr>
                                                <td><?= $no++; ?></td>
                                                <td><?= $product->namaProduct; ?></td>

                                                <?php if ($product->diskonProduct > 0): ?>
                                                    <td>
                                                        <strike><?= $product->hargaProduct; ?></strike>
                                                        <?= $product->hargaProduct - ($product->hargaProduct * $product->diskonProduct / 100); ?>
                                                    </td>
                                                <?php else: ?>
                                                    <td><?= $product->hargaProduct; ?></td>
                                                <?php endif; ?>

                                                <td><?= $product->diskonProduct; ?>%</td>
                                                <td><?= $product->deskripsiProduct; ?></td>
                                                <td>
                                                    <?php if ($product->gambarProduct == NULL): ?>
                                                        <img src="<?= base_url('assets/img/product/default.jpg'); ?>" alt="default.jpg" class="img-fluid" width="100">
                                                    <?php else: ?>
                                                        <img src="<?= base_url('assets/img/product/' . $product->gambarProduct); ?>" alt="<?= $product->gambarProduct; ?>" class="img-fluid" width="100">
                                                    <?php endif; ?>
                                                </td>
                                                <td>
                                                    <a href="<?= base_url('editProduct/' . $product->idProduct); ?>" class="btn btn-warning btn-sm mb-2">EDIT</a>
                                                    <a href="<?= base_url('deleteProduct/' . $product->idProduct); ?>" class="btn btn-danger btn-sm">DELETE</a>
                                                </td>
                                                <td><?= $product->username; ?></td>
                                            </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>

                        <?php endif; ?>

                    </div>

                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2020</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="../logout.php">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="<?= base_url('assets/admin/admin/vendor/jquery/jquery.min.js');?>"></script>
    <script src="<?= base_url ('assets/admin/admin/vendor/bootstrap/js/bootstrap.bundle.min.js');?>"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?= base_url ('assets/admin/admin/vendor/jquery-easing/jquery.easing.min.js');?>"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?= base_url('assets/admin/admin/js/sb-admin-2.min.j');?>"></script>

    <!-- Page level plugins -->
    <script src="<?= base_url ('assets/admin/admin/vendor/chart.js/Chart.min.js');?>"></script>

    <!-- Page level custom scripts -->
    <script src="<?= base_url ('assets/admin/admin/js/demo/chart-area-demo.js');?>"></script>
    <script src="<?= base_url ('assets/admin/admin/js/demo/chart-pie-demo.js');?>"></script>
    
    <!-- get Jquery online -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- live search-->
    <script>
        $(document).ready(function(){
            $("#cariProduk").on("keyup", function() {
                var value = $(this).val().toLowerCase();
                $("#produk tr").filter(function() {
                    $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                });
            });
        });
    </script>    
</body>

</html>

