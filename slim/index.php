<?php

//slim -> Micro framework para trabalhar com rotas

require_once("vendor/autoload.php");

$app = new \Slim\Slim();

$app->get('/', function() {

    echo "HomePage!";

    echo json_encode(array(
        "data" => date("d-m-Y")
    ));
    
});

$app->get('/hello/:name', function ($name) {
    echo "Hello World, " . $name;
});

$app->run();