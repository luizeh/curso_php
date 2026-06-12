<?php

$pessoa = [
    'nome' => "Jamilton",
    'idade' => 32,
    'nacionalidade' => "brasileiro",
    'profissao' => "Professor"
];

if ($pessoa['idade'] >= 18) {
    echo "Você é maior de idade!";
} else {
    echo "Você é menor de idade!";
}
