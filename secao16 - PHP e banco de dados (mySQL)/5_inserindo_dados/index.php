<?php 

$host = "localhost";
$user = "root";
$pass = "";
$db = "curso_php";
$port = "3307";

$conn = new mysqli($host, $user, $pass, $db, $port);

// ASSUNTO DA AULA
$table = "itens";
$nome = "Xicara";
$descricao = "É uma xicara usada de cor rosa";

$q = "INSERT INTO $table (nome,descricao) VALUES ('$nome', '$descricao')";

$conn->query($q);

$conn->close();