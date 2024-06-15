<?php
//PDO em SQLServer
$conn = new PDO("sqlsrv:Database=dbphp;server=localhost\SQLExpress;ConnectionPooling=0", "sa", "root"); //Objeto de conexão
//ConnectionPooling=0 - quando 1 deixa conexão aberta, serve para aplicações multithreads onde quando um processamento é muito demorado pode-se fazer outro processamento com acesso ao banco em paralelo 

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