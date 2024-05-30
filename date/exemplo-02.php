<?php

$ts = strtotime("1987-10-25");//Função string para tempo, retorna o timestamp da data(formato string); 
echo $ts;

echo "<br>";

echo date("l, d/m/Y", $ts);//Consultar documentação para os parâmetros adicionais da função date;

echo "<br>";

$ts2 = strtotime("now");
echo $ts2;

echo "<br>";

echo date("l, d/m/Y", $ts2);

echo "<br>";

$ts3 = strtotime("+1 day");//Consultar documentação para os parâmetros adicionais da função strtotime;
//Gera timestamp atraves de expressões
echo $ts3;

echo "<br>";

echo date("l, d/m/Y", $ts3);