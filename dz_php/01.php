<?php
global $n ,$balac,$daxod,$racxod,$inct ;
echo ("1 Балас"."\n"."2 Добавить расход"."\n"."3 Добавить доход"."\n"."4 история расходов"."\n"."5 история доходов"."\n"."6 Инс по испл"."\n"."7 Выход"."\n");
$n = readline();

global $ictornarac ,$ictoriadaxod;
$ictornarac =[];

$balac =0;
$ictoriadaxod= [];

global $cak,$cak2;
$cak2 =0;

$cap=0;

while ($n<7) {
    echo ("1 Балас"."\n"."2 Добавить расход"."\n"."3 Добавить доход"."\n"."4 история расходов"."\n"."5 история доходов"."\n"."6 Инс по испл"."\n"."7 Выход"."\n");
    if ($n == 1) {
        echo("Ваш баланс" . "\n");
        echo $balac;

    }
    if ($n == 2) {
        echo("Добавить расход" . "\n");
        $racxod = readline();
        $balac -= $racxod;
        echo ("Скажите ваш расход"."\n");
        $cak = readline();



    }
    if ($n == 3) {
        echo("Добавить доход" . "\n");
        $daxod = readline();
        $balac += $daxod;
        echo ("Скажите ваш доход "."\n");
        $cak2 = readline();

    }
    if ($n==4){
        echo("история расходов" . "\n");
        $ictornarac []= $cak;
        print_r($ictornarac);


    }
    if ($n==5){
        echo("история доходов" . "\n");
        $ictoriadaxod[]= $cak2;
        print_r($ictoriadaxod);


    }
    if($n==6){
        echo ("1 Балас"."\n"."2 Добавить расход"."\n"."3 Добавить доход"."\n"."4 история расходов"."\n"."5 история доходов"."\n"."6 Инс по испл"."\n"."7 Выход"."\n");
    }

    $n = readline();
}

?>

