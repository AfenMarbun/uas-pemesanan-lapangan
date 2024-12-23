# Proyek Pemesanan Lapangan Olahraga

Ini adalah proyek untuk aplikasi pemesanan lapangan olahraga yang memungkinkan pengguna untuk memesan lapangan sepak bola, basket, badminton, futsal, dan voli. Pengguna dapat memilih lapangan yang ingin dipesan, memilih tanggal, dan memasukkan informasi kontak mereka. Selain itu, ada halaman admin untuk mengelola pemesanan yang dilakukan oleh pengguna.

## Struktur Proyek

1. **Halaman Utama** - Halaman untuk pengguna memilih lapangan dan melakukan pemesanan.
2. **Halaman Admin** - Halaman untuk admin mengelola dan memonitor pemesanan lapangan.
3. **Halaman Login Admin** - Halaman untuk admin masuk ke dalam sistem.
4. **Database** - Menyimpan data pemesanan dan informasi pengguna.

---


### Bagian 1: Client-side Programming

#### 1.1 Manipulasi DOM dengan JavaScript
- **Fitur yang Diimplementasikan**:
  - Membuat form input dengan elemen input seperti teks, email, nomor WhatsApp, pilihan lapangan, dan tanggal pemesanan.
  - Menampilkan data dari form input ke dalam **alert** setelah pemesanan dilakukan.
  - Menggunakan JavaScript untuk melakukan validasi form sebelum data diproses.
  - Setelah pemesanan berhasil, form input di-reset agar pengguna dapat mengisi form kembali.

#### 1.2 Event Handling
- **Fitur yang Diimplementasikan**:
  - Event handler onclick untuk tombol Pesan, yang akan memvalidasi dan menampilkan alert.
  - Event handler untuk mereset form setelah pesan ditampilkan.
  - Event handler untuk memastikan kolom input sesuai dengan yang diharapkan.

### Bagian 2: Server-side Programming

#### 2.1 Pengelolaan Data dengan PHP
- **Fitur yang Diimplementasikan**:
  - Menggunakan metode POST untuk mengirim data dari form ke server.
  - Validasi input dilakukan di server menggunakan PHP untuk memastikan bahwa data yang dikirim valid sebelum disimpan di database.
  - Jenis browser dan alamat IP pengguna juga disimpan ke dalam database untuk setiap pemesanan.

#### 2.2 Objek PHP Berbasis OOP
- **Fitur yang Diimplementasikan**:
  - Membuat class PHP dengan dua metode untuk menangani pemesanan dan validasi.
  - Menggunakan konsep Object-Oriented Programming (OOP) untuk struktur kode yang lebih bersih dan mudah dikelola.


### Bagian 3: Database Management

#### 3.1 Pembuatan Tabel Database
- **Fitur yang Diimplementasikan**:
  - Membuat tabel database untuk menyimpan pemesanan lapangan dengan kolom seperti nama, email, nomor WhatsApp, lapangan, tanggal, alamat IP, dan jenis browser.

#### 3.2 Konfigurasi Koneksi Database
- **Fitur yang Diimplementasikan**:
  - Membuat file db.php untuk mengatur koneksi database dengan menggunakan MySQLi.

#### 3.3 Manipulasi Data pada Database
- **Fitur yang Diimplementasikan**:
  - Menyimpan data pemesanan ke dalam database setelah form dikirim.
  - Mengambil data pemesanan dan menampilkannya di halaman admin untuk dikelola.
 
### Bagian 4: State Management

#### 4.1 State Management dengan Session
- **Fitur yang Diimplementasikan**:
  - Menggunakan session_start() untuk memulai session di halaman admin untuk menyimpan informasi login.
  - Menyimpan informasi pengguna seperti nama admin dalam sesi untuk validasi login.
 
#### 4.2 Pengelolaan State dengan Cookie dan Browser Storage
- **Fitur yang Diimplementasikan**:
  - Menetapkan, mendapatkan, dan menghapus cookie untuk menyimpan informasi sementara pengguna, seperti preferensi lapangan.
  - Menggunakan localStorage atau sessionStorage untuk menyimpan data sementara di sisi klien (browser).

### Bagian 5: Hosting Aplikasi Web

#### Langkah-langkah untuk hosting website
- Mendaftar akun di InfinityFree.
- Membuat situs web baru melalui InfinityFree dan mendapatkan domain gratis.
- Menggunakan File Manager di panel kontrol InfinityFree untuk mengunggah file proyek.
- Mengunggah semua file termasuk HTML, CSS, JavaScript, dan PHP ke folder htdocs.
- Menyiapkan database di phpMyAdmin yang disediakan oleh InfinityFree, dan mengimpor struktur database.
- Mengonfigurasi file db.php agar terhubung dengan database yang dibuat di phpMyAdmin.

#### Penyedia Hosting Web yang Paling Cocok untuk Web saya
Saya memilih InfinityFree sebagai penyedia hosting untuk aplikasi web ini. InfinityFree cocok karena:
- Menyediakan hosting web gratis dengan tanpa iklan.
- Memberikan akses ke phpMyAdmin untuk mengelola database.
- Dukungan untuk aplikasi berbasis PHP dan MySQL.
- Menyediakan SSL gratis untuk keamanan aplikasi web.

#### Keamanan Aplikasi Web yang di Hosting
- Penggunaan HTTPS: Dengan mengaktifkan SSL gratis dari InfinityFree, semua komunikasi antara pengguna dan server dienkripsi.
- Sanitasi Input: Menggunakan teknik sanitasi input di PHP untuk mencegah serangan SQL Injection dan XSS.
- Proteksi Formulir: Implementasi validasi sisi server untuk memastikan data yang diterima valid dan tidak berbahaya.
- Keamanan Session: Menggunakan session yang aman dan mengatur waktu kadaluarsa session untuk mencegah pencurian
