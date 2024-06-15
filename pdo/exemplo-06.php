<?php
//Transação
$conn = new PDO("mysql:dbname=dbphp;host=localhost", "root", "");

$conn->beginTransaction();

$stmt = $conn->prepare("DELETE FROM tb_usuarios WHERE idUsuario = ?");

$id    = 1;

$stmt->execute(array($id));

//$conn->rollback(); //Restaurar o db caso alguma query não de certo ***Fazer verificação para usa-lo
$conn->commit(); //Dar ok nas querys feitas ***Fazer verificação para usa-lo

echo "Excluído!";
