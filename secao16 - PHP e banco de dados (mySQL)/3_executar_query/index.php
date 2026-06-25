<?php

$host = "localhost";
$user = "root";
$pass = "";
$db = "curso_php";
$port = "3307";

$conn = new mysqli($host, $user, $pass, $db, $port);

//ASSUNTO DA AULA
$sql = "SELECT * FROM itens";

$res = $conn->query($sql);
print_r($res);

$conn->close();