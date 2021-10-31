<?php
/***********************************************************************************
    Objetivo: Arquivo para delete de usuario
    Data: 31/10/2021
    Responsável: Paulo Henrique
**********************************************************************************/
require_once(SRC."/bd/conexaoMysql.php");

function deleteContato($idContato){
    $sql = "delete from tbl_contato where id_contato =" . $idContato;
    
    $conexao = conexaoMysql();
    
    if(mysqli_query($conexao, $sql)){
        return true;
    }
    else{
        return false;
    }
    
}
?>