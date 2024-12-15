<?php
session_start();
session_destroy(); // Mengakhiri semua sesi pengguna
header('Location: index.html'); // Redirect kembali ke halaman login
exit();
?>
