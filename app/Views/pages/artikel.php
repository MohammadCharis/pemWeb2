<?= $this->extend('layouts/main') ?>

<?= $this->section('title') ?>Artikel<?= $this->endSection() ?>
<?= $this->section('judul') ?>Artikel<?= $this->endSection() ?>
<?= $this->section('subjudul') ?>Cerita, pengalaman, dan catatan belajar saya<?= $this->endSection() ?>

<?= $this->section('konten') ?>
    <section class="home-section">
    <div class="card-container">
        <a href="<?= site_url('artikel/perjalanan-belajar-web') ?>" class="card card-blue">
            <h3>Perjalanan Belajar Web Development</h3>
            <p>Catatan perjalanan mempelajari HTML, CSS, PHP, dan CodeIgniter 4 selama semester 4.</p>
        </a>
        <a href="<?= site_url('artikel/membangun-portofolio-pribadi') ?>" class="card card-purple">
            <h3>Membangun Portofolio Pribadi</h3>
            <p>Pengalaman membuat website portofolio sebagai tempat memperkenalkan diri dan menampilkan karya.</p>
        </a>
        <a href="<?= site_url('artikel/mengenal-codeigniter-4') ?>" class="card card-green">
            <h3>Mengenal CodeIgniter 4</h3>
            <p>Pengenalan singkat routing, controller, view, dan layout dalam aplikasi CodeIgniter 4.</p>
        </a>
    </div>
    </section>
<?= $this->endSection() ?>
