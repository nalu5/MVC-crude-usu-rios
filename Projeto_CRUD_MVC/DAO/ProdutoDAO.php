<?php

class ProdutoDAO
{

    private $conexao;

    function __construct() 
    {

        $dsn = "mysql:host=localhost:3307;dbname=db_sistema";
        $user = "root";
        $pass = "etecjau";
        
        $this->conexao = new PDO($dsn, $user, $pass);
    }



    function insert(ProdutoModel $model) 
    {
  
        $sql = "INSERT INTO produto 
                (nome_produto, codigo_barra, fornecedor, fabricante, qtd, preco_custo, preco_venda) 
                VALUES (?, ?, ?, ?, ?, ?, ?)";
        
        $stmt = $this->conexao->prepare($sql);


        $stmt->bindValue(1, $model->nome_produto);
        $stmt->bindValue(2, $model->codigo_barra);
        $stmt->bindValue(3, $model->fornecedor);
        $stmt->bindValue(4, $model->fabricante);
        $stmt->bindValue(5, $model->qtd);
        $stmt->bindValue(6, $model->preco_custo);
        $stmt->bindValue(7, $model->preco_venda);

        $stmt->execute();      
    }
}