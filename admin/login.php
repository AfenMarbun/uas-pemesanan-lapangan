<?php
session_start(); // Memulai session

// Memeriksa apakah form login telah disubmit
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Verifikasi kredensial (misalnya dengan mengecek di database)
    if ($username === 'admin' && $password === 'admin123') {
        // Jika login berhasil, simpan informasi pengguna ke session
        $_SESSION['logged_in'] = true;
        $_SESSION['username'] = $username;

        // Redirect ke halaman admin
        header("Location: admin_page.php");
        exit;
    } else {
        echo "Login gagal. Username atau password salah.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin</title>
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>
    <h1>Login Admin</h1>
    <form method="POST">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required><br><br>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br><br>

        <button type="submit">Login</button>
    </form>
</body>
</html>
