<?php
/** @var array<string, string> $article */
?>
<?= $this->extend('layouts/main') ?>

<?= $this->section('title') ?><?= esc($article['title']) ?><?= $this->endSection() ?>
<?= $this->section('judul') ?><?= esc($article['title']) ?><?= $this->endSection() ?>
<?= $this->section('subjudul') ?><?= esc($article['category']) ?><?= $this->endSection() ?>

<?= $this->section('konten') ?>
    <section class="home-section article-detail">
        <p><strong>Kategori:</strong> <?= esc($article['category']) ?></p>
        <p><strong>Penulis:</strong> <?= esc($article['author']) ?> · <strong>Tanggal:</strong> <?= esc($article['date']) ?></p>
        <h3><?= esc($article['title']) ?></h3>
        <h4>Pendahuluan</h4>
        <p><?= esc($article['introduction']) ?></p>
        <h4>Isi Artikel</h4>
        <p><?= esc($article['content']) ?></p>
        <h4>Kesimpulan</h4>
        <p><?= esc($article['conclusion']) ?></p>
        <a href="<?= site_url('artikel') ?>">← Kembali ke artikel</a>
    </section>
<?= $this->endSection() ?>
