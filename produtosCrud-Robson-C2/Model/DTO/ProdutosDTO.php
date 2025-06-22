<?php   
    class ProdutosDTO{
        private $id;
        private $nome;
        private $descricao;
        private $preco;
        private $quantidade;
        public function setID($id){
            $this->id=$id;
        }
        public function setNome($nome){
            $this->nome=$nome;
        }
         public function setDescricao($descricao){
            $this->descricao=$descricao;
        }
         public function setPreco($preco){
            $this->preco=$preco;
        }
         public function setQuantidade($quantidade){
            $this->quantidade=$quantidade;
        }
          public function getID(){
           return $this->id;
        }
          public function getNome(){
           return $this->nome;
        }
          public function getDescricao(){
           return $this->descricao;
        }
          public function getPreco(){
           return $this->preco;
        }
          public function getQuantidade(){
           return $this->quantidade;
        }

        
    }

?>