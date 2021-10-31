<?php
/***********************************************************************************
    Objetivo: Arquivo para minipulação de exclusão dos usuarios
    Data: 31/10/2021
    Responsável: Paulo Henrique
**********************************************************************************/
require_once("../../config/config.php");
require_once("../../bd/contato/delete.php");


if(deleteContato($_GET['id'])){
    echo("<script>
        alert('Contato excluído com  sucesso');
        window.location.href='../../contato.php';
    </script>");
}
else{
    echo("<script>
        alert('Erro ao excluir contato');
      
    </script>");
}

?>