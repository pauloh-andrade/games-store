<?php
/********************************************************************************
* Arquivo para update de categorias 
* Paulo Henrique
* 23/10/2021
********************************************************************************/
require_once("conexaoMysql.php");

function updateCategoria($id,$categoria){
    $sql = "update tbl_categoria set categoria = '".$categoria."' where id_categoria =". $id;
    
    //chamando conexão com o banco
    $conexao = conexaoMysql();
    
    //enviando script para o banco de dados e retornando true ou false //para validação
    if(mysqli_query($conexao,$sql)){
        return true;
    }
    else{
        return false;
    }
}

?>