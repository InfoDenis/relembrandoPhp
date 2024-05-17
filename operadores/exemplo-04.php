<?php

/* ***** OPERADORES DE COMPARAÇÃO ***** */
$a = 30;
$b = 55;

var_dump($a > $b); //MAIOR QUE
echo "<br>";
var_dump($a < $b); //MENOR QUE
echo "<br>";
var_dump($a == $b); //IGUAL À ****VALE SOMENTE PARA VALORES!!!! NÃO VALE PARA TIPOS DE VARIÁVEIS!!!
echo "<br>";
var_dump($a === $b); //IGUAL À ****IGUALDADE DE IDENTIDADE!!! COMPARA TANTO VALOR QUANTO TIPO!!!
echo "<br>";
var_dump($a != $b); //DIFERENTE DE ****VALE SOMENTE PARA VALORES!!!! NÃO VALE PARA TIPOS DE VARIÁVEIS!!!
echo "<br>";
var_dump($a !== $b); //DIFERENTE DE ****IGUALDADE DE IDENTIDADE!!! COMPARA TANTO VALOR QUANTO TIPO!!!
echo "<br>";
var_dump($a >= $b); //MAIOR IGUAL
echo "<br>";
var_dump($a <= $b); //MENOR IGUAL
echo "<br>";