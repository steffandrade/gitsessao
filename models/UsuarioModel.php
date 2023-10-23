<?php
class UsuarioModel {
    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    public function criarUsuario($usuario, $senha, $email) {
        $sql = "INSERT INTO usuario (usuario,senha,email) VALUES (?,?,?)";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$usuario, $senha, $email]);
    }
}
?>