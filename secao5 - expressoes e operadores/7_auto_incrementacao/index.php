<?php 

function coisar(){
    static $x = 0;
    $x++;
    echo "$x <br>";

}

coisar();
coisar();
coisar();
coisar();
coisar();
coisar();
coisar();
coisar();

echo "<hr>";

function descoisar(){
    static $y = 7;
    $y--;
    echo "$y <br>";

}

descoisar();
descoisar();
descoisar();
descoisar();
descoisar();
descoisar();

// '++' adiciona mais um.
// '--' remove um.
?>