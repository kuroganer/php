<?php
require_once '../model/DAO/UsuarioDAO.php';
require_once '../model/DTO/UsuarioDTO.php';


$nome = $_POST["nome"];
$idade = $_POST["idade"];
$email = $_POST["email"];
$senha = $_POST["senha"];
//Cria o objeto para a transferência de dados

$usuarioDTO =  new UsuarioDTO();
$usuarioDTO->setNome($nome);
$usuarioDTO->setIdade($idade);
$usuarioDTO->setEmail($email);
$usuarioDTO->setSenha($senha);

//Cria o objeto de manipulação dos dados no banco
$usuarioDAO = new UsuarioDAO();
$sucesso = $usuarioDAO->cadastroUsuario($usuarioDTO);
if($sucesso){
    echo "<script>
    alert('Usuario Cadastrado com sucesso');
    window.location.href='../view/cadastroUsuarios.php'
    </script>";
}
else {
    echo "<script>
    alert('Erro! Dados não cadastrados');
    window.location.href='../view/cadastroUsuarios.php'
    </script>";
}



?>