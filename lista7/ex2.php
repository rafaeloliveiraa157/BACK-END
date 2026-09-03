<?php

function verificarMaioridade($idade){
    if($idade >= 18){
        return "Você é maior de idade. Pode tirar a carteira de motorista.<br><br>";
    } else {
        return "Você é menor de idade. Só de Uber.<br><br>";
    }
}
echo verificarMaioridade(17);
echo verificarMaioridade(44);
echo verificarMaioridade(15);
echo verificarMaioridade(18);
