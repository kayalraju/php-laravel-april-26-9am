<?php
session_start();
include "../dbcon.php";


$error_message = '';
$success_message = '';

if (isset($_SESSION['error_message'])) {
    $error_message = $_SESSION['error_message'];
    unset($_SESSION['error_message']);
}

if (isset($_SESSION['success'])) {
    $success_message = $_SESSION['success'];
    unset($_SESSION['success']);
}

if (isset($_POST['login'])) {
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);

    if (empty($email) || empty($password)) {
        $_SESSION['error_message'] = "All fields are required.";
        header("Location: ../login.php");
        exit();
    }

   
    // $stmt = $conn->prepare("SELECT id, name, password FROM users WHERE email = ? AND is_admin = 'user'");
    // $stmt->bind_param("s", $email);
    // $stmt->execute();
    // $result = $stmt->get_result();
    // $user = $result->fetch_assoc();
    
    $sql="SELECT id, name, password FROM users WHERE email = '$email' AND is_admin = 'user'";
    $result=mysqli_query($conn,$sql);
    $user=mysqli_fetch_assoc($result);

    if ($user && password_verify($password, $user['password'])) {
        // Secure session
        session_regenerate_id(true);

        $_SESSION['id'] = $user['id'];
        $_SESSION['name'] = $user['name'];

        header("Location:../dashboard.php");
        exit();

    } else {
        $_SESSION['error_message'] = "Invalid email or password.";
        header("Location:../login.php");
        exit();
    }
}
?>

