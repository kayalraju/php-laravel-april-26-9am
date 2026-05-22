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
    $num=$_POST['number'];
    if($num%2==0){
        echo "<h3>".$num ." Number is Even"."</h3>";
    }else{
        echo "<h3>".$num ." Number is Odd". "</h3>";
    }
}
?>
    
<div class="container">
    <h2>Enter Number</h2>
    <form action="" method="post">
        <input type="number" name="number" placeholder="Enter Number">
        <button type="submit" name="submit">Check</button>
    </form>
</div>

</body>
</html>