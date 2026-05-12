<?php

$con = mysqli_connect("localhost", "root", "", "lat_dbase");

$query = mysqli_query($con, "SELECT * FROM tbl_mhs");

while ($data = mysqli_fetch_array($query)) {

    echo $data['FirstName'] . " ";
    echo $data['LastName'] . " ";
    echo $data['Age'] . "<br>";
}

mysqli_close($con);

?>