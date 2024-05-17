<?php

$frase = "A repetição é mãe da repetição.";
$palavra = "mãe";

$q = strpos($frase, $palavra); //Busca a palavra mãe dentro da string e retorna a posição que inicia a palavra
var_dump($q);
echo "<br>";

$texto = substr($frase, 0, $q); //Retorna tudo que estiver antes da variável $palavra
var_dump($texto);
echo "<br>";

$texto2 = substr($frase, $q + strlen($palavra)); //Retorna tudo que estiver depois da variável $palavra
var_dump($texto2);
echo "<br>";

$texto3 = substr($frase, $q + strlen($palavra), strlen($frase)); //Retorna o que estiver depois da variável $palavra
var_dump($texto3);
echo "<br>";

//Trocando a palavra Tri por Cursos
$name = 'Hcode Trei';
//          string,inicio,fim do que vai ser mostrado
echo substr($name, 0, strpos($name, 'T')). "Cursos";