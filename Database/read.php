<?php

$hostname = "localhost";
$username = "root";
$password = "";
$database = "latihanphp";

$connection = new mysqli($hostname, $username, $password, $database) or die ("Gagal koneksi gayss");

$sql = "SELECT `id`, `nama_hero`, `tipe_hero`, `damage` FROM `latihanphp`.`table_nama_hero` WHERE  `id`=2;";

$query = $connection->query($sql);

if ($query->num_rows != 0) {
    //Iterasi data
    while($row = $query->fetch_assoc()) {
        echo $row["nama_hero"];
    }
    var_dump($query);
} else {
    var_dump($query);
}
