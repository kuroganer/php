<?php
    require_once '../model/DAO/UsuarioDAO.php';
    require_once '../model/DTO/UsuarioDTO.php';

    $usuarioDAO =  new UsuarioDAO();
  $todosUsuarios = $usuarioDAO->listarUsuarios();
?>