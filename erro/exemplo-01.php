<?php

function trataErros($errno, $errstr, $errfile, $errline) {

  echo json_encode(array(
    "code" => $errno,
    "msg"  => $errstr,
    "line" => $errline,
    "file" => $errfile
  ));

}

set_error_handler("trataErros");

$total = 100 / 0;