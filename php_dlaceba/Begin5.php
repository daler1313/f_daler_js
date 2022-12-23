<?php
//Дана длина ребра куба a. Найти объем куба V = a
//3 и площадь его
//поверхности S = 6·a
//echo ("Введите а = ");
//$a = readline();
//$v = pow($a,3);
//$s = 6*pow($a,2);
//echo ("V = ").$v.(" S = ").$s;

class Person
{
    public $name, $age;

    function hello()
    {
        echo "Hello!";
    }
}
$tom = new Person();
$tom->name = "Tom"; // установка свойства $name
$tom->age = 36; // установка свойства $age
$personName = $tom->name;    // получение значения свойства $name
$personAge = $tom->age;
echo  "\n"."Имя пользователя: " . $personName."\n" ;
echo "\n"."Возраст пользавтеля: ".$personAge."\n";
$tom->hello(); // вызов метода hello()
//print_r($tom);


?>
