<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
if(isset($_POST['submit'])){
    switch($_POST['marks']){
        case 100:
            echo "<h3>Grade A</h3>";
            break;
        case 90:
            echo "<h3>Grade B</h3>";
            break;
        case 80:
            echo "<h3>Grade C</h3>";
            break;
        case 70:
            echo "<h3>Grade D</h3>";
            break;
        default:
            echo "<h3>Grade E</h3>";
            break;
    }
}
?>

<div>
    <h2>Enter Marks</h2>
    <form action="" method="post">
        <input type="number" name="marks" placeholder="Enter Marks">
        <button type="submit" name="submit">Check</button>
    </form>
</div>
    
</body>
</html>