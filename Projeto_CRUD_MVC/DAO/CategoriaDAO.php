<?php

class CategoriaDAO
{

    private $conexao;

    function __construct() 
    {

        $dsn = "mysql:host=localhost:3307;dbname=db_sistema";
        $user = "root";
        $pass = "etecjau";
        
        $this->conexao = new PDO($dsn, $user, $pass);
    }



    function insert(CategoriaModel $model) 
    {
  
        $sql = "INSERT INTO categoria 
                (nome, descricao) 
                VALUES (?, ?)";
        
        $stmt = $this->conexao->prepare($sql);


        $stmt->bindValue(1, $model->nome);
        $stmt->bindValue(2, $model->descricao);


        $stmt->execute();      
    }
}