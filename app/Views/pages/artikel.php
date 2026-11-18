<?= $this->extend('layouts/main') ?>

<?= $this->section('title') ?>Artikel<?= $this->endSection() ?>
<?= $this->section('judul') ?>Artikel<?= $this->endSection() ?>
<?= $this->section('subjudul') ?>Cerita, pengalaman, dan catatan belajar saya<?= $this->endSection() ?>

<?= $this->section('konten') ?>
    <section class="home-section article-list-section">
        <div class="article-card-grid">
            <a href="<?= site_url('artikel/perjalanan-belajar-web') ?>" class="article-card"><img src="<?= base_url('images/thumbnails/artikel-web.svg') ?>" alt="Ilustrasi perjalanan belajar web development"><strong>Perjalanan Belajar Web Development</strong><small>Catatan perjalanan mempelajari HTML, CSS, PHP, dan CodeIgniter 4 selama semester 4.</small></a>
            <a href="<?= site_url('artikel/membangun-portofolio-pribadi') ?>" class="article-card"><img src="<?= base_url('images/thumbnails/artikel-portfolio.svg') ?>" alt="Ilustrasi membangun portofolio pribadi"><strong>Membangun Portofolio Pribadi</strong><small>Pengalaman membuat website portofolio sebagai tempat memperkenalkan diri dan menampilkan karya.</small></a>
            <a href="<?= site_url('artikel/mengenal-codeigniter-4') ?>" class="article-card"><img src="<?= base_url('images/thumbnails/artikel-codeigniter.svg') ?>" alt="Ilustrasi CodeIgniter 4"><strong>Mengenal CodeIgniter 4</strong><small>Pengenalan singkat routing, controller, view, dan layout dalam aplikasi CodeIgniter 4.</small></a>
        </div>
    </section>
<?= $this->endSection() ?>
