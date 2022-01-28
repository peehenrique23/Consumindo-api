<?php

$host = 'localhost';
$dbname = 'dados';
$user = 'root';
$senha = '';

#Conexão ao banco de dados
try {
    $con = new PDO('mysql:host='.$host.';dbname='.$dbname.'', $user, $senha, [PDO::MYSQL_ATTR_INIT_COMMAND =>  "SET NAMES 'UTF8'"]);
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
}catch (Exception $e) { 
    echo 'Erro ao conectar ao banco de dados';
    echo $e;
} 
?>

