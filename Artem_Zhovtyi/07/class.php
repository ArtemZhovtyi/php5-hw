<?php
    function hello(){
        echo "Hello world";
    }
    hello();
    echo "<hr>";
    function sum($a, $b){
        $sum=$a+$b;
        return $sum;
    }
    if(!function_exists('sum')){
        function sum($a, $b){
            $sum = $a * $b;
            return $sum;
        }
    }

    $var1=2;
    $var2=3;
    echo sum ($var1, $var2);
    echo "<hr>";
    function allSum(...$params){
        $sum=0;
        foreach ($params as $i){
            $sum+=$i;
        }
        return $sum;
    }
    echo allSum(1,2,3,4,5,6,7);

    echo "<hr>";
    function foo($a, $b, $c=2){
        return $a+$b-$c;
    }
    echo foo(10,3,5);
    echo "<hr>";
    $noName=function($a, $b){
        return $a*$b;
    };
    echo $noName(7,8), "<hr>";
    //global $x;
    $x=5;
    $GLOBALS['d']=10;
    function getx(){
        global $d;
        global $x;
        return $x+$d;
    }
    echo getx();
    echo "<hr>";
    $arg=10;
    $closure =function  ($a, $v) use ($arg){
        return $a*$v/$arg;
    };
    echo $closure (3,4), "<hr>";

    function password($size=6){
        $template="qwertyuioppasdfghjklzxcvbnm,1234567890RFVEDCOLDX[;FIDL";
        $temp=str_shuffle($template);
        return substr($temp,0,$size);
    }
    echo password(10), "<hr>";
    function walk_array($array, $funk){
        foreach ($array as $key=>$item){
            $funk ($key, $item);
        }
    }
    $arrrrrrrr=[1,2,3,4,5,6,7,8,8,9.10];
    walk_array($arrrrrrrr, function ($key, $value){
        echo $key. " : ". $value. "<br>";
    });