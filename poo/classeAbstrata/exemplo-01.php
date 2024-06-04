<?php

//Parecido com Interface só que além de dizer os métodos que precisam ter, também definimos o que eles fazem
//Um objeto nunca vai estânciar uma classe abstrata, precisa ter uma classe para acessar a classe abstrata

interface Veiculo {

  public function acelerar($velocidade);
  public function frenar($velocidade);
  public function trocarMarcha($marcha);

}

abstract class Automovel implements Veiculo {

  public function acelerar($velocidade) {

    echo "O veículo acelerou até " . $velocidade . " Km/h";

  }

  public function frenar($velocidade) {

    echo "O veículo frenou até " . $velocidade . " Km/h";

  }

  public function trocarMarcha($marcha) {

    echo "O veículo engatou a marcha " . $marcha;

  }

}

class DelRei extends Automovel {

  public function empurrar() {

    //Código de Empurrar.

  }

}

$carro = new DelRei();
$carro->acelerar(200);