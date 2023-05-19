<?php
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
echo "<br>", "<br>";
echo "ejercicio 9"; 
echo "<br>", "<br>";

$numero = "11:00";

$resultado = match (true){
    $numero === "01:00" => "una de la madrugada",
    $numero === "02:00" => "dos de la madrugada",
    $numero === "03:00" => "tres de la madrugada ",
    $numero === "04:00" => "cuatro de la madrugada",
    $numero === "05:00" => "cinco de la madrugada",
    $numero === "06:00" => "seis de la mañana",
    $numero === "07:00" => "siete de la mañana",
    $numero === "08:00" => "ocho de la mañana",
    $numero === "09:00" => "nueve de la mañana",
    $numero === "10:00" => "diez de la mañana",
    $numero === "11:00" => "once de la mañana",
    $numero === "12:00" => "doce de la tarde",
    default => " no es una vocal ni una consonante"
};

echo $resultado;

?>


<?php
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
