<?php
/***********************************************************************************
    Objetivo: Arquivo para minipulação de exclusão dos usuarios
    Data: 31/10/2021
    Responsável: Paulo Henrique
**********************************************************************************/
require_once("../../config/config.php");
require_once("../../bd/usuario/delete.php");


if(deleteUsuario($_GET['id'])){
    echo("<script>
        alert('Usuário excluído com  sucesso');
        window.location.href='../../usuarios.php';
    </script>");
}
else{
    echo("<script>
        alert('Erro ao excluir Usuário');
        window.location.href='../../usuarios.php';
    </script>");
}

?>