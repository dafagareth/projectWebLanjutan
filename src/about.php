<?php 
require_once 'config/database.php';
$pageTitle = "Tentang Kami";
include 'includes/header.php';
?>

<div class="container">
    <h1>Tentang Website Ini</h1>
    <div class="content-box">
        <p>Website ini dibuat menggunakan:</p>
        <ul>
            <li>PHP <?php echo phpversion(); ?></li>
            <li>MySQL 8.0</li>
            <li>Docker & Docker Compose</li>
            <li>Apache Web Server</li>
        </ul>
        
        <h2>Teknologi yang Digunakan</h2>
        <p>Project ini menggunakan Pure PHP tanpa framework, cocok untuk pembelajaran dasar web development.</p>
    </div>
</div>

<?php include 'includes/footer.php'; ?>