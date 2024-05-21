<?php

define("BANCO_DE_DADOS", [
  '127.0.0.1',
  'root',
  'password',
  'test'
]); // Se adicionar o valor tru como ultimo parâmetro a chamada será case insensitive, por padrão e boas práticas deve ser case sensitive

print_r(BANCO_DE_DADOS);