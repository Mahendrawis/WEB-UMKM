<?php require 'template/homeHeader.php'; ?>

<section id="contact" class="contact" style="margin-bottom: 5%; margin-top:3%">

<div class="container" data-aos="fade-up">
    <div class="row">
        <h1>PEMESANAN</h1>

        <p><?= $this->session->flashdata('notification'); ?></p>

        <form action="HomeDURCOK/addPesananAction" method="post">

            <label for="namaPemesan">Nama Pemesan</label>
            <input type="text" name="namaPemesan" id="namaPemesan" placeholder="namaPemesan" value="<?= set_value('namaPemesan'); ?>" required>
            <?= form_error('namaPemesan'); ?>
            <br>

            <label for="alamatPemesan">Alamat Pemesan</label>
            <input type="text" name="alamatPemesan" id="alamatPemesan" placeholder="alamatPemesan" value="<?= set_value('alamatPemesan'); ?>" required>
            <?= form_error('alamatPemesan'); ?>
            <br>

            <label for="deskripsiPesanan">Deskripsi Pesanan</label>
            <input type="text" name="deskripsiPesanan" id="deskripsiPesanan" placeholder="deskripsiPesanan" value="<?= set_value('deskripsiPesanan'); ?>" required>
            <?= form_error('deskripsiPesanan'); ?>
            <br>

            <label for="noWhatsapp">Nomor Whatsapp</label>
            <input type="text" name="noWhatsapp" id="noWhatsapp" placeholder="noWhatsapp" pattern="[0-9]*" maxlength="15" value="<?= set_value('noWhatsapp'); ?>" required>
            <?= form_error('noWhatsapp'); ?>
            <br>

            <input type="submit" value="Pesan">
        </form>
    </div>
</div>
</section>