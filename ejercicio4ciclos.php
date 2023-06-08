<?php
//ejercicio 4

//Ejercicio de palíndromos: Escribe un programa que verifique si una palabra ingresada por el usuario es un palíndromo (se lee igual de izquierda a derecha y de derecha a izquierda).

$polidro = readline ('');

//strrev para invertir

$nopolidro = trim(strrev($polidro));

echo $nopolidro;

//operacion para poder invertir y saber si es polindromo o no

if($nopolidro >= $polidro){
    echo "la palabra '$polidro' es un polidromo.\n";
}
else{
    echo "la palabra '$polidro' no es un polidromo.\n";
}


?>