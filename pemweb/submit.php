<?php
require 'koneksi.php';

// Ambil data dari form
$username = $_POST["username"];
$email = $_POST["email"];
$telepon = $_POST["telepon"];
$acara = $_POST["acara"];
$pesan = $_POST["pesan"];

// Debugging: pastikan data POST terkirim
echo "<pre>";
print_r($_POST);
echo "</pre>";

// Query untuk menyimpan data ke tabel 'tbl_user'
$query_sql = "INSERT INTO tbl_user (username, email, telepon, acara, pesan) 
              VALUES ('$username', '$email', '$telepon', '$acara', '$pesan')";

// Debugging: lihat query yang dieksekusi
echo $query_sql;

if (mysqli_query($conn, $query_sql)) {
    // Redirect ke halaman custom_order.html jika berhasil
    header("Location: custom_order.html");
} else {
    // Tampilkan error jika query gagal
    echo "Pendaftaran Gagal: " . mysqli_error($conn);
}
?>
