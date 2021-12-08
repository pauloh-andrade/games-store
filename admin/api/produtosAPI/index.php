<?php

    // //importando arquivo do slim
    require_once("vendor/autoload.php");

    //instanciando slim
    $app = new \Slim\App();

    $app->get('/games', function($request, $response, $args){
        return $response    ->withStatus(200)
                            ->withHeader('Content-Type','application/json')
                            ->write('{"message":"Item deletado com sucesso"}');

    }); 
    
    //Carrega todos os endPoints para execução
    $app->run();
?>