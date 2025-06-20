<?php   
    require_once '../Model/Conexao/Conexao.php';
    require_once '../Model/DTO/ProdutosDTO.php';

    class ProdutosDAO{
        public $pdo = null;
        public function __construct(){
            $this->pdo=Conexao::getInstance();
        }
        public function cadastroProduto(ProdutosDTO $produtosDTO){
            try {
                $sql = "INSERT INTO produtos(nome, descricao, preco,quantidade)VALUES(?,?,?,?)";
                $stmt = $this->pdo->prepare($sql);
                
                $nome=$produtosDTO->getNome();
                 $descricao=$produtosDTO->getDescricao();
                 $preco=$produtosDTO->getPreco();
                 $quantidade=$produtosDTO->getQuantidade();

                 
                 $stmt->bindValue(1,$nome);
                 $stmt->bindValue(2,$descricao);
                 $stmt->bindValue(3,$preco);
                 $stmt->bindValue(4,$quantidade);
                 $retorno = $stmt->execute();
                 return $retorno;
             
            } catch (PDOException $exe) {

                echo "ERRO! ".$exe-> getMessage();
            }
        }
        public function listarProdutos(){
            try {
                $sql = "SELECT * FROM produtos";
                $stmt = $this->pdo->prepare($sql);
                $stmt->execute();
                $retorno=$stmt->fetchAll(PDO::FETCH_ASSOC);
                return $retorno;
            } catch (PDOException $exe) {

                echo "ERRO! ".$exe-> getMessage();
            }
        }
        public function excluirProdutos($id){
            try {
               $sql = "DELETE from usuario WHERE id= ?";
             
               $stmt= $this->pdo->prepare($sql);
               $stmt->bindValue(1,$id);
               $retorno = $stmt->execute();
              return $retorno;
            } catch (PDOException $exe) {

                echo "ERRO! ".$exe-> getMessage();
            }
        }
    }
?>