<?php

$level = 0;
$levelmaks = 15;

do {
    $level++;
    echo "level hero : $level ";
    echo "<br>";
} while ($level < $levelmaks);

//for
/*for ($level; $level < $levelmaks; $level++) {
    echo "level hero : $level ";
    echo "<br>";
}*/

//while
/*while ($level < $levelmaks) {
    $level = $level + 1;
    echo "level hero : $level ";
    echo "<br>";
    }*/