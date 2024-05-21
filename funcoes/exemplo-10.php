<?php
//Funções anônimas, não tem nome e não retornam valor
//Colocando função anônima dentro do parâmetro
function test($callback) {

  //Processo lento

  $callback();

}

test(function() {
  echo "Terminei";
});