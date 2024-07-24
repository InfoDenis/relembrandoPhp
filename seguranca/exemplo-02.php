<?php

//Simulação SQL Injection
//Exemplo URL com Injection - http://localhost/relembrandoPhp/seguranca/exemplo-02.php?id=4 or 1=1 --

$id = (isset($_GET["id"])) ? $_GET["id"] : 3;

//Verificações simples podem evitar sql injection, mas a melhor maneira de se evitar é usando as boas práticas, se vai comparar use aspas, fazer uso do PDO sempre que possível
if (!is_numeric($id)) {

  echo "Te peguei!";

}

$conn = mysqli_connect("localhost", "root", "", "dbphp");

$query = "SELECT * FROM tb_usuarios WHERE idUsuario = $id";

$exec = mysqli_query($conn, $query);

while ($resultado = mysqli_fetch_object($exec)) {

  echo $resultado->desLogin . "<br>";

}