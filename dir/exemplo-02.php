<?php

//Ler um diretório
$images = scandir("images");

$data = array();

foreach ($images as $img) {
  //in_array faz uma busca dentro de um array
  if (!in_array($img, array(".", ".."))) {

    $fileName = "images" . DIRECTORY_SEPARATOR . $img;//recebera o nome do arquivo - caminho completo

    $info = pathinfo($fileName);//receberá informações sobre arquivo
    // var_dump($info);

    $info["size"] = filesize($fileName);//Pega o tamanho do arquivo em bytes
    $info["modified"] = date("d/m/Y H:i:s", filemtime($fileName));//filemtime pega a ultima modificação do arquivo
    $info["url"] = "http://localhost/relembrandoPHP/dir/" . str_replace("\\", "/", $fileName);

    array_push($data, $info);

  }

}

echo json_encode($data, JSON_UNESCAPED_SLASHES);
