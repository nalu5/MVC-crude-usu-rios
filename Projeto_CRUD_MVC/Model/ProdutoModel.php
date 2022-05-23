<?php

class ProdutoModel
{

    public $id, $nome_produto, $codigo_barra, $fornecedor;
    public $fabricante, $qtd;
    public $preco_custo, $preco_venda;

    public function save()
    {
        include 'DAO/ProdutoDAO.php';

        $dao = new ProdutoDAO();

        if($this->id == null) 
        {
            $dao->insert($this);
        } else {

        }
    }
}