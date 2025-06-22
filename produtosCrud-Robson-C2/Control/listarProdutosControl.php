<?php   
    require_once '../Model/DTO/ProdutosDTO.php';
    require_once '../Model/DAO/ProdutosDAO.php';

   $produtosDAO = new ProdutosDAO();
   $todosProdutos=$produtosDAO->listarProdutos();

?>