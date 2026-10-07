<?php
/*Fungsi itu seperti mesin kalau ada input maka akan ada output,
jadi fungsi itu seperti mesin yang menerima input dan menghasilkan output.
Output dalam pemograman disebut return*/
//contoh fungsi sederhana
function luassegitiga($alas, $tinggi){
    //code untuk menghitung luas segitiga
    $luas = 0.5 * $alas * $tinggi;
    return $luas;
}

echo luassegitiga(5,3);  

function sum(...$input){
    $result = 0;
    foreach($input as $value){
        $result = $result + $value;
    }
    return $result;
}