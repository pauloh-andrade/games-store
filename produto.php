<?php
    require_once("controller/produto/listarProduto.php");
    $nome = (string) null;
    $preco = (string) null;
    $descricao = (string) null;
    $desconto = (string) null;
    $idProduto = (string) null;
    $modo = (string) "Cadastrar";
    // $nome = (string) null;
    session_start();
    if(isset($_SESSION['produto'])){
        $idProduto = $_SESSION['produto']['id_produto'];
        $nome = $_SESSION['produto']['nome'];
        $preco = $_SESSION['produto']['preco'];
        $descricao = $_SESSION['produto']['descricao'];
        $desconto = $_SESSION['produto']['desconto'];
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
        <title>CMS</title>
    </head>
    <body>
        <?php
            require_once("shapes/header.php");
        ?>
        <main class="display-column">
            
            <form name="formProduct" action="controller/produto/cadastroProduto.php?id=<?=$idProduto?>&modo=<?=$modo?>" method="POST">
                <div class="container-main">
                    <div class="cadastro-categoria">
                        <h1>Cadastro de Produtos</h1>
                        <div class="hr-title"> <br></div>
                            <div class="form-deashboard">
                                <input type="text" class="campo-txt" placeholder="Nome" name="txtNome" value="<?=$nome?>"/>
                                <input type="text" class="campo-txt" placeholder="Preço" name="txtPreco" value="<?=$preco?>"/>
                                <input type="text" class="campo-txt" placeholder="Descrição" name="txtDescricao" value="<?=$descricao?>"/>
                                <input type="text" class="campo-txt" placeholder="Desconto" name="txtDesconto" value="<?=$desconto?>"/>
                                <input type="submit" class="btn-form" value="<?=$modo?>" name="btnCategoria"/>
                            </div>
                    </div>
                    <div class="listar-categoria">
                        <div id="demo-image">
                            <img src="img/icons/camera.png">
                        </div>
                        <label class="input-file" for="imgJogo">Selecione uma Imagem</label>
                        <input name="fileFoto" id="imgJogo" type="file">
                    </div>
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
                                    <a href="controller/produto/excluirProduto.php?id=<?=$rsProduto['id_produto']?>">
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