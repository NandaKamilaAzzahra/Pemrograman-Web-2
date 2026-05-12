<?php

$con = mysqli_connect("localhost", "root", "", "lat_dbase");

if (!$con) {
    die("Koneksi gagal");
}

// membuat tabel
$sql = "CREATE TABLE tbl_mhs (
    mhsID INT NOT NULL AUTO_INCREMENT,
    PRIMARY KEY(mhsID),
    FirstName VARCHAR(15),
    LastName VARCHAR(15),
    Age INT
)";

if (mysqli_query($con, $sql)) {
    echo "Tabel berhasil dibuat <br>";
} else {
    echo "Tabel sudah ada <br>";
}

// input data
$input = "INSERT INTO tbl_mhs (FirstName, LastName, Age)
VALUES ('Anjar', 'Prabowo', 25)";

mysqli_query($con, $input);

echo "Data berhasil ditambahkan";

mysqli_close($con);

?>