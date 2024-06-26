<?php

$link = "https://www.google.com.ua/images/branding/googlelogo/2x/googlelogo_color_272x92dp.png";

$content = file_get_contents($link);//pode também receber endereço local

$parse = parse_url($link);

$baseName = basename($parse["path"]);

$file = fopen($baseName, "w+");//pode-se usar qualquer nome não necessáriamente usar o baseName

fwrite($file, $content);

fclose($file);

?>

<img src="<?= $baseName ?>">