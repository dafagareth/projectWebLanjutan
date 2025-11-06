<?php 
require_once 'config/database.php';
require_once 'includes/functions.php';
$pageTitle = "Kontak";
$message = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = clean_input($_POST['nama']);
    $email = clean_input($_POST['email']);
    $pesan = clean_input($_POST['pesan']);
    
    if (empty($nama) || empty($email) || empty($pesan)) {
        $message = '<p class="error">Semua field harus diisi</p>';
    } else {
        // Simpan ke database
        try {
            $sql = "INSERT INTO contacts (nama, email, pesan) VALUES (?, ?, ?)";
            $stmt = $conn->prepare($sql);
            $stmt->execute([$nama, $email, $pesan]);
            $message = '<p class="success">Pesan berhasil dikirim dan disimpan!</p>';
        } catch(PDOException $e) {
            $message = '<p class="error">Gagal menyimpan pesan. Pastikan tabel sudah dibuat.</p>';
        }
    }
}

include 'includes/header.php';
?>

<div class="content">
    <h1>Hubungi Saya</h1>
    <?php echo $message; ?>
    
    <form method="POST" class="form">
        <div class="form-group">
            <label>Nama</label>
            <input type="text" name="nama" required>
        </div>
        
        <div class="form-group">
            <label>Email</label>
            <input type="email" name="email" required>
        </div>
        
        <div class="form-group">
            <label>Pesan</label>
            <textarea name="pesan" rows="5" required></textarea>
        </div>
        
        <button type="submit">Kirim</button>
    </form>
</div>

<?php include 'includes/footer.php'; ?>
