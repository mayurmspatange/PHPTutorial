<?php 

class Stundents {
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

    function getInformation(){
        echo "</br>Name of Student : " . $this->name;
        echo "</br>roll_number of Student : " . $this->roll_number;
        echo "</br>department of Student : " . $this->department;
        echo "</br>location of Student : " . $this->location."</br>";
    }
    
}

$student1 = new Stundents();

$student1->setInformation("Ankita", 101, "IT", "Pune");

$student2 = new Stundents();

$student2->setInformation("Sanket", 102, "CSE", "Mumbai");


echo "</br>First Student information:</br>";
echo $student1->getInformation();


echo "</br></br>Second Student information:</br>";

echo "Name: " . $student2->name;

$student2->name = "Sanket shinde";


echo $student2->getInformation();



echo "</br></br>this is a instance of :".var_dump($student2 instanceof Stundents);

?>