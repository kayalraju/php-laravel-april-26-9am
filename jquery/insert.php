<?php

include 'db.php';

if($_SERVER["REQUEST_METHOD"]=="POST"){

    $name=$_POST['name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];

    $stmt=$conn->prepare("INSERT INTO students(name,email,phone) VALUES(?,?,?)");

    $stmt->bind_param("sss",$name,$email,$phone);

    if($stmt->execute()){

        echo "Data Inserted Successfully";

    }else{

        echo "Failed";

    }

    $stmt->close();

    $conn->close();

}