<?php
$host     = "localhost";      // atau IP database server
$username = "root";           // ganti dengan username database Anda
$password = "";               // ganti dengan password database Anda
$database = "bhumi_rantau_energi";   // ganti dengan nama database Anda

// Membuat koneksi
$koneksi = mysqli_connect($host, $username, $password, $database);

// Mengecek koneksi
if (!$koneksi) {
    die("Koneksi database gagal: " . mysqli_connect_error());
}
?>
