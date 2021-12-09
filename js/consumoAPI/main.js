'use strict';
import {getProdutos} from './produtos.js';

const criarCard = ({nome,descricao,preco}) =>{
    const card = document.createElement('div');
    card.classList.add('card-produto');
    card.innerHTML = `
        <img src="img/jogos/newworld.jpg" alt="New World">
        <div class="hr-card"></div>
        <div class="nome-jogo">
            ${nome}
        </div>
        
        <div class="desc-jogo">
                ${descricao}
        </div>
        <div class="container-row">
            <div class="btn-mais">Mais</div>
            <div class="preco-jogo">R$${preco}</div>
        </div>
    `;
    return card;

};
const carregarProdutos = async () =>{
    const container = document.getElementById('main-produtos');
    const produtos = await getProdutos();
    const cards = produtos.map(criarCard);
    container.replaceChildren(...cards);
}
carregarProdutos();
