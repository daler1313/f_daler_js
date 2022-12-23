<?php
$arr = [1," ' ",2,",",3,","];
foreach ($arr as $value){

    if($value ==","){
        $value = "";
    }
    if ($value== " ' "){
        $value = "";
    }
    echo $value;
}