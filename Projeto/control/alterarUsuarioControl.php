<?php
require_once '../model/DAO/UsuarioDAO.php';
require_once '../model/DTO/UsuarioDTO.php';


$id = $_POST['id'];
$nome = $_POST['nome'];
$idade = $_POST['idade'];
$email = $_POST['email'];
$senha = $_POST['senha'];


//echo "<pre>";
//echo var_dump($id,$nome,$idade,$email,$senha);
//echo "</pre>"

$usuarioDTO = new UsuarioDTO;
$usuarioDTO->setID($id);
$usuarioDTO->setNome($nome);
$usuarioDTO->setIdade($idade);
$usuarioDTO->setEmail($email);
$usuarioDTO->setSenha($senha);

$usuarioDAO =  new UsuarioDAO();
$sucesso = $usuarioDAO->alterarUsuario($usuarioDTO);
if($sucesso){
    echo "<script>alert('Dados alterados com sucesso!');
    window.location.href='../view/listarUsuarios.php';
    </script>";
}
else {
    echo "<script>alert('ERRO! Dados não alterados!');
    window.location.href='../view/listarUsuarios.php';
    </script>";
}







?>