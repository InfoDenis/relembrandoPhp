<?php

require_once("config.php");

//Exemplo 1 para teste de conexao e retorno
// $sql = new Sql();

// $usuarios = $sql->select("SELECT * FROM tb_usuarios");

// echo json_encode($usuarios);


//Exemplo 2 utilizando a classe Usuario.php para select de um usuário

// $root = new Usuario();

// $root->loadById(3);

// echo $root;


//Exemplo 3 utilizando a classe Usuario.php para trazer uma lista de todos usuários

// $listaUsuarios = Usuario::getList();

// echo json_encode($listaUsuarios);


//Exemplo 4 utilizando a classe Usuario.php para fazer busca por algum caractere/string do login

// $search = Usuario::search('j');

// echo json_encode($search);


//Exemplo 5 utilizando a classe Usuario.php para carregar um usuário usando login e senha
// $usuario = new Usuario();
// $usuario->login("root", "!@#$123");

// echo $usuario;


//Exemplo 6 utilizando a classe Usuario.php para fazer o insert de um novo usuário
$aluno = new Usuario("aluno2", "1234");

$aluno->insert();

echo $aluno;