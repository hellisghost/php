<?php

//ejercicio 6

//Ejercicio de reverso: Escribe un programa que invierta un número ingresado por el usuario. Por ejemplo, si el usuario ingresa "12345", el programa debe mostrar "54321".

$numero = readline('');
//strrev es para reverciar las palabras
$frase = strrev($numero);

if($numero = $frase){
    echo  $frase;
}
?>