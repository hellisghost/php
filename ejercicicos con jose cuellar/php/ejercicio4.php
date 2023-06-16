<form action="#" method="post">
    <input type="number" name="precio" placeholder="Ingrese el precio">
    <input type="number" name="descuento" placeholder="Ingrese el descuento">
    <button type="submit"> Calcular </button>
</form>

<?php

    $precio = $_POST['precio'];
    $descuento = $_POST['descuento'];

    $total = $precio-($precio*$descuento)/100;

    echo "El precio de su compra aplicando el descuento es de " .$total;

?>