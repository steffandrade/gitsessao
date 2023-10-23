<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["nome"];
    $qtde = password_hash($_POST["qtde"], PASSWORD_BCRYPT);
    $preco = $_POST["preco"];

    require_once 'config.php';
    require_once 'controllers/ProdutoController.php';
    $produtoController = new ProdutoController($pdo);
    $produtoController->criarProduto($nome, $qtde, $preco);

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
                <input type="text" name="nome" placeholder="Nome do Produto" required><br>
                </div>
              
            <div class="card-content">
                <div class="card-content-area">
                <input type="text" name="qtde" placeholder="Quantidade" required><br>
                </div>

            <div class="card-content">
                <div class="card-content-area">
            <input type="preco" name="preco" placeholder="Preço" required><br>
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