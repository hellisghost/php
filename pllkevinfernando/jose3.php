<form action="#" method="post">
<input type="number" name = primernumero>
<input type="number" name = segundonumero>
<button type="submit">ENVIAR</button>
</form>

<?php
$numero1 = $_POST['primernumero'];
$numero2 = $_POST['segundonumero'];

$suma = $numero1 + $numero2;
$resta = $numero1 - $numero2;
$multi = $numero1 * $numero2;

echo "los datos son ".$numero1." y ".$numero2. " su suma es de ".$suma." su resta de ".$resta. " y su multiplicacion es de ".$multi;



?>