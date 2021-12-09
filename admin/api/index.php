<?php
    //permissões e configurações 
    header('Access-Control-Allow-Origin: *');
    header('Access-Control-Allow-Methods: GET');
    header('Access-Control-Allow-Header: Content-Type');
    header('Content-Type: application/json');

    require_once("../config/config.php");
    
    $url = (string) null;
    $url = explode("/", $_GET['url']);

    switch($url[0]){
        case 'games':
            require_once("produtosAPI/index.php");
            break;
        case 'categorias':
            require_once("categoriasAPI/index.php");
            break;
    }
?>