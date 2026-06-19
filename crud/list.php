
<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>hi</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>



<div class="container">
    <h3>All Student</h3>
    <?php if(isset($_SESSION['message'])): ?>
        <div class="alert alert-success">
            <?php echo $_SESSION['message']; ?>
           <?php unset($_SESSION['message']); ?>
        </div>
    <?php endif; ?>
    <a href="add.php" class="btn btn-info"> Add Student</a>
    

    <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">id</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Phone</th>
      <th scope="col">City</th>
      <th scope="col">Address</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
 <tbody> 

      <?php
      include('dbcon.php');
      //$sql="select * from studnet order by id desc";
      $sql="select * from students";
      $query=mysqli_query($conn,$sql);
      if(mysqli_num_rows($query)==0){
        echo "<tr><td colspan='10' class='text-center'>No Records Found</td></tr>";
      }
      ?>
      <?php 
      $index = 1; //Initialize counter before loop
      while($rows=mysqli_fetch_assoc($query)) {?>
        
      <tr>
        <td><?= $index ++ ?></td>
        <td><?= $rows['id']?></td>
        <td><?= $rows['name']?></td>
        <td><?= $rows['email']?></td>
        <td><?= $rows['phone']?></td>
        <td><?= $rows['city'] ?></td>
        <td><?= $rows['address']?></td>
        <td><a href='' class="btn btn-primary">Edit</a></td>
        <td><a href='' class="btn btn-danger">Delete</a></td>
      </tr>
      
      <?php } ?>
    </tbody>
</table>
   
</div>


</body>
</html>
