<?php
//ejercicio 7

//Ejercicio de búsqueda: Escribe un programa que busque un elemento específico en una lista ingresada por el usuario y muestre su posición.

//intval Obtiene el valor entero de una variable  


$Var1 = [
    "tipo" => ["Café","Maiz","Frijol"],
    "fecha" => ["enero","junio","diciembre"],
    "Valor" => ["1kk","2kk","3kk"],
    "transporte" => ["Moto","Carro","Camión", "Campero","Caballo","Motocarguero","Chiba"]
];


$pregunta = readline("Pregunta lo que desea buscar");

for($i = 0; $i == 3; $i++){
    for ($j = 0; $j == $Var1[$i]; $j++) { 
        if ($pregunta == $Var1[$i][$j]) {
            echo "Objeto encontrado";
        }else {
            echo "objeto no encontrado";
        }
    }
}





?>