<?php

//Recurso muito utilizado principalmente com heranças
//Polimorfismo significa ter muitas formas

abstract class Animal {

  public function falar() {

    return "Som";

  }

  public function mover() {

    return "Anda";

  }

}

class Cachorro extends Animal {

  //Mudou o comportamento do método falar - isso é o polimorfismo
  public function falar() {

    return "Late";

  }

}


$pluto = new Cachorro();
echo $pluto->falar() . "<br>";
echo $pluto->mover() . "<br>";

class Gato extends Animal {

  //Mudou o comportamento do método falar - isso é o polimorfismo
  public function falar() {

    return "Mia";

  }

}

echo "--------------<br>";
$tom = new Gato();
echo $tom->falar() . "<br>";
echo $tom->mover() . "<br>";

class Passaro extends Animal {

  //Mudou o comportamento do método falar - isso é o polimorfismo
  public function falar() {

    return "Canta";

  }

  public function mover() {

    return "Voa e " . parent::mover();//Além do polimorfismo chamamos a função da classe pai

  }

}

echo "----------------<br>";
$piuPiu = new Passaro();
echo $piuPiu->falar() . "<br>";
echo $piuPiu->mover() . "<br>";