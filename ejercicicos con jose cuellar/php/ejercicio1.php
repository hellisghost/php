

    <form action="#" method="post">
        <input type="number" name="int" placeholder="Ingrese un numero">

    <button type="submit"> Validar </button>
    </form>

<?php

    $numero = $_POST['int'];

    echo "Has introducido el numero " .$numero. ", gracias";

?>