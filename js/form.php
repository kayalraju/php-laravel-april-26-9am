<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<h1>Register Form</h1>
<p id="error" style="color:red"></p>
<form action="" onsubmit="return ValidateForm()" method="POST">
    <input type="text" name="name" id="name" placeholder="Name"> <br/> <br/>   
    <input type="email" id="email" name="email" placeholder="Email"> <br/> <br/>
    <input type="text" name="phone" id="phone" placeholder="Phone"> <br/> <br/>
    <input type="password" name="password" id="password" placeholder="Password"> <br/> <br/>
    <input type="text" name="age" id="age" placeholder="age"> <br/> <br/>
    remember me
    <input type="checkbox" name="checkbox" id="checkbox" placeholder="checkbox"> <br/> <br/>
    <button type="submit" name="submit">Register</button>
</form>



<script src="script.js"></script>
</body>
</html>