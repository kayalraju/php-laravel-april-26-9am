
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<h1>Student Form</h1>
<p id="error" style="color:red"></p>
<form action="" method="POST" id="studentform">
    <input type="text" name="name" id="name" placeholder="Name"> <br/> <br/>   
    <input type="email" id="email" name="email" placeholder="Email"> <br/> <br/>
    <input type="text" name="phone" id="phone" placeholder="Phone"> <br/> <br/>
    <input type="text" name="age" id="age" placeholder="age"> <br/> <br/>
    <!-- <button onclick="getData()">add</button> -->
    <button type="submit">add</button>
</form>



<script>
    console.log("hello");


    // function getData(){

    //     let name = document.getElementById("name").value;
    //     let email = document.getElementById("email").value;
    //     let phone = document.getElementById("phone").value;
    //     let age = document.getElementById("age").value;
       
    //     console.log(name);
    //     console.log(email);
    //     console.log(phone);
    //     console.log(age);

    //     alert(
    //         "Name: " + name + "\n" +
    //         "Email: " + email + "\n" +
    //         "Phone: " + phone + "\n" +
    //         "Age: " + age
    //     )
        
    // }

    //form data
    const form=document.getElementById("studentform");
    form.addEventListener("submit",function(e){
        e.preventDefault();

      let formData=new FormData(form);
      let name=formData.get("name");
      let email=formData.get("email");
      let phone=formData.get("phone");
      let age=formData.get("age");

        console.log(name);
        console.log(email);
        console.log(phone);
        console.log(age);
    })
</script>
</body>
</html>