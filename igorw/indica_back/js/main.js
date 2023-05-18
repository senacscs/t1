function mostraResposta(id) {
    respostas = document.getElementsByClassName('faq'); //recupera todos elementos da classe faq
    for (var i = 0; i < respostas.length; i++) { // coloca todos eles invisiveis
        respostas[i].style.display = 'none';
    }

    clicada = document.getElementById(id); //recupera o id passado por argumento
    clicada.style.display = 'inherit'; //faz ele ser exibido conforme o item pai
}