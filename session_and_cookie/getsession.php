<?php
session_start();

if(isset($_SESSION['name'])){
    echo "Welcome " . $_SESSION['name'];
}else{
    echo "Welcome Guest";
}


echo "<br>";
echo "Your age is " .$_SESSION['age'];



?>