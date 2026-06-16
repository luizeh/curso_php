<?php 
$obj = ['carro'=> 10, 'sofa'=> 25, 'cafeteira'=> 9, 'casa'=> 9999];

function coisa($arr){
    $arrItensCaros = [];
    foreach($arr as $item => $preco){
    if($preco > 10){
        array_push($arrItensCaros, $item);
    }
    }
    return $arrItensCaros;
}
$novoArr = coisa($obj);
print_r($novoArr);

?>