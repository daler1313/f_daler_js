<?php
class Empoyee {
    public $first_name;
    public $last_name;
    public $age;
    public $salary;
    public function set_first_name($first_name){
        $this->first_name=$first_name;
    }
    public function get_first_name(){
        return $this->first_name;
    }
    public function set_last_name($last_name){
        $this->last_name=$last_name;
    }
    public function get_last_name(){
        return $this->last_name;
    }
    public function set_age($age){
        $this->age=$age;
    }
    public function get_age(){
        return $this->age;
    }
    public function set_salary($salary){
        $this->salary=$salary;
    }
    public function get_salary(){
        return $this->salary;
    }

}
$Farhod =  new Empoyee();
$Farhod ->set_first_name('Фарход');
$Farhod->set_last_name('Илохомов');
$Farhod->set_age('23');
$Farhod->set_salary('1800');
echo $Farhod->get_first_name();
echo "<br>";
echo $Farhod->get_last_name();
echo "<br>";
echo $Farhod->get_age();
echo "<br>";
echo $Farhod->get_salary();
echo "<br>";
$Nbrohim = new Empoyee();
$Nbrohim->set_first_name('Иброхим');
$Nbrohim->set_last_name('Чалилов');
$Nbrohim->set_age('28');
$Nbrohim->set_salary('2360');
echo $Nbrohim->get_first_name();
echo "<br>";
echo $Nbrohim->get_last_name();
echo "<br>";
echo $Nbrohim->get_age();
echo "<br>";
echo $Nbrohim->get_salary();
echo "<br>";
$sum_salary = $Farhod->get_salary()+$Nbrohim->get_salary();
echo "Сумма зарплати = ".$sum_salary;
echo "<br>";
$sum_age = $Farhod->get_age()+$Nbrohim->get_age();
echo "Сумма возраста = ".$sum_age;

