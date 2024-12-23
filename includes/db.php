<?php

class Database {
    private $host = "localhost";     // Ganti dengan host database Anda
    private $username = "root";      // Ganti dengan username database Anda
    private $password = "";          // Ganti dengan password database Anda
    private $dbname = "sports_booking"; // Ganti dengan nama database Anda
    private $conn;                   // Menyimpan objek koneksi

    // Konstruktor untuk menginisialisasi koneksi database
    public function __construct() {
        $this->connect();
    }

    // Method untuk melakukan koneksi ke database
    private function connect() {
        $this->conn = new mysqli($this->host, $this->username, $this->password, $this->dbname);

        if ($this->conn->connect_error) {
            die("Koneksi gagal: " . $this->conn->connect_error);
        }
    }

    // Method untuk mendapatkan koneksi database
    public function getConnection() {
        return $this->conn;
    }

    // Method untuk menutup koneksi database
    public function closeConnection() {
        $this->conn->close();
    }

    // Method untuk menjalankan query
    public function runQuery($query) {
        return $this->conn->query($query);
    }

    // Method untuk menjalankan query yang menggunakan prepared statements
    public function prepareQuery($query) {
        return $this->conn->prepare($query);
    }
}
?>
