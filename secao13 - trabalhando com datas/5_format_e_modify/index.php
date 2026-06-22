<?php 

$data = new DateTime();
// Data atual
echo $data->format('d/m/y') . "<br>";
echo $data->format('D - M - Y'). "<br>";

// Data + 5 dias
$data->modify('+5 days');
// $data->modify('+5 months);
// $data->modify('+ 1 year");
echo $data->format('d/m/y');



?>