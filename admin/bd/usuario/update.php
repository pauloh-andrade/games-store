<?php
/************************************************************
    Objetivo: Interagir com o banco para update de usuarios
    Data: 31/10/2021
    Responsável: Paulo Henrique
*************************************************************/
require_once("../../config/config.php");
require_once(SRC."/bd/conexaoMysql.php");

function updateUsuario($arrayUsuario){
    $sql = "update tbl_usuario set
                nome ='".$arrayUsuario['nome']."',
                login ='".$arrayUsuario['login']."',
                senha ='".$arrayUsuario['senha']."'
                
                where id_usuario =".$arrayUsuario['id_usuario'];
            
           
    
    $conexao = conexaoMysql();
    
    if(mysqli_query($conexao,$sql)){
        return true;
    }
    else{
        return false;
    }
}

?>