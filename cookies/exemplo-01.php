<?php
//Criando COOKIE

$data = array(
  "empresa" => "Info.Denis"
);

setcookie("TESTE_COOKIE", json_encode($data), time() + 3600);

echo "OK";