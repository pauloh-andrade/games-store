<?php
/***********************************************************************
 *  Objetivo: Receber e lidar com os dados a serem excluídos
 *  Data: 11/11/2021
 *  Responsável: Paulo Henrique
 * ********************************************************************/
require_once("../../config/config.php");
require_once(SRC."/bd/produto/delete.php");
    //testando id
    if(deleteProduto($_GET['id'])){
        echo("<script>
            alert('Produto excluído com  sucesso');
            window.location.href='../../produto.php';
        </script>");
    }
    else{
        echo("<script>
            alert('Erro ao excluir Usuário');
            window.location.href='../../produto.php';
        </script>");
    }
?>