<?php

$cep = "01310100";
$link = "https://viacep.com.br/ws/$cep/json/";

$ci = curl_init($link);//inicializando lib curl

curl_setopt($ci, CURLOPT_RETURNTRANSFER, 1);//parametro1 = lib, parametro2 = Constante da lib, parametro3 = quando 1 queremos a resposta de volta, quando 0 o valor retornado é descartado
curl_setopt($ci, CURLOPT_SSL_VERIFYPEER, 0);

$response = curl_exec($ci);

curl_close($ci);

$data = json_decode($response, true);

print_r($data);