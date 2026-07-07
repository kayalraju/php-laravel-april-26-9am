<?php
session_start();
include('../dbcon.php');

if (!isset($_SESSION['id'])) {
    header("location:../login.php");
    exit();
}

$id = $_GET['id'];

// Get student image
$select = "SELECT * FROM students WHERE id='$id'";
$query = mysqli_query($conn, $select);
$row = mysqli_fetch_assoc($query);

// Delete image if exists
if ($row && !empty($row['image']) && file_exists("../upload/" . $row['image'])) {
    unlink("../upload/" . $row['image']);
}

// Delete student record
$sql = "DELETE FROM students WHERE id='$id'";
$query = mysqli_query($conn, $sql);

if ($query) {
    $_SESSION['message'] = "Student Deleted Successfully";
} else {
    $_SESSION['message'] = "Student Not Deleted";
}

header("location:../list.php");
exit();
?>