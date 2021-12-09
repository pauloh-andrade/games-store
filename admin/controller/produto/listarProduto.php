<?php
/****************************************************************
 *  Objetivo: Manipular dados dos produtos a serem listados
 *  Data: 11/11/2021
 *  Responsável: Paulo Henrique
 * *************************************************************/
// require_once("config/config.php");
require_once(SRC."/bd/produto/select.php");

 //função para receber dados a serem listados
 function listarProdutos(){
     $produtos = selectProduto();
     return $produtos;
 }
 
 //função pora buscar produto por categoria
 function listarProdutosPelaCategoria($categoria){
     $produtos = selectProdutoPersonalizado($categoria);
     return $produtos;
 }
 //função para criar uma array apartir de um select no banco
 function criarArrayProduto($objeto){
     $count =(int) 0;

     while($rsDados = mysqli_fetch_assoc($objeto)){
        $arrayDados[$count] = array(
            "id"         =>$rsDados['id_produto'],
            "nome"       =>$rsDados['nome'],
            "preco"      =>$rsDados['preco'],
            "descricao"  =>$rsDados['descricao'],
            "imagem"     =>$rsDados['imagem'],
            "desconto"   =>$rsDados['desconto'],
            "destaque"   =>$rsDados['destaque'],
            "gif_preview"=>$rsDados['gif_preview']

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