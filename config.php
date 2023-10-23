<?php

$host = 'localhost';
$dbname = 'autenticacao';
$username = 'root';
$password = '';

try {
        $pdo = new PDO("mysql:host=localhost;dbname=autenticacao", "root", "");
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        die("Erro na conexão do banco de dados:" . $e->getMessage());
}
?>