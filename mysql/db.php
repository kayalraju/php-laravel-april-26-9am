<?php
$hostName = "localhost";
$username = "root";
$password = "";
$dbname = "php-laravel-april-9am";

// Create connection
//$conn = new mysqli($hostName, $username, $password, $dbname);

$conn=mysqli_connect($hostName, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>