<?php

$conn = new mysqli("localhost", "root", "", "dbphp");

if ($conn->connect_error) {

  echo "Erro: " . $conn->connect_error;
  exit;

}
//Guardar o resultado da busca SQL
$resultado = $conn->query("SELECT * FROM tb_usuarios ORDER BY desLogin");

//$row = $resultado->fetch_array() - Verifica se tem resultados e atribui a variável $row
//fetch_array() traz todos os dados inclusive os index das colunas
// while ($row = $resultado->fetch_array()) {
//   var_dump($row);
// }

//fetch_array(MYSQLI_ASSOC) ou fetch_assoc() traz somente as colunas e os valores
// while ($row = $resultado->fetch_array(MYSQLI_ASSOC)) {
//   var_dump($row);
// }

// while ($row = $resultado->fetch_assoc()) {
//   var_dump($row);
// }

//Transformando a saída de dados em json
$data = array();
while ($row = $resultado->fetch_assoc()) {
  array_push($data, $row);
}

echo json_encode($data);
