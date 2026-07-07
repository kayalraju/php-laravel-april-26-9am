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
    $file_name = $_FILES['image']['name'];
    $file_type = $_FILES['image']['type'];
    $file_size = $_FILES['image']['size'];
    $file_temp_loc = $_FILES['image']['tmp_name'];
    $file_store = "../upload/" . $file_name;
    move_uploaded_file($file_temp_loc, $file_store);

    $sql="update students set name='$name', email='$email', phone='$phone', city='$city', address='$address', image='$file_name' where id='$id'";
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