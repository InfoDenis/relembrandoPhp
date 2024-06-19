<?php

//Varificar se um diretório já existe
$name = "images";

if (!is_dir($name)) {

  mkdir($name);//cria um diretório

  echo "Diretório $name criado com sucesso!";

} else {

  rmdir($name);//exclui um diretório

  echo "O diretório $name existia, foi excluído";

}