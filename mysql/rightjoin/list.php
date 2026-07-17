<?php

include "db.php";

// $sql = "
//     SELECT 
//         employee.id,
//         employee.name,
//         employee.counrty,
//         employee.salary,
//         department.department_name,
//         department.location
//     FROM employee
//     RIGHT JOIN department
//     ON employee.department_id = department.id
// ";

//right join with where condition

$sql = "
    SELECT 
        employee.id,
        employee.name,
        employee.counrty,
        employee.salary,
        department.department_name,
        department.location
    FROM employee
    RIGHT JOIN department
    ON employee.department_id = department.id
    WHERE employee.counrty = 'Spain' OR employee.counrty = 'Germany'
";


//left join nested where condition

// $sql = "
//     SELECT 
//         employee.id,
//         employee.name,
//         employee.counrty,
//         employee.salary,
//         department.department_name,
//         department.location
//     FROM employee
//     LEFT JOIN department
//     ON employee.department_id = department.id
//     WHERE (employee.counrty = 'Spain' OR employee.counrty = 'Germany') AND employee.salary > 10000
// ";

$stmt = $pdo->prepare($sql);
$stmt->execute();

$results = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html>
<head>
    <title>Employee & Department (RIGHT JOIN)</title>

    <style>
        body{
            font-family: Arial, sans-serif;
            background:#f5f5f5;
        }

        h2{
            text-align:center;
        }

        table{
            width:80%;
            margin:30px auto;
            border-collapse:collapse;
            background:#fff;
        }

        table th,
        table td{
            border:1px solid #ddd;
            padding:12px;
            text-align:left;
        }

        table th{
            background:#333;
            color:#fff;
        }

        tr:nth-child(even){
            background:#f9f9f9;
        }
    </style>

</head>
<body>

<h2>Employee & Department Details (RIGHT JOIN)</h2>

<table>

    <tr>
        <th>ID</th>
        <th>Employee Name</th>
        <th>Employee Country</th>
        <th>Employee Salary</th>
        <th>Department Name</th>
        <th> Department Location</th>
    </tr>

    <?php if(count($results) > 0): ?>

        <?php foreach($results as $row): ?>

            <tr>

                <td><?= htmlspecialchars($row['id']) ?></td>

                <td><?= htmlspecialchars($row['name']) ?></td>

                <td><?= htmlspecialchars($row['counrty']) ?></td>

                <td>₹<?= number_format($row['salary']) ?></td>

                <td>
                    <?= !empty($row['department_name'])
                        ? htmlspecialchars($row['department_name'])
                        : 'No Department'; ?>
                </td>

                <td>
                    <?= !empty($row['location'])
                        ? htmlspecialchars($row['location'])
                        : 'N/A'; ?>
                </td>

            </tr>

        <?php endforeach; ?>

    <?php else: ?>

        <tr>
            <td colspan="6" style="text-align:center;">
                No Records Found
            </td>
        </tr>

    <?php endif; ?>

</table>

</body>
</html>