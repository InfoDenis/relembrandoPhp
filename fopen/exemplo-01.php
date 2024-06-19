<?php
//Criando um arquivo e editando se executado quando já criado ele apagará o conteúdo e colocará um novo
// $file = fopen("log.txt",  "w+");//Cria o arquivo log.txt e abre para edição - A variável $file se torna uma variável resourse porque manipula conteúdo externo ao php

// fwrite($file, date("Y-m-d H:i:s"));//Função para escrever dentro de um arquivo - parâmetro 1 endereço do arquivo - parâmetro 2 o que quer escrever

// fclose($file);//Fecha o arquivo

// echo "Arquivo criado com sucesso!";

//Editando um arquivo existente
$file = fopen("log.txt",  "a+");

fwrite($file, date("Y-m-d H:i:s") . "\r\n");

fclose($file);

echo "Arquivo alterado com sucesso!";