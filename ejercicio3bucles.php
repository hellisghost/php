<?php
//ejercicio 3

//Ejercicio de factorial: Escribe un programa que calcule el factorial de un número ingresado por el usuario.
$dato = '4';

$factor = '1';
for ($var = $dato; $var > 0; $var--){
    $factor *= $var;
}

echo "factorial: $factor";

?>