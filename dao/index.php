<?php

require_once("config.php");

//Exemplo 1 para teste de conexao e retorno
// $sql = new Sql();

// $usuarios = $sql->select("SELECT * FROM tb_usuarios");

// echo json_encode($usuarios);

//Exemplo 2 utilizando a classe Usuario.php

$root = new Usuario();

$root->loadById(3);

echo $root;