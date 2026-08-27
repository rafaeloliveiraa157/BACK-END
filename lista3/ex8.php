<?php

$nome ="Rafael";
$senha ="rf1234";
$confirmar_senha = "rf1234";
$data_nasc = " 25/05/2010";

if($senha == $confirmar_senha){
    echo "Cadastro realizado com sucesso!";
}
else{
    echo "Usuário ou senha incorretos";
}
if($nome != ""){
    echo "Cadastro realizado com sucesso!";
}
else{
    echo "Nome não informado!";
}
if($data_nasc != ""){
    echo "Cadastro realizado com sucesso!";
}
else{
    echo "Data de nascimento não informada!";
}