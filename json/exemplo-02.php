<?php

$json = '[{"nome":"Jo\u00e3o","idade":20},{"nome":"Glauco","idade":25}]';

$data = json_decode($json, true);//Se tirar o valor true terá um objeto ao invés de um array

var_dump($data);