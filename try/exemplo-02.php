<?php

function trataNome($name) {

  if (!$name) {

    throw new Exception("Nenhum nome foi informado. <br>", 1);    

  }

  echo ucfirst($name)."<br>";

}

try {

  trataNome("Denis");
  trataNome("");

} catch (Exception $e) {
  //Capitura erro 
  echo $e->getMessage();

} finally {
  //Bloco opcional para ações independente se deu certo ou errado
  echo "Executou o bloco try! <br>";

}
