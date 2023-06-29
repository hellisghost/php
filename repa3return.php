<?php
//para dato entero es con int
//y string es para numeros con decimales

function suma(int $var1, int $var2):int{
    return $var1+ $var2;
};

echo "suma = ".suma(4,5);

echo "<br>";
echo "<br>";

function resta(int $var3, int $var4):int{
    return $var3 - $var4;
};

echo "resta = ".resta(4,5);

echo "<br>";
echo "<br>";

function multi(int $var5, int $var6):int{
    return $var5 * $var6;
};

echo "multiplicación = ".multi(4,5);

echo "<br>";
echo "<br>";

function calculardescuento(int $precio, string $descuento){
     return  $precio - ($precio * $descuento);

}

echo "resultado: ".calculardescuento(250000,0.10);