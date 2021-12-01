<?php
/***************************************************************
    Objetivo: Buscar todosos usuarios no banco
    Data: 31/10/2021
    Responsável:Paulo Henrique
***************************************************************/
require_once(SRC."/bd/conexaoMysql.php");

function selectUsuario(){
    $sql = "select * from tbl_usuario order by id_usuario desc";
    $conexao= conexaoMysql();
    $select = mysqli_query($conexao,$sql);
    return $select;
}

function selectInstanciaUsuario($idUsuario){
    $sql = "select * from tbl_usuario where id_usuario =".$idUsuario;
    $conexao= conexaoMysql();
    $select = mysqli_query($conexao,$sql);
    return $select;
}

?>