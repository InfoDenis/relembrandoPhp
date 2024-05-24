<?php

$json = '[{"nome":"Jo\u00e3o","idade":20},{"nome":"Glauco","idade":25}]';

$data = json_decode($json, true);//Transformando e mostrando array para json - se o parâmetro true não estiver setado apresentará um objeto ao inves de um array

echo "<pre>";
print_r($data);