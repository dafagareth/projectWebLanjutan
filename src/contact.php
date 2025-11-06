<?php 
require_once 'config/database.php';
require_once 'includes/functions.php';

$pageTitle = "Kontak";
$message = '';

// Proses form jika ada submit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = clean_input($_POST['nama']);
    $email = clean_input($_POST['email']);
    $pesan = clean_input($_POST['pesan']);
    
    // Validasi sederhana
    if (empty($nama) || empty($email) || empty($pesan)) {
        $message = '<div class="error-box">Semua field harus diisi!</div>';
    } else {
        // Simpan ke database (contoh)
        try {
            $stmt = $conn->prepare("INSERT INTO contacts (nama, email, pesan, created_at) VALUES (?, ?, ?, NOW())");
            // Note: Anda perlu buat tabel 'contacts' dulu
            // $stmt->execute([$nama, $email, $pesan]);
            $message = '<div class="success-box">Pesan berhasil dikirim! (Demo)</div>';
        } catch(PDOException $e) {
            $message = '<div class="error-box">Terjadi kesalahan. Pastikan tabel sudah dibuat.</div>';
        }
    }
}

include 'includes/header.php';
?>

<div class="container">
    <h1>Hubungi Kami</h1>
    
    <?php echo $message; ?>
    
    <form method="POST" action="" class="contact-form">
        <div class="form-group">
            <label for="nama">Nama:</label>
            <input type="text" id="nama" name="nama" required>
        </div>
        
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
        </div>
        
        <div class="form-group">
            <label for="pesan">Pesan:</label>
            <textarea id="pesan" name="pesan" rows="5" required></textarea>
        </div>
        
        <button type="submit" class="btn">Kirim Pesan</button>
    </form>
</div>

<?php include 'includes/footer.php'; ?>