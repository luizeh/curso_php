<?php 

$cincodias = strtotime("5 days");
echo $cincodias;
echo "<br>";

$dataAtualMais5 = date('d/m/y', $cincodias);
echo $dataAtualMais5;
echo "<br>";

$doisMeses = strtotime("2 months");
echo date('d/m/y', $doisMeses);


?>