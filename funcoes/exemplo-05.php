<?php
// Passagem de parâmetro por valor
$a = 10;

function trocaValor($b) {

  $b += 50;
  return $b;

} 

echo trocaValor($a);
echo "<br>";

//Passagem de parâmetro por referência

$v = 10;

function trocaValor2(&$c) {

  $c += 50;
  return $c;

} 


echo trocaValor2($v);
echo "<br>";
echo trocaValor2($v);
echo "<br>";
echo $v;