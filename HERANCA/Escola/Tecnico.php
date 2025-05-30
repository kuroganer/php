
<?php
   require_once'Aluno.php';
   //herança de implementação ou herança pobre
   class Tecnico extends Aluno{
    private $registroProfissional;
    private $horasPraticadas;
    public function praticar($horas){
        if($horas>0){
            $this->horasPraticadas += $horas;
        }
        else{
            echo "ERRO!";
        }
    }
    public function getRegProf(){
        return $this->registroProfissional;
    }
    public function setRegProf($registro){
        $this->registroProfissional=$registro;

    }

   
   }
  
?>