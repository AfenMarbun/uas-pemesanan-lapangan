<?php

class Booking {
    private $conn;

    // Konstruktor untuk menginisialisasi koneksi database
    public function __construct($db_connection) {
        $this->conn = $db_connection;
    }

    // Method untuk memproses pemesanan
    public function createBooking($name, $email, $whatsapp, $date, $field, $ip, $browser) {
        // Memastikan bahwa semua data diterima
        if ($name && $email && $whatsapp && $date && $field) {
            // Menyimpan data ke dalam database
            $stmt = $this->conn->prepare("INSERT INTO bookings (name, email, whatsapp, date, field, ip_address, browser) VALUES (?, ?, ?, ?, ?, ?, ?)");
            $stmt->bind_param("sssssss", $name, $email, $whatsapp, $date, $field, $ip, $browser);
            $stmt->execute();
            $stmt->close();
            return true; // Menyatakan pemesanan berhasil
        } else {
            return false; // Menyatakan pemesanan gagal
        }
    }
}
?>
