<?php

//Funções Anônimas
//o nome callback geralmente é usado para um processo que irá demorar
function test($callback) {

  //Processo lento acontecendo nesta função

  $callback();//chamada de função anônima

}

test(function() {//função anônima

  echo "Terminou";

});
