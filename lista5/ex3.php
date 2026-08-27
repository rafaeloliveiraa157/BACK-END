<?php

$n1= 10;
$n2= 5;
$n3= 7;

$media = ($n1 + $n2 + $n3) / 3;

if($media >= 7){
    echo "Aluno Aprovado Direto!";
}
elseif($media >= 5 && $media < 7){
    echo "Tem direito a Recuperação!";
}
else{
    echo "Aluno Reprovado!";
}
?>