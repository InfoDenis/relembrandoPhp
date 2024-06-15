<?php
//PDO em Maria DB via Xampp
$conn = new PDO("mysql:dbname=dbphp;host=localhost", "root", ""); //Objeto de conexão

$stmt = $conn->prepare("SELECT * FROM tb_usuarios ORDER BY desLogin"); //Método para preparar query

$stmt->execute(); //Execução da Query

$results = $stmt->fetchAll(PDO::FETCH_ASSOC); //Recebendo resultados da query

//Tratando/Exibindo resultados da query
foreach ($results as $row) {
  
    foreach ($row as $key => $value) {
      echo "<strong> $key: </strong> $value <br>";
    }

  echo "========================================<br>";

}

// var_dump($resultado);