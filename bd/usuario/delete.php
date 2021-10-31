<?php
/***********************************************************************************
    Objetivo: Arquivo para delete de usuario
    Data: 31/10/2021
    Responsável: Paulo Henrique
**********************************************************************************/
require_once(SRC."/bd/conexaoMysql.php");

function deleteUsuario($idUsuario){
    $sql = "delete from tbl_usuario where id_usuario =" . $idUsuario;
    
    $conexao = conexaoMysql();
    
    if(mysqli_query($conexao, $sql)){
        return true;
    }
    else{
        return false;
    }
    
}
?>