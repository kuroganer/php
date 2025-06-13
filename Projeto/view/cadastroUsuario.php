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
        <legend>Cadastro</legend>
    <center>
        <h3>Formulario de cadastro</h3>
    <form action="../control/cadastroUsuarioControl.php" method="post">
        <label for="nome">Nome:</label>
        <input type="text" name="nome" ><br><br>
        <label for="Idade">Idade:</label>
        <input type="number" name="idade" ><br><br>
        <label for="email">E-mail:</label>
        <input type="email" name="email" ><br><br>
        <label for="senha">Senha:</label>
        <input type="password" name="senha" ><br><br>
        <input type="submit" value="Cadastrar">
    </form>
    </center>
    </fieldset>
</body>
</html>