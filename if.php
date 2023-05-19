<?php
echo "ejercicio prueba", "<br>";
echo "<br>";

$a=4; $b=3;
//forma 1

if($a > $b):
    echo "A es mayor que b";
endif;

//la respuesta es en dolares precio de los computadores, segundo datos a comprar 

$valorcomputadores = 700;
$cantidadcomputadores = 4;

if($cantidadcomputadores < 5 ):
    $resultado = $valorcomputadores * 0.1;
    $finaldescuento = $valorcomputadores - $resultado;
    echo "el descuento resibido sera de" .$resultado. " USD";
    echo "<br>";
    echo "le quedara el precio de los computadores en ".$finaldescuento." USD";
endif;

echo "<br>";

$valorcomputadores2 = 700;
$cantidadcomputadores2 = 12 ;

if ($cantidadcomputadores2 > 10 ) :
    $resultado2 = $valorcomputadores2 * 0.4;
    $finaldescuento2 = $valorcomputadores2 - $resultado2;
    echo "el descuento resibido sera de" .$resultado2. " USD";
    echo "<br>";
    echo "le quedara el precio de los computadores en ".$finaldescuento2." USD";
endif;

echo "<br>";

$valorcomputadores1 = 700;
$cantidadcomputadores1 = 8 ;

if ($cantidadcomputadores1 >=  5 && $cantidadcomputadores1 < 10 ):
    $resultado1 = $valorcomputadores1 * 0.2;
    $finaldescuento1 = $valorcomputadores1 - $resultado1;
    echo "el descuento resibido sera de" .$resultado1. " USD";
    echo "<br>";
    echo "le quedara el precio de los computadores en ".$finaldescuento1." USD";
endif;

?>

<form action="if.php">
    <h4>ejercicio prueba2</h4>
  <p>Nombre: <input type="text" name="numero"></p>
  <p><input type="submit" value="Enviar"></p>
</form>

<?php
echo "ejercicio 1", "<br>";

echo "<br>";
// ejercicio 1

$numero = 19;
$numero1 = 10;

if($numero===$numero1){
    echo "es igual a 10";
}
elseif($numero1 < $numero){
    echo "es menor a 10";
}
elseif($numero > $numero1){
    echo "es mayor a 10";
}


echo "<br>";
echo "<br>";
?>


<?php

echo "ejercicio 2", "<br>";
echo "<br>";

$nombre = "maria" ;

if ($nombre != "juan") {
echo "lo siento, no te conozco";
}
elseif ($nombre = "juan"){
    echo "¡hola! Juan";
}

echo "<br>","<br>";
?>

<?php
echo "ejercicio 3", "<br>";
echo "<br>";

//ejercicio 3
$usuario = 6;
$semana = ["lunes","martes","miercoles","jueves","viernes","sabado","domingo"];
$numeros = [1,2,3,4,5,6,7];

if($numeros[0] == $usuario) {
    echo $semana[0];
}

elseif($numeros[1] == $usuario) {
    echo $semana[1];
}

elseif($numeros[2] == $usuario) {
    echo $semana[2];
}

elseif($numeros[3] == $usuario) {
    echo $semana[3];
}

elseif($numeros[4] == $usuario) {
    echo $semana[4];
}

elseif($numeros[5] == $usuario) {
    echo $semana[5];
}
elseif($numeros[6] == $usuario) {
    echo $semana[6];
}

elseif($usuario > 7) {
    echo "numero invalido";
}

?>



<?php
echo "ejercicio 4", "<br>";
echo "<br>";

$edad = 17;
$licencia = "si";

if($edad >= 18){
    echo "¿tiene licencia para conducir";
    echo "<br>";
    echo "\n $licencia";
    echo "<br>";

if($licencia == "si"){
    echo "puedes conducir";
}
}if($licencia == "no"){
    echo "debes obtener una licencia primero";
}
elseif($edad < 18){
    echo "no puedes conducir";
}

?>

<?php
echo "ejercicio 5", "<br>";
echo "<br>";



?>














