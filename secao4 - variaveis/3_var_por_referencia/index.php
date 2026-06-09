<?php 

$x = 10;

$y =& $x;

echo $x;
echo "<br>";
echo $y;
echo "<hr>";

$y = 15;

echo $x;
echo "<br>";
echo $y;
echo "<hr>";

$y = 67;
echo $x;
echo "<br>";
echo $y;

// Funciona para qualquer tipo de dado
?>