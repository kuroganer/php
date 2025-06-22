<?php   
    require_once '../Model/DTO/ProdutosDTO.php';
    require_once '../Model/DAO/ProdutosDAO.php';

        $id        = $_POST['id'];
        $nome      = $_POST['nome'];
        $descricao = $_POST['descricao']; 
        $preco     = $_POST['preco'];
        $quantidade= $_POST['quantidade'];

        $produtosDTO= new ProdutosDTO();
        
        $produtosDTO->setID($id);
        $produtosDTO->setNome($nome);
        $produtosDTO->setDescricao($descricao);
        $produtosDTO->setPreco($preco);
        $produtosDTO->setQuantidade($quantidade);

        $produtosDAO= new ProdutosDAO();
        $sucesso = $produtosDAO->alterarProduto($produtosDTO);
        if($sucesso){
        echo "<script>
        alert('Produto alterado com sucesso');
        window.location.href='../view/listarProdutos.php'
        </script>";  
        }
        else{
            echo "<script>
        alert('Erro! Produto não foi alterado');
        window.location.href='../view/listarProdutos.php'
        </script>";
        }

?>