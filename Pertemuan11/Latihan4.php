<?php

$con = mysqli_connect("localhost", "root", "", "lat_dbase");

if (!$con) {
    die("Koneksi gagal");
}

mysqli_query($con, "INSERT INTO tbl_mhs (FirstName, LastName, Age)
VALUES ('Nanda', 'Kamila', 22)");

mysqli_query($con, "INSERT INTO tbl_mhs (FirstName, LastName, Age)
VALUES ('Wahyu', 'Chandra', 32)");

echo "2 data berhasil ditambahkan";

mysqli_close($con);

?>