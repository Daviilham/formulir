<?php
$servername = "localhost";  
$username = "root";         // Username MySQL (ubah sesuai dengan konfigurasi Anda)
$password = "";             // Password MySQL (ubah sesuai dengan konfigurasi Anda)
$dbname = "formulir";  // Nama database Anda

// Membuat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Mengecek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
?>
