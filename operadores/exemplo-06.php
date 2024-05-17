<?php

/* OPERADOR DE COMPARAÇÃO NULL COALESCING - SERVE PARA TRATAR VALORES NULOS*/
$a = NULL;

$b = NULL;

$c = 10;

echo $a ?? $b ?? $c;