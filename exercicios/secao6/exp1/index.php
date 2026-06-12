<?php

$num1 = 10;
$num2 = 30;
function compararNumeros($num1, $num2)
{
    if ($num1 > $num2) {
        echo "O primeiro número é maior.";
    } elseif ($num1 < $num2) {
        echo "O segundo número é maior.";
    } elseif ($num1 == $num2) {
        echo "Os números são iguais.";
    }
}

compararNumeros($num1, $num2);


