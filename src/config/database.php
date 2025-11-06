<?php
/**
 * Konfigurasi Database
 * File ini berisi koneksi ke MySQL menggunakan PDO
 */

// Konfigurasi database dari docker-compose
$host = 'mysql';  // Nama service MySQL di docker-compose.yml
$dbname = 'test_db';
$username = 'devstack';
$password = 'devstack';
$charset = 'utf8mb4';

// DSN (Data Source Name)
$dsn = "mysql:host=$host;dbname=$dbname;charset=$charset";

// Options untuk PDO
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];

// Inisialisasi koneksi
try {
    $conn = new PDO($dsn, $username, $password, $options);
} catch (PDOException $e) {
    // Log error
    error_log("Database Connection Error: " . $e->getMessage());
    $conn = false;
    
    // Tampilkan pesan error yang user-friendly
    echo "<div style='background: #ffebee; color: #c62828; padding: 20px; border-radius: 5px; margin: 20px;'>";
    echo "<strong>Error Database:</strong> " . $e->getMessage();
    echo "</div>";
}
?>