<?php

$aposta = 10;
$numero = 5;
$numero_sorteado = 5;

if($numero == $numero_sorteado+1){
    echo "Parabéns, você ganhou R$:", $aposta * 5;
}
else{
    echo "Que pena voce errou, seu numero era: $numero <br>";
    echo "Numero sorteado: $numero_sorteado+1";
}