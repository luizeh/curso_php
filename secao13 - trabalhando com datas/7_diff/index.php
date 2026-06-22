<?php 

$data1 = new DateTime();
$data2 = new DateTime();

$data2->setdate(2010, 11, 10);
print_r($data2);
echo "<br>";
print_r($data1);
echo "<br>";
$diferenca = $data1->diff($data2);
print_r($diferenca);
echo "<br>";
echo $diferenca->format("%a days");
?>