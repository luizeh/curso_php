<?php 

$a = 10;

function teste(){
    $a = 5;
    echo "Escopo local de $a  <br>";
}

teste();

echo "escopo global de $a <br>";



?>