<?php
/************************************************************************************
 * Objetivo:Criar função para estabelecer conexão com o Banco
 * Data: 21/10/2021
 * Responsável: Paulo Henrique
 * *********************************************************************************/
// require_once('/config/config.php');

 //criando função que abre conexão com o banco
 function conexaoMysql(){
    //recebendo variaveis para conexao
    $server = BD_SERVER;
    $user = BD_USER;
    $password = BD_PASSWORD;
    $database = BD_DATABASE;

    //Abrindo conexão com mysli_connect e testando se ela foi bem sucedida
    if($conexao = mysqli_connect($server, $user, $password, $database)){
        return $conexao;
    }
    else{
        return false;
    }
 }
?>