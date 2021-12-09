<?php
    //importando arquivo do slim
    require_once("vendor/autoload.php");

    //instanciando slim
    $app = new \Slim\App();

    //end-point de categorias
    $app->get('/categorias', function($request, $response, $args){
        //import do arquivo de busca no banco
        require_once("../controller/categoria/exibirCategorias.php");

        //import do arquivo para conversão em json
        require_once("../functions/json.php");

        //transformando em json
         if($listaDados = exibirCategoria()){
            if($arrayDados = criarArrayCategoria($listaDados)){
                $jsonProduto = criarJson($arrayDados);
            }
        }

        //validando e enviando conteúdo
        if($arrayDados){
            return $response    ->withStatus(200)
                                ->withHeader('Content-Type','application/json')
                                ->write($jsonProduto);
        }
        else{
            return $response    ->withStatus(204)
                                ->withHeader('Content-Type','application/json')
                                ->write('{"message":"Dados não encontrados no banco"}');
        }
    }); 
    //Carrega todos os endPoints para execução
    $app->run();
?>