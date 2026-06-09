<?php 

function calcular(){
    $num1 = 20;
    $num2 = 7;
    $res = $num1 + $num1 + $num1 + $num2;
    echo "aí é muito facil professora é $res <br>";
    if($res == 67){
        return true;
    }else{
        return false;
    }
}

$retorno = calcular();
if($retorno === true){
    echo "foi resenha";
} else{
    echo "not resenha -1000 aura";
}

// Pra checar se o dado é um booleano, basta utilizar a função is_bool()
?>