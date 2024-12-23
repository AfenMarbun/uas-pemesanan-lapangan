<?php
session_start(); // Memulai session
require_once 'includes/db.php';  // Mengimpor kelas Database
require_once 'includes/Booking.php';   // Mengimpor kelas Booking

// Membuat objek dari kelas Database
$db = new Database();

// Mendapatkan koneksi database
$conn = $db->getConnection();

// Membuat objek Booking
$booking = new Booking($conn);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $whatsapp = $_POST['whatsapp'];
    $date = $_POST['date'];
    $field = $_POST['field'];

    // Mendapatkan IP Address Pengguna
    $ip = $_SERVER['REMOTE_ADDR'];

    // Memeriksa apakah ada proxy yang terlibat
    if (isset($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    }

    // Mendapatkan jenis browser dari header HTTP_USER_AGENT
    $browser = $_SERVER['HTTP_USER_AGENT'];

    // Simpan informasi pengguna ke dalam session
    $_SESSION['name'] = $name;
    $_SESSION['email'] = $email;

        // Menyimpan nama pengguna dalam cookie selama 30 hari
    setcookie("user_name", $name, time() + (86400 * 30), "/"); // Cookie berlaku selama 30 hari
    // Memanggil method createBooking dari kelas Booking
    if ($booking->createBooking($name, $email, $whatsapp, $date, $field, $ip, $browser)) {
        echo "Pemesanan berhasil.";
    } else {
        echo "Gagal memesan. Pastikan semua data terisi.";
    }

    // Menutup koneksi database setelah selesai
    $db->closeConnection();
}
?>
