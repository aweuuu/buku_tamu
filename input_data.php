<?php

//siispkan file koneksi database
require_once("database.php");

//cek apakah formullir telah dikirim
if(isset($_POST['submit'])) {
    //ambil data dari formulir
    $username = $_POST['nama'];
    $password = $_POST['password'];
    $komentar = $_POST['komentar'];

    //simpan data ke database
    $query = "INSERT INTO notes (username, password, komentar) VALUES ('$username', '$password', '$komentar')";
    $result = mysqli_query($dbconnect, $query);

    //periksa apakah anada berhasil disimpan
    if($result) {
        header("location: index.php ");
    } else {
        header("location:index.php?msg-gagal");
    }
}
