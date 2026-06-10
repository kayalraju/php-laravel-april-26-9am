

<?php

//syntax of function

// function functionName(){
//     //code

// }


function Learning(){
    echo "I am learning PHP with Msqli";
}


//Learning();

//functon with parameter


function User($name,$age, $course="PHP"){

echo "function with parameter example ";
    echo "My name is $name and my age is $age and my course is $course";
}



function Sum($a,$b){

    return $a+$b;
}


function PrintrUser(array $users){
    foreach($users as $user){
        echo $user;
    }
}


?>