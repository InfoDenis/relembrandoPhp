<?php

//a função "func_get_args()" vai recuperar todos argumentos passados para dentro da função
function ola() {

  $argumentos = func_get_args();
  return $argumentos;

}

var_dump(ola("Bom dia!"));
echo "<br>";
var_dump(ola("Bom dia!", "Denis"));