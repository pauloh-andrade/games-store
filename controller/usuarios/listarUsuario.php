<?php
/***************************************************************
    Objetivo: Listar todos os usuarios
    Data: 31/10/2021
    Responsável:Paulo Henrique
***************************************************************/
require_once("config/config.php");
require_once(SRC."/bd/usuario/select.php");

function listarUsuarios(){
    $usuarios =selectUsuario();
    return $usuarios;
}

?>