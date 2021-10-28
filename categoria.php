<?php
    session_start();
    require_once("config/config.php");
    require_once("bd/conexaoMysql.php");
    require_once(SRC . "controller/exibirCategorias.php");

    $categoria = (string) null;
    $modo = (String) "Salvar";
    $id = null;
    if(isset($_SESSION['categoria'])){
        $categoria = $_SESSION['categoria']['categoria'];
        $id = $_SESSION['categoria']['id_categoria'];
        $modo = "Atualizar";
        
        unset($_SESSION['categoria']);
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
            <div id="categoria">
                <h1>Cadastro de Categorias</h1>
                <div class="hr-title"></div>
                <form id="form-categoria" action="controller/cadastroCategoria.php?modo=<?=$modo?>&id=<?=$id?>" name="formCategoria" method="POST">
                    <p>Categoria:</p>
                    <input type="text" class="campo-txt" placeholder="Digite o nome da categoria" name="txtCategoria" value="<?=$categoria?>"/>
                    <input type="submit" class="btn-form" value="<?=$modo?>" name="btnCategoria"/>
                </form>
            </div>
            <div id="lista-categoria">
                <h1>Categorias</h1>
                <div class="hr-title"></div>
                <?php
                    //recebendo array categorias
                    $categorias = exibirCategoria();
                    
                    //utilizando fetch assoc para administrar while e array
                    while($rsCategorias = mysqli_fetch_assoc($categorias)){
                
                ?>
                <div class="categoria-item">
                    <p><?=$rsCategorias['categoria']?></p>
                    <div>
                    <a href="controller/editarCategoria.php?id=<?=$rsCategorias['id_categoria']?>">
                        <img src="img/icons/edit.png" class="icons-bd">
                    </a>
                    <a href="controller/excluirCategoria.php?id=<?=$rsCategorias['id_categoria']?>">
                        <img src="img/icons/delete.png" class="icons-bd">
                    </a>
                   </div>
                </div> 
                <?php
                    }
                ?>
            </div>
        </main>
        <?php
            require_once("shapes/footer.php");
        ?>
    </body>
</html>