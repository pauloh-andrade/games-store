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
define('SRC', $_SERVER['DOCUMENT_ROOT'] . '/Games-Store/');

//Declarando constantes para Upload de arquivos
const DIRETORIO_FILE = 'files/';
//recebendo extensões permitidas em uma array
$extensoesPermitidas = array ("image/png","image/jpg","image/jpeg");
//recebendo array em uma contante
define('EXTENSION_ALLOWED', $extensoesPermitidas);
const TAMANHO_FILE = "5120";

?>