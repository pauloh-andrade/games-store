<?php
/************************************************************
    Objetivo: Interagir com o banco para insert de usuarios
    Data: 31/10/2021
    Responsável: Paulo Henrique
*************************************************************/
require_once("../../config/config.php");
require_once(SRC."/bd/conexaoMysql.php");

function insertUsuario($arrayUsuario){
    $sql = "insert into tbl_usuario(
                nome,
                login,
                senha
            )
            values('".$arrayUsuario['nome']."',
                    '".$arrayUsuario['login']."',
                    '".$arrayUsuario['senha']."'
            )";
    
    $conexao = conexaoMysql();
    
    if(mysqli_query($conexao,$sql)){
        return true;
    }
    else{
        return false;
    }
}

?>