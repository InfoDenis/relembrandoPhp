<?php

//Passagem de parâmetro por valor "O que se faz em Vegas, fica em Vegas", o valor é alterado somente no escopo da função
echo "Passagem de parâmetro por valor. <br>";
$a = 10;

function trocaValor($b) {

  $b += 50;
  return $b;

}

echo $a . "<br>";
echo trocaValor($a) . "<br>";
echo $a . "<br>";

echo "<br> Passagem de parâmetro por referência. <br>";
$d = 10;

function trocaValor2(&$e) {

  $e += 50;
  return $e;

}

echo $d . "<br>";
echo trocaValor2($d) . "<br>";
echo trocaValor2($d) . "<br>";
echo $d . "<br>";