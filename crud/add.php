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
  <h1 class="mt-4 mb-4">Add Student</h1>

  <form action="./query/insert.php" method="post" >
      <div class="form-group">
          <label>Name</label>
          <input type="text" class="form-control" name="name" >
         
      </div>

      <div class="form-group">
          <label>Email</label>
          <input type="email" class="form-control" name="email" >
         
      </div>

      <div class="form-group">
          <label>Phone</label>
          <input type="text" class="form-control" name="phone" >
         
      </div>

      <div class="form-group">
          <label>City</label>
          <input type="text" class="form-control" name="city" >
          
      </div>
      <div class="form-group">
          <label>Address</label>
          <input type="text" class="form-control" name="address" >
          
      </div>


      <button type="submit" class="btn btn-primary" name="addstudent">Add Student</button>
  </form>
</div>
</body>
</html>


