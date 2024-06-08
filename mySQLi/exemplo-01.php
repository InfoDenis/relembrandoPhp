<?php

$conn = new mysqli("localhost", "root", "", "dbphp");

if ($conn->connect_error) {

  echo "Erro: " . $conn->connect_error;
  exit;

}

$stmt = $conn->prepare("INSERT INTO tb_usuarios (desLogin, desSenha) VALUES (?, ?)");

$stmt->bind_param("ss", $login, $senha);//tipo de dado esperado, valor1, valor2
//Não tem problema colocar valores na variável após o "bind_param" porque o comendo está em preparação "prepare"
$login = "user";
$senha = "123456";

$stmt->execute();

$login = "root";
$senha = "!@#$";

$stmt->execute();