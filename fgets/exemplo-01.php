<?php

//Lendo arquivos
$fileName = "usuarios.csv";

if (file_exists($fileName)) {

  $file = fopen($fileName, "r");//Abre o arquivo no modo leitura "r"

  $headers = explode(",", str_replace("\r\n", "", fgets($file)));
  //var_dump($headers);

  $data = array();

  while ($row = fgets($file)) {

    // var_dump($row);
    $rowData = explode(",", $row);

    $linha = array();

    for ($i = 0; $i < count($headers); $i++) {

      $linha[$headers[$i]] = str_replace("\r\n", "", $rowData[$i]);

    }

    array_push($data, $linha);

  }

  fclose($file);
 
  echo json_encode($data);
}