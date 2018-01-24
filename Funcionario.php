<?php

  Class Funciario{

    public $nome;
    public $salario;

    function aumentaSalario($valor){
      $this->salario += $valor;
    }

     function consultaDados(){
        echo $this->nome;
        echo $this->salario;

        return $this;
     }

  }

?>
