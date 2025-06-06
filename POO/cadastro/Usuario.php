<?php
    class Usuario{
       private $nome;
       private $email;
      // private $cpf;
       //construtor com multiplos parametros
       /*public function __construct($nome, $email,$cpf){
        $this->nome=$nome;
        $this->email=$email;
        $this -> cpf=$cpf;
       }*/
       //construtor com valores padrão
       public function __construct($nome, $email){
        if (empty($nome)){
            throw new Exception("O nome não pode estar em banco");
                    }
        if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
            throw new Exception("Email Invalido: $email");
            
        }
        $this->nome=$nome;
        $this->email=$email;
       // $this -> cpf=$cpf;
        

       }
       public function setNome($nome){
        $this->nome=$nome;
        }
        public function setEmail($email){
            $this->email=$email;
        }
        //public function setCpf($cpf){
         //   $this -> cpf=$cpf;
       // }
        public function getNome(){
            return $this->nome;
        }
        public function getEmail(){
            return $this->email;
        }
       // public function getCpf(){
         //   return $this->cpf;
       // }
    }
?>