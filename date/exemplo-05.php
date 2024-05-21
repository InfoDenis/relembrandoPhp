<?php

//Classe Datetime() - função nativa php

$dt = new DateTime();//A partir do momento que a classe é chamada a variável vira um objeto

echo $dt->format("d/m/Y H:i:s");
echo "<br>";

$periodo = new DateInterval("P15D");

$dt->add($periodo);//Para chamar alguma função dentro do objeto usamos "->" mais o nome da função---
//Consultar Manual para saber quais funções estão contidas na classe chamada

echo $dt->format("d/m/Y H:i:s");