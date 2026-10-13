<?php

class orangtua {
    public $ayah = "Alucard";
    public $ibu = "Miya";

    public function __construct($ayah, $ibu) {
        $this->ayah = $ayah;
        $this->ibu = $ibu;
    }

    public function printorangtua() {
        echo "Ayah: " . $this->ayah . "  ,  Ibu: " . $this->ibu . "\n";
    }
}
// extends adalah tanda bahwa kelas anak mewarisi semua properti dan method dari kelas orangtua
class anak extends orangtua {
    public $namaAnak = "Default nama anak";

    public function __construct($nama, $ayah, $ibu) {
        parent::__construct($ayah, $ibu);
        $this->namaAnak = $nama;
    }

    public function printAnak() {
        echo "  ,  Nama Saya: " . $this->namaAnak . "\n";
    }
}

$naya = new anak("Naya", "Alucard", "Miya");
$naya->printorangtua(); //method dari kelas orangtua
$naya->printAnak(); //method dari kelas anak
