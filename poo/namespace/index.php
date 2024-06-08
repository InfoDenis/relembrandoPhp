<?php

require_once("config.php");

use Cliente\Cadastro;//O que eu quero usar

$cadastro = new Cadastro();

$cadastro->setName("Denis Ramos");
$cadastro->setEmail("teste@teste.com");
$cadastro->setSenha("123456");

$cadastro->registrarVenda();

// echo $cadastro;