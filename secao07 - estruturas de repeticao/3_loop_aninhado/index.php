<?php 

$i = 0;

while($i <10){
    echo "Loop externo $i <br>";
    echo "<hr>";
    $j = 1;
    while($j <= 5){
        echo "Loop interno $j <br>";
        $j++;
    }

    $i++;
}

?>