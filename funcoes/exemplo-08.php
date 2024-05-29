<?php

// ":string" converte o retorno para string ou qualquer tipo que quiser ex: :float, :int
function soma(int ...$valores):string {

  return array_sum($valores);//Soma todos os valores de um array

}

echo var_dump(soma(2, 2));
echo "<br>";
echo var_dump(soma(25, 33));
echo "<br>";
echo var_dump(soma(1.5, 3.2));
echo "<br>";