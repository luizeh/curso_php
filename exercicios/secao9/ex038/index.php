<?php 
$itens = ["Pao", "Vinho", "Agua", "Laranja"];
function virgula($array){
    $res = implode(", ", $array);
    return $res;
}
echo virgula($itens);

?>