<?php 

$host = "localhost";
$user = "root";
$pass = "";
$db = "curso_php";
$port = "3307";

$conn = new mysqli($host, $user, $pass, $db, $port);

// ASSUNTO DA AULA
$q = "CREATE TABLE teste (nome VARCHAR(100), sobrenome VARCHAR(100))";

$conn->query($q);

$conn->close();

?>