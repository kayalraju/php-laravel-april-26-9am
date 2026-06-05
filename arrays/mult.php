<?php

$user=array(
    array("pritam 0","raju 1","pallav 2","sagnik 3","trisha 4"),
    array("pritam 1","raju ","pallav","sagnik","trisha"),
    array("pritam 2","raju","pallav","sagnik","trisha")
);

//echo $user[1][2];

echo "<pre>";
print_r($user);
echo "</pre>";

echo "<hr>";
foreach($user as $key=>$value){
    echo "<pre>";
    print_r($value);
    echo "</pre>";
}


$user=[
    ["pritam 0","raju 1","pallav 2","sagnik 3","trisha 4"],
    ["pritam 1","raju ","pallav","sagnik","trisha"],
    ["pritam 2","raju","pallav","sagnik","trisha"]
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<table border="1">
    <tr>
        <th>name</th>
        <th>email</th>
        <th>phone</th>
        <th>password</th>
    </tr>
    <?php foreach($user as $key=>$value){ ?>
    <tbody>
    <tr>
        <td><?php echo $value[0]?></td>
        <td><?php echo $value[1]?></td>
        <td><?php echo $value[2]?></td>
        <td><?php echo $value[3]?></td>
    </tr>
    </tbody>
    <?php } ?>
</table>
</body>
</html>