<?php
session_start();


?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Add Student</title>

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
</head>
<body>
<div class="container">
  <h1 class="mt-4 mb-4">Login</h1>

  <form action="./query/login.php" method="post" >
    
      <div class="form-group">
          <label>Email</label>
          <input type="email" class="form-control" name="email" >
         
      </div>

      <div class="form-group">
          <label>password</label>
          <input type="password" class="form-control" name="password" >
          
      </div>
    

      <button type="submit" class="btn btn-primary" name="login">login</button>
  </form>
</div>
</body>
</html>


