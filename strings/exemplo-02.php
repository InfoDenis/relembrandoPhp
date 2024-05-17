<?php

/* ***** FUNÇÕES ÚTEIS PARA STRINGS PHP ***** */

$nome = "joão rangel";

echo $nome . "<br>";

echo strtoupper($nome) . "<br>"; //Todas as letras maiúsculas exceto com acentos
echo strtolower($nome) . "<br>"; //Todas as letras minúsculas exceto com acentos
echo ucfirst($nome) . "<br>"; //Somente a primeira letra Maiúscula
echo ucwords($nome) . "<br>"; //Somente a primeiras letras de cada palavra Maiúscula
