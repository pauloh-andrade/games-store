<?php

//ativando e validando sessão
function sessao(){
    if(session_status() != PHP_SESSION_ACTIVE){session_start();}

    if(!isset($_SESSION['statusLogin']) || !$_SESSION['statusLogin']){header('location: index.php');}
}
?>