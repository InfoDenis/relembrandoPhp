<?php

//While - enquanto a condição for verdadeira executará o código

$condicao = true;

while ($condicao) {
  
  $numero = rand(1, 10);

  if ($numero === 3) {
    
    echo "TRÊS!!!";
    $condicao = false;

  }

  echo $numero . "<br>";

}