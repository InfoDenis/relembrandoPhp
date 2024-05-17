<?php

// Escopo de variável - Até onde a variável poderá ser vista
$nome = "João";

function teste() {
  global $nome;
  echo $nome;
}

function teste2() {
  $nome = "Denise";
  echo $nome;
}

teste();
teste2();