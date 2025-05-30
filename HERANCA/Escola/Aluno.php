
<?php
   require_once'Pessoa.php';
   class Aluno extends Pessoa{
    private $matricula;
    private $curso;
    //final prioriza então da erro
   final public function pagarMensalidade(){
        echo "<p> Pagando Mensalidade do aluno $this->nome</p>";
    }
    public function getMatricula(){
        return $this->matricula;
   }
   public function getCurso(){
    return $this->curso;
   }
   public function setMatricula($matricula){
    $this->matricula=$matricula;
   }
   public function setCurso($curso){
    $this->curso=$curso;
   }
  


}


?>