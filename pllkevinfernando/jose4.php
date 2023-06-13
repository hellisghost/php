<form action="#" method="post">
    <input type="text" name = nombre>
    <input type="number" name = sueldo>
    <button type= "submit">ENVIAR</button>
</form>

<?php

$NOMBRE = $_POST['nombre'];
$NUMERO = $_POST['sueldo'];

$MULTI = $NUMERO * 0.15;
$TOTAL = $NUMERO + $MULTI;

echo "EL EMPLEADO ".$NOMBRE." DE SALARIO ".$NUMERO." TENDRA UN SUELDO TOTAL CON EL 15% DE MAS DE ".$TOTAL;

?>