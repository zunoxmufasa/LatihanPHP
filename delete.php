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
$sql = "DELETE FROM `latihanphp`.`table_nama_hero` WHERE id BETWEEN 10 AND 24";
// between 10 and 24 adalah id yang akan dihapus, bisa diganti sesuai kebutuhan
// cara bacanya dari 10 - 24, hapus semua data yang memiliki id diantara 10 sampai 24

//eksekusi SQL  string untuk insert data
if ($connection->query($sql) === TRUE) {
    echo "Data berhasil dihapus";
} else {
    echo "Error: " . $sql . "<br>" . $connection->error;
}