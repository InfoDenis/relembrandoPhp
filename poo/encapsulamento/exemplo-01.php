<?php

//Encapsulamento = Proteger = Modificador de Acesso = Quem pode vê-lo?
class Pessoa {

  public    $nome  = "Ramus Lerdorf"; //Todos de dentro e de fora podem acessar
  protected $idade = 48; //Somente quem está dentro da própria classe (métodos, ou quem herda dessa classe)
  private   $senha = "123456"; //Somente que está dentro da própria classe, nem os herdeiros podem acessar

  public function verDados() {

    echo $this->nome;
    echo $this->idade;
    echo $this->senha;

  }

}

$objeto = new Pessoa();

//echo $objeto->nome; //Consegue ter acesso porque é publico
//echo $objeto->idade;//Não Consegue ter acesso porque é protegido
//echo $objeto->cidade;//Não Comsegue ter acesso porque é privado

$objeto->verDados();//Mostra todos os dados porque é publico, mas não é porque vê que tem acesso a tudo