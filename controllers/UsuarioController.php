<?php
require_once 'models/UsuarioModel.php';


class UsuarioController {
    private $usuarioModel;

    public function __construct($pdo) {
        $this->usuarioModel = new UsuarioModel($pdo);
    }

    public function criarUsuario($usuario, $senha, $email) {
        $this->usuarioModel->criarUsuario($usuario, $senha, $email);
    }
}
?>