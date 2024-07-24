<?php

//Entendendo permissões de pasta
/*
0 - Sem permissão
1 - execução
2 - gravação
3 - executa e grava
4 - leitura
5 - leitura e execução
6 - leitura e gravação
7 - permissão total - leitura, execução e gravação
*/

//Conjunto de permissões do UNIX
/*
1ª coluna é o dono - quem criou
2ª coluna é o grupo - grupos de usuários, quais grupos tem quais permissões
3ª coluna é os outros - convidados, usuários, visitantes
*/
$pasta = "arquivos";
$permissao = "0775";

if (!is_dir($pasta)) mkdir($pasta, $permissao);

echo "Diretório criado com sucesso!";