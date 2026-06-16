<?php 

$arr = [
    [1,2,3],
    [4,5,6],
    [7,8,9],
];


foreach($arr as $index => $subarray){
    echo "mudando para o array $index <br>";

    foreach($subarray as $value){
    echo $value . "<br>";
}
}

?>