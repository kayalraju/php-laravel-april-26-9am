<?php
session_start();
include "dbcon.php";

if(!isset( $_SESSION['id']))
{
    header("location:login.php");
    exit();
}

?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Update Student</title>

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
</head>
<body>
    <?php
    $id=$_GET['id'];
    $sql="select * from students where id='$id'";
    $query=mysqli_query($conn,$sql);
    $rows=mysqli_fetch_assoc($query);
    ?>
<div class="container">
  <h1 class="mt-4 mb-4">Update Student</h1>

  <form action="./query/update.php" method="post" >
        <input type="hidden" name="id" value="<?= $rows['id'] ?>" >
      <div class="form-group">
          <label>Name</label>
          <input type="text" class="form-control" name="name" value="<?= $rows['name'] ?>" >
         
      </div>

      <div class="form-group">
          <label>Email</label>
          <input type="email" class="form-control" name="email" value="<?= $rows['email'] ?>" >
         
      </div>

      <div class="form-group">
          <label>Phone</label>
          <input type="text" class="form-control" name="phone" value="<?= $rows['phone'] ?>" >
         
      </div>

      <div class="form-group">
          <label>City</label>
          <input type="text" class="form-control" name="city" value="<?= $rows['city'] ?>" >
          
      </div>
      <div class="form-group">
          <label>Address</label>
          <input type="text" class="form-control" name="address" value="<?= $rows['address'] ?>" >
          
      </div>


      <button type="submit" class="btn btn-primary" name="updatestudent">Update Student</button>
  </form>
</div>
</body>
</html>


