<?php 

$nome = "esta string tem aura";
$nome2 = "esta nao";

echo strlen($nome) . "<br>";
echo strlen($nome2) . "<hr>";

for($i = 0; $i < strlen($nome); $i++){
    echo "$nome[$i] <br>";
}

?>