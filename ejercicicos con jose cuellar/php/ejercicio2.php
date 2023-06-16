<form action="#" method="post">
    <input type="number" name="edad" placeholder="Ingrese su edad">
    <button type="submit"> Validar </button>
</form>

<?php

    $edad = $_POST['edad'];

    echo "Ahora se que tienes " .$edad. " años, gracias";

?>