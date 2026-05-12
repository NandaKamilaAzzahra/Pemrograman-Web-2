<?php

$con = mysqli_connect("localhost", "root", "", "lat_dbase");

$query = mysqli_query($con, "SELECT * FROM tbl_mhs");

$jumlah = mysqli_num_rows($query);

echo "Jumlah record = " . $jumlah;

mysqli_close($con);

?>