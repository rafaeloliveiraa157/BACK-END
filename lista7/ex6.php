<?php

function calcularMedia($nota1, $nota2, $nota3)
{
    $media = ($nota1 + $nota2 + $nota3) / 3;
    return $media;
}
echo "A média das notas é: " . calcularMedia(7, 8, 9);