<?php

//vai pegar todos os parâmetros, parecido com a "func_get_args()"
function soma(int ...$valores) {

  return array_sum($valores);//Soma todos os valores de um array

}

echo soma(2, 2);
echo "<br>";
echo soma(25, 33);
echo "<br>";
echo soma(1.5, 3.2);//Ignorou a parte fracionária por que foi adicionado "int" como argumento, logo, os parâmetros de entrada foram convertidos para integer
echo "<br>";