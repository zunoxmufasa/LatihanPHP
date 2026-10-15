<?php
// ==========================================
// PRAKTIK VARIABLE SCOPE DI PHP
// ==========================================

// 1. GLOBAL SCOPE
// Variabel ini dibuat di luar fungsi (area global)
$skorPemain = 100;

function tampilkanSkorGlobal() {
    // PENTING: Untuk mengakses variabel global di dalam fungsi, 
    // kita harus memanggil keyword 'global' terlebih dahulu.
    global $skorPemain;
    
    echo "Skor Global di dalam fungsi: " . $skorPemain . "<br>";
}


// 2. LOCAL SCOPE
function hitungBonus() {
    // Variabel ini bersifat lokal, hanya hidup di dalam fungsi ini saja.
    $bonusLokal = 50;
    $total = 100 + $bonusLokal;
    
    echo "Total di dalam fungsi: " . $total . "<br>";
}


// 3. STATIC SCOPE
function tambahStokBarang() {
    // Variabel static tidak akan di-reset saat fungsi selesai dijalankan.
    static $stok = 10;
    
    $stok += 5;
    echo "Stok saat ini: " . $stok . "<br>";
}


// ==========================================
// EKSEKUSI & PENGUJIAN
// ==========================================

echo "<h3>1. Uji Coba Global Scope:</h3>";
tampilkanSkorGlobal();
echo "Skor Global di luar fungsi: " . $skorPemain . "<br>"; // Berhasil diakses


echo "<h3>2. Uji Coba Local Scope:</h3>";
hitungBonus();
// EKSPERIMEN PRAKTIK: 
// Coba hapus tanda komentar (//) di baris bawah ini dan lihat error yang muncul!
// echo $pesanLokal; 


echo "<h3>3. Uji Coba Static Scope:</h3>";
echo "Pemanggilan ke-1: "; tambahStokBarang(); // Stok jadi 15
echo "Pemanggilan ke-2: "; tambahStokBarang(); // Stok jadi 20 (mengingat nilai sebelumnya)
echo "Pemanggilan ke-3: "; tambahStokBarang(); // Stok jadi 25
?>