<?= $this->extend('layouts/main') ?>

<?= $this->section('title') ?>Beranda<?= $this->endSection() ?>
<?= $this->section('judul') ?>Moh. Charis<?= $this->endSection() ?>
<?= $this->section('subjudul') ?>Mahasiswa Sistem Informasi dan Web Developer Pemula<?= $this->endSection() ?>

<?= $this->section('konten') ?>
    <section class="hero-section">
        <div class="hero-copy">
            <h2>Membangun pengalaman digital melalui proses belajar.</h2>
            <p>Saya Moh. Charis Rozikin, mahasiswa Sistem Informasi semester 5 yang sedang mengembangkan kemampuan dalam HTML, CSS, PHP, dan CodeIgniter 4.</p>
            <div class="hero-actions">
                <a href="<?= site_url('portofolio') ?>" class="primary-button">Lihat Portofolio</a>
                <a href="<?= site_url('about-me') ?>" class="secondary-button">Tentang Saya</a>
            </div>
        </div>
    </section>

    <section class="home-section">
        <h2>Proyek Pilihan</h2>
        <div class="card-container">
            <a href="<?= site_url('portofolio') ?>" class="card card-blue"><h3>Portofolio Web</h3><p>Website pribadi dengan routing, controller, view, dan layout CodeIgniter 4.</p></a>
            <a href="<?= site_url('modul1/prak1') ?>" class="card card-orange"><h3>Modul 1 HTML</h3><p>Latihan membangun struktur halaman web menggunakan HTML dasar.</p></a>
            <a href="<?= site_url('modul2/prak1') ?>" class="card card-green"><h3>Modul 2 CSS</h3><p>Latihan mengatur warna, layout, jarak, dan tampilan halaman dengan CSS.</p></a>
        </div>
    </section>

    <section class="home-section">
        <h2>Artikel Terbaru</h2>
        <div class="card-container">
            <a href="<?= site_url('artikel') ?>" class="card card-purple"><h3>Catatan Belajar Web Development</h3><p>Baca pengalaman dan proses belajar saya selama mengembangkan website.</p></a>
        </div>
    </section>

    <section class="contact-box">
        <h2>Mari Terhubung</h2>
        <p>Terbuka untuk berdiskusi, belajar bersama, dan berkolaborasi dalam proyek web.</p>
        <a href="<?= site_url('about-me') ?>" class="primary-button">Hubungi Saya</a>
    </section>
<?= $this->endSection() ?>
