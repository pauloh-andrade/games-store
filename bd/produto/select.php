<?php
/******************************************************************
 *  Objetivo: arquivo para buscar produtos no Banco
 *  Data: 11/11/2021
 *  Responsável: Paulo Henrique
 * ****************************************************************/ 
require_once(SRC."/bd/conexaoMysql.php");

function selectProduto(){
    $sql = "select * from tbl_produto order by id_produto desc";
    $conexao = conexaoMysql();
    $select = mysqli_query($conexao,$sql);
    return $select;
}
function selectInstanciaProduto($idProduto){
    $sql= "select * from tbl_produto where id_produto=".$idProduto;
    $conexao= conexaoMysql();
    $select = mysqli_query($conexao,$sql);
    return $select;
}
function selectUltimoProduto(){
    $sql= "select * from tbl_produto order by id_produto desc limit 1";
    $conexao= conexaoMysql();
    $select = mysqli_query($conexao,$sql);
    return $select;
};
?>