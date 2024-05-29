<?php
$id = "localhost"; // Ganti dengan id anda jika berbeda
$nama = "root"; // Ganti dengan MYSQL anda
$password = ""; // Ganti dengan password NYSQL anda
$database = "komentar"; // Ganti dengan nama database anda

//Membuat koneksi ke database
$conn = new mysqli($id, $nama, $password,$database);

//Periksa koneksi
if ($conn->connect_error) {
    die("koneksi gagal: " . $conn->connect_error);
}
?>