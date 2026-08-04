

<?php
if ($_POST) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    echo "Name: " . $name . "<br>Email: " . $email . "<br>Phone: " . $phone;
}
?>