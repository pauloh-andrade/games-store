<?php
/****************************************************************
 *  Objetivo: Manipular dados dos produtos a serem listados
 *  Data: 11/11/2021
 *  Responsável: Paulo Henrique
 * *************************************************************/
require_once("config/config.php");
require_once(SRC."/bd/produto/select.php");

 //função para receber dados a serem listados
 function listarProdutos(){
     $produtos = selectProduto();
     return $produtos;
 }

?>