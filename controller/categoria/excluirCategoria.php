<?php
/****************************************************************************
* Arquivo pra deletar categoria
* ass: Paulo Henrique
* 23/10/2021
****************************************************************************/
require_once("../../config/config.php");
require_once(SRC . "/bd/categoria/delete.php");

if(deleteCategoria($_GET['id'])){
     echo("<script>
                alert('Categoria Excluída com sucesso');
                window.location.href = '../../categoria.php';
            </script>");
}
else{
    echo("<script>
                alert('Não foi possível excuir');
                window.location.href = '../../categoria.php';
            </script>");
}
?>