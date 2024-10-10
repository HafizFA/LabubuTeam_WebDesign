<?php
// Informasi koneksi database
$host = 'localhost'; // Nama host
$user = 'root'; // Nama pengguna MySQL
$pass = ''; // Kata sandi MySQL
$dbname = 'athena_florist'; // Nama database

// Membuat koneksi
$conn = new mysqli($host, $user, $pass, $dbname);

// Cek apakah koneksi berhasil
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Cek apakah data sudah dikirim melalui POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Mengambil data dari formulir dan mencegah karakter berbahaya
    $username = htmlspecialchars($_POST['username']);
    $email = htmlspecialchars($_POST['email']);
    $telepon = htmlspecialchars($_POST['telepon']);
    $acara = htmlspecialchars($_POST['acara']);
    $pesan = htmlspecialchars($_POST['pesan']);

    // Menyiapkan perintah SQL dengan prepared statements untuk mencegah SQL Injection
    $stmt = $conn->prepare("INSERT INTO tbl_pemesanan (username, email, telepon, acara, pesan) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sssss", $username, $email, $telepon, $acara, $pesan);

    // Mengeksekusi perintah SQL dan memberikan feedback
    if ($stmt->execute()) {
        echo "Pemesanan berhasil!";
    } else {
        echo "Terjadi kesalahan: " . $stmt->error;
    }

    // Menutup statement dan koneksi
    $stmt->close();
}

$conn->close();
?>
