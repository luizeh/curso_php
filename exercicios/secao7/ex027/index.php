<?php

$arr = ["Enzo", "Erick", "Lumi", "Luizeh", 1, true, 456, 67, false];
$i = 0;
while ($i < count($arr)) {
    if(is_string($arr[$i])){
        print_r($arr[$i]);
        echo "<br>";
    }
    $i++;
} 
