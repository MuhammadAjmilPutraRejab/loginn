<?php
require 'db.php'; // Koneksi ke database

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT); // Enkripsi password

    // Insert data pengguna ke database
    $stmt = $conn->prepare("INSERT INTO users (username, email, password) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $username, $email, $password);

    if ($stmt->execute()) {
        echo "Pendaftaran berhasil!";
        
    } else {
        echo "Terjadi kesalahan: " . $stmt->error;
    }
    header ('Location: login.html');

    $stmt->close();
    $conn->close();
}
?>
