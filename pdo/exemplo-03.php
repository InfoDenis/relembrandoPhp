<?php

$conn = new PDO("mysql:dbname=dbphp;host=localhost", "root", "");

$stmt = $conn->prepare("INSERT INTO tb_usuarios (desLogin, desSenha) VALUES (:login, :pass)");

$login = "jose";
$pass  = "1234567890";

$stmt->bindParam(":login", $login);
$stmt->bindParam(":pass", $pass);

$stmt->execute();

echo "Inserido!";