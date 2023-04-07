<?php

$serverName ="localhost";
$DBUsername = "root";
$dbPassoword="";
$dbName ="vendas";

$mysqli = mysqli_connect($serverName, $DBUsername, $dbPassoword, $dbName);

if(!$mysqli) {
    die("Falha ao conectar ao banco de dados: " . $mysqli->error);
}