<?php
    require_once("config/config.php");
    require_once(SRC."/controller/usuarios/listarUsuario.php");
    $nome =(string)null;
    $login =(string)null;
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
         <link rel="stylesheet" type="text/css" href="style/style.css">
        <link rel="stylesheet" type="text/css" href="style/deashboard.css">
        <title>CMS</title>
    </head>
    <body>
        <?php
            require_once("shapes/header.php");
        ?>
        <main class="display-row">
            <div id="container-main">
                <h1>Cadastro de Usuários</h1>
                <div class="hr-title"> <br></div>
                <form  class="form-deashboard" name="formUsers" action="controller/usuarios/cadastroUsuarios.php?modo=<?=$modo?>&id=<?=$idUsuario?>"  method="post">
                    <input type="text" class="campo-txt" placeholder="Nome" name="txtNome" value="<?=$nome?>"/>
                    <input type="text" class="campo-txt" placeholder="Login" name="txtLogin" value="<?=$login?>"/>
                    <input type="password" class="campo-txt" placeholder="Senha" name="txtSenha" value=""/>
                    <input type="submit" class="btn-form" value="<?=$modo?>" name="btnCategoria"/>
                </form>
            </div>
            <div id="container-lista">
                <h1>Usuários</h1>
                <div class="hr-title"> <br></div>
                <div id="scroll">
                    <div class="itens-user">
                        <div><p>Nome</p></div>
                        <div><p>Login</p></div>
                        <div class="manipulacao">
                            
                        </div>
                    </div>
                    <?php
                        $dadosUsuarios = listarUsuarios();
                        while($rsUsuario=mysqli_fetch_assoc($dadosUsuarios)){
                    ?>
                    <div class="itens-user">
                         <div><p><?=$rsUsuario['nome']?></p></div>
                        <div><p><?=$rsUsuario['login']?></div>
                        <div class="manipulacao">
                            <a href="controller/usuarios/editarUsuario.php?id=<?=$rsUsuario['id_usuario']?>">
                                <img src="img/icons/edit.png" class="icons-bd">
                            </a>
                            <a href="controller/usuarios/excluirUsuario.php?id=<?=$rsUsuario['id_usuario']?>">
                                <img src="img/icons/delete.png" class="icons-bd">
                            </a>
                        </div>
                    </div>
                    <?php
                        }
                    ?>
                </div>
            </div>
        </main>
        <?php
            require_once("shapes/footer.php");
        ?>
    </body>
</html>