<?php

class CategoriaModel
{

    public $id, $nome, $descricao;
    


    public function save()
    {
        include 'DAO/CategoriaDAO.php';

        $dao = new CategoriaDAO();

        if($this->id == null) 
        {

            $dao->insert($this);
        } else {

        }
    }
}