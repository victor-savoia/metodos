<?php

  class Conta{

    public $numero;
    public $saldo = 0;
    public $limite = 100;

    function depositaValor($valor){
      $this->saldo += $valor;
      return $this->saldo;
    }

    function sacaValor($valor){
      if($valor <= 100){
        $this->saldo -= $valor;
      } else {
        echo "Passou do limite de saque";
        return null;
      }
      return $this->saldo;
    }

    public function imprimeExtrato(){
      echo $this->saldo.PHP_EOL;
    }

    function consultaSaldoDisponivel(){
      return $this->saldo;
    }

  }

?>
