<?php 
function maiorSete($nums){
    $resultado = [];
    foreach($nums as $num){
        if($num >= 7){
           $resultado[]  = $num;
        }
    }
    return $resultado;
}

$novoarr = [1, 2, 3, 4, 7, 8, 9, 10 ,12];
$narr = maiorSete($novoarr);
print_r($narr);


?>