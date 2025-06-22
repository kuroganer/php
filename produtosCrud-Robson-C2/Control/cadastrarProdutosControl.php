<?php   
    require_once '../Model/DTO/ProdutosDTO.php';
    require_once '../Model/DAO/ProdutosDAO.php';

   $nome=$_POST['nome'];
    $descricao = $_POST['descricao']; 
    $preco=$_POST['preco'];
    $quantidade=$_POST['quantidade'];

    $produtosDTO= new ProdutosDTO();
    $produtosDTO->setNome($nome);
    $produtosDTO->setDescricao($descricao);
    $produtosDTO->setPreco($preco);
    $produtosDTO->setQuantidade($quantidade);

    $produtosDAO= new ProdutosDAO();
    $sucesso = $produtosDAO->cadastroProduto($produtosDTO);
    if($sucesso){
      echo "<script>
    alert('Usuario Cadastrado com sucesso');
    window.location.href='../view/cadastrarProdutos.php'
    </script>";  
    }
    else{
        echo "<script>
    alert('Erro! Dados não cadastrados');
    window.location.href='../view/cadastrarProdutos.php'
    </script>";
    }

?>