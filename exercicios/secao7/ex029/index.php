<?php 

$arr = [10, 20 ,30 ,40 ,50 ,60 ,70, 80, 90, 100];

$i = 0;

while($i < count($arr)){
    $num = $arr[$i];
    if($num == 30 || $num == 40){
        $i++;
        continue;
    }
    echo "elemento $num <br>";
    $i++;
}


?>