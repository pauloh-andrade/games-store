<?php
    require_once("controller/produto/listarProduto.php");
    require_once("functions/compararCategoria.php");
    require_once("controller/categoria/exibirCategorias.php");
    
    $idProduto = (int) null;
    $nome = (string) null;
    $preco = (string) null;
    $descricao = (string) null;
    $desconto = (string) null;
    $imagem = (string) "demo.png";
    $preview = (string) null;
    $idProduto = (string) null;
    $modo = (string) "Cadastrar";
    // $nome = (string) null;
    session_start();
    if(isset($_SESSION['produto'])){
        $idProduto = $_SESSION['produto']['id_produto'];
        $nome = $_SESSION['produto']['nome'];
        $preco = $_SESSION['produto']['preco'];
        $descricao = $_SESSION['produto']['descricao']  ;
        $desconto = $_SESSION['produto']['desconto'];
        $imagem = $_SESSION['produto']['imagem'];
        $preview = $_SESSION['produto']['gif_preview'];
        $modo = (string) "Atualizar";
        unset($_SESSION['produto']);
    }
?>
<!DOCTYPE html>
<html lang="pt-BR">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <head>
        <meta charset="UTF-8">
         <link rel="stylesheet" type="text/css" href="style/style.css">
        <link rel="stylesheet" type="text/css" href="style/deashboard.css">
        <script src="js/checkbox.js" defer></script>
        <title>CMS</title>
    </head>
    <body>
        <?php
            require_once("shapes/header.php");
        ?>
        <main class="display-column">
            
            <form enctype="multipart/form-data"name="formProduct" action="controller/produto/cadastroProduto.php?id=<?=$idProduto?>&modo=<?=$modo?>" method="POST">
                <div class="container-main">
                    <div class="cadastro-categoria">
                        <h1>Cadastro de Produtos</h1>
                        <div class="hr-title"> <br></div>
                            <div class="form-deashboard">
                                <input type="text" class="campo-txt" placeholder="Nome" name="txtNome" maxlength="50"value="<?=$nome?>"/>
                                <input type="text" class="campo-txt" placeholder="Preço" name="txtPreco" maxlength="5"value="<?=$preco?>"/>
                                <input type="text" class="campo-txt" placeholder="Desconto" name="txtDesconto" maxlength="5" value="<?=$desconto?>"/>
                                <input type="file" id="inputFile" name="preview" accept="image/jpeg,image/png,image/jpg"/>
                                <label for="inputFile" class="input-file">
                                    Selecione um GIF de preview
                                </label>
                            </div>
                    </div>
                    <div class="listar-categoria">
                        <input type="file" id="inputImage" name="banner" accept="image/jpeg,image/png,image/jpg" value="<?=$imagem?>">
                        <label  for="inputImage" id="demo-image">
                            <img src="files/<?=$imagem?>">
                        </label>
<!--
                        <label class="input-file" for="imgJogo">Selecione uma Imagem</label>
                        <input name="fileFoto" id="imgJogo" type="file">
-->
                    </div>
                    
                </div>
                <div class="container-main">
                    <div class="container-produtos">
                        <p>Descrição:</p>
                        <textarea name="txtDescricao" class="text-area" maxlength="300" ><?=$descricao?></textarea>
                        <div>
                            <p>Categorias:</p>
                        </div>
                        <?php
                            //recebendo array categorias
                            $categorias = exibirCategoria();
                            //utilizando fetch assoc para administrar while e array
                            while($rsCategorias = mysqli_fetch_assoc($categorias)){               
                        ?>
                        <input type="checkbox" id="<?=$rsCategorias['nome']?>" name="<?=$rsCategorias['nome']?>"class="box-categoria" value="#categoria.<?=$rsCategorias['id_categoria']?>" <?=compararCategoria($idProduto,$rsCategorias['id_categoria'])?>>
                        <label for="<?=$rsCategorias['nome']?>" class="categoria-item">        
                            <p><?=$rsCategorias['nome']?></p>
                            <div>
                    
                            </div>
                        </label> 
                         <?php
                            }
                        ?>
                    </div>
                </div>
                <div class="submit-produtos">
                    <div class="">
                        <p><input type="checkbox" name="destaque" value="1"> Destacar este produto</p>
                    </div>
                    <input type="submit" class="btn-form btn-produto" value="<?=$modo?>" name="btnCategoria"/>
                </div>
            </form>

            <div class="container-main">
                <div id="container-contato">
                    <div>
                        <h1>Jogos</h1>
                        <div class="hr-title"> <br></div>
                        <table class="tbl-contato">
                            <tr class="linha-titulo">
                                <td class="coluna-titulo"><p>Nome</p></td>
                                <td class="coluna-titulo"><p>Preço</p></td>
                                <td class="coluna-titulo"><p>Descrição</p></td>
                                <td class="coluna-titulo"><p>Desconto</p></td>
                                <td class="coluna-titulo"><p>Imagem</p></td>
                                <td class="coluna-titulo"><p></p></td>
                            </tr>
                            <?php
                                $dadosProdutos = listarProdutos();
                                //similar a foreach, percorre array
                                while($rsProduto=mysqli_fetch_assoc($dadosProdutos)){
                            ?>
                            <tr class="linha">
                                <td class="coluna-titulo"><p><?=$rsProduto['nome']?></p></td>
                                <td class="coluna-titulo"><p><?=$rsProduto['preco']?></p></td>
                                <td class="coluna-titulo"><p><?=$rsProduto['descricao']?></p></td>
                                <td class="coluna-titulo"><p><?=$rsProduto['desconto']?></p></td>
                                <td class="coluna-titulo"><p>"Imagem"</p></td>
                                <td class="coluna-titulo">
                                    <a href="controller/produto/editarProduto.php?id=<?=$rsProduto['id_produto']?>">
                                        <img src="img/icons/edit.png" class="icons-bd">
                                    </a>
                                    <a href="controller/produto/excluirProduto.php?id=<?=$rsProduto['id_produto']?>&foto=<?=$rsProduto['imagem']?>&preview=<?=$rsProduto['gif_preview']?>">
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
            </div>
        </main>
        <?php
            require_once("shapes/footer.php");
        ?>
    </body>
</html>