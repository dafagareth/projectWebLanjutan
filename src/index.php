<?php 
require_once 'config/database.php';
$pageTitle = "Beranda";
include 'includes/header.php';
?>

<div class="hero">
    <h1>Dafa Al Hafiz</h1>
    <p class="subtitle">Maaf Masih Pemula</p>
</div>

<div class="bio">
    <h2>Tentang Saya</h2>
    <p>Halo! Saya mahasiswa yang sedang belajar pemrograman web. Saat ini fokus mempelajari PHP, MySQL, dan teknologi web modern.</p>
</div>

<div class="info-grid">
    <div class="info-item">
        <h3>Nama</h3>
        <p>Dafa Al Hafiz</p>
    </div>
    <div class="info-item">
        <h3>NIM</h3>
        <p>24_0085</p>
    </div>
    <div class="info-item">
        <h3>Email</h3>
        <p>dafagareth@gmail.com</p>
    </div>
    <div class="info-item">
        <h3>Lokasi</h3>
        <p>Padang, West Sumatra</p>
    </div>
</div>

<div class="skills">
    <h2>Keahlian</h2>
    <div class="skill-tags">
        <span>PHP</span>
        <span>MySQL</span>
        <span>HTML/CSS</span>
        <span>JavaScript</span>
    </div>
</div>

<?php include 'includes/footer.php'; ?>
