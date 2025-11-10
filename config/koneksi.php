<?php

$servername = "localhost";
$database = "uinsi_2441919055";
$username = "root";
$password = "";

// Buat koneksi Database

$conn = mysqli_connect($servername,$username,$password,$database);

// Cek koneksi

if (!$conn) {
    die("Koneksi Gagal".mysqli_connect_error());
}

echo "Koneksi Berhasil";
// mysqli_close();
?>