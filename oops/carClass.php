<?php


// class Car{

// //properties

// public $color;
// public $model;
// public $year;


// //methods
// public function Carname(){
// echo "hello this is a car";

// }


// }


// $car = new Car();
// $car->Carname();


// class Student{
//     public $name;
//     public $age;

//     public function introduce(){
//         echo "Welcome Student";
//     }
// }


// $student=new Student();
// $student->introduce();

// $student->name="Raju";
// $student->age=21;
// echo "<br>";
// echo "Student name is: ".$student->name;
// echo "<br>";
// echo "Student age is: ".$student->age;




//access modifiers

// public -> access from anywhere
// private -> access from within the class only
// protected -> access from within the class and its subclasses



//constructor-> a special method that run automatically when an object is created an object is created


//syntax of constructor


// public function __construct(){
//     //code
// }

// class Student{
   

//     public function __construct(){

//     echo "Welcome to webskitters";
     
//     }



//     public function introduce(){
//         echo "Welcome Student";
//     }

// }


// $student=new Student();



class Student{
    public $name;
    public $age;

    public function __construct($name,$age){
        $this->name=$name;
        $this->age=$age;
    }


    public function showDetails(){
        echo "Student name is: ".$this->name;
        echo "<br>";
        echo "Student age is: ".$this->age;
    }
}


$obj=new Student("Raju",21);
$obj->showDetails();

//new Student() -> object call -> constructor call -> initialize the properties -> showDetails() call -> print the details



?>