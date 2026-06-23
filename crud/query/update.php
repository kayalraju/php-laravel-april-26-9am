<?php
session_start();
include('../dbcon.php');

if(isset($_POST['updatestudent'])){
    $id=$_POST['id'];
    $name=$_POST['name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $city=$_POST['city'];
    $address=$_POST['address'];

    $sql="update students set name='$name', email='$email', phone='$phone', city='$city', address='$address' where id='$id'";
    $query=mysqli_query($conn,$sql);
    if($query){
        $_SESSION['message']="Student Updated Successfully";
        header('location:../list.php');
    }else{
        $_SESSION['message']="Student Not Updated";
        header('location:../list.php');
    }
}


?>