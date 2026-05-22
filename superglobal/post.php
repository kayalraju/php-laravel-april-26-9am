

<?php
if(isset($_POST['submit']))
{
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    echo "Name : $name <br>";
    echo "Email : $email <br>";
    echo "Phone : $phone <br>";
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
    <form action="" method="post">
        name : <input type="text" name="name">
        Email : <input type="text" name="email">
        Phone : <input type="text" name="phone">
        <input type="submit" name="submit" value="submit">
    </form>
</body>
</html>