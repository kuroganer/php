<?php   
class UsuarioDTO{
    private $id;
    private $nome;
    private $idade;
    private $email;
    private $senha;

    public function setID($id){
        $this->id=$id;;
    }
    public function setNome($nome){
        $this->nome=$nome;
    }
    public function setIdade($idade){
        $this->idade=$idade;
    }
    public function setEmail($email){
        $this->email=$email;
    }
    public function setSenha($senha){
        $this->senha=$senha;
    }
    public function getID(){
        return $this->id;
    }
    public function getNome(){
        return $this->nome;
    }
    public function getIdade(){
        return $this->idade;
    }
    public function getEmail(){
        return $this->email;
    }
    public function getSenha(){
        return $this->senha;
    }

}

?>