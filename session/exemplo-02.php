<?php

require_once("config.php");

echo $_SESSION["nome"];

//session_unset();//Apaga todas as variáveis de sessão mas mantém o usuário

session_unset($_SESSION["nome"]); //Apaga a variável nome da session

if (isset($_SESSION["nome"])){
  echo $_SESSION["nome"]; 
} else{
  echo "Sessão mostrada e apagada.";
}

//session_destroy();//Limpa as variáveis de sessão e destroi o usuário