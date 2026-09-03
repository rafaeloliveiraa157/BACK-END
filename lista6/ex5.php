<?php

$opcao = 3;
echo '<h1 style ="color: black;">COUNTER STRIKE 2</h1> <br>';
echo "1 - Jogar partida <br>";
echo "2 - Rank <br>";
echo "3 - Loja <br>";
echo "5 - Histórico <br>";
echo "6 - Sair <br><br>";
switch($opcao){
    case 1:
        echo "Você escolheu: Jogar partida";
        break;
    case 2:
        echo "Você escolheu: Rank";
        echo "ranked Prata";
        echo "ranked Ouro";
        echo "ranked Global";
        break; 
    case 3:
        echo "Você escolheu: Loja";
        break;
    case 4:
        echo "Você escolheu: Skins de Arma";
        echo "Awp Dragon Lore";
        echo "Golden AK-47";
        echo "M4a4 Howl";
        break;
    case 5:
        echo "Você escolheu: Histórico";
        break;
    case 6:
        echo "Você escolheu: Sair";
        break;
    default:
        echo "Opção inválida";
        break;
}
?>