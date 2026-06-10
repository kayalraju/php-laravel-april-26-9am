<?php

include "fun1.php";

$result = Learning();
echo $result;

echo "<hr>";
$user=User("Raju",20);
echo $user;

echo "<hr>";

$sum=Sum(10,20);
echo $sum;

echo "<hr>";



$users=["Raju"," Rahul"," Ravi"," Rohit"];
PrintrUser($users);

?>