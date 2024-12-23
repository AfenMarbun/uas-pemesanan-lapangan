<?php
session_start(); // Memulai session
// Mengimpor file yang diperlukan
require_once '../includes/db.php'; // Mengimpor kelas Database
require_once '../includes/Booking.php';  // Mengimpor kelas Booking

// Memeriksa apakah pengguna sudah login
if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
    // Jika pengguna belum login, redirect ke halaman login
    header("Location: login.php");
    exit;
}
// Membuat objek dari kelas Database
$db = new Database();

// Mendapatkan koneksi database
$conn = $db->getConnection();

// Menyusun query untuk mendapatkan semua pemesanan
$query = "SELECT * FROM bookings";
$result = $db->runQuery($query);

// Jika ingin menggunakan prepared statement, Anda bisa menggunakan prepareQuery
// $stmt = $db->prepareQuery($query);
// $stmt->execute();
// $result = $stmt->get_result();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>
    <header>
        <h1>Kelola Pemesanan</h1>
        <div class="admin-login">
            <a href="logout.php">
                <button type="button" class="login-button">Logout</button>
            </a>
        </div>
    </header>

    <table>
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Email</th>
            <th>WhatsApp</th>
            <th>Tanggal</th>
            <th>Lapangan</th>
            <th>IP Address</th>
            <th>Browser</th>
        </tr>

        <?php while ($row = $result->fetch_assoc()): ?>
        <tr>
            <td><?= $row['id'] ?></td>
            <td><?= $row['name'] ?></td>
            <td><?= $row['email'] ?></td>
            <td><?= $row['whatsapp'] ?></td>
            <td><?= $row['date'] ?></td>
            <td><?= $row['field'] ?></td>
            <td><?= $row['ip_address'] ?></td>
            <td><?= $row['browser'] ?></td>
        </tr>
        <?php endwhile; ?>
    </table>

    <!-- Menutup koneksi database setelah selesai -->
    <?php $db->closeConnection(); ?>
    <script src="../assets/js/script.js"></script>
</body>
</html>
