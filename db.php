<?php
$host = "localhost"; // Server host (sesuaikan jika berbeda)
$dbname = "user_database"; // Nama database
$username = "root"; // Nama pengguna MySQL
$password = ""; // Password MySQL (kosong untuk Laragon)

$conn = new mysqli($host, $username, $password, $dbname);

// Cek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
?>
