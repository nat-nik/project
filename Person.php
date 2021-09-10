<?php
class Person
{
    //здоровье человека не может быть больше 100ед.
    private $name;
    private $lastname;
    private $age;
    private $hp;
    private $mother;
    private $father;

    function __construct($name, $lastname, $age , $mother=null, $father=null)
    {
        $this->name = $name;
        $this->lastname = $lastname;
        $this->age = $age;
        $this->mother = $mother;
        $this->father = $father;
        $this->hp = 100;
    }
    function sayHi($name)
    {
        return "Hi $name, I`m " . $this->name;
    }
    function setHP($hp)
    {
        if($this->hp+$hp>=100) $this->hp=100;
        else  $this->hp = $this->hp + $hp;
    }
    function getHP()
    {
        return $this->hp;
    }
    function getName(){
        return $this->name;
    }
    function getMother(){
        return $this->mother;
    }
    function getFather(){
        return $this->father;
    }
    function getLastname(){
        return $this->lastname;
    }
    function getAge(){
        return $this->age;
    }
    function getInfo(){
        return " <h3> A few words aboute myself  </h3> <br>" . 
        "My name is: " . $this->getName() . "<br>
        my lastname is: " . $this->getLastname() . " <br>
        my father  is:" . $this->getFather()->getName(). "<br>
        my fathers lastname is: " . $this->getFather()->getLastname() . " <br> 
        he is " . $this->getFather()->getAge() . " years old" . "<br> 
        my mother is: " . $this->getMother()->getName() . "<br>
        my mothers lastname is: " . $this->getMother()->getLastname() ." <br>
        she is " . $this->getMother()->getAge() . " years old" . " <br>
        my paternal grandfather  is: " . $this->getFather()->getFather()->getName() . "<br>
        my paternal grandfathers lastname is: " . $this->getFather()->getFather()->getLastname() . " <br> 
        he is " . $this->getFather()->getFather()->getAge() . "years old" . "<br> 
        my paternal grandmother  is:" . $this->getFather()->getMother()->getName() . "<br>
        my paternal grandmothers lastname is: " . $this->getFather()->getMother()->getLastname() . " <br> 
        she is " . $this->getFather()->getMother()->getAge() . "years old"  . " <br>
        my maternal grandfather  is:" . $this->getMother()->getFather()->getName() . "<br>
        my maternal grandfathers lastname is: " . $this->getMother()->getFather()->getLastname() . " <br> 
        he is " . $this->getMother()->getFather()->getAge() . "years old" . "<br> 
        my maternal grandmother  is:" . $this->getMother()->getMother()->getName() . "<br>
        my maternal grandmothers lastname is: " . $this->getMother()->getMother()->getLastname() . " <br> 
        she is " . $this->getMother()->getMother()->getAge() . "years old" ;

    }
}

$petr = new Person("Petr", "Ivanov", 73);
$irina= new Person("Irina", "Ivanova", 70);
$elena = new Person("Elena", "Petrova", 65);
$igor = new Person("Igor", "Petrov", 68);
$alex = new Person("Alex", "Ivanov", 42, $irina, $petr);
$olga = new Person ("Olga", "Ivanova", 42 , $elena, $igor);
$valera= new Person ("Valera", "Ivanov", 15, $olga,  $alex);

// echo $valera->getMother()->getFather()->getName();
echo $valera->getInfo();






// $medKit = 50;
// $alex->setHP(-30); //упал
// echo $alex->getHP() . "<br>";
// $alex->setHP($medKit); //нашел аптечку
// echo $alex->getHP();





// echo $alex->sayHi($igor->name);
// // $alex->name = "Alex";
// echo $alex->name;
