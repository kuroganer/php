<?php
require_once '../Control/listarProdutosControl.php';
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Lista de Produtos</title>
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
            max-width: 1000px;
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

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 30px;
        }

        th, td {
            padding: 12px 15px;
            text-align: center;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #6200ea;
            color: white;
        }

        tr:hover {
            background-color: #f1f1f1;
        }

        .btn {
            padding: 8px 12px;
            border: none;
            border-radius: 5px;
            font-weight: bold;
            cursor: pointer;
            text-decoration: none;
            color: white;
        }

        .btn-delete {
            background-color: #e53935;
        }

        .btn-edit {
            background-color: #039be5;
        }

        .btn-back {
            display: inline-block;
            background-color: #6200ea;
            padding: 10px 20px;
            border-radius: 5px;
            color: white;
            text-decoration: none;
            font-weight: bold;
        }

        .btn-back:hover {
            background-color: #4b00c0;
        }
    </style>
</head>
<body>

    <div class="header">
        Lista de Produtos
    </div>

    <div class="container">
        <h3>Produtos Cadastrados</h3>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Descrição</th>
                    <th>Preço</th>
                    <th>Quantidade</th>
                    <th colspan="2">Opções</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($todosProdutos as $info){ ?>
                <tr>
                    <td><?php echo $info['id']; ?></td>
                    <td><?php echo $info['nome']; ?></td>
                    <td><?php echo $info['descricao']; ?></td>
                    <td><?php echo $info['preco']; ?></td>
                    <td><?php echo $info['quantidade']; ?></td>
                    <td>
                        <a class="btn btn-delete" href="../Control/excluirProdutosControl.php?id=<?php echo $info['id']; ?>">Excluir</a>
                    </td>
                    <td>
                        <a class="btn btn-edit" href="alterarProdutos.php?id=<?php echo $info['id']; ?>">Alterar</a>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>

        <div style="text-align: center;">
            <a class="btn-back" href="../index.php">Voltar ao Início</a>
        </div>
    </div>

</body>
</html>
