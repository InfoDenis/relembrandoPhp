<?php

$conn = new PDO("mysql:dbname=dbphp;host=localhost", "root", "");

$stmt = $conn->prepare("DELETE FROM tb_usuarios WHERE idUsuario = :ID");

$id    = 2;

$stmt->bindParam(":ID", $id);

$stmt->execute();

echo "Excluído!";
