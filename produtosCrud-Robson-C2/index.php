<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Menu de Produtos</title>
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
            display: flex;
            justify-content: center;
            margin: 50px auto;
            gap: 40px;
        }

        .box {
            background-color: white;
            width: 250px;
            height: 150px;
            box-shadow: 0 0 10px rgba(0,0,0,0.2);
            display: flex;
            justify-content: center;
            align-items: center;
            border-radius: 10px;
            transition: transform 0.2s;
        }

        

        .box a {
            text-decoration: none;
            font-size: 20px;
            color: #6200ea;
            font-weight: bold;
        }
    </style>
</head>
<body>

    <div class="header">
        Produtos
    </div>

    <div class="container">
        <div class="box">
            <a href="view/cadastrarProdutos.php">Cadastrar Produto</a>
        </div>
        <div class="box">
            <a href="view/listarProdutos.php">Listar Produtos</a>
        </div>
    </div>

</body>
</html>