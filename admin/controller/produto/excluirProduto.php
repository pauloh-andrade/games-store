<?php
/***********************************************************************
 *  Objetivo: Receber e lidar com os dados a serem excluídos
 *  Data: 11/11/2021
 *  Responsável: Paulo Henrique
 * ********************************************************************/
require_once("../../config/config.php");
require_once(SRC."/bd/produto/delete.php");
require_once(SRC."/bd/produtoCategoria/delete.php");
    
    $foto =(string) $_GET['foto'];
    $preview =(string) $_GET['preview'];

    if(deleteProdutoCategoria($_GET['id'])){
        if(deleteProduto($_GET['id'])){
   
        unlink(SRC.DIRETORIO_FILE.$foto);
        unlink(SRC.DIRETORIO_FILE.$preview);

        echo("<script>
                alert('".SUCESSO_DELETAR."');
                window.location.href='../../produto.php';
            </script>");
        }
        else{
            echo("<script>
                alert('".FALHA_DELETAR."');
                window.location.href='../../produto.php';
            </script>");
        }  
    }
    else{
        echo("<script>
                alert('".FALHA_DELETAR."');
                window.location.href='../../produto.php';
            </script>");
    }
    
?>