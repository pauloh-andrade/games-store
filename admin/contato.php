<?php
   require_once("controller/contato/listarContato.php");
    require_once("config/config.php");
    require_once("session.php");

    sessao();
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
            <div id="container-contato">
                <h1>Contatos</h1>
                <div class="hr-title"> <br></div>
                <div>
                    <table class="tbl-contato">
                        <tr class="linha-titulo">
                            <td class="coluna-titulo"><p>Nome</p></td>
                            <td class="coluna-titulo"><p>Email</p></td>
                            <td class="coluna-titulo"><p>Numero</p></td>
                            <td class="coluna-titulo"></td>
                        </tr>
                        <?php
                            $dadosContato = listarContato();
                            while($rsContato = mysqli_fetch_assoc($dadosContato)){
                        ?>
                        <tr class="linha">
                            <td class="coluna"><p><?=$rsContato['nome']?></p></td>
                            <td class="coluna"><p><?=$rsContato['email']?></p></td>
                            <td class="coluna"><p><?=$rsContato['numero']?></p></td>
                            <td class="coluna">
                                <a href="controller/contato/excluirContato.php?id=<?=$rsContato['id_contato']?>">
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