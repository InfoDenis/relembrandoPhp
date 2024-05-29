<?php

//Funções com passagem de parâmetro

function ola($texto) {

  return "Olá $texto!";

}

echo ola("mundo") . "<br>";

//Função com parâmetro padrão, não é necessário passar parâmetro na chamada da função a não ser que queira mudar o valor padrão
function ola2($texto = "mundo2") {

  return "Olá $texto!!";

}

echo ola2() . "<br>";

//Função com passagem de mais de um parâmetro
function ola3($texto = "mundo3", $periodo = "Bom dia") {

  return "Olá $texto!!! $periodo!!!";

}

echo ola3() . "<br>";
echo ola3("","Boa Noite") . "<br>";
echo ola3("Denis", "Boa Tarde") . "<br>";

//Os valores que são obrigatórios para uma função devem sempre estar a esquerda