<?php

$opcao = 3;
echo '<h1 style="color: red;">NETFLIX</h1><br>';
echo "1 - Assitir filmes<br>";
echo "2 - Assitir séries<br>";
echo "3 - Ver minha lista<br>";
echo "4 - Sair<br><br>";

switch($opcao){
    case 1:
        echo "Você escolheu: Assitir filmes";
        break;
    case 2:
        echo "Você escolheu: Assitir séries";
        break;
    case 3:
        echo "Você escolheu: Ver minha lista";
        break;
    case 4:
        echo "Você escolheu: Sair";
        break;
    default:
        echo "Opção inválida";
        break;

}