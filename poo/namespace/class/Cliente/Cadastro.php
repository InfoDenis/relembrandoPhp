<?php
//Classe específica extendida da Classe Genérica
namespace Cliente;

class Cadastro extends \Cadastro {

  public function registrarVenda() {

    echo "Foi registrada uma venda para o cliente " . $this->getName();

  }

}