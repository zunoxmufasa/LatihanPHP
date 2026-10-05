<?php

$namaHero = "Zilong";
$level = 3;
// 1.if dan else if
/*if ($level < 4) {
    echo "$namaHero belum memiliki skill Ultimate.<br>";
} elseif ($level >= 4) {
    echo "$namaHero sudah memiliki skill Ultimate.<br>";
} else {
    echo "$namaHero tidak ada dalam permainan.<br>";
}*/

// 2. switch case
switch ($level) {
    case 1:
        echo "$namaHero baru memiliki Skill 1.<br>";
        break;
    case 2:
    case 3:
        echo "$namaHero belum memiliki Ultimate, baru Skill 1 & 2.<br>";
        break;
    case 4:
        echo "$namaHero sudah memiliki skill Ultimate!<br>";
        break;
    default:
        echo "$namaHero tidak ada dalam skenario level ini.<br>";
        break;
}

$statusSkill = ($level >= 4) 
    ? "$namaHero sudah memiliki skill Ultimate." 
    : "$namaHero belum memiliki skill Ultimate.";

echo $statusSkill;
?>