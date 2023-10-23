<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario = $_POST["usuario"];
    $senha = password_hash($_POST["senha"], PASSWORD_BCRYPT);
    $email = $_POST["email"];

    require_once 'config.php';
    require_once 'controllers/UsuarioController.php';
    $usuarioController = new UsuarioController($pdo);
    $usuarioController->criarUsuario($usuario, $senha, $email);

}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Cadastro</title>
</head>
<body>

<div id="login">
        <form class="card" method="post">
            <div class="card-header">
                <h2>Cadastro</h2>
            </div>

            <div class="card-content">
                <div class="card-content-area">
                <input type="text" name="usuario" placeholder="Nome de Usuário" required><br>
                </div>
              
            <div class="card-content">
                <div class="card-content-area">
                <input type="password" name="senha" placeholder="Senha" required><br>
                </div>

            <div class="card-content">
                <div class="card-content-area">
            <input type="email" name="email" placeholder="Email" required><br>
                </div>

                <div class="card-content-area">
                <button class="submit">
            <input type="submit" value="Cadastrar">
                </button>
                </div>

                <div class="card-content-area">
                    <button class="submit">
                    <a class="submit" href="index.php">Voltar</a>
                    </button>
                </div>

        </form>
    </div>

</body>
</html>