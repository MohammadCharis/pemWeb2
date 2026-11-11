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

    <div id="menubar">
        <a href="<?= site_url('/') ?>" class="teksmenu">Beranda</a>
        <a href="<?= site_url('profil') ?>" class="teksmenu">Profil</a>
        <a href="<?= site_url('portofolio') ?>" class="teksmenu">Portofolio</a>
    </div>

    <div id="konten">
        <?= $this->renderSection('konten') ?>
    </div>

    <div id="footer">© 2026 - by mohammadCharis</div>
</body>
</html>