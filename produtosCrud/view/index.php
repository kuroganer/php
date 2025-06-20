<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <fieldset>
        <legend>Cadastro de Produtos</legend>
        <center>
            <h3>Formulario de Cadastro de Produtos</h3>
            <form action="../Control/cadastrarProdutos.php" method="post">
                <label for="nome">Nome</label><br>
                <input type="text" name="nome"><br>
                <label for="descricao">Descrição</label><br>
                <input type="text" name="descricao"><br>
                <label for="preco">Preço</label><br>
                <input type="text" name="preco"><br>
                <label for="quantidade">Quantidade</label><br>
                <input type="number" name="quantidade"><br>
                <input type="submit" value="Cadastrar"><br>
            </form><br>
           <button><a href="lista.php" style="text-decoration: none; color: black;">Ir para Lista</a></button> 
        </center>
    </fieldset>
    
</body>
</html>