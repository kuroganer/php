<?php
require_once '../control/listarUsuarioControl.php';
/*echo "<pre>";
print_r($todosUsuarios);
echo "</pre>";*/

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   
    <fieldset>
        <legend>Lista</legend>
        <center>
        <h3>Lista de Usuarios</h3>
        <table border="1">
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Idade</th>
            <th>Email</th>
            <th colspan="2">Operações</th>
        </tr>
        <?php foreach($todosUsuarios as $info){?>
            <tr>
                <td><?php echo $info['id']; ?></td>
                <td><?php echo $info['nome']; ?></td>
                <td><?php echo $info['idade']; ?></td>
                <td><?php echo $info['email']; ?></td>
                <td>
                <a href="../control/excluirUsuarioControl.php?id=<?php echo $info['id'];?>">
                <button>Excluir</button>
                </a>
                </td>
               
                    <td><button>Alterar</button></td>
                </a>
            </tr>
      <?php } ?>

        </table>
        </center>
    </fieldset>
    
</body>
</html>