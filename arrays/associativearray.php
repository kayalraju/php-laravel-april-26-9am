

<?php

$student=[
    "name"=>"Raju kayal",
    "age"=>21,
    "salary"=>1000,
    "city"=>"kolkata",
    "country"=>"india"
];

echo "Student NAme is ".$student["name"];
echo "<br>";
echo "Student NAme is ".$student["age"];
echo "<br>";
echo "Student NAme is ".$student["salary"];
echo "<br>";
echo "Student NAme is ".$student["city"];
echo "<br>";
echo "Student NAme is ".$student["country"];

echo "<hr>";

foreach($student as $key=>$value){
    echo $key. " :".$value;
    echo "<br>";
}

//syntax foreach(array as $key=>$value){
//     echo $key. " :".$value;
//     echo "<br>";
// }
?>