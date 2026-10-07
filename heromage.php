<?php
//index dimulai dari 0
/$heromage = [
    "Eudora",
    "Vexana",
    "Lunox",
    "Pharsa",
    "Valir",
    "Cici",
];
//vardump berfungsi untuk menampilkan isi dari sebuah variabel
var_dump($heromage);

$heromage = [
    "nama" => ["Lunox","Pharsa"],
    "tipe" => ["Critical ","Burst"],
    "damage" => [100,88]
    ];

    //iterasi 
    foreach ($heromage as $key => $value) {
        foreach ($value as $val) {
        echo $val;
        echo "<br/>";
    }
    }