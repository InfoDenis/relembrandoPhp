<?php

class Pessoa {

  public $nome;//Atributo - atributo fora do método escreve-se normal, dentro de um método usar "$this->"

  public function falar() {//Método

    return "O meu nome é " . $this->nome;//

  }

}

$denis = new Pessoa;
$denis->nome = "Denis Ramos";
echo $denis->falar();
