<?php
// Pastikan pengguna sudah login sebelum mengakses halaman home
session_start();

if (!isset($_SESSION['username'])) {
    header('Location: index.html'); // Redirect ke halaman login jika belum login
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css" />
    <title>Home Page</title>
</head>

<body>
    <div class="container">
        <div class="form-container">
            <h1>Selamat Datang, <?php echo $_SESSION['username']; ?>!</h1>
            <p>Ini adalah halaman beranda sederhana.</p>
            <a href="logout.php"><button>Logout</button></a>
        </div>
    </div>
</body>

</html>
