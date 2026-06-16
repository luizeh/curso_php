<?php

function coisar()
{
    $s1 = "este item esta em promocao";
    $sarr = explode(" ", $s1);

    $ultimaPos = count($sarr) - 1;
    $sarr[$ultimaPos] = strtoupper($sarr[$ultimaPos]);

    echo implode(" ", $sarr);
}

coisar();