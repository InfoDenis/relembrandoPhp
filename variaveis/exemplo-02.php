<?php

$anoNascimento =  1990; //CamelCase

$nome1 = "João ";

//Comentário simples uma linha

/* Comentário multilinhas */

echo $nome1;
echo "<br>";
unset($nome1); //Apagando uma variável
unset($nome1, $anoNascimento); //Apagando várias variáveis

isset($nome1); //Verifica se a variável existe

$sobreNome = "Souza";
$nomeCompleto = $nome1 . $sobreNome;//Concatenação 
echo $nomeCompleto;