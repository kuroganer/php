<?php
require_once '../Model/DAO/ProdutosDAO.php';
require_once '../Model/DTO/ProdutosDTO.php';
$id = $_GET['id'];
$produtosDAO = new ProdutosDAO();
$produto = $produtosDAO->buscarProdutoPorId($id);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Alterar Produto</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
        }

        .header {
            background-color: #6200ea;
            color: white;
            padding: 40px;
            text-align: center;
            font-size: 32px;
        }

        .container {
            max-width: 500px;
            margin: 50px auto;
            background-color: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 15px rgba(0,0,0,0.2);
        }

        h3 {
            text-align: center;
            margin-bottom: 30px;
            color: #333;
        }

        form {
            display: flex;
            flex-direction: column;
        }

        label {
            margin-bottom: 5px;
            font-weight: bold;
            color: #333;
        }

        input[type="text"],
        input[type="number"] {
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        input[type="submit"] {
            background-color: #6200ea;
            color: white;
            padding: 10px;
            border: none;
            border-radius: 5px;
            font-weight: bold;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        input[type="submit"]:hover {
            background-color: #4b00c0;
        }

        .btn-back {
            display: inline-block;
            margin-top: 20px;
            background-color: #6200ea;
            padding: 10px 20px;
            border-radius: 5px;
            color: white;
            text-decoration: none;
            font-weight: bold;
            text-align: center;
        }

        .btn-back:hover {
            background-color: #4b00c0;
        }
    </style>
</head>
<body>

    <div class="header">
        Alterar Produto
    </div>

    <div class="container">
        <h3>Formulário de Alteração</h3>
        <form action="../Control/alterarProdutosControl.php" method="post">
            <input type="hidden" name="id" value="<?php echo $produto['id']; ?>">

            <label for="nome">Nome</label>
            <input type="text" name="nome" value="<?php echo $produto['nome']; ?>" required>

            <label for="descricao">Descrição</label>
            <input type="text" name="descricao" value="<?php echo $produto['descricao']; ?>" required>

            <label for="preco">Preço</label>
            <input type="text" name="preco" value="<?php echo $produto['preco']; ?>" required>

            <label for="quantidade">Quantidade</label>
            <input type="number" name="quantidade" value="<?php echo $produto['quantidade']; ?>" required>

            <input type="submit" value="Alterar">
        </form>

        <div style="text-align: center;">
            <a class="btn-back" href="listarProdutos.php">Ir para Lista</a>
        </div>
    </div>

</body>
</html>
