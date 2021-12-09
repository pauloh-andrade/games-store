'use strict';
const url = 'http://localhost/ds2t20212/paulo/Games-Store/admin/api/';

//carregando produtos
const getProdutos = async() =>{
    const response = await fetch(`${url}games`);
    const produtos = await response.json();
    return produtos;
};

export{
    getProdutos
};
