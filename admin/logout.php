<?php
session_start(); // Memulai session

// Menghapus semua session
session_unset();

// Menghancurkan session
session_destroy();

// Menghapus cookie "user_name"
setcookie("user_name", "", time() - 3600, "/");

// Redirect ke halaman login setelah logout
header("Location: login.php");
exit;
?>
