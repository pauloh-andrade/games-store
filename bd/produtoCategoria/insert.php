<?php
/************************************************************************
 *  Obejtivo: Registrar dados de produto no banco
 *  Data: 11/11/2021
 *  Responsável: Paulo Henrique
 * *********************************************************************/ 
//importando arquivos necessarios
require_once("../../config/config.php");
require_once(SRC."bd/conexaoMysql.php");

//função para cadastrar produtos
function insertProdutoCategoria($idProdutoCadastrado, $arrayCategorias){
    foreach($arrayCategorias as $array){
        //recebendo script de insert no banco
        $sql = "insert into tbl_produto_categoria(
            id_categoria,
            id_produto
        )
        values(
            '".$array."',
            '".$idProdutoCadastrado."'
        )";
        //abrindo conexão com o banco
        $conexao = conexaoMysql();
    
        //inserindo
        if(!mysqli_query($conexao,$sql)){
            echo($sql);
            die;
           return false; 
        }
    }
    return true;
}

?>