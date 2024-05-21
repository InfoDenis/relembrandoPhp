<?php

//$ts = strtotime("2001-09-11"); //Mostra o timestamp da data "2001-09-11"
$ts = strtotime("today"); //Aceita expressões

echo date("l, d/m/Y", $ts);
echo "<br>";
