<?php

$qualASuaIdade = 75;
$idadeCrianca = 12;
$idadeMaior   = 18;
$idadeMelhor  = 65;

if ($qualASuaIdade < $idadeCrianca) {
  echo "Criança";
} else if ($qualASuaIdade < $idadeMaior) {
  echo "Adolescente";
} else if ($qualASuaIdade < $idadeMelhor) {
  echo "Adulto";
} else {
  echo "Idoso";
}

//If ternário

echo ($qualASuaIdade < $idadeMaior) ? "Menor de Idade" : "Maior de Idade";