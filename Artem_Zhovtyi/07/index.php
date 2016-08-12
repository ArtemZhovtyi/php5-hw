<?php
   //task 1
    function speed($s, $t){
        $speed=$s/$t;
        return $speed;
    }
    $s=200;
    $t=2;
    $m=10/36;
    echo speed ($s, $t)." km/h or"." ".speed($s,$t)*$m." m/s";
    echo "<hr>";

//task 2
    function factorial($n){
        $factor=1;
        for ($i=1;$i<=$n; $i++){
            $factor=$factor*$i;
        }
        return $factor;
    }
    echo factorial(5);
    echo "<hr>";

//task 3

    function arrayCreate($x){
        $array=[];
        for($j=1; $j<=$x; $j++){
            $k=rand(-100,100);
            $array[$j]=$k;
        }
        return $array;
        }
    echo "<pre>";
    var_dump(arrayCreate(3));
    echo "</pre>";

//task 4
    $y=5;
    $arOne=arrayCreate($y);
    $arTwo=arrayCreate($y);
    echo "<pre>";
    var_dump($arOne);
    echo "</pre>";
    echo "<pre>";
    var_dump($arTwo);
    echo "</pre>";
    function uniteArray($arOne,$arTwo){
        $arUni=[];
        for($i=1; $i<=5; $i++){
          $arUni[$i]=$arOne[$i]+$arTwo[$i];
        }
        return $arUni;
    }
    echo "<pre>";
    var_dump(uniteArray($arOne,$arTwo));
    echo "</pre>";



