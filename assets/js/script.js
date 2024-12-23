document.getElementById('bookingForm').addEventListener('submit', function (e) {
    const name = document.getElementById('name').value;
    const terms = document.getElementById('terms').checked;

    if (!name || !terms) {
        e.preventDefault();
        alert('Pastikan semua data terisi dan syarat disetujui.');
    }
});

 // Fungsi untuk menampilkan alert saat tombol "Pesan" ditekan
 // Fungsi untuk menampilkan alert saat tombol "Pesan" ditekan
 function showAlert() {
    var name = document.getElementById("name").value;
    var email = document.getElementById("email").value;
    var whatsapp = document.getElementById("whatsapp").value;
    var field = document.getElementById("field").value;
    var date = document.getElementById("date").value;

    // Cek apakah semua input sudah diisi
    if (name && email && whatsapp && field && date) {
        alert("Pemesanan Lapangan berhasil!\n\n" +
            "Nama: " + name + "\n" +
            "Email: " + email + "\n" +
            "WhatsApp: " + whatsapp + "\n" +
            "Lapangan: " + field + "\n" +
            "Tanggal Pemesanan: " + date);

        // Reset form setelah alert
        document.getElementById("bookingForm").reset();
    } else {
        alert("Mohon lengkapi semua form terlebih dahulu!");
    }
}
// Menyimpan data pengguna di localStorage
function saveUserDataToLocalStorage() {
    var username = "<?php echo $_SESSION['username']; ?>"; // Mengambil data username dari PHP
    localStorage.setItem("username", username); // Menyimpan username di localStorage
    alert("Username disimpan di localStorage");
}

// Mengambil data pengguna dari localStorage
function getUserDataFromLocalStorage() {
    var username = localStorage.getItem("username");
    if (username) {
        alert("Data pengguna dari localStorage: " + username);
    } else {
        alert("Tidak ada data pengguna di localStorage.");
    }
}

// Menghapus data pengguna dari localStorage
function removeUserDataFromLocalStorage() {
    localStorage.removeItem("username");
    alert("Data pengguna dihapus dari localStorage.");
}

// Menyimpan data ketika halaman dimuat
window.onload = function() {
    saveUserDataToLocalStorage(); // Simpan data username ke localStorage
    getUserDataFromLocalStorage(); // Ambil data username dari localStorage
};
