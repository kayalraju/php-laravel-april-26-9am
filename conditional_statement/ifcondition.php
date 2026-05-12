
<!-- if(condition){
    //write the code base on the condition
} -->


<?php
//if condition

// $age=20;
// if($age>=18){
//     echo "you can vote";
// }

//if else

// $age=20;
// if($age<10){
//     echo "you can vote";
// }else{
//     echo "you can't vote";
// }


//multiple condition check if ...elseif ...else


// $marks=40;

// if($marks>=90){
//     echo " Grade A++";
// }elseif($marks>=70){
//     echo " Grade A";

// }elseif($marks>=50){
//     echo " Grade B";
// }else{
//     echo " Fail";
// }



//nester if ----  An if statemenet inside another if statement is called nested if statement


$email_vaerify=true;
$is_admin=true;


if($email_vaerify){
    if($is_admin){
        echo "you can login";
    }
}





?>