<?php
session_start();
include "../dbcon.php";


if(isset($_POST['addstudent'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $city = $_POST['city'];
    $address = $_POST['address'];
     $file_name=$_FILES['image']['name'];
        //print_r($file_name);
        
        $file_type=$_FILES['image']['type'];
        $file_size=$_FILES['image']['size'];
        $file_temp_loc=$_FILES['image']['tmp_name'];
        $file_store="../upload/".$file_name;
        move_uploaded_file($file_temp_loc, $file_store);

    $sql = "INSERT INTO students(name,email,phone,city,address,image) VALUES ('$name','$email','$phone','$city','$address','$file_name')";
    if(mysqli_query($conn,$sql)){

        $_SESSION['message'] = "Student Added Successfully";
        header("location:../list.php");
    }else{
        echo "Error: " . mysqli_error($conn);
    }
}


?>