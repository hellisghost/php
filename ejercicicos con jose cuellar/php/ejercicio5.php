<form action="#" method="post">
    <input type="number" name="base" placeholder="Ingrese la base del rectangulo">
    <input type="number" name="altura" placeholder="Ingrese la altura del rectangulo">
    <button type="submit"> Calcular </button>
</form>

<?php

    $base = $_POST['base'];
    $altura = $_POST['altura'];

    $perimetro = ($base*2) + ($altura*2);
    $area = $base*$altura;

    echo "El perimetro del rectangulo es " .$perimetro. " y su area es de " .$area;

?>