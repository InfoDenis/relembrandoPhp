<?php

//Passagem de valor por referência
$pessoa = array(
  'nome'  => 'Denis',
  'idade' => 20
);

foreach ($pessoa as &$valor) {

  if (gettype($valor) === 'integer') $valor +=10;
  echo $valor.'<br>';

}

print_r($pessoa);