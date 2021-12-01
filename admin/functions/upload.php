<?php
/****************************************************************************************
 *  Objetivo: Arquivo para fazer upload de imagens
 *  Data:15/11/2021
 *  Responsável:
 * *************************************************************************************/ 
function uploadFile($arrayFile){
    if($arrayFile['size'] > 0 && $arrayFile['type'] !=""){
        //recebendo tamanho original da imagem
        $originalSize =(int) $arrayFile['size'];
        //convertendo tamanho da imagem em KB
        $sizeKB = (int) $originalSize / 1024;
        //recebendo tipo do arquivo
        $typeFile = (string) $arrayFile['type'];
        
        //validando tamanho do arquivo
        if($sizeKB > TAMANHO_FILE){
            echo("tamanho do arquivo");
        }
        elseif(!in_array($typeFile, EXTENSION_ALLOWED)){
            echo("erro tipo de arquivo");
        }
        else{
            //extraindo apenas o nome do arquivo com pathinfo
            $nameFile = (string) pathinfo($arrayFile['name'], PATHINFO_FILENAME);
            //extraindo apenas a extensão do arquivo
            $extensionFile = (string) pathinfo($arrayFile['name'], PATHINFO_EXTENSION);
            //criptografando
            $encryptedFileName = (string) hash("md5",$nameFile.uniqid(time()));
            //novo nome do arquivo
            $file = (string) $encryptedFileName. "." .  $extensionFile;
            //recebendo nome do arquivo temporario
            $fileTemp = (string) $arrayFile['tmp_name'];
            
            //movendo para pasta de imagens
            if(move_uploaded_file($fileTemp, SRC.DIRETORIO_FILE.$file)){
                return $file;
            }
            else{
                echo("erro final");
            }
        }
    }
}
?>