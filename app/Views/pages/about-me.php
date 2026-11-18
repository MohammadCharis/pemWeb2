<?= $this->extend('layouts/main') ?>

<?= $this->section('title') ?>About Me<?= $this->endSection() ?>
<?= $this->section('judul') ?>About Me<?= $this->endSection() ?>
<?= $this->section('subjudul') ?>Mengenal saya lebih dekat<?= $this->endSection() ?>

<?= $this->section('konten') ?>
    <section class="about-intro">
        <h2>Cerita Singkat</h2>
        <p>Saya adalah Moh. Charis Rozikin, mahasiswa Sistem Informasi yang memiliki ketertarikan pada pengembangan website dan teknologi digital. Saya menikmati proses mengubah ide sederhana menjadi halaman web yang terstruktur dan mudah digunakan.</p>
    </section>
    <section class="home-section">
        <div class="card-container">
            <div class="card card-blue"><h3>Latar Belakang</h3><p>Saya sedang menempuh pendidikan Sistem Informasi dan mempelajari dasar pemrograman web melalui praktikum serta proyek pribadi.</p></div>
            <div class="card card-purple"><h3>Nilai & Passion</h3><p>Saya percaya bahwa proses belajar, konsistensi, dan kemauan mencoba adalah kunci untuk menghasilkan karya yang lebih baik.</p></div>
            <div class="card card-green"><h3>Hobi</h3><p>Mempelajari teknologi baru, mencoba desain halaman web, membaca artikel pemrograman, dan mengembangkan proyek kecil.</p></div>
        </div>
    </section>
    <section class="about-details">
        <h2>Pendidikan dan Pengalaman</h2>
        <p><strong>Pendidikan:</strong> Program Studi Sistem Informasi, angkatan 2024.</p>
        <p><strong>Pengalaman:</strong> Mengerjakan praktikum HTML, CSS, dan pengembangan aplikasi menggunakan CodeIgniter 4.</p>
        <p><strong>Skills:</strong> HTML, CSS, PHP dasar, CodeIgniter 4, routing, controller, view, dan layout.</p>
    </section>
<?= $this->endSection() ?>
