<?php
/********************************************************************************
* Arquivo para editar categorias 
* Paulo Henrique
* 23/10/2021
********************************************************************************/
    require_once("../../config/config.php");
    require_once(SRC . "/bd/categoria/select.php");

    $idCategoria = $_GET['id'];
                 
    $categoria = selectRegistroCategoria($idCategoria); 

    if($rsCategoria = mysqli_fetch_assoc($categoria)){
        session_start();
        $_SESSION['categoria'] = $rsCategoria; 
        header("location:../../categoria.php");
    }
    
    

    
?>