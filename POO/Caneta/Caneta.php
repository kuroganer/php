<?php   
    class Caneta{
        //atributos
        private $modelo;
        public $cor;
        public $ponta;
        private $carga;
        public $tampada;//atributos não possuem parenteses metódos sim

        //metodos
        function rabiscar(){
            if ($this->tampada == true){
                echo "<p>Erro! Não posso rabiscar!</p>";
             }
             else{
                echo "<p> Estou rabiscando! </p>";
             }

        }
       public function escrever(){

        }
      public  function pintar(){

        }
       public function tampar(){
            $this->tampada=true;
        }
       public function destampar(){
            $this->tampada=false;
        }
    }
?>