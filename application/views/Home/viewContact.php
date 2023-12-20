<?php require 'template/homeHeader.php'; ?>

<!-- Header Kontak -->
<header class="tengah bg-primary text-white py-5">
    <div class="container text-center">
        <h1 class="display-5 fw-bolder text-white mb-2">CONTACT US</h1>
        <p class="lead fw-normal text-white-100 mb-4">
            <small>
                Welcome to this contact page! Explore the opportunity to connect with me.
            </small>
        </p>
    </div>
</header>

<!-- Konten Halaman Kontak -->
<!-- ======= Contact Section ======= -->
<section id="contact" class="contact" style="margin-bottom: 5%; margin-top: 3%">
    <div class="container" data-aos="fade-up">
        <div class="row">

            <div class="col-lg-5 d-flex align-items-stretch">
                <div class="info">
                    <div class="address">
                        <i class="fas fa-map-marker-alt"></i>
                        <h4>Location:</h4>
                        <p><?= $contact->alamatLengkap; ?></p>
                    </div>

                    <div class="email">
                        <i class="fas fa-envelope"></i>
                        <h4>Email:</h4>
                        <p>AndriankWJ@gmail.com</p>
                    </div>

                    <div class="phone">
                        <i class="fas fa-phone"></i>
                        <h4>Call:</h4>
                        <p><?= $contact->nomorTelepon; ?></p>
                    </div>
                    <div id="petaContainer">
                        <?php if (!empty($contact->alamatLive)): ?>
                            <iframe src="<?= $contact->alamatLive; ?>" style="border:0; width: 100%; height: 200px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        <?php endif; ?>
                    </div>
                </div>
            </div>

            <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
                <form action="HomeDURCOK/addPesananAction" method="post" class="php-email-form">
                    <div class="row">
                        <div class="form-group">
                            <label for="namaPemesan">Name Order</label>
                            <input type="text" class="form-control" name="namaPemesan" id="namaPemesan" placeholder="Nama Pemesan" value="<?= set_value('namaPemesan'); ?>" required>
                            <?= form_error('namaPemesan'); ?>
                        </div>
                        <div class="form-group">
                            <label for="alamatPemesan">Location Order</label>
                            <input type="text" class="form-control" name="alamatPemesan" id="Alamat Pemesan" placeholder="alamatPemesan" value="<?= set_value('alamatPemesan'); ?>" required>
                            <?= form_error('alamatPemesan'); ?>
                        </div>
                        <div class="form-group">
                            <label for="deskripsiPesanan">Deskripsion Order</label>
                            <textarea class="form-control" name="deskripsiPesanan" id="deskripsiPesanan" placeholder="Deskripsi Pesanan" value="<?= set_value('deskripsiPesanan'); ?>" required></textarea>
                            <?= form_error('deskripsiPesanan'); ?>
                        </div>
                        <div class="form-group">
                            <label for="noWhatsapp">Nomor Whatsapp</label>
                            <input class="form-control" type="text" name="noWhatsapp" id="noWhatsapp" placeholder="Nomer Whatsapp" pattern="[0-9]*" maxlength="15" value="<?= set_value('noWhatsapp'); ?>" required>
                            <?= form_error('noWhatsapp'); ?>
                        </div>
                        <p><?= $this->session->flashdata('notification'); ?></p>
                        <div class="text-center"><input class="btn btn-primary" type="submit" value="Pesan Sekarang"></div>
                    </div>
                </form>
            </div>

        </div>

    </div>
</section><!-- End Contact Section -->
<script>
function tampilkanPeta() {
    // Mendapatkan nilai alamat dari input
    var alamat = $('#alamatLive').val();

    // Mengganti sumber iframe dengan alamat baru
    $('#petaContainer').html('<iframe src="' + alamat + '" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>');
}
</script>
<?php require 'template/homeFooter.php'; ?>
