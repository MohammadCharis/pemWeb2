<?= $this->extend('layouts/main') ?>

<?= $this->section('title') ?>Portofolio<?= $this->endSection() ?>
<?= $this->section('judul') ?>Mohammad Charis Rozikin<?= $this->endSection() ?>
<?= $this->section('subjudul') ?>Belajar Web Development dari Dasar<?= $this->endSection() ?>

<?= $this->section('konten') ?>
    <section class="home-section">
    <h2>Portofolio</h2>

    <p>
        Saya telah mempelajari dasar HTML seperti penggunaan list dan tabel
        untuk menyusun informasi secara terstruktur dan rapi.
    </p>

    <div class="portfolio-modules">
        <section class="module-panel">
            <div class="module-heading"><h3>Modul 1</h3></div>
            <p>Pada Modul ini, saya mempelajari dasar pembuatan struktur halaman web menggunakan HTML. Saya memahami penggunaan berbagai tag untuk membangun elemen seperti teks, gambar, link, tabel, dan form, serta bagaimana menyusun struktur halaman yang terorganisir dan sesuai standar web.</p>
            <div class="practice-links"><a href="<?= site_url('modul1/prak1') ?>">Praktikum 1</a><a href="<?= site_url('modul1/prak2') ?>">Praktikum 2</a><a href="<?= site_url('modul1/prak3') ?>">Praktikum 3</a></div>
        </section>
        <section class="module-panel">
            <div class="module-heading"><h3>Modul 2</h3></div>
            <p>Pada Modul ini, saya mempelajari penggunaan CSS untuk mengatur tampilan dan layout halaman web. Saya memahami konsep styling seperti selector, property, dan value, serta penerapan CSS (inline, internal, dan external) untuk menciptakan desain yang lebih menarik, konsisten, dan user-friendly.</p>
            <div class="practice-links"><a href="<?= site_url('modul2/prak1') ?>">Praktikum 1</a><a href="<?= site_url('modul2/prak2') ?>">Praktikum 2</a><a href="<?= site_url('modul2/prak3') ?>">Praktikum 3</a><a href="<?= site_url('modul2/prak4') ?>">Praktikum 4</a></div>
        </section>
    </div>
    </section>
<?= $this->endSection() ?>