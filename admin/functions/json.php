<?php
//função para criar json
function criarJson($array){
    //especificando no cabeçalho do PHP que será gerado um json
    header("content-type:application/json");

    $json = json_encode($array);

    if(isset($json)){
        return $json;
    }
    else{
        return false;
    }
 }
?>