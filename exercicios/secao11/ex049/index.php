<?php 

$nome = "Jamilton";
$profissao = "Professor";
$idade = "34";
$aura = 10000;

$goat = compact("nome", "profissao", "idade", "aura");
foreach($goat as $caracteristica => $value){
    echo "$caracteristica => $value <br>";
}


?>