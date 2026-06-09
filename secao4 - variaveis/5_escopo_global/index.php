<?php

$teste = "GVAR";

echo "$teste global 1 <br>";

if (5 > 2) {
    echo "$teste if <br>";
}

function funcao()
{
    $teste = "xsxs";
    echo "$teste local <br>";
}

function testandoglobal()
{
    global $teste;
    echo "$teste global funcao <br>";
}

funcao();
testandoglobal();
