<form action="#" method="post">
    <input type="number" name = primernumero>
    <input type="number" name = segundonumero>
    <button type= "submit">ENVIAR</button>
</form>

<?php

$NUMERO1 = $_POST['primernumero'];
$NUMERO2 = $_POST['segundonumero'];

$SUMA = $NUMERO1 + $NUMERO2;

echo "el primer numero es ".$NUMERO1." el segundo es ".$NUMERO2." y la suma de los dos es = ".$SUMA;

?>