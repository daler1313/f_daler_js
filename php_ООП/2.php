<?php
class Person{
    public $first_name;
    public $last_name;
    public $age;
    public $setAge;
  
    public function set_first_name($first_name){
        $this->first_name = $first_name;
    }
    public function get_first_name(){
        return $this->first_name;
    }
    public function set_last_name($last_name){
        $this->last_name = $last_name;
    }
    public function get_last_name(){
        return $this->last_name;
    }
    public function set_age($age){
        $this->age = $age;

    }
    public function get_age(){
        return $this->age;
    }
    public function setAge (){
        if($this->age >= 18){
            $this->age = 24;
        }
    }
    
   
}
class Employee{
    public $salary;
    public function set_salary($salary){
        $this->salary=$salary;
    }
    public function get_salary(){
        return $this->salary;
    }
    
}
class User extends Employee{
    public function doubleSalry(){
        $this->salary = $this->salary * 2;
        

    }

}

$alihsrt = new Person;
$alihsrt->set_first_name("Алишер");
echo $alihsrt->get_first_name();
echo "<br>";
$alihsrt->set_age("36");

echo $alihsrt->get_age();
echo "<br>";
$alihsrt->setAge();
echo $alihsrt->get_age();
echo "<br>";
$daler = new User;
$daler->set_salary("300");
echo $daler->get_salary();
echo "<br>";
$daler->doubleSalry();
echo $daler->get_salary();



?>