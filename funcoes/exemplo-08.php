<?php

//int ...$valores pega somente a parte inteira dos parâmetros numéricos podemos fazer com float também
//:string retorno da função será uma string
function soma(int ...$valores):string { 

  return array_sum($valores);//soma todos os valores de um array

}

echo soma(2, 2);
echo "<br>";
echo soma(25, 33);
echo "<br>";
echo soma(1.5, 3.2);
echo "<br>";