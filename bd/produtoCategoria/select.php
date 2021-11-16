<?php
/******************************************************************
 *  Objetivo: arquivo para buscar produtoCategoria no Banco
 *  Data: 15/11/2021
 *  Responsável: Paulo Henrique
 * ****************************************************************/ 
require_once(SRC."/bd/conexaoMysql.php");

function selectProdutoCategoria($idProduto){
    
    $sql= "select * from tbl_produto_categoria where id_produto=".$idProduto;
    $conexao= conexaoMysql();
    $select = mysqli_query($conexao,$sql);
    return $select;
}

?>