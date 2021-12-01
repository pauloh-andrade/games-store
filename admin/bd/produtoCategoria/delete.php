<?php
/***********************************************************************
 *  Objetivo: Excluir dados de produtosCategorias, no banco de dados
 *  Data: 15/11/2021
 *  Responsável: Paulo Henrique
 * ********************************************************************/
require_once(SRC."/bd/conexaoMysql.php");

function deleteProdutoCategoria($idProduto){
    $sql = "delete from tbl_produto_categoria where id_produto =" . $idProduto;
    $conexao = conexaoMysql();

    if(mysqli_query($conexao,$sql)){
        return true;
    }
    else{
        return false;
    }
}
