<?php
/***************************************************************
    Objetivo: Buscar todosos usuarios no banco
    Data: 31/10/2021
    Responsável:Paulo Henrique
***************************************************************/
require_once(SRC."/bd/conexaoMysql.php");

function selectContato(){
    $sql = "select * from tbl_contato order by id_contato desc";
    $conexao= conexaoMysql();
    $select = mysqli_query($conexao,$sql);
    return $select;
}
?>