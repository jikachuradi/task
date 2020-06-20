<?php

Multiplication(array(1, 3, 5 ,7, 9)) ;

function Multiplication($arr){
    $result= 1;
    foreach($arr as $a){
    $result *= $a;
    }
echo $result;
}
?>