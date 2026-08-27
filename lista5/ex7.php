<?php

$peso = 73;
$altura = 1.90;
$resultado = $peso / ($altura * $altura);

if($resultado < 18.5){
    echo "Abaixo do peso";
}
elseif($resultado >= 18.5 && $resultado < 25){
    echo "Peso normal";
}
elseif($resultado >= 25 && $resultado < 30){
    echo "Sobrepeso";
}
?>