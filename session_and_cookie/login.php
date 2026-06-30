<?php
session_start();

$username = "admin";
$password = "123";

if (isset($_POST['submit'])) {

    if (isset($_POST['username'], $_POST['password']) && $_POST['username'] == $username && $_POST['password'] == $password) {
        
        $_SESSION['username'] = $username;
        header("Location: dashboard.php");
        exit();
    } else {
        echo "Invalid Username or Password";
    }

} else {
    echo "Please submit the login form.";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action="" method="POST">
    <input type="text" name="username" placeholder="Username">
    <input type="password" name="password" placeholder="Password">
    <button type="submit" name="submit">Login</button>
</form>
    
</body>
</html>