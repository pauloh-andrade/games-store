<?php
/***********************************************************************
 *  Objetivo: Receber e manipular dados que serão editados
 *  Data: 11/11/2021
 *  Responsável: Paulo Henrique
 * ********************************************************************/
require_once("../../config/config.php");
require_once(SRC."/bd/produto/select.php");

//recebendo id do produto a ser editado
$idProduto = $_GET['id'];
//recebendo dados do produto a ser editado
$dadosProduto = selectInstanciaProduto($idProduto);
//Guardando dados do produto em uma variavel de sessão
if($rsProduto = mysqli_fetch_assoc($dadosProduto)){
    session_start();
    $_SESSION['produto'] = $rsProduto;
    header('location:../../produto.php');
   
}
?>