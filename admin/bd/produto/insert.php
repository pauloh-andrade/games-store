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
function insertProduto($arrayProduto){
  

    //recebendo script de insert no banco
    $sql = "insert into tbl_produto(
        nome,
        preco,
        descricao,
        desconto,
        destaque,
        imagem,
        gif_preview
    )
    values(
        '".$arrayProduto['nome']."',
        '".$arrayProduto['preco']."',
        '".$arrayProduto['descricao']."',
        '".$arrayProduto['desconto']."',
        '".$arrayProduto['destaque']."',
        '".$arrayProduto['imagem']."',
        '".$arrayProduto['gif_preview']."'
    )";
    
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