<?php
/******************************************************************
 *  Objetivo: arquivo para buscar produtos no Banco
 *  Data: 11/11/2021
 *  Responsável: Paulo Henrique
 * ****************************************************************/ 
require_once(SRC."/bd/conexaoMysql.php");

function selectProduto(){
    $sql = "select * from tbl_produto order by id_produto desc";
    $conexao = conexaoMysql();
    $select = mysqli_query($conexao,$sql);
    return $select;
}
function selectProdutoPersonalizado($like){
    $where =(string) null;
    if(is_numeric($like)){
        $where ="tbl_categoria.id_categoria like '".$like."'";
    }
    else{
        $where = "tbl_categoria.nome like '".$like."' or tbl_produto.nome like '%".$like."%' or tbl_produto.descricao like '%".$like."%'";
    }
    $sql = "select tbl_produto.*,tbl_categoria.nome as categoria 
    from tbl_produto inner join tbl_produto_categoria on tbl_produto.id_produto = tbl_produto_categoria.id_produto
    inner join tbl_categoria on tbl_categoria.id_categoria = tbl_produto_categoria.id_categoria
    where ".$where;
    
    $conexao = conexaoMysql();
    if($select = mysqli_query($conexao,$sql)){
        return $select;
    }
    else{
        return false;
    }
}

function selectInstanciaProduto($idProduto){
    $sql= "select * from tbl_produto where id_produto=".$idProduto;
    $conexao= conexaoMysql();
    $select = mysqli_query($conexao,$sql);
    return $select;
}
function selectUltimoProduto(){
    $sql= "select * from tbl_produto order by id_produto desc limit 1";
    $conexao= conexaoMysql();
    $select = mysqli_query($conexao,$sql);
    return $select;
};
?>