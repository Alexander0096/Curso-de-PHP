<?php
//Operadores

//Aritméticos (+, -, *, /, %, **)
/*
echo (4+4)."<br>";
echo (50-45)."<br>";
echo (3*7)."<br>";
echo (20/10)."<br>";
echo (2**3);
*/

//Relación de comparación (==, !=, ===, >, <, >=, <=, <>)

//Diferencia entre == y ===
$n1 = 5;
$n2 = "5";

echo ($n1 == $n2)."<br>"; //1
$n3 = $n1 === $n2; //0 (invisible)
if($n3 == 0){
    echo "$n3 es igual a 0";
}