<?php

include "db.php";

//groupby having

// $sql = "
//     SELECT 
//         employee.id,
//         employee.name,
//         employee.counrty,
//         employee.salary,
//         department.department_name,
//         department.location
//     FROM employee
//     JOIN department
//     ON employee.department_id = department.id
//     GROUP BY employee.department_id
//     HAVING COUNT(employee.department_id) > 1
// ";

//we use onlu employee table
// $sql = "SELECT name, SUM(salary) AS total_salary
//     FROM employee
//     GROUP BY name

//     HAVING total_salary > 10000";


//only group by
$sql="SELECT name, count(*) as total_employees from Employee GROUP BY counrty";


$stmt = $pdo->prepare($sql);
$stmt->execute();

$results = $stmt->fetchAll(PDO::FETCH_ASSOC);

echo "<pre>";
print_r($results);
echo "</pre>";



?>