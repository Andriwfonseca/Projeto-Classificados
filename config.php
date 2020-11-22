<?php
session_start();
global $pdo;
try{
    $db_name = "classificados";
    $db_host = 'localhost';
    $db_user = 'root';
    $db_pass = '';

    $pdo = new PDO('mysql:dbname='.$db_name.';host='.$db_host,$db_user,$db_pass);
}catch(PDOException $e){
    echo "Falhou: ".$e->getMessage();
    exit;
}