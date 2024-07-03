<?php

//GD = Graphics Design - Biblioteca - Criando imagem a partir de outra imagem

$image = imagecreatefromjpeg("certificado.jpg");//Buscando a imagem

$titleColor = imagecolorallocate($image, 0, 0, 0);
$gray = imagecolorallocate($image, 100, 100, 100);

imagestring($image, 5, 450 , 150, "Certificado", $titleColor);
imagestring($image, 5, 440 , 350, "Denis Ramos", $titleColor);
imagestring($image, 3, 440 , 370, utf8_decode("Concluído em: ") . date("d/m/Y"), $titleColor);

header("Content-Type: image/jpeg");

imagejpeg($image, "certificado-" . date("Y-m-d") . ".jpg", 50);//parâmetro1 - imagem; parâmetro2 - nome; parâmetro3 - escala de resolução; consulta manual para mais parâmetros

imagedestroy($image);
