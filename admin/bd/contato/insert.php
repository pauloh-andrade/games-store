<?php
/************************************************************
    Objetivo: Interagir com o banco para insert de contato
    Data: 31/10/2021
    Responsável: Paulo Henrique
*************************************************************/
require_once("../../config/config.php");
require_once(SRC."/bd/conexaoMysql.php");

function insertContato($arrayContato){
    $sql = "insert into tbl_contato(
                nome,
                email,
                numero
            )
            values('".$arrayContato['nome']."',
                    '".$arrayContato['email']."',
                    '".$arrayContato['numero']."'
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