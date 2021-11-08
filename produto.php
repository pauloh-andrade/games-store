<?php


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
            <div class="container-main">
                <div class="cadastro-categoria">
                    <h1>Cadastro de Produtos</h1>
                    <div class="hr-title"> <br></div>
                    <form class="form-deashboard" name="formProduct">
                         <input type="text" class="campo-txt" placeholder="Nome" name="txtNome" value=""/>
                        <input type="text" class="campo-txt" placeholder="Preço" name="txtLogin" value=""/>
                        <input type="password" class="campo-txt" placeholder="Descrição" name="txtSenha" value=""/>
                        <input type="password" class="campo-txt" placeholder="Desconto" name="txtSenha" value=""/>
                        <input type="submit" class="btn-form" value="Cadastrar" name="btnCategoria"/>
                    </form>
                </div>
                <div class="listar-categoria">
                    <div id="demo-image">
                        <img src="img/jogos/battlefield.jpg" width="40px">
                    </div>
                </div>
            </div>

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
                            <tr class="linha">
                                <td class="coluna"><p>Conter Strike</p></td>
                                <td class="coluna"><p>20.00</p></td>
                                <td class="coluna"><p>dasdasdasdasdsadasdasdasdasdasdasdadadaasdaas</p></td>
                                <td class="coluna"><p>10%</p></td>
                                <td class="coluna"><img src="img/jogos/battlefield.jpg" width="100px"></td>
                                <td class="coluna">
                                    <img src="img/icons/delete.png" class="icons-bd">
                                </td>
                            </tr>
                            <tr class="linha">
                                <td class="coluna"><p>Conter Strike</p></td>
                                <td class="coluna"><p>20.00</p></td>
                                <td class="coluna"><p>dasdasdasdasdsadasdasdasdasdasdasdadadaasdaas</p></td>
                                <td class="coluna"><p>10%</p></td>
                                <td class="coluna"><img src="img/jogos/battlefield.jpg" width="100px"></td>
                                <td class="coluna">
                                    <img src="img/icons/delete.png" class="icons-bd">
                                </td>
                            </tr>
                            <tr class="linha">
                                <td class="coluna"><p>Conter Strike</p></td>
                                <td class="coluna"><p>20.00</p></td>
                                <td class="coluna"><p>dasdasdasdasdsadasdasdasdasdasdasdadadaasdaas</p></td>
                                <td class="coluna"><p>10%</p></td>
                                <td class="coluna"><img src="img/jogos/battlefield.jpg" width="100px"></td>
                                <td class="coluna">
                                    <img src="img/icons/delete.png" class="icons-bd">
                                </td>
                            </tr>
                            <tr class="linha">
                                <td class="coluna"><p>Conter Strike</p></td>
                                <td class="coluna"><p>20.00</p></td>
                                <td class="coluna"><p>dasdasdasdasdsadasdasdasdasdasdasdadadaasdaas</p></td>
                                <td class="coluna"><p>10%</p></td>
                                <td class="coluna"><img src="img/jogos/battlefield.jpg" width="100px"></td>
                                <td class="coluna">
                                    <img src="img/icons/delete.png" class="icons-bd">
                                </td>
                            </tr>
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