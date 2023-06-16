<form action="#" method="post">
    <input type="number" name="peso" placeholder="Ingrese la cantidad de pesos">
    <button type="submit"> Calcular </button>
</form>

<?php

    const euro = 4444;
    $peso = $_POST['peso'];

    $euros = euro*$peso;

    echo "La cantidad de euros son " .$euros;

?>