<?php

//seesion_id('p7o85r7q33cl38c6l9bk5hgue4'); Usado para recuperar o id da sessão usar sempre antes do session_start()

require_once("config.php");

session_regenerate_id(); //função para gerar ids diferentes toda vez que atualizar o navegador ou mudar a página

echo session_id();

print_r($_SESSION);

//Sites seguros geralmente usam https porque entre outras informações importantes ele vai "gritar o id de sessão"