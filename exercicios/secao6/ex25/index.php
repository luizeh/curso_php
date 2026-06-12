<?php

$a = 50;

if (is_numeric($a)) {
    $res = $a * 2;
    if ($res >= 100) {
        echo "é maior que 100";
    } else{
        echo "não é um numero maior que 100";
    }
} else{
    echo "não é um número";
}
