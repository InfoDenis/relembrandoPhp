<?php

//doWhile executara pelo menos uma vez o código

$total = 100;
$desconto = 0.9;

do {

  $total *= $desconto;

} while ($total > 100);

echo $total;