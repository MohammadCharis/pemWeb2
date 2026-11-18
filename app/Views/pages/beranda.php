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
        <div class="project-grid">
            <a href="<?= site_url('portofolio') ?>" class="project-card"><img src="<?= base_url('images/thumbnails/portfolio-web.svg') ?>" alt="Ilustrasi Portofolio Web"><strong>Portofolio Web</strong><small>Website pribadi dengan routing, controller, view, dan layout CodeIgniter 4.</small><span class="project-icon" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"></path><path d="m13 6 6 6-6 6"></path></svg></span></a>
            <a href="<?= site_url('modul1/prak1') ?>" class="project-card"><img src="<?= base_url('images/thumbnails/modul-html.svg') ?>" alt="Ilustrasi Modul 1 HTML"><strong>Modul 1 HTML</strong><small>Latihan membangun struktur halaman web menggunakan HTML dasar.</small><span class="project-icon" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"></path><path d="m13 6 6 6-6 6"></path></svg></span></a>
            <a href="<?= site_url('modul2/prak1') ?>" class="project-card"><img src="<?= base_url('images/thumbnails/modul-css.svg') ?>" alt="Ilustrasi Modul 2 CSS"><strong>Modul 2 CSS</strong><small>Latihan mengatur warna, layout, jarak, dan tampilan halaman dengan CSS.</small><span class="project-icon" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"></path><path d="m13 6 6 6-6 6"></path></svg></span></a>
        </div>
    </section>

    <section class="home-section">
        <h2>Artikel Terbaru</h2>
        <a href="<?= site_url('artikel') ?>" class="clean-list-item single-item"><span><strong>Catatan Belajar Web Development</strong><small>Baca pengalaman dan proses belajar saya selama mengembangkan website.</small></span><b class="list-icon" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"></path><path d="m13 6 6 6-6 6"></path></svg></b></a>
    </section>

    <section class="contact-box">
        <h2>Mari Terhubung</h2>
        <p>Terbuka untuk berdiskusi, belajar bersama, dan berkolaborasi dalam proyek web.</p>
        <a href="<?= site_url('about-me') ?>" class="primary-button">Hubungi Saya</a>
    </section>
<?= $this->endSection() ?>
