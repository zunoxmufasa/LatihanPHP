<?php

// public = property / method yang dapat diakses dari luar class
// private = property / method yang hanya dapat diakses dari dalam class
// protected = property / method yang hanya dapat diakses dari dalam class dan turunannya

class Person {
    // 1. Properties
    public $name = 'default';
    public $age = 0;
    public $birthdate = 'default';
    public $hobi = 'default';

    // 2. Constructor (dijalankan otomatis saat objek dibuat)
    //function yang dipanggil pertama kali saat objek dibuat
    public function __construct($name, $age, $birthdate, $hobi) {
        $this->name = $name;
        $this->age = $age;
        $this->birthdate = $birthdate;
        $this->hobi = $hobi;
    }

    // 3. Method untuk mencetak data
    public function printPerson() {
        echo "Nama: " . $this->name . "<br>";
        echo "Umur: " . $this->age . " Tahun<br>";
        echo "Tanggal Lahir: " . $this->birthdate . "<br>";
        echo "Hobi: " . $this->hobi . "<br>";
        echo "-----------------------------------<br>";
    }
}

// Membuat objek (instansiasi) dengan data yang dinamis via constructor
$dimas = new Person("Dimas", 25, "1990-01-01", "Coding");
$anton = new Person("Anton", 20, "2005-05-15", "Mancing");
$surya = new Person("Surya", 22, "2003-08-20", "Dota");

// Memanggil method untuk menampilkan informasi masing-masing objek
$dimas->printPerson();
$anton->printPerson();
$surya->printPerson();

?>
