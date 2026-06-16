<?php 

$a = 10;

while($a > 0){
    echo "Executando o loop $a <br>";
    if($a == 5 || $a == 7){
        echo "pulou a execução $a <br>";
        $a--;
        continue;
    }

    if($a == 2){
        echo "Encerrando o loop $a";
        break;
    }
    $a--;
}

?>