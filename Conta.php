<?php

  Class Conta(){

    public $numero;
    public $saldo;
    public $limite = 100

    function depositaValor($valor){
      $this->$saldo += $valor;
      return $this->$saldo;
    }

    function sacaValor($valor){
      $this->$saldo -= $valor;
      return $this->$saldo;
    }

    public function imprimeExtrato(){
      echo $this->$saldo;
    }

    function consultaSaldoDisponivel(){
      return $this->$saldo;
    }

  }

?>
