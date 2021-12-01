<?php
/********************************************************************************
* Arquivo para buscar categorias no banco 
* Paulo Henrique
* 23/10/2021
********************************************************************************/
//Import arquivo de conexão com o banco
require_once(SRC ."/bd/conexaoMysql.php");

//criando função de select no banco
function selectCategoria(){
    //recebendo comando sql de busca
    $sql = "select * from tbl_categoria order by id_categoria desc";
    
    //Arbindo conexão com o banco
    $conexao = conexaoMysql();
    
    //executando script
    $select = mysqli_query($conexao, $sql);
    
    return $select;
}

function selectRegistroCategoria($id){
    $sql = "select * from tbl_categoria where id_categoria = ".$id;
    $conexao = conexaoMysql();
    $select = mysqli_query($conexao, $sql);
    return $select;
}
?>