<?php 

function sumEvenNumbers($n1){
    $res = 0;
    for($i = 0; $i <= $n1; $i++){
        if($i % 2 == 0){
            $res += $i;
        }
    }
    return $res;
}

echo sumEvenNumbers(10);

?>