<?php

session_start();

$_SESSION['username'] = $_POST['username'];
$_SESSION['password'] = $_POST['password'];

if (isset($_SESSION['username']) && isset($_SESSION['password'])) {
    echo "Welcome,You are logged in.";
    echo "<br><a href='logout.php'>Logout</a>";
} else {
    echo "Please log in.";
}