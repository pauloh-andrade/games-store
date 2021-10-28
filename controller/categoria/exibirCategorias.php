<?php
/*****************************************************************************
* Arquivo para exibir categorias registradas no banco de dados 
* ass: Paulo Henrique
* 23/10/2021
******************************************************************************/

//import do arquivo de selec da Categoria
require_once(SRC . "/bd/categoria/select.php");

//função para exibir categoria
function exibirCategoria(){
    //recebendo dados retornado pelo select do banco
    $dados = selectCategoria();
    
    return $dados;
}
?> 