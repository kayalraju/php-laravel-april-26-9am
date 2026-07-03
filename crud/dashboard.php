<?php
session_start();
include "dbcon.php";

if(!isset( $_SESSION['id']))
{
    header("location:login.php");
    exit();
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h1>Welcome to the Dashboard</h1>

<h4>welcome <?php echo $_SESSION['name']; ?>!</h4>


<a href="query/logout.php">Logout</a>

    
</body>
</html>