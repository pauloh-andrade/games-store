<?php
/****************************************************************
* Arquivo para inserir categoria no banco de dados
* ass: Paulo Henrique
* 23/10/2021
******************************************************************/
//importando arquivo de conexão com o banco
require_once("conexaoMysql.php");

//functin para inserir categoria no banco de dados
function insertCategoria($categoria){
    $sql = "insert into tbl_categoria(
        categoria
    )
    values('".$categoria."')";
    
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