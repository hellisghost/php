<?php
//include para mostar datos de otra pagina y si hay un error puede aparecer
include("repa1.php");

echo "la suma de todo es de : ".$res;

echo "<br>";

//igual que el de arriba solo que si hay un error le abisara y no se lo dejara aparecer

require("repa1.php");

echo "la suma de todo es de : ".$res;


//require-one, include-one son para mostar solo una vez