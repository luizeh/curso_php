<?php

$host = "localhost";
$user = "root";
$pass = "";
$db = "curso_php";
$port = "3307";

$conn = new mysqli($host, $user, $pass, $db, $port);


if ($conn->connect_errno) {
    echo "Erro na conexao! <br>";
    echo "Erro:" . mysqli_connect_error();
} else {
    echo "Sem erro!";
}
