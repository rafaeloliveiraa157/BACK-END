<?php

$idade = 16;
$ingresso = "sim";

echo "Bem vindo ao CineAmor <br>";

if($idade >= 18 || $ingresso == "sim"){
    echo "Você pode entrar no cinema!";
}
else{
    echo "Você não pode entrar no cinema!";
}