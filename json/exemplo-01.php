<?php

//JSON - Java Script Object Notation - Serializa a informação

$pessoas = array(); //Criando array

array_push($pessoas, array(
  'nome'  => 'João',
  'idade' => 20
));//Adicionando itens a esse array

array_push($pessoas, array(
  'nome'  => 'Glauco',
  'idade' => 25
));

print_r(json_encode($pessoas));//Transformando e mostrando array para json

