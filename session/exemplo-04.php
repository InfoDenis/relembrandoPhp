<?php

session_id('d1p49a3leht8k5sq2i61gsevh6');// recupera os dados da sessão

require_once("config.php");

session_regenerate_id(); //gera uma sessão sempre que atualizar ou mudar a página

echo session_id();

var_dump($_SESSION);