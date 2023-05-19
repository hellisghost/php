<?php
//escribe un programa que tome un numero entero como entrada y muestre un mensaje diferente dependiendo de si el numero es 1,2, 0 3 utilizando el ciclo "match".

echo "ejercicio 1", "<br>", "<br>";

$numero = 1;

$a=1;
$b=2;
$c=3;

$resultado = match($numero){
    $a => "mi nombre es kevin",
    $b => "como te llamas",
    $c => "cunatos años tienes",
    default => "quien eres"
};

echo $resultado

?>

<?php
//crea un programa que recibe el nombre de un color como entrada y muestre un mensaje diferente segun el color utilizando el ciclo "macht".

echo "<br>", "<br>";
echo "ejercicio 2";
echo "<br>", "<br>";

$color = 'verde';

$fin = match ($color){
    'rojo' => 'el color es intenso',
    'verde' => 'el color es agradable',
    'negro' => 'el color es oscuro',
    'azul' => 'el color es intenso',
    default => 'no se lo que quieres decir'
};

echo $fin


?>

<?php
//deseña un programa qu etome una letra de entrada y muestre un mensaje segun la categoria a la que pertenezca la letra utilizando el siclo vocal o consonante


echo "<br>", "<br>";
echo "ejercicio 3";
echo "<br>", "<br>";

$letra = "d";


$quees = match($letra){
    "b","c","d","f","g","h" => "es consonante",
    "a","e","i","o","u" => "es vocal",
    default => "no es ni vocal ni consonante"
};

echo  $quees;
?>


<?php
//diseña un priograma que tome una fecha como entrada en formato dia mes año y muestre u mensaje diferente por el mes que se coloque

echo "<br>", "<br>";
echo "ejercicio 4";
echo "<br>", "<br>";

$fecha = '25-enero-2003';

$dia = match ($fecha){
    '25-agosto-2003' => 'nacimiento',
    '25-septiembre-2003' => 'san juanero',
    '25-octubre-2003' => 'hallowin',
    '25-noviembre-2003' => 'perreo',
    '25-diciembre-2003' => 'navidad',
    default => 'no hay fiestas'
};

echo $dia
?>


<?php
//escribe un programa que tome un numero del 1 al 7 como entrada y muestre el nombre del dia de la semana correspondiente utilizando el ciclo "macht"

echo "<br>", "<br>";
echo "ejercicio 5"; 
echo "<br>", "<br>";

$numero = 2;

$lunes= 1;
$martes= 2;
$miercoles= 3;
$jueves = 4;
$viernes = 5;
$sabado = 6;
$domingo = 7;

$resultado = match($numero){
    $lunes => "hoy es lunes",
    $martes => "hoy es martes",
    $miercoles => "hoy es miercoles",
    $jueves => "hoy es jueves",
    $viernes => "hoy es viernes",
    $sabado => "hoy es sabado",
    $domingo => "hoy es domingo",
    default => "no hay mas dias"
};

echo $resultado

?>


<?php
//crea un programa que reciba un numero del 1 al 12 como entrada y muestre el nombre del mes correspondiente utilizando el ciclo match

echo "<br>", "<br>";
echo "ejercicio 6"; 
echo "<br>", "<br>";

$numero = 8;

$enero= 1;
$febrero= 2;
$marzo= 3;
$abril = 4;
$mayo = 5;
$junio = 6;
$julio = 7;
$agosto = 8;
$septi = 9;
$octubre = 10;
$noviembre = 11;
$diciebre = 12;

$resultado = match($numero){
    $enero => "enero",
    $febrero => "febrero",
    $marzo => "marzo",
    $abril => "abril",
    $mayo => "mayo",
    $junio => "junio",
    $julio => "julio",
    $agosto => "agosto",
    $septi => "septiembre",
    $octubre => "octubre",
    $noviembre => "noviembre",
    $diciebre => "diciembre",
    default => "no hay mas meses"
};

echo $resultado

?>


<?php
//desaña un programa qu etome nota del 0 al 100 y que al momento de una nota elevada que de en excelente 


echo "<br>", "<br>";
echo "ejercicio 7"; 
echo "<br>", "<br>";

$notas =0;

$resultado = match(true){
    $notas <= 20 => 'pesimo',
    $notas <= 40 => 'malo',
    $notas <= 60 => 'no tan malo',
    $notas <= 80 => 'bueno',
    $notas <= 89 => 'perfecto',
    $notas <= 100 => 'excelente'
};

echo $resultado;

?>


<?php

/* 8. Desarrolla un programa que tome una cadena de texto como entrada y
muestre un mensaje según la longitud de la cadena utilizando el ciclo `match`.
Por ejemplo, si la longitud es mayor a 10 caracteres, mostrar "La cadena es
larga". */


echo "<br>", "<br>";
echo "ejercicio 8"; 
echo "<br>", "<br>";

$palabra = 'sjafd';
$contar = strlen($palabra);

$resultado = match(true){
    $contar <= 9 => ' la palabra es corta',
    $contar >= 10 => ' la palabra es larga'
};

echo $resultado;

?>

<?php

/* 9. Escribe un programa que tome una hora en formato "HH:MM" como entrada y
muestre un mensaje diferente según la franja horaria utilizando el ciclo `match`. */


echo "<br>", "<br>";
echo "ejercicio 9"; 
echo "<br>", "<br>";

$numero = "11:00";

$resultado = match (true){
    $numero === "01:00" => "las dos en caracas",
    $numero === "02:00" => "las nueve en madrid",
    $numero === "03:00" => "las cuatro en miami ",
    $numero === "04:00" => "las diez en las palmas de gc",
    $numero === "05:00" => "cinco de la madrugada",
    $numero === "11:00" => "son las 1 de la mañana en tokio",
    default => " no es una vocal ni una consonante"
};

echo $resultado;

?>


<?php

/* 10. Crea un programa que reciba una opción del 1 al 5 como entrada y realice una
acción diferente según la opción utilizando el ciclo `match`. */


echo "<br>", "<br>";
echo "ejercicio 10"; 
echo "<br>", "<br>";


$diferentes = '4';

$resultados = match ($diferentes){
    '1' => 'correr',
    '2' => 'bailar',
    '3' => 'trabajar',
    '4' => 'andar',
    '5' => 'cascada',
    default => 'ya no hay mas'
};

echo $resultados
?>
