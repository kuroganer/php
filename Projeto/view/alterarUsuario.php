<?php
require_once '../model/DAO/UsuarioDAO.php';
require_once '../model/DTO/UsuarioDTO.php';

$id=$_GET['id'];
$usuarioDAO = new UsuarioDAO();
$usuario = $usuarioDAO->buscarUsuarioPorId($id);
/*
echo "<pre>";
print_r($usuario);
echo "</pre>"
*/
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
        <legend>Alterar Usuário</legend>
    <center>
        <h3>Alterar Usuario</h3>
    <form action="../control/alterarUsuarioControl.php" method="post">
        <label for="nome">Nome:</label>
        <input type="hidden" name="id"value="<?php echo $usuario['id'];?>" >
        <input type="text" name="nome" value="<?php echo $usuario['nome'];?>"><br><br>
        <label for="Idade">Idade:</label>
        <input type="number" name="idade"value="<?php echo $usuario['idade'];?>" ><br><br>
        <label for="email">E-mail:</label>
        <input type="email" name="email" value="<?php echo $usuario['email'];?>"><br><br>
        <label for="senha">Senha:</label>
        <input type="text" name="senha" value="<?php echo $usuario['senha'];?>"><br><br>
        <input type="submit" value="Alterar">
    </form>
    </center>
    </fieldset>
</body>
</html>