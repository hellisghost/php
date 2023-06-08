<?php
//ejercicio 5

//Ejercicio de primos: Escribe un programa que determine si un número ingresado por el usuario es primo o no.
$numero = readline('');
$contadorPrimo = 0;

for($contador = 1; $contador<=$numero; $contador++){
	if($numero % $contador == 0){
		$contadorPrimo = $contadorPrimo + 1;
	}
}

if($numero == 1 or $contadorPrimo == 2){
	echo "El numero ".$numero." es primo";
}
else{
	echo "El numero ".$numero." NO es primo";
}

?>