<?php
/****************************************************************************
* Arquivo pra script de delete de categoria
* ass: Paulo Henrique
* 23/10/2021
****************************************************************************/
require_once("conexaoMysql.php");

function deleteCategoria($idCategoria){
    $sql = "delete from tbl_categoria where id_categoria =" . $idCategoria;
    
    $conexao = conexaoMysql();
    
    if(mysqli_query($conexao, $sql)){
        return true;
    }
    else{
        return false;
    }
    
}
?>