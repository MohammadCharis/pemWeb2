<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $this->renderSection('title') ?></title>
    <link rel="stylesheet" href="<?= base_url('css/css.css') ?>">
</head>
<body>
    <div id="header">
        <h1><?= $this->renderSection('judul') ?></h1>
        <p><?= $this->renderSection('subjudul') ?></p>
    </div>

    <?php $currentPath = trim(uri_string(), '/'); ?>
    <div id="menubar">
        <a href="<?= site_url('/') ?>" class="teksmenu <?= $currentPath === '' ? 'active' : '' ?>">Beranda</a>
        <a href="<?= site_url('profil') ?>" class="teksmenu <?= $currentPath === 'profil' ? 'active' : '' ?>">Profil</a>
        <a href="<?= site_url('portofolio') ?>" class="teksmenu <?= $currentPath === 'portofolio' ? 'active' : '' ?>">Portofolio</a>
        <a href="<?= site_url('artikel') ?>" class="teksmenu <?= str_starts_with($currentPath, 'artikel') ? 'active' : '' ?>">Artikel</a>
        <a href="<?= site_url('about-me') ?>" class="teksmenu <?= $currentPath === 'about-me' ? 'active' : '' ?>">About Me</a>
    </div>

    <div id="konten">
        <?= $this->renderSection('konten') ?>
    </div>

    <div id="footer">© 2026 - by mohammadCharis</div>
</body>
</html>
