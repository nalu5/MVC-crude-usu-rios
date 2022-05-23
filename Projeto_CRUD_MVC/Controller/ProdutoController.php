<?php

class ProdutoController 
{

    public static function index() 
    {
        include 'View/modules/Produto/ProdutoListar.php';
    }

 
    public static function form()
    {
        include 'View/modules/Produto/ProdutoCadastro.php';
    }

   
    public static function save() {

        include 'Model/ProdutoModel.php'; 
        $produto = new ProdutoModel();
        $produto->nome_produto = $_POST['nome_produto'];
        $produto->codigo_barra = $_POST['codigo_barra'];
        $produto->fornecedor = $_POST['fornecedor'];
        $produto->fabricante = $_POST['fabricante'];
        $produto->qtd = $_POST['qtd'];
        $produto->preco_custo = $_POST['preco_custo'];
        $produto->preco_venda = $_POST['preco_venda'];

        $pessoa->save(); 
        header("Location: /Produto"); 
    }
}