<?php

$meses = array(
  "Janeiro", "Fevereiro", "Março", "Abril", "Maio", "Junho",
  "Julho","Agosto", "Setembro", "Outubro", "Novembro", "Dezembro"
);

echo "***** Percorrendo e mostrando dados em um vetor ***** <br>";
foreach ($meses as $mes) {
  echo $mes . "<br>";
}

echo "<br> ***** Percorrendo, mostrando dados e a posição de cada dado no vetor ***** <br>";
foreach ($meses as $index => $mes) {
  echo "Index: $index - $mes <br>";
}