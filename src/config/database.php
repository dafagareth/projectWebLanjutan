<?php
// Konfigurasi database
$host = 'mysql';
$dbname = 'test_db';
$username = 'devstack';
$password = 'devstack';

// Koneksi menggunakan PDO
try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    $conn = false;
    echo "<p style='color: red; padding: 20px;'>Koneksi database gagal</p>";
}
?>
