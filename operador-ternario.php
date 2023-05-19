<?php

$var = 1;
$var2 = 1;

$resultado =$var + $var2;

(9>7) ? $resultado = 9*7 : $resultado = 9*10;

echo $resultado;

echo "<br>";
?>

<?php

echo "<br>";

$valor = 25000;
$cantidad = 4;


($cantidad >= 3) ? $total = $cantidad * $valor * 0.8 : 
$total = $cantidad * $valor * 0.9;

echo $total;
?>


<?php
echo "<br>", "<br>";

$genero = "hombre";
$edad = 60;

if($genero === 'hombre'){
 if($edad >= 60){
echo "el esta para jubilarse";
}else{
    echo "el no se puede jubilar";
}
}elseif($genero === 'mujer'){
    if($edad >= 54){
   echo "ella esta para jubilarse";
   }else{
       echo "ella no se puede jubilar";
   }
}
?>

<br>
<br>

<?php
$genero = "hombre";
$edad = 34;

$pension = ($genero === 'hombre') ? ($edad >= 60) : ($edad >= 54);

if ($pension){
    echo "se puede pensionar";
}else{
    echo "no puede pensionarse";
}

?>