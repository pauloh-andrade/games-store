<?php
/***************************************************************
    Objetivo: Listar todos os contatos
    Data: 31/10/2021
    Responsável:Paulo Henrique
***************************************************************/
require_once("config/config.php");
require_once(SRC."/bd/contato/select.php");

function listarContato(){
    $contatos =selectContato();
    return $contatos;
}

?>