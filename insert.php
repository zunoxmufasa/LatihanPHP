<?php

$hostname = "localhost";
$username = "root";
$password = "";
$database = "latihanphp";

$connection = new mysqli($hostname, $username, $password, $database);

//melakukan pengecekan koneksi
if ($connection->connect_error) {
    die("Koneksi gagal: " . $connection->connect_error);
}

//membuat sql string untuk insert data
$sql = "INSERT INTO `latihanphp`.`table_nama_hero`(`nama_hero`,`tipe_hero`,`damage`) 
VALUES ('Vexana','Midlaner',80)";

//eksekusi SQL  string untuk insert data
if ($connection->query($sql) === TRUE) {
    echo "Data berhasil ditambahkan";
} else {
    echo "Error: " . $sql . "<br>" . $connection->error;
}