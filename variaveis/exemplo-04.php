<?php

/* ************* ARRAY SUPER GLOBAL ************* */
$nome = $_GET["a"];
var_dump($nome);
//OBS: TODA INFORMAÇÃO QUE FOR TRAFEGAR POR $_GET OU $_POST SERÁ STRING!!!!

$nome = (INT)$_GET["a"];//Alterando o tipo da variável para int
var_dump($nome);

$ip = $_SERVER["REMOTE_ADDR"]; //$_SERVER tras as variáveis de ambiente
echo $ip;