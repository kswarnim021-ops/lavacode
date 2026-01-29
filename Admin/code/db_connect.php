<?php
$host = "localhost";
$user = "root";   
$pass = "";       
$dbname = "lava_admin";

$conn = new mysqli($host, $user, $pass, $dbname);

if ($conn->connect_error) {
    die("DB Connection Failed: " . $conn->connect_error);
}

?>
