<?= $this->extend('layouts/main') ?>

<?= $this->section('title') ?>About Me<?= $this->endSection() ?>
<?= $this->section('judul') ?>About Me<?= $this->endSection() ?>
<?= $this->section('subjudul') ?>Mengenal saya lebih dekat<?= $this->endSection() ?>

<?= $this->section('konten') ?>
    <section class="about-intro">
        <h2>Cerita Singkat</h2>
        <p>Saya adalah Moh. Charis Rozikin, mahasiswa Sistem Informasi yang memiliki ketertarikan pada pengembangan website dan teknologi digital. Saya menikmati proses mengubah ide sederhana menjadi halaman web yang terstruktur dan mudah digunakan.</p>
    </section>
    <section class="home-section about-values">
        <div class="about-value"><span>Latar Belakang</span><p>Saya sedang menempuh pendidikan Sistem Informasi dan mempelajari dasar pemrograman web melalui praktikum serta proyek pribadi.</p></div>
        <div class="about-value"><span>Nilai & Passion</span><p>Saya percaya bahwa proses belajar, konsistensi, dan kemauan mencoba adalah kunci untuk menghasilkan karya yang lebih baik.</p></div>
        <div class="about-value"><span>Hobi</span><p>Mempelajari teknologi baru, mencoba desain halaman web, membaca artikel pemrograman, dan mengembangkan proyek kecil.</p></div>
    </section>
    <section class="about-details">
        <h2>Pendidikan dan Pengalaman</h2>
        <div class="details-list">
            <div class="detail-row"><span>Pendidikan</span><p>Program Studi Sistem Informasi, angkatan 2024.</p></div>
            <div class="detail-row"><span>Pengalaman</span><p>Mengerjakan praktikum HTML, CSS, dan pengembangan aplikasi menggunakan CodeIgniter 4.</p></div>
            <div class="detail-row"><span>Skills</span><p>HTML, CSS, PHP dasar, CodeIgniter 4, routing, controller, view, dan layout.</p></div>
        </div>
    </section>
<?= $this->endSection() ?>
