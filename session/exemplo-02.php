<?php

require_once("config.php");

session_unset($_SESSION["nome"]);//Limpa variáveis de sessão
session_destroy();//Limpa usuário e destroi a sessão

echo $_SESSION["nome"];