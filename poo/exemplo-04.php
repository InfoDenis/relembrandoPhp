<?php

//Métodos Mágicos - sempre começará com __;
class Endereco {

  private $logradouro;
  private $numero;
  private $cidade;

  //Método __construct é chamado na criação da classe, quando o objeto é construído, quando precisa-se já receber algum valor ou executar algo. não é obrigatório!
  public function __construct($a, $b, $c) {

    $this->logradouro = $a;
    $this->numero     = $b;
    $this->cidade     = $c;

  }

  //Método é chamado quando o objeto é ou precisa ser removido da memória. Ex. Quando a execução da página chega ao fim ou quando você quer remover-lo da memória como depois de usar uma Conexao com BD. não é obrigatório.
  public function __destruct() {

    var_dump("Destruir");

  }

  //Serializa o objeto - transforma em string 
  public function __toString() {

    return $this->logradouro . ", " . $this->numero . " - " . $this->cidade; 

  }

}

$meuEndereco = new Endereco("Rua Ademar Saraiva Leão", "123", "Santos");

var_dump($meuEndereco);

echo "<br>";

echo $meuEndereco;

echo "<br>";

unset($meuEndereco);
