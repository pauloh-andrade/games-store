<?php
    require_once("config/config.php");
    require_once(SRC."controller/usuarios/listarUsuario.php");
    $nome =(string)null;
    $login =(string)null;
    $idUsuario = (int)null;
    $modo =(string) "Cadastrar";
    session_start();
    if(isset($_SESSION['usuario'])){
        $nome = $_SESSION['usuario']['nome'];
        $login = $_SESSION['usuario']['login'];
        $idUsuario= $_SESSION['usuario']['id_usuario'];
        $modo = "Atualizar";
        unset($_SESSION['usuario']);
    }
?>
<!DOCTYPE html>
<html lang="pt-BR">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="../style/style.css">
        <link rel="stylesheet" type="text/css" href="../style/dashboard.css">
        <title>CMS</title>
    </head>
    <body>
        <?php
            require_once("shapes/header.php");
        ?>
        <main class="display-row">
            <div class="container-main">
                <div class="cadastro-categoria">
                    <h1>Cadastro de Usuários</h1>
                    <div class="hr-title"> <br></div>
                    <form  class="form-deashboard" name="formUsers" action="controller/usuarios/cadastroUsuarios.php?modo=<?=$modo?>&id=<?=$idUsuario?>"  method="POST">
                        <input type="text" class="campo-txt" placeholder="Nome" name="txtNome" maxlength="30" value="<?=$nome?>"/>
                        <input type="text" class="campo-txt" placeholder="Login" name="txtLogin" maxlength="30"value="<?=$login?>"/>
                        <input type="password" class="campo-txt" placeholder="Senha" maxlength="12"name="txtSenha" value=""/>
                        <input type="submit" class="btn-form" value="<?=$modo?>" name="btnCategoria"/>
                    </form>
                </div>
            <div class="listar-categoria">
                <h1>Usuários</h1>
                <div class="hr-title"> <br></div>
                   <table class="tbl-usuario">
                        <tr class="linha-titulo">
                            <td class="coluna-titulo"><p>Nome</p></td>
                            <td class="coluna-titulo"><p>login</p></td>
                            <td class="coluna-titulo"></td>
                        </tr>
                        <?php
                            $dadosUsuarios = listarUsuarios();
                            while($rsUsuario=mysqli_fetch_assoc($dadosUsuarios)){
                        ?>
                        <tr class="linha">
                            <td class="coluna"><p><?=$rsUsuario['nome']?></p></td>
                            <td class="coluna"><p><?=$rsUsuario['login']?></p></td>
                            <td class="coluna">
                                 <a href="controller/usuarios/editarUsuario.php?id=<?=$rsUsuario['id_usuario']?>">
                                    <img src="img/icons/edit.png" class="icons-bd">
                                </a>
                                <a href="controller/usuarios/excluirUsuario.php?id=<?=$rsUsuario['id_usuario']?>">
                                    <img src="img/icons/delete.png" class="icons-bd">
                                </a>
                            </td>
                        </tr>
                        <?php 
                            }
                        ?>
                    </table>
                </div>
            </div>
        </main>
        <?php
            require_once("shapes/footer.php");
        ?>
    </body>
</html>