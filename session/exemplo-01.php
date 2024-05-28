<?php

//Variáveis de Sessão se assemelha a super globais
//Por padrão o php não inicia a session automático - para iniciar automático é necessário configurar no servidor
//Toda página que trabalhar com sessão precisará iniciar a sessão

//session_start();//Iniciando a sessão
require_once("config.php");//Iniciando sessão com arquivo externo

$_SESSION["nome"] = "Hcode";//Definindo uma variável de sessão

