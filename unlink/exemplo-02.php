<?php

//Apagar todos os arquivos de uma pasta - pode ser usado para diretórios - Este só vai excluir os que tiverem mesma permissão do apache e/ou servidor
if (!is_dir("images")) mkdir("images");

foreach (scandir("images") as $item) {

  if (!in_array($item, array(".", ".."))) {

    unlink("images/" . $item);

  }

}

echo "Arquivos apagados com sucesso!";