<?php

//Defense in deph - Defesa em camadas
//Criptografia em PHP

//Função Mcrypt depreciada a partir fo PHP 7.2
// $data = [
//   "nome" => "Denis"
// ];//Informação a ser encriptada

// define("SECRET", pack('a16', 'senha'));//Definindo uma constante usando a função pack para converter uma string em 16bits se precisar

// //função mcrypt - ver documentação para as constantes pré-definodas
// $mcrypt = mcrypt_encrypt(
//   MCRYPT_RIJNDAEL_128,
//   SECRET,
//   json_encode($data),
//   MCRYPT_MODE_ECB
// );

// $final = base64_encode($mcrypt));

// var_dump($final);

// $string = mcrypt_decrypt(
//   MCRYPT_RIJNDAEL_128,
//   SECRET,
//   base64_decode($final),
//   MCRYPT_MODE_ECB
// );

// var_dump(json_decode($string, true));

//OPENSSL - assumiu o lugar do Mcrypt
define('SECRET_IV', pack('a16', 'senha'));
define('SECRET', pack('a16', 'senha'));

$data = [
  "name" => "Denis"
];

$openssl = openssl_encrypt(
  json_encode($data),
  'AES-128-CBC',
  SECRET,
  0,
  SECRET_IV
);

echo $openssl;

$string = openssl_decrypt($openssl, 'AES-128-CBC', SECRET, 0, SECRET_IV);
var_dump(json_decode($string, true));