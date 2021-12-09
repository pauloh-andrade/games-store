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


//função para criar uma array apartir de um select no banco
function criarArrayCategoria($objeto){
    $count =(int) 0;

    while($rsDados = mysqli_fetch_assoc($objeto)){
       $arrayDados[$count] = array(
           "id"         =>$rsDados['id_categoria'],
           "nome"       =>$rsDados['nome']
       );
       $count++;
    }
    if(isset($arrayDados)){
        return $arrayDados;
    }
    else{
        return false;
    }
}

?> 