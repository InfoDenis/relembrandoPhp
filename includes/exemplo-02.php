<?php

//include "exemplo-01.php"; //Tenta funcionar mesmo que o arquivo esteja com problema.
//require "exemplo-01.php"; //Obriga que o código exista e esteja correto para funcionar.
require_once "exemplo-01.php";//Além da função normal do require ele só vai chamar o arquivo uma vez

$resultado = somar(10, 20);

echo $resultado;