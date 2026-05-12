

<?php 
//switch case syntax

// switch(variable){
//     case value1:
//         //write the code base on the condition
//         break;
//     case value2:
//         //write the code base on the condition
//         break;
//     case value3:
//         //write the code base on the condition
//         break;
//     default:
//         //write the code base on the condition
//         break;
// }
// $day=3;
// switch($day){
//     case 1:
//         echo "sunday";
//         break;
//     case 2:
//         echo "monday";
//         break;
//     case 3:
//         echo "tuesday";
//         break;
//     default:
//         echo "wednesday";
//         break;
// }



$role="admine";
switch($role){
    case "admin":
        echo "you are admin";
        break;
    case "user":
        echo "you are user";
        break;

    case "manager":
        echo "you are manager";
        break;    
    default:
        echo "you are guest";
        break;
}


echo "<br>";

//calculator

$num1=10;
$num2=20;

$operator="*";

switch($operator){
    case "+":
        echo $num1+$num2;
        break;
    case "-":
        echo $num1-$num2;
        break;
    case "*":
        echo $num1*$num2;
        break;
    case "/":
        echo $num1/$num2;
        break;
    default:
        echo "invalid operator";
        break;
}


// calculate madhyamic result

<30   = "fail",
>30 and <=45 = "c"
>45 and <=60 = "b"
>60 to <80 = "a"
<80 to <90 =a+
>90 to <100 =a++




?>