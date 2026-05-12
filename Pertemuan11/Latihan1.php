<?php

$servername = "localhost";
$username = "root";
$password = "";

// koneksi
$con = mysqli_connect($servername, $username, $password);

// cek koneksi
if (!$con) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

echo "Koneksi berhasil";

?>