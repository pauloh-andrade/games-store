<?php
/***********************************************************************
 *  Objetivo: Realizar update de produtos no banco
 *  Data: 11/11/2021
 *  Responsável: Paulo Henrique
 *********************************************************************/
require_once(SRC."/bd/conexaoMysql.php");

function updateProduto($arrayProduto){
    $sql = "update tbl_produto set
                nome= '".$arrayProduto['nome']."',
                preco= '".$arrayProduto['preco']."',
                descricao= '".$arrayProduto['descricao']."',
                desconto= '".$arrayProduto['desconto']."',
                destaque= '".$arrayProduto['destaque']."',
                imagem='".$arrayProduto['imagem']."',
                gif_preview='".$arrayProduto['gif_preview']."'
                
                where id_produto =".$arrayProduto['id_produto'];
    
                
    //abrindo conexão com o banco
    $conexao = conexaoMysql();
    
    //inserindo
    if(mysqli_query($conexao,$sql)){
        return true;
    }
    else{
        return false;
    }
}


?>