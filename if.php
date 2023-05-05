<?php

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
  <p>Nombre: <input type="text" name="numero"></p>
  <p><input type="submit" value="Enviar"></p>
</form>

<?php
echo "<br>";
// ejercicio 1
$numero = $_REQUEST['numero'];

if ($numero >= 10):
echo "el numero ingresado es ".$numero;
else:
echo "el numero es menor que 10";
endif;

echo "<br>";
echo "<br>";
?>


<?php

//ejercicio 2

$nombre = "juan" ;

if ($nombre != "juan") {
echo "lo siento, no te conozco";
}
elseif ($nombre = "juan"){
    echo "¡hola! Juan";
}

echo "<br>";
?>

<?php
echo "<br>";

//ejercicio 3
$usuario = 8;
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
































