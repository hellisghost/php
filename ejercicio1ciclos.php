<?php
//ejercicio 1

//Ejercicio de suma y promedio: Escribe un programa que solicite al usuario ingresar una lista de números y luego calcule la suma y el promedio de esos números
//readline() se encarga de tomar el dato que el usuario ponga en la casilla nombre
//intval es paar convertir numeros a enteros
//floatval() para estar en flotante

$cantidad = intval(readline("ingrese la cantidad de datos: \n"));

$datos = [];

for($i = 1; $i <= $cantidad; $i++){
    $datos[$i-1] = floatval(readline("ingrese el dato: $i: "));
}

$sum = 0;
for($i = 0; $i <= $cantidad; $i++){
    $sum += $datos[$i];
}
echo $sum."\n";


$promedio = $sum / $cantidad;
echo "el promedio de los datos es de ".$promedio."\n";

//var_dump (para traer datos)
//var_dump($datos);


?>
