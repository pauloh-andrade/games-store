<?php
/***************************************************************************************
 *  Objetivo: Autenticar login no CMS
 *  DATA: 01/12/2021
 *  Responsável: Paulo Henrique
 * ***********************************************************************************/ 
    //import do arquivo de configurações
    require("config/config.php");
    //import do arquivo de conexão
    require("bd/conexaoMysql.php");

    //declarando variáveis
    $login = (string) null;
    $senha = (string) null;

    //recebendado dados via POST
    $login = $_POST['txtLogin'];
    $senha = $_POST['txtSenha'];

    //testando se as variáveis foram iniciadas
    if($login != "" && $senha != ""){
        $sql = "select * from tbl_usuario where login = '".$login."' and senha = '".$senha."'";

        $conexao = conexaoMysql();

        $select = mysqli_query($conexao, $sql);
        //verificando se o mysqli retornou algo
        if($rsUsuario = mysqli_fetch_assoc($select)){
            session_start();
            //recebendo nome do usuario
            $_SESSION['nomeUsuario'] = $rsUsuario['nome'];
            //status da sessão
            $_SESSION['statusLogin'] = true;
            header('location: dashboard.php');
        }
        else{
            echo("<script> alert('".ERRO_LOGIN."')
                        window.history.back()
                </script>");
        }
    }
    else{
        echo("<script>
                    alert('" . ERRO_CAIXA_VAZIA . "') 
                    window.history.back()
                </script>");
    }

?>