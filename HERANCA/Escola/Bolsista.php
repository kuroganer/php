
<?php
   require_once'Aluno.php';
   //herança de implementação ou herança pobre
   final class Bolsista extends Aluno{
    private $bolsa;
    public function renovarBolsa(){
        echo "<p>Bolsa Renovada!</p>";

    }
    public function pagarMensalidadeBolsista(){
        echo "<p>". $this->getNome() ."é bolsista então paga com desconto!</p>";
    }
    public function getBolsa(){
        return $this->bolsa;
    }
    public function setBolsa($bolsa){
        $this->bolsa=$bolsa;
    }
   
   }
  
?>