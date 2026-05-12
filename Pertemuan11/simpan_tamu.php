<?php

$con = mysqli_connect("localhost", "root", "", "lat_dbase");

$sql = "INSERT INTO buku_tamu (nama, email, pesan)
VALUES (
'".$_POST['nama']."',
'".$_POST['email']."',
'".$_POST['pesan']."'
)";

if (mysqli_query($con, $sql)) {

    echo "Data buku tamu berhasil disimpan";

} else {

    echo "Gagal menyimpan";
}

mysqli_close($con);

?>