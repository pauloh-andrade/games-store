"use strict";
//função para carregar nome da imagem carregada
const nomeImagem = (nome) =>{
    const container = document.getElementById("text-image-name");
    container.textContent = nome
}

//função para fazer upload da imagem de preview
const exibirImagem = (e) =>{
    const imagemPreview =  e.target.files.item(0)
    const reader = new FileReader();
    // evento disparado quando o reader terminar de ler 
    reader.onload = e => document.getElementById("imagem-demo").src = e.target.result;
    // solicita ao reader que leia o arquivo 
    // transformando-o para DataURL. 
    // Isso disparará o evento reader.onload.
    reader.readAsDataURL(imagemPreview);
    
    nomeImagem(imagemPreview.name);
}
 document.querySelector("#inputImage").addEventListener("change", exibirImagem)