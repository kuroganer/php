<?php
require_once '../Control/listarProdutos.php'
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <fieldset>
        <legend>Listagem</legend>
        <center>
            <h3>Lista de Produtos</h3>
            <table border="2">
                <thead>
                    <tr>
                        <td>ID</td>
                        <td>Nome</td>
                        <td>Descrição</td>
                        <td>Preço</td>
                        <td>Quantidade</td>
                        <td colspan="2">Opções</td>
                    </tr>
                </thead>             
                
                        <?php foreach($todosProdutos as $info){?>
                            <tbody>
                                <tr>
                            <td><?php echo $info['id'];?></td>
                            <td><?php echo $info['nome'];?></td>
                            <td><?php echo $info['descricao'];?></td>
                            <td><?php echo $info['preco'];?></td>
                            <td><?php echo $info['quantidade'];?></td>
                            <td>
                                <a href="../Control/excluirProdutos.php?id=<?php echo $info['id'];?>">
                                <button>Excluir</button>
                                </a>
                            </td>
                            <td><a href="../Control/alterarProdutos.php?id=<?php echo $info['id'];?>">
                                <button>Alterar</button>
                                </a></td>
                                </tr>
                                </tbody>
                        <?php } ?>
                        
                

            </table>
        </center>
    </fieldset>
    
</body>
</html>