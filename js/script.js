



console.log("hello world");

//form validation
function ValidateForm(){
    //alert("hello");
   let name= document.getElementById("name").value;
   let email= document.getElementById("email").value;
   let phone= document.getElementById("phone").value;
   let password= document.getElementById("password").value;
   let age= document.getElementById("age").value;
   let checkbox= document.getElementById("checkbox").value;

   let pattern_name= /^[A-Za-z]+$/;

   if(name=="" || email=="" || phone=="" || password==""){
       //alert("All fields are required");
       document.getElementById("error").innerHTML="** All fields are required";
       return false;
   }

   if(!pattern_name.test(name)){
       //alert("Enter valid name");
       document.getElementById("error").innerHTML="** Only characters allowed";
       return false;
   }

   if(!email.match(/^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/)){
       //alert("Enter valid email");
       document.getElementById("error").innerHTML="** Enter valid email";
       return false;
   }

   if(age<18){
       //alert("You must be 18 or older");
       document.getElementById("error").innerHTML="** You must be 18 or older";
       return false;
   }

   if(!checkbox.checked){
       //alert("Accept terms and conditions");
       document.getElementById("error").innerHTML="** Accept terms and conditions";
       return false;
   }

   return true;
}