<?php
class ProdutoModel {
    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    public function criarProduto($nome, $qtde, $preco) {
        $sql = "INSERT INTO produto (nome,qtde,preco) VALUES (?,?,?)";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$nome, $qtde, $preco]);
    }
}
?>