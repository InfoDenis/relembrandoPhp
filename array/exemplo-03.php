<?php

$pessoas = array(); //Criando array

array_push($pessoas, array(
  'nome'  => 'João',
  'idade' => 20
));//Adicionando itens a esse array

array_push($pessoas, array(
  'nome'  => 'Glauco',
  'idade' => 25
));

echo "<pre>";
print_r($pessoas);//Mostrando array com novos valores