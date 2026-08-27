<?php

$email = "rf@gmail.com";
$senha = "rf1234";

echo "Bem vindo ao INSTAGRAM <br>";

if($email == "rf@gmail.com" && $senha == "rf1234"){
    echo "Login realizado com sucesso!";
    header ("Location: https://www.instagram.com");
}
else{
    echo "Email ou senha invalidos!";
}