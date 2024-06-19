<?php

//Apagar um arquivo
$file = fopen("teste.txt", "w+");//Cria um arquivo para teste

fclose($file);//fecha o arquivo que acabou de criar

unlink("teste.txt");//Deleta o arquivo

echo "Arquivo removido com sucesso!";