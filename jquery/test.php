<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>jquery</title>

</head>
<body>


    <!-- show hide -->

    <!-- <p id="data">Hello welcome to webskitters </p>
    <button id="btn">Show</button>
    <button id="btn1">Hide</button> -->

<!-- <h1 id="heading">Welcome to webskitters</h1>
<button id="btn">Click Me to change text</button> -->




<!-- <h1 id="heading">Hi Raju</h1>
<button id="btn">Click Me to change text</button> -->
<!-- <div id="error"></div>
<form action="" id="form">
    <input type="text" name="name" id="name" placeholder="Enter your name"> <br><br>
    <input type="email" name="email" id="email" placeholder="Enter your email"> <br><br>
    <input type="text" name="phone" id="phone" placeholder="Enter your PHONE"> <br><br>
    <input type="password" name="password" id="password" placeholder="Enter your password"> <br><br>

    <input type="submit" value="Submit" id="btn">
</form> -->
<form action="" id="form" method="post">
Name : <input type="text" id="name"> <br><br>
Email : <input type="email" id="email"> <br><br>
Phone : <input type="text" id="phone"> <br><br>
<button id="save">Save</button>
</form>
<div id="result">
    
</div>


<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
   <script>
    $(document).ready(function(){

    console.log("jQuery is working");
        // $("#btn").click(function(){
        //     $("#heading").text("Hi my name is Raju");
        // });

        // $("#btn").click(function(){
        //     $("#data").show();
        // });

        // $("#btn1").click(function(){
        //     $("#data").hide();
        // });


        // $("#form").submit(function(e){
        //     e.preventDefault();
        //     var name = $("#name").val();
        //     var email = $("#email").val();
        //     var phone = $("#phone").val();
        //     var password = $("#password").val();

        //     if(name == "" || email == "" || phone == "" || password == ""){
        //         $("#error").text("Please fill all the fields");
        //         return false;
        //     }

        //     if(!email.includes("@") || !email.includes(".")){
        //         $("#error").text("Please enter a valid email");
        //         return false;
        //     }
        //     if(phone.length != 10){
        //         $("#error").text("Phone number must be 10 digits long");
        //         return false;
        //     }

        //     if(password.length < 6){
        //         $("#error").text("Password must be at least 6 characters long");
        //         return false;
        //     }


        //     console.log("Name: " + name + "\nEmail: " + email + "\nPassword: " + password + "\nPhone: " + phone);
        //     //alert("Name: " + name + "\nEmail: " + email + "\nPassword: " + password );
        //     $("#form")[0].reset();
        // });


        $("#save").click(function(e){
            e.preventDefault();

        $.ajax({
            url:"./insert.php",
            method:"POST",
            data:{
                name:$("#name").val(),
                email:$("#email").val(),
                phone:$("#phone").val()
            },
            success:function(response){
                $("#result").html(response);
                $("#form")[0].reset();
                console.log("Data inserted successfully");
            },
            error:function(error){
                console.log("Error: " + error);
            }
        });

    });
    });
   </script>
    
</body>
</html>