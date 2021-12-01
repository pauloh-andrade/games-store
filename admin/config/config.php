<?php
/***********************************************************************************
 * Objetivo: Arquivo de configuração de constantes que serão utilizadas 
 * Data:  21/10/2021
 * Responsável: Paulo Henrique
 **********************************************************************************/

//declarando variaveis para conexão com o banco
 const BD_SERVER = 'localhost';
 const BD_USER = 'root';
 const BD_PASSWORD = 'bcd127';
 const BD_DATABASE = 'db_games_store';


//declarando constante raiz
define('SRC', $_SERVER['DOCUMENT_ROOT'] . '/ds2t20212/paulo/Games-Store/admin/');

//Declarando constantes para Upload de arquivos
const DIRETORIO_FILE = 'files/';
//recebendo extensões permitidas em uma array
$extensoesPermitidas = array ("image/png","image/jpg","image/jpeg");
//recebendo array em uma contante
define('EXTENSION_ALLOWED', $extensoesPermitidas);
const TAMANHO_FILE = "5120";

//constantes para respostas de manipulação de dados
const SUCESSO_INSERIR = "Dados inseridos com sucesso";
const SUCESSO_ATUALIZAR= "Dados atualizados com sucesso";
const SUCESSO_DELETAR= "Dados deletados com sucesso";

const FALHA_INSERIR = "Falha ao inserir os dados no Banco";
const FALHA_ATUALIZAR= "Falha ao Atualizar os dados no Banco";
const FALHA_DELETAR= "Falha ao Excluir os dados no Banco";

const ERRO_CAIXA_VAZIA= "Por favor preencha todos os campos";
const ERRO_LOGIN= "Usuário ou senha inválido, por favor preencha novamente.";
?>