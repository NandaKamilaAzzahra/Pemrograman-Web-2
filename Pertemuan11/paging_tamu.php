<?php

$con = mysqli_connect("localhost", "root", "", "lat_dbase");

$batas = 5;

$halaman = isset($_GET['hal']) ? $_GET['hal'] : 1;

$mulai = ($halaman - 1) * $batas;

$query = mysqli_query($con,
"SELECT * FROM buku_tamu LIMIT $mulai, $batas");

while ($data = mysqli_fetch_array($query)) {

    echo $data['nama'] . " - ";
    echo $data['email'] . "<br>";
}

echo "<br>";

$result = mysqli_query($con,
"SELECT * FROM buku_tamu");

$total = mysqli_num_rows($result);

$pages = ceil($total / $batas);

for ($i = 1; $i <= $pages; $i++) {

    echo "<a href='paging_tamu.php?hal=$i'>$i</a> ";
}

?>