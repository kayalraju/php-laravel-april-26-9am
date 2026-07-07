<?php

// class ParentClass{
//     //code
// }

// //syntax

// class Child extends ParentClass{
//     //code
// }


// class Animal{

//     public function sound(){
//         echo "Animal sound";
//     }


// }

// class Dog extends Animal{
//     public function bark(){
//         echo "Dog barks";
//     }
// }


// $dog=new Dog();
// $dog->bark();
// echo "<br>";
// $dog->sound();




class Employee{

protected $name;

 public function __construct($name){
        $this->name=$name;
      
    }

    public function showEmployee(){
        echo "Employee name is: ".$this->name;
    }

}



class Developer extends Employee{

private $language;

 public function __construct($name,$language){
        parent::__construct($name);
        $this->language=$language;
      
    }

    public function showDeveloper(){
        echo "Developer name is: ".$this->name;
        echo "<br>";
        echo "Developer language is: ".$this->language;
    }
   

}



$dev=new Developer("Pritam","PHP");
$dev->showDeveloper();
echo "<br>";
$dev->showEmployee();


?>