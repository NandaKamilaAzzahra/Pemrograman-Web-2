<?php

$con = mysqli_connect("localhost", "root", "");

if (!$con) {
    die("Koneksi gagal");
}

$sql = "CREATE DATABASE lat_dbase";

if (mysqli_query($con, $sql)) {
    echo "Database berhasil dibuat";
} else {
    echo "Database sudah ada atau gagal dibuat";
}

mysqli_close($con);

?>