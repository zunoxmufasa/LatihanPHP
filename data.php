<?php

$namahero = $_GET["nama"];
echo "Nama Hero saya: ".$namahero;
?>

<form action="data.php" method="GET">
    Nama Hero:<input type="text" name="nama"/>
    <input type="submit"/>
    </form>