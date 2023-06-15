<?php
//ejercicio 7

//Ejercicio de búsqueda: Escribe un programa que busque un elemento específico en una lista ingresada por el usuario y muestre su posición.

//intval Obtiene el valor entero de una variable  

$Var1 = [
    "tipo" => ["Café", "Maiz", "Frijol"],
    "fecha" => ["enero", "junio", "diciembre"],
    "Valor" => ["1kk", "2kk", "3kk"],
    "transporte" => ["Moto", "Carro", "Camión", "Campero", "Caballo", "Motocarguero", "Chiba"]
];

$pregunta = readline("Pregunta lo que desea buscar: ");

$encontrado = false;

$keys = array_keys($Var1);

for ($i = 0; $i < count($keys); $i++) {
    $values = $Var1[$keys[$i]];
    
    for ($j = 0; $j < count($values); $j++) {
        if ($pregunta == $values[$j]) {
            echo "Se encontró ".$pregunta." en ".$keys[$i];
            $encontrado = true;
            break 2;
        }
    }
}

if (!$encontrado) {
    echo "No se encontró ".$pregunta." en ninguna categoría.";
}




?>