<form action="#" method="post">
    <input type="number" name="datoa" plaseholder="ingrese el dato a">
    <input type="number" name="datob" plaseholder="ingrese el dato b">
    <button type ="submit">calcular</button>
</form>

<?php
$datoa = $_POST['datoa'];
$datob = $_POST['datob'];

if ($datoa > $datob){
    echo "el dato a es mayor";
}else if($datoa < $datob){
    echo "el dato a es menor";
}else{
    echo "el dato a es igual";
}