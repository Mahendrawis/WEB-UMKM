<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title; ?></title>
</head>
<body>
    //link to product, about, contact
    <a href="<?php echo base_url('dashboard')?>">Dashboard</a>
    <a href="<?php echo base_url('productAdmin'); ?>">Product</a>
    <!-- <a href="<?php echo base_url('aboutAdmin'); ?>">About</a> -->
    <a href="<?php echo base_url('contactAdmin'); ?>">Contact</a>
    <a href="<?php echo base_url('pesanan'); ?>">Pesanan</a>

    <!-- print level -->
    <?php $level = $this->session->userdata('logged_in')['level']; ?>
    <?php $userLogin = $this->session->userdata('logged_in')['username']; ?>

    <?php if($level == 'superadmin') :  ?>
        <a href="<?php echo base_url('Admin'); ?>">Admin</a>
    <?php endif; ?>


    <a href="<?php echo base_url('logout'); ?>">Logout</a>