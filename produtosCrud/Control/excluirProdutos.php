<?php   
    require_once '../Model/DTO/ProdutosDTO.php';
    require_once '../Model/DAO/ProdutosDAO.php';

   $id=$_GET['id'];
    $produtosDAO = new ProdutosDAO();
    $sucesso = $produtosDAO->excluirProdutos($id);
      if($sucesso){
        echo "<script>
        alert('Usuario Excluido com sucesso');
        window.location.href='../view/lista.php'
        </script>";
    }
    else {
        echo "<script>
        alert('Erro! Falha ao excluir Usuario');
        window.location.href='../view/lista.php'
        </script>";
    }
?>