<?php
class ContaBancaria{
    private $titular;
    private $saldo;
    public function setTitular($nome){
        $this->titular = $nome;
    }
    public function getTitular(){
        return $this->titular;
    }
    public function depositar($valor){
        $this->saldo += ($valor > 0) ? $valor : 0;
           }
           public function saque($valor){
            if($valor>0 and $valor<= $this->saldo){
                $this-> saldo-=$valor;
            }
            //em ternario $this->saldo -= ($valor > 0 && $valor <= $this->saldo) ? $valor : 0;
           }
           function getSaldo(){
            return $this->saldo;

           }
}
?>