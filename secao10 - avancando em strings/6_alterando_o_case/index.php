<?php 

$s1 = "jamilton damasceno maiusculo <br>";
$s2 = "JAMILTON DAMASCENO MINUSCULO <br>";

echo strtoupper($s1);
echo strtolower($s2);

$s3 = "ola tudo bem meu nome é jamilton <br>";
$s4 = "curitiba parana brasil ana laura <br>";
echo ucfirst($s3); //primeira letra maiuscula
echo ucwords($s4); // primeira letra de cada palavra maiuscula

?>