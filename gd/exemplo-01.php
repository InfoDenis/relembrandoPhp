<?php

//GD = Graphics Design - Biblioteca - Criando imagem
//Ativar o header content type por ultimo
header("Content-Type: image/jpeg");

$image = imagecreate(256, 256);//Definindo o tamanho da imagem Largura, Altura

$black = imagecolorallocate($image, 0, 0, 0);//Criando a primeira cor da imagem, sempre será a cor de fundo - imagem criada, r,g,b
$red   = imagecolorallocate($image, 255, 0, 0);//Criando a cor vermelha imagem, r,g,b

imagestring($image, 5, 60, 120, "Curso de PHP", $red);//criando um texto na tela imagem - tamanho da fonte, deslocamento esquerdo, deslocamento topo, frase, cor do texto

imagejpeg($image);//png por conta do header que definimos
echo" AAAA";
imagedestroy($image);//é preciso destruir a imagem resource para não ficae pendurada mo php
