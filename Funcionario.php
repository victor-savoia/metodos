<?php

  Class Funcionario{

    public $nome;
    public $salario;

    function aumentaSalario($valor){
      $this->salario += $valor;
    }

     function consultaDados(){
        echo $this->nome.PHP_EOL;
        echo $this->salario.PHP_EOL;

        return $this;
     }

  }

?>
