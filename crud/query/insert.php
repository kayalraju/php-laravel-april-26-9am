<?php
session_start();
include "../dbcon.php";


if(isset($_POST['addstudent'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $city = $_POST['city'];
    $address = $_POST['address'];

    $sql = "INSERT INTO students(name,email,phone,city,address) VALUES ('$name','$email','$phone','$city','$address')";
    if(mysqli_query($conn,$sql)){

        $_SESSION['message'] = "Student Added Successfully";
        header("location:../list.php");
    }else{
        echo "Error: " . mysqli_error($conn);
    }
}


?>