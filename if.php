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
// ejercicio 1//
//escribe un programa que solicite al usuario que ingrese un numero. luego el programa debe imprimir si el numero ingresado es mayor, menos o igual al utilizar la sentencia if//


//crear las variables//
$numero = 19;
$numero1 = 10;

//crear los if sobre las variables//
if($numero===$numero1){
    echo "es igual a 10";
}
//creacion de los elseif para variar el if//
elseif($numero1 < $numero){
    echo "es menor a 10";
}
elseif($numero > $numero1){
    echo "es mayor a 10";
}

//opcional para separar entre trabajos//
echo "<br>";
echo "<br>";
?>


<?php
//ejercicio 2//
//escribe un programa que solicite al usuario que ingrese su nombre. si el nombre es juan debe decir !hola juan¡, si no es "lo siento, mo te conozco"//

echo "ejercicio 2", "<br>";
echo "<br>";

//creacion de las variables//
$nombre = "maria" ;

//creacion de ocndicion sobre if principal
if ($nombre != "juan") {
echo "lo siento, no te conozco";
}
//creacion de if segundarias
elseif ($nombre = "juan"){
    echo "¡hola! Juan";
}

echo "<br>","<br>";
?>



<?php
echo "ejercicio 3", "<br>";
echo "<br>";

//ejercicio 3
//escribe un programa que solicite al usuario que ingrese un numero del 1 al 7. luego, le programa bebe imprimir el dia de la semana correspondiente el numero ingresado.

//crear la svariable
$usuario = 6;
//encerar entre corchetes para poder poner tolos los datos en una ilera y acortar codigos//
$semana = ["lunes","martes","miercoles","jueves","viernes","sabado","domingo"];
$numeros = [1,2,3,4,5,6,7];

//creacion de los if y elseif para poner las funciones y condiciones//
//los echos son para mostrar en la pagina sin ellos mostrariamos todo en blanco//
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
//ejercicio 4//

echo "ejercicio 4", "<br>";
echo "<br>";

//escribe un programa que solicite al usuario que ingrese su edad. si la edad es mayor o igual a los 18 años, el programa debe preguntar si tiene licencia de conducir. si la respuesta es "si", el programa debe imprimir "puedes conducir". si la respuesta es "no", el programa debe imprimir "debes optener una licencia de conducir primero". si la edad es menos de 18 años el programa dira "no puedes conducir"


//creacion de las variables en este caso edad y licencia que son los que piden en el ejercicio//
$edad = 17;
$licencia = "si";

//colocacion de la condicion sobre codigo if y elseif//
if($edad >= 18){
    echo "¿tiene licencia para conducir";
    echo "<br>";
    echo "\n $licencia";
    echo "<br>";

// desarrollo de la condicion para que compla con las condiciones aplicadas anerior mente//
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

//ejercicio 5//
echo "ejercicio 5", "<br>";
echo "<br>";

//escribe un programa que solicite al usuario que ingrese dos numeros. luego el programa debe imprimir si ambos numeros son mayores que 10 utilizando la sentencia  if y los operadore logicos && y >. si ambos numeros son mayores que 10. el programa debe imprimir "ambos numeros son mayores que 10". si uno de los numeros es mayor que 10 el programa debe imprimir "solo uno de los numeros es mayor que 10". si ninguno de los numeros es mayor qie 10, el programa debe imprimir "ninguno de los numeros es mayor que 10"



//colocacion de la variables//
$dato1 = 15;
$dato2 = 12;

//creacion de la condicion sobre el if y el elseif//
if($dato1 > 10 && $dato2 > 10){
    echo "ambos numeros son mayores de 10";
}
elseif($dato1 && $dato2 < 10){
    echo "solo uno de los numeros es mayor de 10";
}
elseif($dato1 <10 && $dato2 <10){
    echo "ninguno de los dos es mayor de 10";
}

?>














