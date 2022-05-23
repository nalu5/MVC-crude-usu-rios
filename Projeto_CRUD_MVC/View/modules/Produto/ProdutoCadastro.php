<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Produtos</title>
    <style>
        label, input { display: block;}
    </style>
</head>
<body>
    <form action="/produto/save" method="post">
        <fieldset>
            <legend>Cadastro de Produtos</legend>
            <label for="nome_produto">Nome do produto:</label>
            <input name="nome_produto" id="nome_produto" type="text" />

            <label for="codigo_barra">Código de barras:</label>
            <input name="codigo_barra" id="codigo_barra" type="text" />

            <label for="fornecedor">Fornecedor:</label>
            <input name="fornecedor" id="fornecedor" type="text" />

            <label for="fabricante">Fabricante:</label>
            <input name="fabricante" id="fabricante" type="text" />

            <label for="qtd">E-mail:</label>
            <input name="qtd" id="qtd" type="number" />

            <label for="preco_custo">Preço de custo:</label>
            <input name="preco_custo" id="preco_custo" type="numer" />

            <label for="preco_venda">Preço de venda:</label>
            <input name="preco_venda" id="preco_venda" type="number" />

            <button type="submit">Enviar</button>

        </fieldset>
    </form>    
</body>
</html>