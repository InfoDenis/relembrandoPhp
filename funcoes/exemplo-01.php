<?php

//Função sem return é chamado de sub-rotina
function ola() {

  echo "Olá Mundo!!";

}

ola();

function ola2() {

  return "Olá Mundo!! 2";

}

echo ola2();