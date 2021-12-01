<?php
/***********************************************************************************
    Objetivo: Arquivo para minipulação de cadastro dos Contatos
    Data: 31/10/2021
    Responsável: Paulo Henrique
************************************************************************************/
require_once("../../config/config.php");
require_once("../../bd/contato/insert.php");


if($_SERVER["REQUEST_METHOD"] == "POST"){
    //recebendo inputs de usuarios
    $nome = $_POST['txtNome'];
    $email = $_POST['txtEmail'];
    $numero = $_POST['txtNumero'];
    
    
    if($nome == null || $email == null || $numero == null){
        echo("<script>
                alert('" . ERRO_CAIXA_VAZIA . "') 
                window.history.back()
            </script>");
    }
    else{
        $contato = array(
        "nome" => $nome,
        "email" => $email,
        "numero" => $numero
        );
    
        if(insertContato($contato)){
            echo("<script>
                    alert('Aguarde enquanto entramos em contato com você');
                   window.location.href='../../index.php';
                </script>");
        }
        else{
            echo("<script>
                    alert('Falha ao enviar contato');
                    window.history.back();
                </script>");
        }
    }   
}
   
?>