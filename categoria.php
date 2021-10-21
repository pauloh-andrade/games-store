<?php
    require_once('bd/conexaoMyslq.php');

    $conexao = conexaoMysql();
    var_dump($conexao);
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
            <div id="categoria">
                <h1>Cadastro de Categorias</h1>
                <div class="hr-title"></div>
                <form id="form-categoria" action="controller/cadastroCategoria.php" name="formCategoria" method="POST">
                    <p>Categoria:</p>
                    <input type="text" class="campo-txt" placeholder="Digite o nome da categoria" name="txtCategoria"/>
                    <input type="submit" class="btn-form" value="Salvar" name="btnCategoria"/>
                </form>
            </div>
            <div id="lista-categoria">
                <h1>Categorias</h1>
                <div class="hr-title"></div>
                <div class="categoria-item">
                    <p>Aventura</p>
                    <div>
                        <img src="img/icons/edit.png" class="icons-bd">
                        <img src="img/icons/delete.png" class="icons-bd">
                   </div>
                </div> 
                <div class="categoria-item">
                    <p>Aventura</p>
                    <div>
                        <img src="img/icons/edit.png" class="icons-bd">
                        <img src="img/icons/delete.png" class="icons-bd">
                   </div>
                </div> 
                <div class="categoria-item">
                    <p>Aventura</p>
                    <div>
                        <img src="img/icons/edit.png" class="icons-bd">
                        <img src="img/icons/delete.png" class="icons-bd">
                   </div>
                </div> 
            </div>
        </main>
        <?php
            require_once("shapes/footer.php");
        ?>
    </body>
</html>