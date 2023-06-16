<form action="#" method="post">
    <input parseFloat(type="number" name="altura" placeholder="Ingrese su altura")>
    <input type="text" name="iniciales" placeholder="Ingrese sus iniciales">
    <button type="submit"> Validar </button>
</form>

<?php

    $altura = $_POST['altura'];
    $iniciales = $_POST['iniciales'];

    echo "Sus iniciales son: " .$iniciales. " y su altura es " .$altura;

?>