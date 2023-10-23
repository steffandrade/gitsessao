<?php
require_once 'models/ProdutoModel.php';


class ProdutoController {
    private $produtoModel;

    public function __construct($pdo) {
        $this->produtoModel = new ProdutoModel($pdo);
    }

    public function criarProduto($nome, $qtde, $preco) {
        $this->produtoModel->criarProduto($nome, $qtde, $preco);
    }
}
?>