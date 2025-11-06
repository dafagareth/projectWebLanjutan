<?php 
require_once 'config/database.php';
require_once 'includes/functions.php';

$pageTitle = "Beranda";
include 'includes/header.php';
?>

<div class="container">
    <h1>Selamat Datang</h1>
    <p>Project Matakuliah Pemograman Berbasis Web</p>
    
    <?php
    // Test PHP Version
    echo "<div class='info-box'>";
    echo "<strong>PHP Version:</strong> " . phpversion();
    echo "</div>";
    
    // Test Database Connection
    if ($conn) {
        echo "<div class='success-box'>";
        echo "✓ Koneksi database berhasil!";
        echo "</div>";
        
        // Contoh query
        try {
            $stmt = $conn->query("SELECT DATABASE() as dbname");
            $result = $stmt->fetch(PDO::FETCH_ASSOC);
            echo "<div class='info-box'>";
            echo "<strong>Database aktif:</strong> " . $result['dbname'];
            echo "</div>";
        } catch(PDOException $e) {
            echo "<div class='error-box'>Error: " . $e->getMessage() . "</div>";
        }
    } else {
        echo "<div class='error-box'>";
        echo "✗ Koneksi database gagal!";
        echo "</div>";
    }
    ?>
    
    <div class="menu">
        <a href="about.php">Tentang</a>
        <a href="contact.php">Kontak</a>
        <a href="http://localhost:8080" target="_blank">phpMyAdmin</a>
    </div>
</div>

<?php include 'includes/footer.php'; ?>