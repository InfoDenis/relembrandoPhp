<?php

function ola() {

  $argumentos = func_get_args();//Pega todos os valores passados para uma função
  return $argumentos;

}

var_dump(ola("Bom dia", 10));