<?php

$con = mysqli_connect("localhost", "root", "", "lat_dbase");

$query = mysqli_query($con, "SELECT * FROM buku_tamu");

echo "<h2>DATA BUKU TAMU</h2>";

while ($data = mysqli_fetch_array($query)) {

    echo "Nama : " . $data['nama'] . "<br>";
    echo "Email : " . $data['email'] . "<br>";
    echo "Pesan : " . $data['pesan'] . "<br>";
    echo "<hr>";
}

mysqli_close($con);

?>