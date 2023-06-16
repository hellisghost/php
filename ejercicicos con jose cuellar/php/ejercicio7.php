<form action="#" method="post">
    <input type="number" name="radio" placeholder="Ingrese el radio">
    <button type="submit"> Calcular </button>
</form>

<?php

    const pi = 3.1416;
    $radio = $_POST['radio'];

    $perimetro = 2*pi*$radio;
    $area = pi*($radio*$radio);
    $volumen = 4*pi*($radio*$radio*$radio)/3;

    echo "El perimetro de la circunsferencia es de " .$perimetro;
    echo "<br>";
    echo "El area del circulo es de " .$area;
    echo "<br>";
    echo "El volumen de la esfera es de " .$volumen;

?>