<?php
require_once(SRC."/bd/produtoCategoria/select.php");


function compararCategoria($idProduto,$idCategoria){
    if($idProduto != null){
       $produtoCategoria = selectProdutoCategoria($idProduto);
        while($rsProduto=mysqli_fetch_assoc($produtoCategoria)){
            if(strpos($idCategoria, $rsProduto['id_categoria']) !== false){
                return "checked";   
            }
        }    
    } 
    else{
        return "";
    }
}
?>