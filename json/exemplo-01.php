<?php

//Serialização de arrays

$pessoas = array();

array_push($pessoas, array(
  'nome' => 'João',
  'idade' => 20
));

array_push($pessoas, array(
  'nome' => 'Glauco',
  'idade' => 25
));

echo json_encode($pessoas);