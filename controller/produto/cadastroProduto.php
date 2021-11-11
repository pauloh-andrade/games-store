<?php
/*******************************************************************************
 *  Objetivo: Receber e lidar com os dados inseridos no formulário
 *  Data: 11/11/2021
 *  Responsável: Paulo Henrique
 * *****************************************************************************/
require_once("../../bd/produto/insert.php");
require_once("../../bd/produto/update.php");
 //testando method
 if($_SERVER['REQUEST_METHOD'] == 'POST'){
    //recebendo dados a serem cadastrados via post
    $id = $_GET['id'];
    $nome = $_POST['txtNome'];
    $preco = $_POST['txtPreco'];
    $descricao = $_POST['txtDescricao'];
    $desconto = $_POST['txtDesconto'];
    

    $produto = array(
        "id_produto" => $id,
        "nome" => $nome,
        "preco" => $preco,
        "descricao" => $descricao,
        "desconto" => $desconto
    );

    if(strtoupper($_GET['modo']) == "CADASTRAR"){
        if(insertProduto($produto)){
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
    elseif(strtoupper($_GET['modo']) == "ATUALIZAR"){
        if(updateProduto($produto)){
            echo("<script>
                    alert('Produto atualizado com sucesso');
                    window.location.href='../../produto.php';
                </script>");
        }
        else{
            die;
            echo("<script>
                    alert('Falha ao editar produto');
                   window.history.back();
                </script>");
        }
    }
 }
?>