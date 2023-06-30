<form action="#" method="post">
    <input type="number" name="nota1" plaseholder="ingrese la primera nota">
    <input type="number" name="nota2" plaseholder="ingrese la segunda nota">
    <input type="number" name="nota3" plaseholder="ingrese la tercera nota">
    <button type ="submit">calcular</button>
</form>

<?php
$nota1 = $_POST['nota1'];
$nota2 = $_POST['nota2'];
$nota3 = $_POST['nota3'];

$respuesta = ($nota1+$nota2+$nota3) / 3;

if ($respuesta < 69){
    echo "usted perdio el año con un priomedio de: ".$respuesta." muy malo jajajajaja";
}else {
    echo "usted gano el año con un promedio de ".$respuesta." felicitaciones";
}