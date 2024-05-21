<?php

function ola($texto = "mundo", $periodo = "Bom dia") {

  return "Olá $texto!!! $periodo!!!<br>";

}

echo ola();
echo ola("Denis", "Boa Noite");
echo ola("", "Boa Tarde");
echo ola("todos");