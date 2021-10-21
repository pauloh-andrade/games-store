<?php
    //Verificando se o request encaminhado é == a POST através da função $_SERVER
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        //recebendo txtCategoria via POST
        $categoria = $_POST['txtCategoria'];
        
    }
    
?>