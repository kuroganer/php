<?php
require_once '../model/DAO/UsuarioDAO.php';
require_once '../model/DTO/UsuarioDTO.php';

    $senha =  $_POST['senha'];
    $email = $_POST['email'];
   
    $usuarioDAO = new UsuarioDAO;
    $sucesso = $usuarioDAO->validarLogin($email,$senha);
    if($sucesso){
        echo "<script>alert('Logado com sucesso!');
        window.location.href='../view/admin.php';
        </script>";
    }
    else {
        echo "<script>alert('Ero de Login:email ou senha incorretos!!');
        window.location.href='../view/login.php';
        </script>";
    }



?>