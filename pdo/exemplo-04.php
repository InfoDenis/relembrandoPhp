<?php

$conn = new PDO("mysql:dbname=dbphp;host=localhost", "root", "");

$stmt = $conn->prepare("UPDATE tb_usuarios SET desLogin = :login, desSenha = :pass WHERE idUsuario = :ID");

$login = "joão";
$pass  = "QWERTY";
$id    = 2;

$stmt->bindParam(":login", $login);
$stmt->bindParam(":pass", $pass);
$stmt->bindParam(":ID", $id);

$stmt->execute();

echo "Atualizado!";
