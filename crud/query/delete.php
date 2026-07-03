<?php
session_start();
include('../dbcon.php');
if(!isset( $_SESSION['id']))
{
    header("location:../login.php");
    exit();
}

$id=$_GET['id'];
$sql="delete from students where id='$id'";
$quesy=mysqli_query($conn,$sql);
if($quesy){
    $_SESSION['message']="Student Deleted Successfully";
     header("location:../list.php");
}else{
    $_SESSION['message']="Student Not Deleted";
}




?>