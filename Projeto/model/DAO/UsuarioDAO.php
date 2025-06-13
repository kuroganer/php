<?php   
    require_once 'Conexao.php';
    require_once '../model/DTO/UsuarioDTO.php';


    class UsuarioDAO{
        public $pdo = null;
        public function __construct(){
            $this->pdo= Conexao::getInstance();
        }
        //metodo para Inserir informações na tabela usuario do banco
        public function cadastroUsuario(UsuarioDTO $usuarioDTO){
            try {
              $sql = "Insert into usuario(nome, idade, email,senha) Values(?,?,?,?)";
              $stmt = $this->pdo->prepare($sql);

              $nome=$usuarioDTO->getNome();
              $idade=$usuarioDTO->getIdade();
              $email=$usuarioDTO->getEmail();
              $senha=$usuarioDTO->getSenha();

              $stmt->bindValue(1,$nome);
              $stmt->bindValue(2,$idade);
              $stmt->bindValue(3,$email);
              $stmt->bindValue(4,$senha);

             $retorno =  $stmt->execute();
             return $retorno;

            } catch (PDOException $exe) {
               echo "ERRO! ".$exe-> getMessage();
            }
        }
         public function listarUsuarios(){
            try {
             $sql = "Select * from usuario";
             $stmt =  $this->pdo->prepare($sql);
             $stmt->execute();
             $retorno = $stmt->fetchALL(PDO::FETCH_ASSOC);
             return $retorno;
                } catch (PDOException $exe) {
                    echo "ERRO! ".$exe-> getMessage();
                 }
         }

         public function excluirUsuario($id){
            try {
               $sql = "DELETE from usuario WHERE id= ?";
               // $sql = "DELETE from usuario WHERE id= '{$id}'";die;die é similar ao break, e no caso desativaria o $stmt->bindvalue(1,$id)
               $stmt= $this->pdo->prepare($sql);
               $stmt->bindValue(1,$id);
               $retorno =  $stmt->execute();
               return $retorno;
            } catch (PDOException $exe) {
                echo "ERRO! ".$exe-> getMessage();
             }
            
         }
    }

?>