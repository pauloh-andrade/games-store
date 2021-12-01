<?php
/****************************************************************************
* Arquivo para listar dados a serem editados
* ass: Paulo Henrique
* 23/10/2021
****************************************************************************/
require_once("../../config/config.php");
require_once(SRC."/bd/usuario/select.php");

$idUsuario = $_GET['id'];
$dadosUsuario = selectInstanciaUsuario($idUsuario);
if($rsUsuario = mysqli_fetch_assoc($dadosUsuario)){ 
    session_start();
    $_SESSION['usuario'] = $rsUsuario;
    header('location:../../usuarios.php');
}

?>