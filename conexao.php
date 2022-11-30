<?php

$dbHost = 'localhost';
$dbUsername = 'root';
$dbPassword = '';
$dbName = 'b1';

$pdo = new PDO("mysql:dbname=b1;host=localhost","root","");


/*if($conexao->connect_errno)
{
    echo "Erro de conexão";
}
else
{
    echo "conexão efetuada com sucesso";
}

?>