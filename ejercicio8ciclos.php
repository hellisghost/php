<?php

//ejercicio 8

//Ejercicio de números perfectos: Escribe un programa que encuentre todos los números perfectos en un rango específico. Un número perfecto es aquel cuya suma de sus divisores propios (excluyendo al número mismo) es igual al número.

$rango = readline('');

for($i = 1; $i <= $rango; $i++){
    echo "".(2**($i-1)) * ((2**$i)-1)."\n";
}

?>