<?php

$con = mysqli_connect("localhost", "root", "", "lat_dbase");

$query = mysqli_query($con, "SELECT * FROM tbl_mhs");

while ($data = mysqli_fetch_row($query)) {

    echo $data[0] . " ";
    echo $data[1] . " ";
    echo $data[2] . " ";
    echo $data[3] . "<br>";
}

mysqli_close($con);

?>