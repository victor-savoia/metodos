<?php

  require 'Conta.php';
  require 'Funcionario.php';

  $conta = new Conta();

  $conta->depositaValor(100);
  $conta->imprimeExtrato();
  $conta->sacaValor(10);
  $saldo = $conta->consultaSaldoDisponivel();
  echo $saldo.PHP_EOL;

  $funcionario = new Funcionario();
  

?>
