<?php
/***********************************************************************
 *  Objetivo: Excluir dados de produtos, no banco de dados
 *  Data: 11/11/2021
 *  Responsável: Paulo Henrique
 * ********************************************************************/
require_once(SRC."/bd/conexaoMysql.php");

function deleteProduto($idProduto){
    $sql = "delete from tbl_produto where id_produto =" . $idProduto;
    $conexao = conexaoMysql();

    if(mysqli_query($conexao,$sql)){
        return true;
    }
    else{
        return false;
    }
}
