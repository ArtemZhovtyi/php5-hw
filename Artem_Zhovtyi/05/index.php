<?php
$n=rand(0,100);
echo "$n <hr>";
$arSum=[];
for($i=1; $i<=$n; $i+=3){
    $arSum[]=$i;
   }
echo array_sum($arSum);
