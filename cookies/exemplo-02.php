<?php

//Resgatando COOKIE

if (isset($_COOKIE["TESTE_COOKIE"])) {

  //var_dump(json_decode($_COOKIE["TESTE_COOKIE"], true)); //resgatando e transformando em json
  $obj = json_decode($_COOKIE["TESTE_COOKIE"]);//resgatando e transformando em objeto
  echo $obj->empresa;//acessando objeto

}