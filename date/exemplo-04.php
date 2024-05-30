<?php

//Classe DateTime
$dt = new DateTime();

echo $dt->format("d/m/Y H:i:s");

echo "<br>";

$dt2 = new DateTime();
$periodo = new DateInterval("P15D");

$dt2->add($periodo);

echo $dt2->format("d/m/Y H:i:s");

echo "<br>";