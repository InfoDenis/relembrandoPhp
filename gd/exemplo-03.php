<?php

//Carregar fontes truetype - Consultar manual para mais parâmetros
$image = imagecreatefromjpeg("certificado.jpg");//Buscando a imagem

$titleColor = imagecolorallocate($image, 0, 0, 0);
$gray = imagecolorallocate($image, 100, 100, 100);

imagettftext($image, 32, 0, 320 , 250, $titleColor, "fonts" . DIRECTORY_SEPARATOR . "Bevan" . DIRECTORY_SEPARATOR . "Bevan-Regular.ttf", "Certificado");
imagettftext($image, 32, 0, 375 , 350, $titleColor, "fonts" . DIRECTORY_SEPARATOR . "Playball" . DIRECTORY_SEPARATOR . "Playball-Regular.ttf", "Denis Ramos");
imagestring($image, 3, 440 , 370, utf8_decode("Concluído em: ") . date("d/m/Y"), $titleColor);

header("Content-Type: image/jpeg");

imagejpeg($image);

imagedestroy($image);