<?php 

$data = new DateTime();

print_r($data);
echo "<br>";

$data->setDate(2010, 11, 10);
print_r($data);
$data->setTime(13,13,13,);
echo "<br>";
print_r($data);

?>