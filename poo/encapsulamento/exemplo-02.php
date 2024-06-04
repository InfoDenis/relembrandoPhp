<?php

//Encapsulamento = Proteger = Modificador de Acesso = Quem pode vê-lo?
class Pessoa {

  public    $nome  = "Ramus Lerdorf";
  protected $idade = 48;
  private   $senha = "123456";

  public function verDados() {

    echo $this->nome  . "<br>";
    echo $this->idade . "<br>";
    echo $this->senha . "<br>";

  }

}

//Vai extender tudo da classe Pessoa exceto o que é privado
class Programador extends Pessoa {

  public function verDados() {

    echo get_class($this) . "<br>"; //Função mostra de que classe está chamando

    echo $this->nome  . "<br>";
    echo $this->idade . "<br>";
    echo $this->senha . "<br>";

  }

}

$objeto = new Programador();

$objeto->verDados();