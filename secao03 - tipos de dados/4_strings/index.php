<?php 

echo "testando texto de aspas duplas <br>";
echo 'testando texto de aspas simples <br>';

echo "ele disse 'PAGOTTO!' <br>";
echo 'ele disse "PAGOTTO!" <br>';

$idade = 67;
echo "ele tem $idade anos <br>";
echo 'ele tem $idade anoss';

// aspas duplas interpretam variaveis, mas aspas duplas não.
echo "<hr>";
$valor = "67";
echo $valor . "<br>";

if(is_string($valor)){
    echo "é string!";
} else{
    echo "não é string!";
}

?>