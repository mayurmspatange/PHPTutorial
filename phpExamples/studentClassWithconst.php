<?php 

class Stundents {

    // Class properties 
    public $name;
    public $roll_number;
    public $department;

    public $location;

    function setInformation($name,$roll_number,$department,$location){
        $this->name = $name;
        $this->roll_number = $roll_number;
        $this->department = $department;
        $this->location = $location;
    }


    // class  Methods 
    function getInformation(){
        echo "</br>Name of Student : " . $this->name;
        echo "</br>roll_number of Student : " . $this->roll_number;
        echo "</br>department of Student : " . $this->department;
        echo "</br>location of Student : " . $this->location."</br>";
    }



    // default constructer 
    // function __construct(){
    //     echo "</br>called once when object created default constructer";
    // }


    // parameterised constructor 
    function __construct($name,$roll_number,$department,$location){
        echo "</br>called once when student object created";
        $this->name = $name;
        $this->roll_number = $roll_number;
        $this->department = $department;
        $this->location = $location;
    }

    function __destruct() {
        echo "</br>The Student is ....{$this->name}."; 
      }

}


class stud extends Stundents {

}
$student1 = new Stundents("Ankita", 101, "IT", "Pune");


$student2 = new Stundents("Sanket", 102, "CSE", "Mumbai");


echo "</br>First Student information:</br>";
echo $student1->getInformation();


echo "</br></br>Second Student information:</br>";

echo "Name: " . $student2->name;


// if pubic 
$student2->name = "Sanket shinde";


echo $student2->getInformation();


?>