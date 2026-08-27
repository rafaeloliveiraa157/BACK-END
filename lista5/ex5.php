<?php

$nome = "Rafael";
$acesso = 3;

if($acesso == 1){
    echo "Bem vindo, $nome! Você tem acesso básicoao sistema.";
}
elseif($acesso == 2){
    echo "Bem vindo, $nome! Você tem acesso intermediário ao sistema.";
}
elseif($acesso == 3){
    echo "Bem vindo, $nome! Você tem acesso avançado ao sistema.";
} 
{
    echo " Erro. Número de acesso inválido.";
}