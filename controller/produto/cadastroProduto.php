<?php
/*******************************************************************************
 *  Objetivo: Receber e lidar com os dados inseridos no formulário
 *  Data: 11/11/2021
 *  Responsável: Paulo Henrique
 * *****************************************************************************/
require_once("../../config/config.php");
require_once("../../bd/produto/insert.php");
require_once("../../bd/produto/select.php");
require_once("../../bd/produto/update.php");
require_once("../../bd/produtoCategoria/insert.php");
require_once("../../bd/produtoCategoria/delete.php");
require_once(SRC."functions/upload.php");



$arrayCategorias = array();
//percorrer array e se chave possuir "#categoria" resgatar elemento da array
foreach($_POST as $array){
    if(strpos($array,"#categoria") !== false){
        $arrayCategorias[] = substr($array,11);
    }
}

$destaque = (int) 0;

 //testando method
 if($_SERVER['REQUEST_METHOD'] == 'POST'){
    //recebendo dados a serem cadastrados via post
    $id = $_GET['id'];
    $nome = $_POST['txtNome'];
    $preco = $_POST['txtPreco'];
    $descricao = $_POST['txtDescricao'];
    $desconto = $_POST['txtDesconto'];
    if(isset($_POST['destaque'])){$destaque = $_POST['destaque'];}
    $imagePreview = uploadFile($_FILES['preview']);
    $imageBanner = uploadFile($_FILES['banner']);
                                                  

    $produto = array(
        "id_produto" => $id,
        "nome" => $nome,
        "preco" => $preco,
        "descricao" => $descricao,
        "desconto" => $desconto,
        "destaque" => $destaque,
        "imagem" => $imageBanner,
        "gif_preview" => $imagePreview
    );

    if(strtoupper($_GET['modo']) == "CADASTRAR"){
        if(insertProduto($produto)){
            //conectando categorias com produtos
            $produtoCadastrado = selectUltimoProduto();
            $rsProduto = mysqli_fetch_assoc($produtoCadastrado);
            $idProdutoCadastrado = $rsProduto['id_produto'];
            if(insertProdutoCategoria($idProdutoCadastrado, $arrayCategorias)){
                echo("<script>
                        alert('Produto cadastrado com sucesso');
                        window.location.href='../../produto.php';
                    </script>");
            }
            else{
                echo("<script>
                    alert('Falha ao cadastrar Produto');
                    window.history.back();
                </script>");
            }
        }
        else{
            echo("<script>
                    alert('Falha ao cadastraar Produto');
                    window.history.back();
                </script>");
        }
    }
    elseif(strtoupper($_GET['modo']) == "ATUALIZAR"){
        if(updateProduto($produto)){
            deleteProdutoCategoria($id);
            //conectando categorias com produtos
            $produtoCadastrado = selectUltimoProduto();
            $rsProduto = mysqli_fetch_assoc($produtoCadastrado);
            $idProdutoCadastrado = $rsProduto['id_produto'];
            if(insertProdutoCategoria($idProdutoCadastrado, $arrayCategorias)){
                echo("<script>
                        alert('Produto cadastrado com sucesso');
                        window.location.href='../../produto.php';
                    </script>");
            }
            else{
                echo("<script>
                    alert('Falha ao cadastrar Produto');
                    window.history.back();
                </script>");
            }
            
        }
        else{
            echo("<script>
                    alert('Falha ao editar produto');
                   window.history.back();
                </script>");
        }
    }
 }
?>