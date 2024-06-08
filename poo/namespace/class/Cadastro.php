<?php
//Classe Raiz Genérica pode ser abstrata
class Cadastro {

  private $name;
  private $email;
  private $senha;

  //Criando Getters and Setters para validações
  public function getName():string {

    return $this->name;

  }

  public function setName($name) {

    $this->name = $name;

  }

  public function getEmail():string {

    return $this->email;

  }

  public function setEmail($email) {

    $this->email = $email;

  }

  public function getSenha():string {

    return $this->senha;

  }

  public function setSenha($senha) {

    $this->senha = $senha;

  }

  public function __toString() {

    return json_encode(array(
      "nome"  => $this->getName(),
      "email" => $this->getEmail(),
      "senha" => $this->getSenha()
    ));

  }

}