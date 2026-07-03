<?php
session_start();
include "../dbcon.php";

if (isset($_POST['register'])) {
  if($_POST['password']==$_POST['c_password']){
  $name=$_POST['name'];
  $email=$_POST['email'];
  $phone=$_POST['phone'];
  $password= password_hash($_POST['password'], PASSWORD_DEFAULT);
 
  
  $query="insert into users (name,email,phone,password) values('$name','$email','$phone','$password')";
  $sql=mysqli_query($conn,$query);

  if ($sql) {
    $_SESSION['success'] = "Signup successful. Please log in.";
    header('location:../login.php');
  }else{
    echo "<script>alert('something went wrong')</script>";

  }

}else{
    echo "<script>alert('password and confirm password do not match')</script>";

  }
}
?>
