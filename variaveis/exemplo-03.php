<?php

/* ************* VARIÁVEIS SIMPLES **************** */
//STRINGS ou STR
$nome = "Denis";
$site = 'www.hcode.com';

//INTEIROS OU INT
$ano = 1990;

//PONTO FLUTUANTE OU FLOAT
$salario = 5500.99;

//BOOLEANOS OU BOOL
$bloqueado = false;

/* ************* VARIÁVEIS COMPOSTAS **************** */
//Array
$frutas = array("abacaxi", 'Laranja', "Manga");
echo $frutas[2];

//Objeto
$nascimento = new DateTime();
var_dump($nascimento);

/* ************* VARIÁVEIS ESPECIAIS **************** */
//Resource
$arquivo = fopen("exemplo-03.php", "r");
var_dump($arquivo);

//Nula que é diferente de vazio - Nulo é ausencia de valor, vazio é criada mas não tem valor(o espaço na memória já está reservado)
$nulo = NULL;