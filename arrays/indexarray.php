
<?php

$student=["pritam","raju","pallav","sagnik","trisha","trisha","trisha","trisha","trisha"];

echo "Student NAme is ".$student[0];
echo "<br>";
echo "Student NAme is ".$student[1];
echo "<br>";
echo "Student NAme is ".$student[2];
echo "<br>";
echo "Student NAme is ".$student[3];
echo "<br>";
echo "Student NAme is ".$student[4];

//using loop

echo "<hr>";


for($i=0;$i<count($student);$i++){
    echo "Student NAme is ".$student[$i];
    echo "<br>";
}

// i=0;
// while($i<count($student)){
//     echo "Student NAme is ".$student[$i];
//     echo "<br>";
//     $i++;
// }

echo "<hr>";

$user=array("pritam","raju","pallav","sagnik","trisha");
echo "<pre>";
print_r($user);
echo "</pre>";

?>

