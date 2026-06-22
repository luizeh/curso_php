<?php

echo "<pre>";
print_r($_SERVER);
echo "</pre>";
echo "<hr>";
echo $_SERVER['MYSQL_HOME'] . "<br>";
if($_SERVER['SERVER_NAME'] == 'localhost'){
    echo "Voce esta no localhost";
} else{
    echo "voce nao ta no localhost";
}
