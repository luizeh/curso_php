<?php 

$host = "localhost";
$user = "root";
$pass = "";
$db = "curso_php";
$port = "3307";

$conn = new mysqli($host, $user, $pass, $db, $port);

// ASSUNTO DA AULA
$id = 7;

$stmt = $conn->prepare("DELETE FROM itens WHERE id = ?");

$stmt->bind_param("i", $id);

$stmt->execute();

$conn->close();



?>