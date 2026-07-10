
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
    <h3>All Employees</h3>
   

    <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <!-- <th scope="col">id</th> -->
      <th scope="col">Name</th>
      <th scope="col">Department</th>
      <th scope="col">salary</th>
      <th scope="col">City</th>
      <th scope="col">age</th>
      <th scope="col">joining date</th>
   
    </tr>
  </thead>
 <tbody> 

      <?php
      include('db.php');
      //$sql="select * from studnet order by id desc";
      //$sql="select * from Employees";
      //counter function
      //$sql="select count(*) as total from Employees";
      //$sql="select count(*) as total_it from Employees where department='IT'";

      //min

      //$sql="select min(salary) as min_salary from Employees";
      //$sql="select min(age) as young_emp from Employees";

      //max
      //$sql="select max(salary) as max_salary from Employees";
      //$sql="select max(age) as old_emp from Employees";

      //sum
      //$sql="select sum(salary) as total_salary from Employees";

      //avg
      //$sql="select avg(salary) as avg_salary from Employees";

      //group by
      $sql="SELECT department, count(*) as total_employees from Employees GROUP BY department";

      $query=mysqli_query($conn,$sql);
      if(mysqli_num_rows($query)==0){
        echo "<tr><td colspan='10' class='text-center'>No Records Found</td></tr>";
      }

      //echo "<h1>Total Employees: " . mysqli_fetch_assoc($query)['total'] . "</h1>";
      //echo "<h1>Minimum Salary: " . mysqli_fetch_assoc($query)['min_salary'] . "</h1>";
      //echo "<h1>Youngest Employee: " . mysqli_fetch_assoc($query)['young_emp'] . "</h1>";

      //echo "<h1>Maximum Salary: " . mysqli_fetch_assoc($query)['max_salary'] . "</h1>";
      //echo "<h1>Maximum Age: " . mysqli_fetch_assoc($query)['old_emp'] . "</h1>";
      //echo "<h1>Total Salary: " . mysqli_fetch_assoc($query)['total_salary'] . "</h1>";
      //echo "<h1>Average Salary: " . mysqli_fetch_assoc($query)['avg_salary'] . "</h1>"; 
      echo "<h1>Total Employees in IT Department: " . mysqli_fetch_assoc($query)['total_employees'] . "</h1>";
      ?>
      <?php 
      $index = 1; //Initialize counter before loop
      while($rows=mysqli_fetch_assoc($query)) {?>
        
      <tr>

        <td><?= $index ++ ?></td>
        <!-- <td><?= $rows['id']?></td> -->
        <td><?= $rows['name']?></td>
        <td><?= $rows['department']?></td>
        <td><?= $rows['salary']?></td>
        <td><?= $rows['city'] ?></td>
        <td><?= $rows['age']?></td>
        <td><?= $rows['joining_date']?></td>
      </tr>
      
      <?php } ?>
    </tbody>
</table>
   
</div>


</body>
</html>





