<?php

$dir1 = "pasta01";
$dir2 = "pasta02";

if (!is_dir($dir1)) mkdir($dir1);
if (!is_dir($dir2)) mkdir($dir2);

$fileName = "README.txt";

if (!file_exists($dir1 . DIRECTORY_SEPARATOR . $fileName) && !file_exists($dir2 . DIRECTORY_SEPARATOR . $fileName)) {

  $file = fopen($dir1 . DIRECTORY_SEPARATOR . $fileName, "w+");

  fwrite($file, date("Y-m-d H:i:s"));

  fclose($file);

}

if (file_exists($dir1 . DIRECTORY_SEPARATOR . $fileName)) {

  rename($dir1 . DIRECTORY_SEPARATOR . $fileName, $dir2 . DIRECTORY_SEPARATOR . $fileName);

  echo "Arquivo Movido para pasta 2 com sucesso!";

} else {

  rename($dir2 . DIRECTORY_SEPARATOR . $fileName, $dir1 . DIRECTORY_SEPARATOR . $fileName);
  
  echo "Arquivo Movido para pasta 1 com sucesso!";

}
