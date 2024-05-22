<?php

//FOR pode ser usado como contador
echo "***** Contando de 0 até 10 ***** <br>";
for ($i = 0; $i <= 10; $i++) { 
  echo $i . "<br>";
}
echo "<br>";
echo "***** Contando de 0 até 1000 de 5 em 5 ***** <br>";
for ($i = 0; $i <= 1000; $i += 5) { 
  echo $i . "<br>";
}

echo "<br>";
echo "***** Contando de 0 até 1000 de 5 em 5 e pulando de 200 para 800 e parando o laço em 900 ***** <br>";
for ($i = 0; $i <= 1000; $i += 5) {

  if ($i > 200 && $i < 800) continue; //Continue ignora o valor atual por conta da condição e continua o laço;

  if ($i === 900) break; //Para o laço quando chegar a 900;
  echo $i . "<br>";
}