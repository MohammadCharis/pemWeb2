<?= $this->extend('layouts/main') ?>

<?= $this->section('title') ?>Profil<?= $this->endSection() ?>
<?= $this->section('judul') ?>Profil<?= $this->endSection() ?>
<?= $this->section('subjudul') ?>Informasi singkat tentang saya<?= $this->endSection() ?>

<?= $this->section('konten') ?>
    <section class="profile-header">
        <div class="profile-avatar">CR</div>
        <div>
            <h2>Moh. Charis Rozikin</h2>
            <p>Mahasiswa Sistem Informasi · Web Developer Pemula</p>
            <a href="mailto:charis@example.com" class="primary-button">Hubungi Saya</a>
        </div>
    </section>
    <section class="home-section">
        <div class="profile-info-grid">
            <div class="profile-info"><span>Data Pribadi</span><p><strong>Nama:</strong> Moh. Charis Rozikin<br><strong>NIM:</strong> 202457201034<br><strong>Lokasi:</strong> Indonesia<br><strong>Email:</strong> charis@example.com</p></div>
            <div class="profile-info"><span>Pendidikan</span><p><strong>Program Studi:</strong> Sistem Informasi<br><strong>Semester:</strong> 4<br><strong>Fokus:</strong> Web Development</p></div>
            <div class="profile-info"><span>Pengalaman</span><p>Mengerjakan praktikum HTML, CSS, dan proyek aplikasi pribadi menggunakan framework CodeIgniter 4.</p></div>
        </div>
    </section>
    <section class="profile-actions">
        <a href="<?= base_url('cv-charis.pdf') ?>" class="secondary-button" download>Download CV</a>
        <a href="<?= site_url('portofolio') ?>" class="primary-button">Lihat Portofolio</a>
    </section>
<?= $this->endSection() ?>
