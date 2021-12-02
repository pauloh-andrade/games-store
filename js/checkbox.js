"use strict";
const cbox = document.querySelectorAll(".categoria-item");

const trocarCor = (box) =>{
    if(box.className == "purple"){
        box.classList = "categoria-item";
    }
    else{
        box.classList = "purple";
    }
} 

for (let i = 0; i < cbox.length; i++) {
    cbox[i].addEventListener("click", function() {
        trocarCor(cbox[i]);
        
    });
 }
const nomeImagem = (nome) =>{
    const container = document.getElementById("text-image-name");
    container.textContent = nome
}
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