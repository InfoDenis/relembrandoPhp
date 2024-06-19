<?php

$fileName = "html5.png";

//file_get_contents - Lê todo o conteúdo de um arquivo
//base64_encode - converte binário para base64
$base64 = base64_encode(file_get_contents($fileName));//pega um arquivo e transforma em base 64

$fileInfo = new finfo(FILEINFO_MIME_TYPE);//classe interna do php pra pegar informações de um arquivo - FILEINFO_MIME_TYPE pede o tipo MINE do arquivo

$mineType = $fileInfo->file($fileName);//Método file pasando o caminho do arquivo

$base64encode = "data:" . $mineType . ";base64," . $base64;//Visualizar o conteúdo base64

?>

<img src="<?= $base64encode ?>">
