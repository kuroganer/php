<?php
require_once '../model/DAO/UsuarioDAO.php';
require_once '../model/DTO/UsuarioDTO.php';


    $id = $_GET['id'];

    $usuarioDAO= new UsuarioDAO();
    $sucesso = $usuarioDAO->excluirUsuario($id);
    if($sucesso){
        echo "<script>
        alert('Usuario Excluido com sucesso');
        window.location.href='../view/listarUsuarios.php'
        </script>";
    }
    else {
        echo "<script>
        alert('Erro! Falha ao excluir Usuario');
        window.location.href='../view/listarUsuarios.php'
        </script>";
    }


?>