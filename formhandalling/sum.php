<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<?php
if(isset($_POST['add']))
{
    $first = $_POST['first'];
    $second = $_POST['second'];
    $sum = $first + $second;
    echo "sum of two number is ".$sum;
}

?>
<body>
    <div class="container">
        <h2>sum of two number </h2>

        <form action="" method="post">
            <input type="number" name="first" placeholder="enter the first number"> <br> <br>
            <input type="number" name="second" placeholder="enter the second number"> <br> <br>
            <input type="submit" name="add" value="submit">
        </form>
    </div>
</body>
</html>